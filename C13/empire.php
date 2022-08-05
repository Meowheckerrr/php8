<?php require "../head.php";

class game{
    public static $gameName = "Empire of Word 3";

    static function withoutObjectTitle(){
        echo "Welcom to ";
    }
    
}

class cost{
    
    public $meets=0;
    public $woods=0;
    public $goldens=0;
    



    public function setCost($meet,$woods,$goldens){
        $this->costMeet=$meet;
        $this->costWoods=$woods;
        $this->costGoldens=$goldens;
    }
    
    protected function showCost(){
        echo "Meet cost: {$this->costMeet} </br>";
        echo "Wood cost: {$this->costWoods} </br>";
        echo "Goldens cost: {$this->costGoldens} </br>";
    }
}

class stepSolider extends cost{

    public $name;
    public $attack;
    public $defense;
    

    function __construct($name,$attack,$defense){  //Constructor was used to set up the property is convinious 
        $this->soliderName=$name;
        $this->soliderAttack=$attack;
        $this->soliderDefense=$defense;
    }
    
   

    function __destruct(){
        //Show info
        echo "{$this->soliderName} Attack : {$this->soliderAttack}";
        echo "</br>";
        echo "{$this->soliderName} Defense : {$this->soliderDefense}";
        echo "</br>";
        echo  $this->showCost();
    }


}
echo game::withoutObjectTitle();
echo game::$gameName;  // call static variable.  meowmeowmeow
echo "</br>";

$musketeer = new stepSolider("火槍兵",120,20);
$musketeer->setCost(100,100,50);  // inherience 











require "../tail.php";?>