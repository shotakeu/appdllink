<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
$androidUrl = "https://play.google.com/store/apps/details?id=com.twitter.android";
$iOSUrl = "https://itunes.apple.com/jp/app/twitter/id333903271?mt=8";

alterlink($ua, $androidUrl, $iOSUrl);

function alterlink($ua, $androidUrl, $iOSUrl) {
    if (strstr($ua,'iPhone') || strstr($ua, 'iPad') || strstr($ua, 'iPod Touch')) {
        header("Location: $iOSUrl");
    } else {
        header("Location: $androidUrl");
    }
}
?>
