<?php

function inputElement($icon, $placeholder, $name, $value)
{
    $ele = "
    
    <div class=\"input-group mb-2\">
    <div class=\"input-group-prepend\">
        <div class=\"input-group-text bg-warning\">$icon</div>
    </div>
    <input type=\"text\" name='$name' value='$value' autocomplete=\"off\"  placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\">
</div> 
    
    
    ";
    echo $ele;
}

function buttonElement($btnid,$styleclass,$text,$name,$attr){
    $btn = "
    <button name='$name''$attr' class='$styleclass' id='$btnid' style='margin: 1.5em 0.6em; padding: 0.5em 2.4em ;'>$text</button>
    
    
    
    ";
   echo $btn; 
}

