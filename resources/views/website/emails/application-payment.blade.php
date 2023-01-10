@component('mail::message')
# Application Payment

This is a notice that application #{{$application}} payment was uploaded.
@component('mail::button', ['url' => $url])
Check Application
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent
