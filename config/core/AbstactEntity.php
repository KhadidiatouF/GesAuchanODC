<?php
namespace App\config;

abstract class AbstactEntity{

    protected $table;
    


    abstract public static  function toObject(array $data):static;

    public function toJson(): string{
        return json_encode(static::toArray());
        
    }
        
    abstract public function toArray():array;
        
    

}