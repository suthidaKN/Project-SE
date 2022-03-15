<?php
class NisitContorller{

    public function index(){
        $NisitList = Nisit::getAll();
        
    }
}