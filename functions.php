<?php 

function showKeyboard(){
  $buttonRow1=['&#x300;','1','2','3','4','5','6','7','8','9','0','-','+','&larr; Backspace::backspace'];
  $buttonRow2=['Tab &#x21C6;::tab','q','w','e','r','t','y','u','i','o','p','[',']','|::underbackspace'];
  $buttonRow3=['Caps&nbsp;Lock::capslock','a','s','d','f','g','h','j','k','l',';','&rdquo;','&crarr; ENTER::enter'];
  $buttonRow4=['&uArr;&nbsp;Shift::shift1','z','x','c','v','b','n','m','<','>','/','&uArr;&nbsp;Shift::shift2'];
  $keyboard=[$buttonRow1, $buttonRow2, $buttonRow3, $buttonRow4];

  foreach($keyboard as $row){
    echo '<div class="row">';
    foreach ($row as $value){
      $specialClass = "";
      if (strstr($value, "::") == true){
        $specialClass = strstr($value, "::");
        $specialClass = str_replace("::","",$specialClass);
        $value = str_replace("::$specialClass","",$value);
      }
      echo '<button class="button '.$specialClass.'">'.$value.'</button>'."\n";
    }
    echo '</div>';
  }
}
