<?php
include ("db_data.inc.php");
    
    function display_error($msg)
    {header("Location: {$_SERVER['PHP_SELF']}?error=$msg"),
    }





    function db_connect()
    {
        global $hostname, $username, $passwd, $dbname;
        $link = @ mysql_connect ($hostname, $username, $passwd);
            
            if(!$link)
            { display_error("Veuillez nous excusez. probleme d'acces au serveur de donnees.");
              exit();
            }else{ 
                $dbs=@mysql_select_db($dbname);
                if(!$dbs){
                    display_error("Veuillez nous excusez. probleme d'acces au serveur de donnees.");
                    exit();
                }else{return $link;}
            }
        }
    function db_disconnect()
    {mysql_close();}
    

    function do_query($query)
    {
        $link=db_connect();
        $result=mysql_query($query,$link);
        db_disconnect();
        return $result;
    }
    
?>