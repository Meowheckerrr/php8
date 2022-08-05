<?php require "../head.php";

class cuteGirl{
    //Properties 
    public $name;
    public $country;

    //Methods
    function setName($name){
        $this->girlName=$name; 
    }
    function getName(){
        return $this->girlName;
    }

    function setCountry($country){
       $this->girlCountry=$country;
    }
    function getCountry(){
       return $this->girlCountry;
    }
}

$girl1= new cuteGirl;
$girl2 =new cuteGirl;

$girl1->setName("小婷");
$girl2->setName("佩玉");

echo $girl1->getName()."</br>";
echo $girl2->getName()."</br>";

$girl1->setCountry("Taiwan");
$girl2->setCountry("Japajese");

echo $girl1->getCountry()."</br>";
echo $girl2->getCountry()."</br>";



class test {
    public $meow;
    function meow1($meow){
        $this->doubleMeow=$meow;
    }
    function getMeow2(){
        return $this->doubleMeow.$this->doubleMeow;
    }
}

$meowCat=new test;
$meowCat->meow1("meow");
echo $meowCat -> getMeow2()."</br>";

echo var_dump($girl1 instanceof cuteGirl);
echo var_dump($meowCat instanceof cuteGirl);


require "../tail.php";?>