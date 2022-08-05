<?php require "../head.php";


class errorClass extends Exception {
    function displayErrorMessage()
    {
        $exCode = $this->getCode();
        $exMessage = $this-> getMessage();
        $exFile =$this->getFile();
        $exLine =$this->getLine();
        echo "Exception thrown in $exFile in $exLine :[code $exCode] $exMessage";
    }
}

function varifyFormFuncton($password){

    if(empty($password)){
        throw new Exception("Password couldn't be empty!!!!!!!!!!!");
    }
    elseif(strlen($password)<4){
        throw new Exception("Password length couldn't < 4");
    }
    elseif(is_numeric($password)){
        throw new Exception("Password couldn't all be numbers");
    }
    else{
        echo "pass";
    }
}


try{
    varifyFormFuncton("356456456456542");
}
catch(errorClass $exceptObject){
    //$exceptObject->displayErrorMessage();
    exit();
}

require "../tail.php";?>