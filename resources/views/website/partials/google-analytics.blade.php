<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config("settings.site_GA_MEASUREMENT_ID") }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){window.dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', "{{ config("settings.site_GA_MEASUREMENT_ID") }}");
</script>