<?php
namespace App\config;
class Validator {
    private static array $errors=[];


    public static function isEmail($email, $key, $message){
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL )) {
            self::$errors[$key]=$message;
        }

    }

    public static function isEmpty($value, $key, $message) {
        if (empty($value)) {
            self::$errors[$key] = $message;
        }
    }

    public static function addErrors($key, $message) {
        self::$errors[$key] = $message;
    }

    public static function getErrors(): array {
        return self::$errors;
    }

    public static function isValid(): bool {
        return empty(self::$errors);
    }

}