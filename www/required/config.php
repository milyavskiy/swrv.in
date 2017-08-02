<?php
/*
 * First authored by Brian Cray but HEAVILY modified by Alex M
 * https://github.com/briancray/PHP-URL-Shortener/
 * License: http://creativecommons.org/licenses/by/3.0/
*/

// db options
define("DB_NAME", "");
define("DB_USER", "");
define("DB_PASSWORD", "");
define("DB_HOST", "localhost");
define("DB_TABLE", "redirects");

// validation regular expressions from https://www.owasp.org/index.php/OWASP_Validation_Regex_Repository
define("REGEX_FROM_URL", "[^((?!.*://)(%[0-9a-f]{2}|[-()_.!~*';/?:@&=+$,a-z0-9])+)([).!';/?:,][[:blank:]])?$]");
define("REGEX_TO_URL", "[^((((https?|ftps?|gopher|telnet|nntp)://)|(mailto:|news:))(%[0-9A-Fa-f]{2}|[-()_.!~*';/?:#@&=+$,A-Za-z0-9])+)([).!';/?:,][[:blank:]])?$]");
define("REGEX_IP_ADDR", "[^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$]");

// set the protocol
define("PROT", "http://");

// set the host name
define("HOST", gethostname());

// set the IPv4 address
define("IP", gethostbyname(HOST));

// generate a random subdomain
define("RND", chr(mt_rand(97,122)).chr(mt_rand(97,122)).mt_rand(0,9).".".HOST);

// track referrals
define("TRACK", TRUE);
