<tr>
    <td class="pe-1">{{__('dashboard.application.whatsapp')}}:</td>
    <td class="application_phone">{{$application->whats_number}}</td>
</tr>
<tr>
    <td class="pe-1">{{__('dashboard.application.age')}}:</td>
    {{--    <td>@foreach($application->services as $service) {{$service}} @endforeach</td>--}}
    <td>{{$application->age}} </td>
</tr>

<tr>
    <td class="pe-1">{{__('dashboard.application.gender')}}:</td>
    {{--    <td>@foreach($application->services as $service) {{$service}} @endforeach</td>--}}
    <td>{{trans("dashboard.application.$application->gender")}} </td>
</tr>

<tr>
    <td class="pe-1">{{__('dashboard.application.country')}}:</td>
    {{--    <td>@foreach($application->services as $service) {{$service}} @endforeach</td>--}}
    <td>{{$application->country->name}} </td>
</tr>
