<?php
namespace traits;

trait Presentation
{

    public function bonjour($nom){
        return '<p> venant du trait : Bonjour '.$nom.'</p>'; 
    }

}