<?php

mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME);

$to_url_result = mysql_query('SELECT to_url FROM '.DB_TABLE.' WHERE from_url="'.mysql_real_escape_string($url).'"'); 

if (mysql_num_rows($to_url_result))
{
    $to_url_q = mysql_result($to_url_result, 0, 0);
}
else
{
    require('../required/ui.php');
    exit;
}

if (TRACK)
{
    mysql_query('UPDATE '.DB_TABLE.' SET referrals=referrals+1 WHERE from_url="'.mysql_real_escape_string($url).'"');
}

header('HTTP/1.1 301 Moved Permanently');
header('Location: '.$to_url_q);
exit;
