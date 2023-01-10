<?php

function formatPhoneNumber($number) {
    if(ctype_digit($number)) {
        $number = substr($number, 0, 3) .'-'. substr($number, 3, 3) .'-'. substr($number, 6);
    } else {
        if(ctype_digit($number) && strlen($number) == 7) {
            $number = substr($number, 0, 3) .'-'. substr($number, 3, 4);
        }
    }

    return $number;
}

function getYoutubeId($url)
{
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
    return isset($match[1]) ? $match[1] : null;
}
