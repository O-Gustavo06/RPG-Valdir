<?php

require_once ('Class/Item.php');

class Ataque extends Item {
    
    public function __construct($nickname) {
        parent::__construct($nickname, 7); 
    }
}