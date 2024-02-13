<?php
    function dbconnect()
    {
        static $bdd = null;
        if ($bdd === null) {
            $bdd = mysqli_connect('172.10.0.113' , 'ETU002930' , 'JCE1DjCGdNRf' , 'db_p16_ETU002930');
        }
        return $bdd;
    }
?>