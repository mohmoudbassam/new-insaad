<div class="form-group row">
    <div class="col-md-6 mb-3">
        <label for="validationTooltip01"> {{trans('dashboard.user.Name')}}</label>
        <input type="text" class="form-control @error("name") is-invalid @enderror"  id="validationTooltip01" name="name"
               value="{{isset($user) ? $user->name : old('name')}}"
               required>
        @error("name")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label for="validationTooltip02">{{trans('dashboard.user.Email')}}</label>
        <input type="email" class="form-control @error("email") is-invalid @enderror"  id="validationTooltip02"
        value="{{isset($user) ? $user->email : old('email')}}" required>
        @error("email")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6 mb-3">
        <label for="validationTooltip03"> {{trans('dashboard.user.Password')}}</label>
        <input type="password" class="form-control @error("password") is-invalid @enderror" id="validationTooltip03" name="password"
               >
        @error("password")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="validationTooltip04"> {{trans('dashboard.user.Confirm Password')}}</label>
        <input type="password" class="form-control" id="validationTooltip04"  name="password_confirmation" >
    </div>
</div>
<div class="form-group row">
    <div class="col-md-6 mb-3">
        <label for="validationTooltip03"> {{trans('dashboard.user.phone')}}</label>
        <input type="text"  value="{{isset($user) ? $user->phone : old('phone')}}" class="form-control @error("phone") is-invalid @enderror" id="validationTooltip03" name="phone"
        >
        @error("password")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="validationTooltip04"> {{trans('dashboard.user.role')}}</label>
        <select name="role"  class="form-control @error("role") is-invalid @enderror " id="categorical_type" >
        <option value="">{{trans('dashboard.user.Select User Role')}}</option>
        <option value="admin" @if($user->role == 'admin' && isset($user)) selected @endif>{{trans('dashboard.user.admin')}}</option>
        <option value="user" @if($user->role == 'user' && isset($user)) selected @endif>{{trans('dashboard.user.model')}}</option>
        </select>
        @error("role")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-md-12 mb-3">
        <label for="validationTooltip04"> {{trans('dashboard.user.address')}}</label>
        <textarea  class="form-control" id="validationTooltip04"  name="address" >
            {{isset($user) ? $user->address : old('address')}}
        </textarea>
    </div>
</div>

<div class="col-sm-9">
    <button type="submit" class="btn btn-primary">
        <span class="ul-btn__icon"><i class="i-Data-Save"></i></span>
        {{trans('dashboard.main.Save')}} </button>
</div>