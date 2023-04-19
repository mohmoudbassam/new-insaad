@extends("website.layouts.master")

@section("page-title")
    - {{ __("home.privacy") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.privacy", ["lang" => app()->getLocale()]),
            'description' => config("settings.about_" . app()->getLocale() . "_meta"),
            'image' => config("settings.site_logo"),
                        'title' =>  __("home.privacy")

        ])
@endsection



@push("styles")

@endpush

@section("content")

    <section class="breadCrumb" style="background-image: url({{asset('assets/website/images/breadcrumb4.png')}})">
        <div class="container">
            <div class="breadCrumb__content">
                <h3>{{trans('home.privacy')}}</h3>

            </div>
        </div>
    </section>
    <section class="aboutUs">
        <div class="container">
            <div class="sec_title" data-aos="fade-up">
                <h4 class="main_title">{{trans('home.privacy')}}</h4>
            </div>

            <div class="mb-5">
                <h3 class="mb-2">1. Acceptance of Terms and Conditions</h3>
                <p style="text-indent: 30px;"> By using the Isnaad App, you agree to comply with and be bound by the
                    following terms and conditions. If
                    you do not agree to these terms and conditions, please do not use the Isnaad App.</p>
            </div>
            <div class="mb-5">
                <h3 class="mb-2">2. App Description</h3>
                <p style="text-indent: 30px;">The Isnaad App is a platform that enables e-commerce businesses to access
                    logistics services related to
                    their Fulfillment needs. The app provides features such as order integration, order tracking,
                    inventory
                    management, shipping, and reporting.</p>
            </div>
            <div class="mb-5">
                <h2 class="mb-2">3. User Accounts</h2>
                <p style="text-indent: 30px;">To use the Isnaad App, e-commerce businesses must create an account by
                    providing their personal and
                    business information. Users are responsible for maintaining the confidentiality of their account
                    details
                    and for any activity that occurs under their account. Isnaad reserves the right to suspend or
                    terminate
                    user accounts at any time if we suspect fraudulent or abusive activity.</p>
            </div>
            <div class="mb-5">
                <h2 class="mb-2">4. User Conduct</h2>
                <p style="text-indent: 30px;">Users of the Isnaad App must not engage in any activity that is illegal,
                    infringes on the rights of
                    others, or is harmful to the Isnaad App or its users. This includes, but is not limited to,
                    uploading or
                    sharing any content that is offensive, defamatory, or infringes on intellectual property rights.</p>
            </div>
            <div class="mb-5">
                <h2 class="mb-2">5. App Availability</h2>
                <p style="text-indent: 30px;">Isnaad will make every effort to ensure the Isnaad App is available and
                    functioning at all times, but we
                    cannot guarantee uninterrupted access to the app. We reserve the right to suspend or terminate
                    access to
                    the app at any time for maintenance or other reasons.</p>
            </div>
            <div class="mb-5">
                <h2 class="mb-2">6. Payment Processing</h2>
                <p style="text-indent: 30px;">Users of the Isnaad App may be required to make payments for logistics
                    services rendered through the app.
                    All payment processing is conducted securely through third-party payment providers. Isnaad is not
                    responsible for any errors or issues that arise during payment processing.</p>
            </div>
            <div class="mb-5">
                <h2 class="mb-2">7. Dashboard and Reports</h2>
                <p style="text-indent: 30px;">Users of the Isnaad App will have access to a dashboard and reports that
                    provide detailed information on
                    order Fulfillment, inventory management, and shipping status.</p>
            </div>

            <div class="mb-5">
                <h2 class="mb-2">8. Privacy Policy</h2>
                <p style="text-indent: 30px;">Isnaad respects your privacy and will protect your personal and business
                    information in accordance with
                    our Privacy Policy. By using the Isnaad App, you agree to our Privacy Policy.</p>
            </div>
            <div class="mb-5">
                <h4 class="mb-2">8.1 Privacy Policy</h4>
                <p style="text-indent: 30px;">Isnaad is committed to protecting the privacy of our users. This Privacy
                    Policy explains how we collect,
                    use, and protect the personal and business information you provide to us through the Isnaad App.</p>
            </div>
            <div class="mb-5">
            <h4 class="mb-2">8.2 Collection of Information</h4>
            <p style="text-indent: 30px;">Isnaad may collect personal and business information from users of the Isnaad App, including but not
                limited to name, email address, phone number, and payment information. Isnaad may also collect
                non-personal information related to user activity within the app, such as order history and shipping
                statistics.</p>
            </div>
            <div class="mb-5">
            <h4 class="mb-2">8.3 Use of Information</h4>
            <p style="text-indent: 30px;">Isnaad may use the personal and business information collected from users for the following purposes:</p>
            <ul>
                <li>To provide and improve the Isnaad App and its services</li>
                <li>To process payments for logistics services rendered through the app</li>
                <li>To communicate with users about their account and app activity</li>
                <li>ToTo comply with legal and regulatory requirements</li>
                <li>- Isnaad may also use the non-personal information collected from users to improve the app’s
                    functionality and user experience.
                </li>
            </ul>
            </div>
            <div class="mb-5">
                <h2 class="mb-2">9. Intellectual Property</h2>
                <p style="text-indent: 30px;">All content and intellectual property contained within the Isnaad App, including but not limited to trademarks, logos, and software, are the property of Isnaad or its licensors. Users are not authorized to use, reproduce, or modify any of the app’s content or intellectual property without prior written consent from Isnaad</p>
            </div>
            <div class="mb-5">
                <h2 class="mb-2">10. Changes to Terms and Conditions</h2>
                <p style="text-indent: 30px;">  Isnaad reserves the right to update or modify these terms and conditions at any time without prior notice. Your continued use of the Isnaad App after any changes to the terms and conditions constitutes your acceptance of the new terms</p>
            </div>
            <div class="mb-5">
                <h2 class="mb-2">11. Governing Law</h2>
                <p style="text-indent: 30px;">These terms and conditions are governed by the laws of Kingdom of Saudi Arabia. Any disputes arising from the use of the Isnaad App shall be subject to the exclusive jurisdiction of the courts of Kingdom of Saudi Arabia.</p>
            </div>
        </div>
    </section>

@endsection


@push("scripts")

@endpush
