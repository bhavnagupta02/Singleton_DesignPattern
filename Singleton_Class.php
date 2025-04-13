<?php
// Online PHP compiler to run PHP program online
// Print "Hello World!" message
//echo "Hello World!";

final class DataBaseConnector {
    private static ?self $obj = null;
    private string $creation_timestamp;
    private function __construct() {
        //$this->creation_timestamp = strtotime(date('Y-m-d H:i:s'));
        $this->creation_timestamp = date('Y-m-d H:i:s');
        echo __CLASS__ . " initialize only once \n";
    }
    public static function getInstance():self 
    {
        if (self::$obj === null) {
            self::$obj = new self;
        }
        return self::$obj;
    }
    
    public function getCreationTimestamp():string 
    {
        return $this->creation_timestamp;
    }
}
$obj1 = DataBaseConnector::getInstance();
sleep(3);
$obj2 = DataBaseConnector::getInstance();
echo $obj1->getCreationTimestamp() . PHP_EOL;
echo $obj2->getCreationTimestamp() . PHP_EOL;
if ($obj1 == $obj2){
    echo "It is singleton class \n";
} else {
    echo "It is not singleton class";
}

?>