@component('mail::message')
# Application Status Update

Hi {{$application->user->first_name}}<br>
This is a notice that your application status is {{$application->status}}

@if(auth()->check())
    @if(auth()->user()->role == \App\Models\User::ADMIN_ROLE)
@component('mail::button', ['url' => route('agent-applications',['lang'=>app()->getLocale()])])
    Check Application
@endcomponent

    @else
@component('mail::button', ['url' => route('dashboard.applications.index',['lang'=>app()->getLocale()])])
    Check Application
@endcomponent
    @endif
@endif


Regards,<br>
{{ config('app.name') }}
@endcomponent
