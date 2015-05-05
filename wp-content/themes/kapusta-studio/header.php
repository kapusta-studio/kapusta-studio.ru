<!DOCTYPE html>

<html>

<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
   	<link rel="icon" href="<?php bloginfo('template_url');?>/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter25984849 = new Ya.Metrika({id:25984849,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/25984849" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    	<?php wp_head(); ?>
    	
</head>

<body>
