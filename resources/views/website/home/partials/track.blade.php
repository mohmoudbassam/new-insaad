<section class="our-vision">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">

                        {{__('home.enter_tracking_number')}}
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">

                        <input type="text" name="tracking_number" style="width: 40%">
                    </div>

                </div>
            </div>
        </div>

        <div class="row mt-20" style="margin-top: 10px">
            <div class="col-lg-12 d-flex justify-content-center">
                <button class="btn btn-danger" id="track_button">{{__('home.click_tack')}}</button>
            </div>
        </div>
        @if(session()->has('error'))
        <div class="row mt-20" style="margin-top: 10px">
            <div class="col-lg-12 d-flex justify-content-center">
                <button class="btn btn-danger" id="track_button">{{__('home.your_tracking_number_is_not_found')}}</button>
            </div>
        </div>
        @endif
    </div>
</section>
<script>
document.getElementById("track_button").addEventListener("click", function() {
    var tracking_number = document.getElementsByName("tracking_number")[0].value;
    if(tracking_number == ""){
        alert("{{__('home.enter_tracking_number')}}");
    }
    if (tracking_number != "") {
        window.location.href = "{{route('website.getTrackingUrl',app()->getLocale())}}/" + tracking_number;
    }
});
</script>
