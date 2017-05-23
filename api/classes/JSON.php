<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JSON
 *
 * @author Ashish Kumar
 */
class JSON {
    private $data;
    private $encodeData;
    private $decodeData;
    
    public function __contruct($data){
        $this->data = $data;
    }
    
    public function decode(){
        $this->decodeData = json_decode($this->data);
        return $this->decodeData;
    }
    
    public function encode(){
        $this->encodeData = json_encode($this->data, JSON_NUMERIC_CHECK, 512);
        return $this->encodeData;
    }
    
}
