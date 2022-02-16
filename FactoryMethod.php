<?php
interface Device{
    public function comunicate();
}

class Phone implements Device{
    public function comunicate():string
    {
        return "Im using phone to make a video call";
    }
}

class tablet implements Device{
    public function comunicate():string
    {
        return "Im using tablet to make a video call";
    }
}

abstract class Comunicator implements Device{
    // this factory method return a device wheter it is phone or tablet
    // or something new in the future
    public abstract function factoryMethodCreateDevice():Device;

    // use this method to do some thing
    public function doSomething():string
    {
        $newDevice = $this->factoryMethodCreateDevice();
        return "Im using ".get_class($newDevice). " to make a video call";

    }
    
}

class Comu1 extends Comunicator{
    public function factoryMethodCreateDevice(): Device
    {
        return new phone();
    }

    public function comunicate()
    {
        
    }
}

class Comu2 extends Comunicator{
    public function factoryMethodCreateDevice(): Device
    {
        return new Tablet();
    }

    public function comunicate()
    {
        
    }
}

$obj = new Comu2();
echo $obj->factoryMethodCreateDevice()->comunicate();
?>