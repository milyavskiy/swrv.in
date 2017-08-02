<?php

if (!empty($_POST['from_url']) && !empty($_POST['to_url']))
{
    $from_url = get_magic_quotes_gpc() ? stripslashes(trim($_POST['from_url'])) : trim($_POST['from_url']);
    $from_url = strtolower(rtrim($from_url, "/"));
    $to_url = get_magic_quotes_gpc() ? stripslashes(trim($_POST['to_url'])) : trim($_POST['to_url']);
    $from_ip = $_SERVER['REMOTE_ADDR'];

    require('../required/config.php');

    if (preg_match(REGEX_FROM_URL, $from_url))
    {
        if (preg_match(REGEX_TO_URL, $to_url))
        {
            if (preg_match(REGEX_IP_ADDR, $from_ip))
            {
                mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
                mysql_select_db(DB_NAME);

                $id_result = mysql_query('SELECT id FROM '.DB_TABLE.' WHERE from_url="'.mysql_real_escape_string($from_url).'"');
                if (mysql_num_rows($id_result))
                {
                    echo "$from_url has already been added";
                }
                else
                {
                    mysql_query('LOCK TABLES '.DB_TABLE.' WRITE;');

                    mysql_query('INSERT INTO '.DB_TABLE.' (from_url, to_url, created, creator) VALUES ("'.
                    mysql_real_escape_string($from_url).'", "'.
                    mysql_real_escape_string($to_url).'", "'.
                    time().'", "'.
                    mysql_real_escape_string($from_ip).'")');

                    mysql_query('UNLOCK TABLES');

                    echo "added $from_url  :-)";
                }
            }
            else
            {
                echo "source IP is invalid";
            }
        }
        else
        {
            echo "destination URL is invalid";
        }
    }
    else
    {
        echo "source URL is invalid";
    }
}
else
{
    echo "source and destination URL can not be empty";
}
