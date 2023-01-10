<div
{{--    action="{{route('application.store',['lang'=>app()->getLocale()])}}" method="post"--}}
    class="start-form proForm" >
    <p class="note">{{trans('home.Please fill in the information below and we will contact you as soon as possible..') }} </p>
    @csrf
    @success
    <div class="alert alert-success p-1 m-1">
        {{$message}}
    </div>
    @endsuccess
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label" for="Name">{{trans('validation.attributes.full_name')}} </label>
                <input type="text" wire:model="full_name" name="full_name" value="{{old('full_name')}}" id="Name" class="form-control" />
            </div>
            @error('full_name')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label" for="email">{{trans('dashboard.main.email')}}</label>
                <input type="email" wire:model="email" name="email" value="{{old('email')}}" id="email" class="form-control" />
            </div>
            @error('email')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label" for="phone">{{ trans('dashboard.user.phone')}} </label>
                <input type="text" wire:model="phone" name="phone" value="{{old('phone')}}" id="phone" class="form-control phone" />
            </div>
            @error('phone')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label" for="companyName">{{trans('application.company name')}}</label>
                <input type="text" wire:model="company_name" name="company_name"  value="{{old('company_name')}}" id="companyName" class="form-control" />
            </div>
            @error('company_name')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label" for="tottalADs">{{ trans('home.Number of requests per week (without an advertising campaign)')}} </label>
                <input type="number" wire:model="count_orders" name="count_orders" value="{{old('count_orders')}}" id="tottalADs" class="form-control" />
            </div>
            @error('count_orders')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label" for="tottalWithADs">{{trans('home.Number of requests per week (with an advertising campaign)')}}</label>
                <input type="number" wire:model="count_orders_ads" name="count_orders_ads" value="{{old('count_orders_ads')}}" id="tottalWithADs" class="form-control" />
            </div>
            @error('count_orders_ads')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label" for="URL">{{trans('home.online store link')}}</label>
                <input type="url" wire:model="online_store_url" name="online_store_url" value="{{old('online_store_url')}}" id="URL" class="form-control" />
            </div>
            @error('online_store_url')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label" for="platform">{{trans('application.online store platform')}}</label>
                <input type="text" wire:model="online_store_platform" name="online_store_platform" value="{{old('online_store_platform')}}" id="platform" class="form-control" />
            </div>
            @error('online_store_platform')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-12">
            <div class="form-group">
                <label class="control-label" for="message">{{trans('application.message')}} ( {{trans('home.optional')}} )</label>
                <textarea class="form-control details" wire:model="message" name="message" id="message">{{old('message')}}</textarea>
            </div>
            @error('message')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-12">
            <div class="form-group submit d-grid">
                <button class="btn primaryBtn shared" wire:click="save()"
{{--                        type="submit"--}}
                >{{trans('application.send')}} </button>
            </div>
        </div>
    </div>
    <div class="sent_success @if($success) active @endif">
        <img src="/assets/website/images/correct.png" class="img-fluid" alt="correct">
        <p>{{trans('application.request sent successfully')}}</p>
    </div>
</div>

@push('bottom-js')
    <script>
        Livewire.on('application-created',function (){
            var success = @this.success;
            if(success){
                setTimeout(function() {
                    @this.success = false;
                }, 3000);
            }
        })
    </script>

@endpush
