<?php

require_once "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
$constants = include 'constants.php';

$consumer_key        = $constants['consumer_key'];
$consumer_secret     = $constants['consumer_secret'];
$access_token        = $constants['access_token'];
$access_token_secret = $constants['access_token_secret'];

$twitter = new TwitterOAuth(
    $consumer_key,
    $consumer_secret,
    $access_token,
    $access_token_secret
);

$result = $twitter->post(
    "statuses/update",
    ["status" => "Hellow, Twitter!"]
);


if ($twitter->getLastHttpCode() == 200) {
    echo "Success";
} else {
    echo "Failure";
}

