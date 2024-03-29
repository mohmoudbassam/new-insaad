@extends("website.layouts.master")

@section("page-title")
    - {{ __("auth.login") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.universities.index", ["lang" => app()->getLocale()]),
            'description' => config("settings.site_" . app()->getLocale() . "_description"),
            'image' => config("settings.site_logo"),
        ])
@endsection

@section("page-header-area")
    @include("website.partials.page-header", ['pageHeaderTitle' => __("auth.Register")])
@endsection

@push("styles")

@endpush

@section("content")

    <!-- Hero Start -->
    <section style="align-items: center; padding: 150px 0;">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-6 col-md-8">
                    <table style="box-sizing: border-box; width: 100%; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);">
                        <thead>
                        <tr style="background-color: #2f55d4; padding: 3px 0; line-height: 68px; text-align: center; color: #fff; font-size: 24px; font-weight: 700; letter-spacing: 1px;">
                            <th scope="col"><img src="images/logo-light.png" height="24" alt=""></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td style="padding: 48px 24px 0; color: #161c2d; font-size: 18px; font-weight: 600;">
                                Hello, Harry
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 15px 24px 15px; color: #8492a6;">
                                Thanks for creating an Landrick account. To continue, please confirm your email address by clicking the button below :
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 15px 24px;">
{{--                                <a href="javascript:void(0)" class="btn-primary" style="padding: 8px 20px; outline: none; text-decoration: none; font-size: 16px; letter-spacing: 0.5px; transition: all 0.3s; font-weight: 600; border-radius: 6px;">Confirm Email Address</a>--}}

                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 15px 24px 0; color: #8492a6;">
                                This link will be active for 30 min from the time this email was sent.
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 15px 24px 15px; color: #8492a6;">
                                UkAcademy <br> Support Team
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 16px 8px; color: #8492a6; background-color: #f8f9fc; text-align: center;">
                                © 2020-21 UkAcademy.
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
@endsection
