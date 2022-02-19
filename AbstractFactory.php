<?php
// 
interface AbstractFurnitureFactory{
    public function createChair();
    public function createDoor();
    public function createTable();
}

class FactoryDaNang implements AbstractFurnitureFactory{
    public function createChair(){
        return new ChairDaNang();
    }
    public function createDoor(){
        
        return new DoorDaNang();
    }
    public function createTable(){
        return new TableDanang();
    }
}

class FactoryHaNoi implements AbstractFurnitureFactory{
    public function createChair(){
        return new ChairThaiNguyen();
    }
    public function createDoor(){
        
        return new DoorThaiNguyen();
    }
    public function createTable(){
        return new TableThaiNguyen();
    }
}
class FactoryHCM implements AbstractFurnitureFactory{
    public function createChair(){
        return new ChairQuangNam();
    }
    public function createDoor(){
        
        return new DoorQuangNam();
    }
    public function createTable(){
        return new TableQuangNam();
    }
}

interface InterfaceChair {
    public function letPeopleSitDown();
    public function letPeopleStandup();
}

class ChairDaNang implements InterfaceChair{
    public function letPeopleSitDown(){
        echo "People can sit down on ChairDaNang";
    }
    public function letPeopleStandup(){
        echo "People can standup from ChairDaNang";
    }
}
class ChairQuangNam implements InterfaceChair{
    public function letPeopleSitDown(){
        echo "People can sit down on ChairQuangNam";
    }
    public function letPeopleStandup(){
        echo "People can standup from ChairQuangNam";
    }
}
class ChairThaiNguyen implements InterfaceChair{
    public function letPeopleSitDown(){
        echo "People can sit down on ChairThaiNguyen";
    }
    public function letPeopleStandup(){
        echo "People can standup from ChairThaiNguyen";
    }
}

interface InterfaceDoor {
    public function letPeopleOpen();
    public function letPeopleClose();
}

class DoorQuangNam implements InterfaceDoor{
    public function letPeopleOpen(){
        echo "People can open DoorQuangNam";
    }
    public function letPeopleClose(){
        echo "People can close DoorQuangNam";
    }
}
class DoorDaNang implements InterfaceDoor{
    public function letPeopleOpen(){
        echo "People can open DoorDaNang";
    }
    public function letPeopleClose(){
        echo "People can close DoorDaNang";
    }
}

class DoorThaiNguyen implements InterfaceDoor{
    public function letPeopleOpen(){
        echo "People can open DoorDaNang";
    }
    public function letPeopleClose(){
        echo "People can close DoorDaNang";
    }
}

interface InterfaceTable {
    public function letPeoplePutThing();
    public function letPeopleHaveLunch();
}

class TableDanang implements InterfaceTable{
    public function letPeoplePutThing(){
        echo "People can put thing on TableDaNang";
    }
    public function letPeopleHaveLunch(){
        echo "People can pick up thing from TableDaNang";
    }
}
class TableQuangNam implements InterfaceTable{
    public function letPeoplePutThing(){
        echo "People can put thing on TableQuangNam";
    }
    public function letPeopleHaveLunch(){
        echo "People can pick up thing from TableQuangNam";
    }
}
class TableThaiNguyen implements InterfaceTable{
    public function letPeoplePutThing(){
        echo "People can put thing on TableThaiNguyen";
    }
    public function letPeopleHaveLunch(){
        echo "People can pick up thing from TableThaiNguyen";
    }
}

$factory1 = new FactoryDaNang();
$chair = $factory1->createChair();
$chair->letPeopleSitDown();
echo "<br>";
$chair->letPeopleStandup();
?>