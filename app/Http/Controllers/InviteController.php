<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\FamilyInvite;
use Auth;
use User;
use Invite;



class InviteController extends Controller
{

    public function create()
    {
        if (!Auth::check()){
			return redirect(route('login'))
				->with('error', 'You must be logged in!');
		}

    	return view('family.sendInvite');
    }

    public function send(Request $request)
    {
        if(!Auth::check()) {
            return redirect('/login')
            ->with('error', 'You must be logged in!');
        }

        $this->validate($request, [
                'email' => 'required|email',
                ]);

        $family = Auth::user()->family;
        $existingUser = User::where('email', $request->email)->first();
        $existingInvite = Invite::where('email', $request->email)->where('family_id', $family->id)->first();
        if ($existingUser) {
            if(!$existingUser->isFamily($family->id))
            {
                $invite = New Invite;
                $invite->user_id = Auth::user()->id;
                $invite->family_id = $family->id;
                $invite->email = $request->email;
                $invite->token = Str::random(12);
                $invite->save();
                Mail::to($invite->email)->send(new FamilyInvite($invite));
                return redirect()->back()->with('success', 'Your invite has been sent.');
            }
            return redirect()->back()->with('info', "That user is already in your family.");
        }

        if ($existingInvite) {
            Mail::to($existingInvite->email)->send(new FamilyInvite($existingInvite));
            return redirect()->back()->with('info', "You have already invited that user, we resent the invitation.");
        }

        $invite = New Invite;
        $invite->user_id = Auth::user()->id;
        $invite->family_id = $family->id;
        $invite->email = $request->email;
        $invite->token = Str::random(12);
        $invite->save();


        Mail::to($invite->email)->send(new FamilyInvite($invite));

        return redirect(route('dashboard'))
            ->with('success', 'Your invite has been sent!');
    }

    public function accept($token)
    {
        dd('accept');
    }
}
