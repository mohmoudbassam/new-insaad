
<div class="row mb-1">
    <div class="col pe-1">{{__('application.Name')}}:</div>
    <div class="col"><span class="fw-bold">{{$application->full_name}}</span></div>
</div>
<div class="row mb-1">
    <div class="col pe-1">{{__('application.email')}}:</div>
    <div class="col">{{$application->email}}</div>
</div>
<div class="row mb-1">
    <div class="col pe-1">{{__('application.company name')}}:</div>
    <div class="col"><span class="fw-bold">{{$application->company_name}}</span></div>
</div>
<div class="row mb-1">
    <div class="col pe-1">{{__('application.phone')}}:</div>
    <div class="col">{{$application->phone}}</div>
</div>
<div class="row mb-1">
    <div class="col pe-1">{{__('application.count orders')}}:</div>
    <div class="col">{{$application->count_orders}}</div>
</div>
<div class="row mb-1">
    <div class="col pe-1">{{__('application.count orders ads')}}:</div>
    <div class="col">{{$application->count_orders_ads}}</div>
</div>
<div class="row mb-1">
    <div class="col pe-1">{{__('application.online store platform')}}:</div>
    <div class="col">{{$application->online_store_platform}}</div>
</div>
<div class="row mb-1">
    <div class="col pe-1">{{__('application.online store url')}}:</div>
    <div class="col"><a target="_blank" href="{{$application->online_store_url}}">{{$application->online_store_url}}</a> </div>
</div>
<div class="row mb-1">
    <div class="col pe-1">{{__('application.message')}}:</div>
    <div class="col">{{$application->message}}</div>
</div>
