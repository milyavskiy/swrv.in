<!DOCTYPE html>
<?php

if (!empty($_GET['sub']))
{
    require('../required/config.php');

    $furl = $_GET['sub'].".".HOST;
    $furl = get_magic_quotes_gpc() ? stripslashes(trim($furl)) : trim($furl);
    $furl = strtolower(rtrim($furl, "/"));

    if (preg_match(REGEX_FROM_URL, $furl))
    {
        mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        mysql_select_db(DB_NAME);

        $furl_result = mysql_query('SELECT from_url, to_url FROM '.DB_TABLE.' WHERE from_url like "'.mysql_real_escape_string($furl).'/%"');

        if (mysql_num_rows($furl_result))
        {
            while ($fturl = mysql_fetch_assoc($furl_result)) 
            {
                echo "<a href=\"".PROT.$fturl['from_url']."\">".$fturl['from_url']."</a> &rArr; <a href=\"".$fturl['to_url']."\">".$fturl['to_url']."</a><br/>\n";
            }
        }
        else
        {
            echo "Not here";
        }
    }
}
