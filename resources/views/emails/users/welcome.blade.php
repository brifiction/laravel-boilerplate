@component('mail::message')
# Welcome!

We'd like to personally welcome you, and thank you for registering!

You're awesome!

@component('mail::button', ['url' => $url, 'color' => 'success'])
Get started
@endcomponent

Regards,<br>
Brian Ng<br>
Web Developer<br>
{{ config('app.name') }}
@endcomponent
