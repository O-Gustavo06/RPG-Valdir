<?php

require_once('Class/Item.php');

class Defesa extends Item {

    public function __construct($nickname) {
        parent::__construct($nickname, 4); 
    }
}