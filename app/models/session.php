<?php
    class Session {
        
        function session(){
            session_start();
        }
        
        function set($name, $value){
            $result = true;
            if(!empty($name) || !empty($value))
                $result = false;
            else
                $_SESSION[$name] = $value;
            
            return $result;
        }
        
        function get($name) {
                return $_SESSION[$name];
        }
        
        function del($name) {
            unset($_SESSION[$name]);
        }
        
        function destroy(){
            $_SESSION = null;
            session_destroy();
        }
    }
?>