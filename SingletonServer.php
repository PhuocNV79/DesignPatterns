<?php
class SingletonServer{
    private static $ServerInstance = null;
    
    private function __construct(){}

    protected function __clone (){}

    protected function __wakeup(){}

    // lazy loading
    public static function getServerInstance(){
        
        if(!isset(self::$ServerInstance)){
            self::$ServerInstance = new static();
        }

        return self::$ServerInstance;
    }

    public function returnResponeToClient(){
        echo "return data in JSON to Client";
    }

}

$server1 = SingletonServer::getServerInstance();
$server2 = SingletonServer::getServerInstance();

// whether 2 instance is just one;
if($server1===$server2){
    echo "both the same <br>";
    $server1->returnResponeToClient();
} else {
    echo "NOOO. They're diffirent";
}

?>