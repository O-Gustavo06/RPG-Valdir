<?php

class Inventario {
    private $itens = [];
    private $capacidadeMaxima;
    private $capacidadeAtual = 0;

    public function __construct($capacidadeMaxima) {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function adicionar(Item $item): void {
        if($item->getTamanho() <= $this->CapacidadeLivre()){
            array_push($this->itens, $item);
            echo "Item adicionado ao inventario. <br>";
        } else {
            echo "Não foi possivel adicionar o item <br>";
        }
    }

    public function remover(Item $item) {
        foreach ($this->itens as $key => $it) {
            if ($it === $item) {
                unset($this->itens[$key]);
                $this->capacidadeAtual -= $item->getTamanho();
                echo "Item{$item->getNickname()}foi removido do inventário.<br>";
                return;
            }
        }
        echo "Item {$item->getNickname()} não foi encontrado no inventário.<br>";
    }

    public function capacidadeLivre(): float{
        $total = 0;
        foreach($this->itens as $item){
            $total += $item->getTamanho();
        }
        return $this->capacidadeMaxima - $total;
    }


    public function getCapacidadeAtual() {
        return $this->capacidadeAtual;
    }

    public function getCapacidadeMaxima() {
        return $this->capacidadeMaxima;
    }

    public function getItens() {
        return $this->itens;
    }
}
?>