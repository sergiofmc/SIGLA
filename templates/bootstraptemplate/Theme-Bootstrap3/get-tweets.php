<?php
    session_start();
    require_once("twitteroauth-master/twitteroauth/twitteroauth.php"); //Path to twitteroauth library

    $twitteruser = "themeleaf";
    $notweets = 5;
    $consumerkey = "8O6EzTr9xZNUzQuzspnqg";
    $consumersecret = "pXbKo9xd18jkeZRx4VljAcniXhRU3MtF3SHSWk";
    $accesstoken = "972241471-iM0mbXEABPzPYahVOqwcuq6OVN0iHFJlkTA1ZmTx";
    $accesstokensecret = "dYVcIvJAiGZ76xtByHftLTiwJrAwinefSjaGJVpF9o";

    function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
      $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
      return $connection;
    }

    $connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

    $tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);

    echo json_encode($tweets);
?>
