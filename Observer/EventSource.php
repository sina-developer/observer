<?php

namespace Observer;

use Observer\Observer;

class EventSource{
    private array $list = [];
    private $data = null;

    public function addObserver(Observer $observer){
        $this->list [] = $observer;
    }

    private function notify(){
        foreach ($this->list as $key => $observer) {
            $observer->update($this->data);
        }
    }

    public function setData($data){
        $this->data = $data;
        $this->notify();
    }
}