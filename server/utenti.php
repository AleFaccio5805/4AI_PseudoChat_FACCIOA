<?php
header("Access-Control-Allow-Origin: *");

$obj = new stdClass();

$utenti = '
    [
        {"codUt":"0", "nome":"Utente", "cognome":"Con Login", "genere":"m"},
        {"codUt":"1", "nome":"Mario", "cognome":"Rossi", "genere":"m"},
        {"codUt":"2", "nome":"Maria", "cognome":"Bianchi", "genere":"f"},
        {"codUt":"3", "nome":"Elena", "cognome":"Strada", "genere":"f"},
        {"codUt":"4", "nome":"Ginevra", "cognome":"Fiore", "genere":"f"},
        {"codUt":"5", "nome":"Luigi", "cognome":"Silente", "genere":"m"}
    ]
';

/*$arrayUtenti = json_decode($utenti);

$obj->utenti = $arrayUtenti;*/





    //RITORNARE I DATI di tutti gli utenti o di un utente richiesto
     //mediante un oggetto JSON con campo cod, desc e utenti o utente (se si vuole il massimo del punteggio)
     //NOTA: cod (0= ok, -1=errore), desc (eventuale testo da mostrare all'utente) e utente o utenti (dati di un utente o array degli utenti)
echo $utenti;
?>