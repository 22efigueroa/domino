<?php
    function mostrarFitxesDomino($fitxes){
        foreach($fitxes as $fitxa){
           echo '<img src="fitxadomino.php?a='.$fitxa[0].'&b='.$fitxa[1].'" >';
        }
    }

    $fitxesDomino = [
        [3,5],
        [1,3]
    ];

    mostrarFitxesDomino($fitxesDomino);


//     function mostrarPartida($partida, $fitxa, $posicio){

//     }

//     $partidesDomino = [
        
//     ];

//     $fitxesDomino = [
        
//     ];

//     $posicionsDomino = [
        
//     ];
// ?>