<?php

if (!empty($_SERVER['HTTP_HOST']))
{
    $url = $_SERVER['HTTP_HOST'];
    if (!empty($_GET['to']))
    {
        $url = $url."/".$_GET['to'];
    }
    $url = get_magic_quotes_gpc() ? stripslashes(trim($url)) : trim($url);
    $url = strtolower(rtrim($url, "/"));

    require('../required/config.php');

    if ($url == HOST)
    {
        $msg = "placeholder=\"".RND." or path or domain\"";
        $err_msg = "... status ...";
        require('../required/ui.php');
    }
    elseif (preg_match(REGEX_FROM_URL, $url))
    {
        $msg = "value=\"$url\"";
        $err_msg = "no $url here... why not add it?";
        require('../required/redirect.php');
    }
    else
    {
        $msg = "placeholder=\"\"";
        $err_msg = "source URL is invalid";
        require('../required/ui.php');
    }
}
