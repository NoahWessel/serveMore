<?php
    function sanitize($connection, $var)
    {
        if (get_magic_quotes_gpc())
            $var = stripslashes($var);
            
        $var = $connection->real_escape_string($var);
        $var = strip_tags($var);                
        return htmlentities($var);
    }
    
    function getHash($var)
    {
        $salt1="qm&h*";
        $salt2="pg!@";
        return hash('ripemd129', "$salt1$var$salt2");
    }
?>