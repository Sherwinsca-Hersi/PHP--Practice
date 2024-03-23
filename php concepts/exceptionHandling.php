<?php
function  divide( $a, $b ){
    if( $b==0){
        throw new Exception("Divide By Zero");
    }
    else{
        return $a/$b;
    }
    
}   
try{
    divide(4, 0);
}
catch(Exception $exp){
    $errcode=$exp->getCode();
    $errmsg=$exp->getMessage();
    $errfile=$exp->getFile();
    $errline=$exp->getLine();
    echo  $errmsg." occur at ".$errfile." at line".$errline." and the Error code is:".$errcode."<br>";
}
finally{
    echo" Process Completed!!";
}
