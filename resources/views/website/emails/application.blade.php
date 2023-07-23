@component('mail::message')
    # ِApplicant Received

    Thank you for your ِApplicant.

    **ِApplicant ID:** {{ $application->id }}

    **ِApplicant Email:** {{ $application->email }}

    **ِApplicant First Name:** {{ $application->name }}

    **ِApplicant Phone Number:** {{ $application->phone }}

    **ِApplicant Gender:** {{ $application->gender }}

    **ِApplicant description:** {{ $application->description }}

    **ِApplicant Croject to enroll:**
    {{optional($application->category)->name}}

    {{--You can get further details about your ِApplicant by logging into our website.--}}

    {{--@component('mail::button', ['url' => config('app.url'), 'color' => 'green'])--}}
    {{--Go to Website--}}
    {{--@endcomponent--}}

    Thank you again for choosing us.

    Regard
    {{ config('app.name') }}
@endcomponent
