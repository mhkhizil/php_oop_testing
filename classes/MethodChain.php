<?php
class MethodChain{
    public function a(){
        echo "I m a \n";
        return $this;
    }
    public function b(){
        echo "I m b \n";
        return $this;
    }
    public function c(){
        echo "I m c \n";
        return $this;
    }
}