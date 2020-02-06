<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
$androidUrl = "https://play.google.com/store/apps/details?id=jp.sub.takelab.twitmorus";
$iOSUrl = "https://apps.apple.com/us/app/twitmorse/id1485828762";

alterlink($ua, $androidUrl, $iOSUrl);

function alterlink($ua, $androidUrl, $iOSUrl) {
    if (strstr($ua,'iPhone') || strstr($ua, 'iPad') || strstr($ua, 'iPod Touch')) {
        header("Location: $iOSUrl");
    } else {
        header("Location: $androidUrl");
    }
}
