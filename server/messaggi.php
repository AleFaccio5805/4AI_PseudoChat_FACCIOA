<?php

    //Array di messaggi
    //https://www.w3schools.com/charsets/ref_emoji.asp
    $messaggi = '[
        { "codMit": "1", "codDest": "0", "mes": "Ciao, come stai?", "orainvio": "11:20" },
        { "codMit": "0", "codDest": "1",  "mes": "Ciao &#128512;! Tutto bene, tu?", "orainvio": "11:30" },
        { "codMit": "1", "codDest": "0",  "mes": "Più o meno, fra poco ho una verifica &#128532;", "orainvio": "11:32" },
        { "codMit": "0", "codDest": "1",  "mes": "&#128549;", "orainvio": "11:35" },

        { "codMit": "0", "codDest": "2", "mes": "Ciao Maria, come è stato il carnevale ad Ivrea?", "orainvio": "10:20" },
        { "codMit": "2", "codDest": "0",  "mes": "&#128525; Bellissimo!! &#128151; &#128151;", "orainvio": "11:30" },
        { "codMit": "0", "codDest": "2",  "mes": "&#128516; Hai tirato anche tu qualche arancia?", "orainvio": "11:32" },
        { "codMit": "2", "codDest": "0",  "mes": "Noooo, sono stata dietro Marco tutto il tempo...", "orainvio": "12:00" },
        { "codMit": "0", "codDest": "2", "mes": "Ah, quindi è venuto anche Marco...", "orainvio": "12:02" },

        { "codMit": "3", "codDest": "0",  "mes": "Ciao Ut!! &#128516; &#128516;", "orainvio": "7:45" },
        { "codMit": "0", "codDest": "3",  "mes": "Ehi &#128527;", "orainvio": "7:50" },
        { "codMit": "3", "codDest": "0",  "mes": "Sei già arrivato a scuola?", "orainvio": "7:50" },
        { "codMit": "0", "codDest": "3", "mes": "Sì, sono in classe", "orainvio": "7:52" },
        { "codMit": "3", "codDest": "0", "mes": "ohhh &#128519;, come mai non sei passato a salutare?", "orainvio": "7:53" },

        { "codMit": "4", "codDest": "0",  "mes": "Sei arrivato?", "orainvio": "7:45" },
        { "codMit": "0", "codDest": "4",  "mes": "Sì, tranquilla", "orainvio": "7:46" },
        { "codMit": "4", "codDest": "0",  "mes": "Hai ordinato il pranzo??", "orainvio": "12:30" },
        { "codMit": "4", "codDest": "0",  "mes": "Ci sei?????", "orainvio": "12:32" },
        { "codMit": "0", "codDest": "4",  "mes": "Fra poco vado...", "orainvio": "12:45" },
        { "codMit": "4", "codDest": "0", "mes": "Ma non sei a lezione! &#128545;", "orainvio": "12:45" }, 
        
        { "codMit": "0", "codDest": "5",  "mes": "Ciao Gigi, oggi a che ora arrivi?", "orainvio": "13:00" }
    ]';

    //RITORNARE IN MODO OPPORTUNO SOLO I MESSAGGI DEGLI UTENTI NECESSARI ALL'ORA GIUSTA
        //mediante un oggetto JSON con campo cod, desc e messaggi (se si vuole il massimo del punteggio)
        //NOTA: cod (0= ok, -1=errore), desc (eventuale testo da mostrare all'utente) e messaggi (array dei messaggi selezionati)
    echo $messaggi;

?>
