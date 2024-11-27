<?php

require_once ('Class/Item.php');

class Magia extends Item {
    public function __construct($nickname) {
        parent::__construct($nickname, 2); 
    }
}