<?php
class dht11{
 public $link='';
 function __construct($totalmL, $totalPulses){
  $this->connect();
  $this->storeInDB($totalmL, $totalPulses);
 }
 
 function connect(){
  $this->link = mysqli_connect('127.0.0.1','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'waterflow') or die('Cannot select the DB');
 }
 
 function storeInDB($totalmL, $totalPulses){
  $query = "insert into flow set flowrate='".$totalPulses."', totaluse='".$totalmL."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['totalmL'] != '' and  $_GET['totalPulses'] != ''){
    $dht11=new dht11($_GET['totalmL'],$_GET['totalPulses']);
   }
?>