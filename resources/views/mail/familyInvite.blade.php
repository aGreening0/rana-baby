@component('mail::message')
# Welcome

You have been invited to join {{ $userName }}'s family on {{ config('app.name') }}!

@component('mail::button', ['url' => $url,
	'color' => 'blue'])
Accept Team Invite
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
