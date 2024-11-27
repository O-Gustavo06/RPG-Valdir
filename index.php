<?php

require_once 'Class/Item.php';
require_once 'Class/Inventario.php';
require_once 'Class/Player.php';
require_once 'Subclass/Ataque.php';
require_once 'Subclass/Defesa.php';
require_once 'Subclass/Magia.php';


$player1 = new Player("Jogador 1", 1); 
$player2 = new Player("Jogador 2", 1); 

$itemAtaque1 = new Ataque(" Arma, Espada");
$itemDefesa1 = new Defesa(" Defesa, Escudo");
$itemMagia1 = new Magia(" Magia, Varinha");
$itemAtaque2 = new Ataque(" Arma, Arco");
$itemDefesa2 = new Defesa(" Defesa, Armadura");
$itemMagia2 = new Magia(" Magia, Cajado");


// Coletando item do jogador 1
echo "Jogador 1 coleta itens:<br>";
$player1->coletarItem($itemAtaque1);
$player1->coletarItem($itemDefesa1);
$player1->coletarItem($itemMagia1);
echo('<br>');


//Coletendo item do jogador 2
echo "Jogador 2 coleta itens:<br>";
$player2->coletarItem($itemAtaque2);
$player2->coletarItem($itemDefesa2);
$player2->coletarItem($itemMagia2);
echo('<hr>');


//inventario
$player1->exibirInventario();
echo('<br>');
$player2->exibirInventario();
echo('<hr>');

// Simulando inventário cheio de itens 
$player1->coletarItem($itemAtaque2);
$player1->coletarItem($itemDefesa2);
$player1->coletarItem($itemMagia2);
echo ('<br>');

$player1->exibirInventario();
$player1->subirDeNivel();
// Exibindo inventário após subir de nível
$player1->exibirInventario();
echo ("<br>");
$player2->exibirInventario();
$player2->subirDeNivel();
$player2->exibirInventario();


echo('<hr>');

// Remover Jogador 1 
echo "jogador 1 remove item: <br>";
$player1->soltarItem($itemAtaque1);
$player1->soltarItem($itemDefesa1);
$player1->soltarItem($itemMagia1);
echo('<br>');

// Remover Jogador 2
echo "Jogador 2 remove item: <br>";
$player2->soltarItem($itemAtaque2);
$player2->soltarItem($itemDefesa2);
$player2->soltarItem($itemMagia2);

