<tr>
    <td class="pe-1">{{__('dashboard.application.whatsapp')}}:</td>
    <td class="application_phone">{{$application->whats_number}}</td>
</tr>
<tr>
    <td class="pe-1">{{__('dashboard.application.Services')}}:</td>
    <td>@foreach(explode(',', $application->services)  as $serviceID)
            {{\App\Models\Service::find($serviceID)->title ?? ''}}  /
        @endforeach</td>
    <td>{{$application->services}} </td>
</tr>
