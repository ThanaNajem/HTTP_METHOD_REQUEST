<?php
Class dbObj
{
    /* Database connection start */
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "test";
    var $conn;
    /*mysqli_connect() function opens a new connection to the MySQL server after reading MySQL server  info such as database name, it's password, it's host, it's user*/
    function getConnstring()
    {
        $conn = null;
        
        // read the .ini file and create an associative array
        
        $db = parse_ini_file("config-file.ini");
        
        /* now we can use the info in that file to create the appropriate, string connection, based on type, or just using the other info */
        
        $user = $db['user'];
        $pass = $db['pass'];
        $name = $db['name'];
        $host = $db['host'];
        $type = $db['type'];
        
        
        
        $conn = mysqli_connect($host, $user, $pass, $name);
        
        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        } else {
            $this->conn = $con;
        }
        return $this->conn;
    }
}

?>