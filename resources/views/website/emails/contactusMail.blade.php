@component('mail::message')
    # New Message

    Email: {{ $data->email }}

    Name: {{ $data->name }}

    Phone: {{ $data->phone }}

    # Message Text

    {{ $data->message }}

    Regard
    {{  $data->name }}
@endcomponent
