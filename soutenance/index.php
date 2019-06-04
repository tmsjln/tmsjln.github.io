<?php

define("ROOT",__DIR__ );
require ROOT . "/controller/controller.php";



if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]); // Petite fonction de sécurité

    switch ($action) {
        case 'goto_connect':
            connect();
            break; 

        case 'goto_connexion':
            gotoconnexion();
            break;

        case 'goto_createcapteur':
            gotocreatecapteur();
            //createcapteur.php?c={$namesa}
            break;
        case 'goto_createroom':
            gotocreateroom();
            break;

        case 'goto_deconnexion':
            gotodeconnexion();


            break;
        case 'goto_editionprofil':
            gotoeditionprofil();
            break;

        case 'goto_formulaire_de_contact':
            gotoformulairedecontact();
            break;
        case 'goto_inscription':
            gotoinscription();
            break;

        case 'goto_intellimeet':
            gotointellimeet();
            break;
        case 'goto_legal':
            gotolegal();
            break;

        case 'goto_listesallesoff':
            gotolistesallesoff();
            
            break;
        case 'goto_profil':
            gotoprofil();
            
            break;

        case 'goto_salleN':

            gotosalleN();

            
            //header('Location: salleN.php?c='.$namesa); ->salleN & createcapteur
            break;
        case 'goto_scratch':
            gotoscratch();
            break;




        default :
            //echo "Erreur 404";
        gotoconnexion();
            break;
    }
   }
   else{/*
    if (logCookieSet()==TRUE) {
        loginUser();
    }
    else{*/
        gotoscratch();
    //}

    }
?>


