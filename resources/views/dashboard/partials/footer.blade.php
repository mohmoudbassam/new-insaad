<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">
             &copy; {{ now()->year}}<a class="ms-25" href="#" >{{config("settings.site_". app()->getLocale() . "_title")}}</a>
            <span class="d-none d-sm-inline-block">, {{trans('dashboard.main.All rights reserved')}}</span></span><span class="float-md-end d-none d-md-block"><i data-feather="heart"></i></span></p>
</footer>