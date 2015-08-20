// Copyright Hostingwalk.com
// 1. change at $sql = your 'user_database' to your database name.
// 2. upload this file to:  /etc/csf/block.php
// 3.. go to CSF configuration -> Block report and insert: /etc/csf/block.php

#!/usr/local/bin/php -n
<?php
 
    $x = Return_Substrings($argv[6], '(', '/')
    $country = $x[0];
 
    $sql = "INSERT INTO `user_databasename`.`banned_ips` (`id`, `ip`, `hostname`, `iso`, `date_time`) VALUES (NULL, '".$argv[1]."', NULL, '".$country."', NULL);";
 
 
    function Return_Substrings($text, $sopener, $scloser) {
        $result = array();
 
        $noresult = substr_count($text, $sopener);
        $ncresult = substr_count($text, $scloser);
 
        if ($noresult < $ncresult)
            $nresult = $noresult;
        else
            $nresult = $ncresult;
 
        unset($noresult);
        unset($ncresult);
 
        for ($i=0;$i<$nresult;$i++)  {
            $pos = strpos($text, $sopener) + strlen($sopener);
 
            $text = substr($text, $pos, strlen($text));
 
            $pos = strpos($text, $scloser);
 
            $result[] = substr($text, 0, $pos);
 
            $text = substr($text, $pos + strlen($scloser), strlen($text));
        }
 
        return $result;
    }
 

    ?>
