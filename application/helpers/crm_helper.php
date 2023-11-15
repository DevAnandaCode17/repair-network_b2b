<?php 

 function paginationforhugerecords($pagecount, $i, $currentpage) {
    $showlink = false;
    if ($currentpage > $i && ($currentpage - $i) > 10000) {
        if ($i % 10000 == 0) $showlink = true;
    } elseif ($currentpage < $i && ($i - $currentpage) > 10000) {
        if ($i % 10000 == 0) $showlink = true;
    } elseif ($currentpage > $i && ($currentpage - $i) > 5000) {
        if ($i % 5000 == 0) $showlink = true;
    } elseif ($currentpage < $i && ($i - $currentpage) > 5000) {
        if ($i % 5000 == 0) $showlink = true;
    } elseif ($currentpage > $i && ($currentpage - $i) > 1000) {
        if ($i % 1000 == 0) $showlink = true;
    } elseif ($currentpage < $i && ($i - $currentpage) > 1000) {
        if ($i % 1000 == 0) $showlink = true;
    } elseif ($currentpage > $i && ($currentpage - $i) > 500) {
        if ($i % 500 == 0) $showlink = true;
    } elseif ($currentpage < $i && ($i - $currentpage) > 500) {
        if ($i % 500 == 0) $showlink = true;
    } elseif ($currentpage > $i && ($currentpage - $i) > 100) {
        if ($i % 100 == 0) $showlink = true;
    } elseif ($currentpage < $i && ($i - $currentpage) > 100) {
        if ($i % 100 == 0) $showlink = true;
    } elseif ($currentpage > $i && ($currentpage - $i) > 75) {
        if ($i % 75 == 0) $showlink = true;
    } elseif ($currentpage < $i && ($i - $currentpage) > 75) {
        if ($i % 75 == 0) $showlink = true;
    } elseif ($currentpage > $i && ($currentpage - $i) > 50) {
        if ($i % 50 == 0) $showlink = true;
    } elseif ($currentpage < $i && ($i - $currentpage) > 50) {
        if ($i % 50 == 0) $showlink = true;
    } elseif ($currentpage > $i && ($currentpage - $i) > 5) {
        if ($i % 10 == 0) $showlink = true;
    } elseif ($currentpage < $i && ($i - $currentpage) > 5) {
        if ($i % 10 == 0) $showlink = true;
    } elseif ((($currentpage - $i) <= 5 && ($currentpage - $i) > 0) || (($i - $currentpage) <= 5 && ($i - $currentpage) >= 0)) {
        $showlink = true;
    }
    return $showlink;
}

function isActive(){
    $CI = get_instance();
    $CI->load->model('user_model');
    if (isset($_SESSION["user_id"])) {
        $user = $CI->user_model->checkUserActive($_SESSION["user_id"]);
        return $user;
    }
    return false;
}