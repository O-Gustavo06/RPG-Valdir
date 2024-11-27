<?php
class Item {
    protected $nickname;
    protected $tamanho;

    public function __construct($nickname, $tamanho) {
        $this->nickname = $nickname;
        $this->tamanho = $tamanho;
    }

    public function getNickname() {
        return $this->nickname;
    }

    public function getTamanho() {
        return $this->tamanho;
    }
}
