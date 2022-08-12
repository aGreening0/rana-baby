<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Invite;

class FamilyInvite extends Mailable
{
    use Queueable, SerializesModels;

    protected $invite;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Invite $invite)
    {
        $this->invite = $invite;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = route('invite.accept', $this->invite->token);
        $userName = $this->invite->user->name;
        $subject = "You have been invited to join $userName's Family on RanaBaby";

        return $this->markdown('mail.familyInvite')
            ->subject($subject)
            ->with('url', $url)
            ->with('userName', $userName);
    }
}
