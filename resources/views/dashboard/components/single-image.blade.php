<div class="divider ">
    <div class="divider-text">{{trans('dashboard.main.Image')}}(height: 300, width: 400)</div>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <input type="file" name="image" class="dropify  " value="{{old('image')}}" data-max-file-size="1M"
                   />
            @error("image")
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
