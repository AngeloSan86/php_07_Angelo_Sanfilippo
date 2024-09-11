<?php

/*Ripetere l’esercizio del controllo password visto a lezione (da soli o rivedendo il video) 
Implementare un metodo che faccia reinserire la password qualora anche una delle regole non fosse rispettate e che, invece, lo interrompa in caso di password accettata visualizzare in console quale regola non è stata rispettata 

1. Lunghezza minima 8 caratteri
2. Sia presente almeno un carattere numerico
3. Sia presente almeno un carattere maiuscolo
4. Sia presente almeno un carattere speciale (! @ # $)
*/

function insertPass(){

    $password = readline("Stai creando la tua nuova password.\nRicorda che la tua password DEVE:\n- Avere una lunghezza minima di 8 caratteri.\n- Possedere almeno un carattere numerico.\n- Possedere almeno una lettera mauiscola.\n- Possedere almeno un carattere speciale tra ! @ # $.\nDigita adesso la tua password:\n");

    controlloPassword($password);
};

insertPass();



function checkLunghezza($pwd){

    if(strlen($pwd)>= 8){
        return true;
    }
   
};

function checkNumero($pwd){

    for ($i=0; $i < strlen($pwd) ; $i++) { 

        if(is_numeric($pwd[$i])){
            return true;
        }
    }
    
};

function checkMaiuscola($pwd){

    for ($i=0; $i < strlen($pwd) ; $i++) { 

        if(ctype_upper($pwd[$i])){
            return true;
        }
    }
    
};

function checkSpeciale($pwd){

    $caratteriSpeciali = ["!","@","#","$"];

    for ($i=0; $i < strlen($pwd) ; $i++) { 

        if(in_array($pwd[$i], $caratteriSpeciali)){
            return true;
        }
    }
    
};


function controlloPassword($pwd){
    checkLunghezza($pwd);
    checkNumero($pwd);
    checkMaiuscola($pwd);
    checkSpeciale($pwd);

    if(checkLunghezza($pwd) && checkNumero($pwd) && checkMaiuscola($pwd) && checkSpeciale($pwd)){

        echo "\n PASSWORD INSERITA CORRETTAMENTE!!!";

    }else{

        echo "\n ERRORE!!!\nLa password inserita non soddisfa i requisiti richiesti.\nRitenta!\n";
        insertPass();

    };

};





?>