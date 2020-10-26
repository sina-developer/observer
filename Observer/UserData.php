<?php

namespace Observer;

use Observer\Observer;

class UserData implements Observer{
    private $data;

    public function __construct($data){
        $this->data = $data;
        echo $this->data."\n";
    }

    public function update($data){
        $this->data = $data;
        echo $this->data."\n";
    }
}
