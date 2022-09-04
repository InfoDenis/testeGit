<?php

print "Hello World, gitHub!!!<br>";
print teste();

function teste(){
  for($i=0; $i<5; $i++){
    echo "teste";
    if($i > -1){
      echo $i."<br>";
    }
  }
}