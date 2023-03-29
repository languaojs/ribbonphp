<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP:/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied</h2> <p>This file is protected!</p>");
}


class Session {

    private static $_sessionStarted = FALSE;
    public static function start()
    {
        if(!session_id())
        {
            if(self::$_sessionStarted == FALSE)
            {
                session_start();
                self::$_sessionStarted = TRUE;
            }
        }
    }

    public static function set_session($sess_name, $sess_key, $sess_value)
    {
        $_SESSION[$sess_name][$sess_key] = $sess_value;
    }


    public static function get_session($sess_name, $sess_key)
    {
        if(isset($_SESSION[$sess_name][$sess_key]))
        {
            return $_SESSION[$sess_name][$sess_key];
        }else{
            return FALSE;
        }
    }

}