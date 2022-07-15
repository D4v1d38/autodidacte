<!--Methode  avec fonction -->
<?php


function checkbox(string $name, string $value,array $data):string{
    
    return 
    '<input type="checkbox" name="'.$name.'[]" value="'.$value.'" id="'.$value.'" >';
}

function checkboxCheked(string $name, string $value,array $data):string{
    
    $checkAttr = "";
    
    if(isset($data[$name]) && in_array($value,$data[$name])){
        $checkAttr = "checked";
    }
    return 
    '<input type="checkbox" name="'.$name.'[]" value="'.$value.'" id="'.$value.'" '. $checkAttr .' >';
}

function radio(string $name, string $value, array $data):string{
    
    $chekAttr ="";
    
    if(isset($data[$name]) &&  $data[$name] === $value ){ // le radio ne renvoi qu'une valeur donc pas besoin d'iterer le tableau avec un foreach
        $chekAttr ="checked";
    }
    
    return
    '<input type="radio" name="'.$name.'" value="'.$value.'" '. $chekAttr .' />';
}