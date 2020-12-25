<?php
class InfoStudent {

//function to be exposed must be public
public function getInfoStudent($cin) {
$info = array("CIN:".$cin , "Syrine", "Chaari","09/01/1997", 
"Level: 3", "Result :admis"); 
return $info;
}
}
?>