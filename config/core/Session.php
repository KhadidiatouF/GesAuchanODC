<?php

class Session {

    private static ?Session $session=null;

    public  function set($data, $key){

    }

    public  function get($key){

    }


    public  function unset($key){

    }


    public  function isset( $key){

    }
    public  function destroy($key){

    }
    public static function getInstance(){
        if (self::$session == null) {
            self::$session= new Session();
        }
        return self::$session;

    }




}