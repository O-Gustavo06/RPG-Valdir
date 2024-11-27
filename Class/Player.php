<?php

Class Player {
    private $nickname;
    private $nivel;
    private $inventario;

    public function __construct($nickname) {
        $this->nickname = $nickname;
        $this->nivel = 1;
        $this->inventario = new Inventario(20); 
    }
// Aqui quanto mostra os niveis do personagem, conforme o personagem sobe de nivel, seu inventario sobre a quantidade de amarzenamento com o nivel do personagem * 3  + a capacidade de armazenar que ele tinha anteriormente
    public function subirDeNivel() {
        $this->nivel = $this->nivel + 1;
        $capacidadeExtra = $this->nivel * 3;
        $novaCapacidade = 20 + ($capacidadeExtra);
        $this->inventario = new Inventario($novaCapacidade);
        echo "{$this->nickname} subiu para o nível {$this->nivel} e agora pode carregar até {$novaCapacidade} itens no inventário.<br>";
    }

    public function coletarItem(Item $item) {
        $this->inventario->adicionar($item);
    }

    public function soltarItem(Item $item) {
        $this->inventario->remover($item);
    }

    public function exibirInventario() {
        echo "Inventário de {$this->nickname}:<br>";
        foreach ($this->inventario->getItens() as $item) {
            // Aqui mostra todos os Itens que o personagem possui 
            echo "- " . $item->getNickname() . " (Tamanho: " . $item->getTamanho() . ")<br>";

        }
    }
}
?>
