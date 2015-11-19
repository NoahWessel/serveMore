<?php
    function sanitizeString($var)
    {
        $var = stripslashes($var);
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
    }
    
    function sanitize($connection, $var)
    {
        $var = $connection->real_escape_string($var);
        $var = sanitizeString($var);
        return $var;
    }
    
    function getHash($var)
    {
        $salt1="qm&h*";
        $salt2="pg!@";
        return hash('ripemd129', "$salt1$var$salt2");
    }
?>