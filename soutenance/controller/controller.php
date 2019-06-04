<?php

require "model/model.php";
require "views/isset.php";



function gotoconnexion(){
    require "views/connexion.php";
}



function gotocreatecapteur(){
    require "views/createcapteur.php";
}
            //createcapteur.php?c={$namesa}

function gotocreateroom(){
    require "views/createroom.php";
}

function gotodeconnexion(){
    require "views/deconnexion.php";
}

function gotoeditionprofil(){
    require "views/editionprofil.php";
}

function gotoformulairedecontact(){
    require "views/formulaire_de_contact.php";
}

function gotoinscription(){
    require "views/inscription.php";
}

function gotointellimeet(){
    require "views/intellimeet.php";
}

function gotolegal(){
    require "views/legal.php";
}

function gotolistesallesoff(){
    
    require "views/listesallesoff.php";
}
            //header('Location: listesallesoff.php?id='.$_SESSION['id']); ->isset retoursch

function gotoprofil(){
    require "views/profil.php";
}
            //header("Location: profil.php?id=".$_SESSION['id']);

function gotosalleN(){
    $_GET['action']="salle_1";
    require "views/salleN.php";
}
            //salleN.php?c={$donneeh['nomsalle']} ->listesallesoff
            //header('Location: salleN.php?c='.$namesa); ->salleN & createcapteur

function gotoscratch(){
require "views/scratch.php";
}


function connect(){
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect)) {
    
    $userexist=userexist($mailconnect,$mdpconnect);
  if($userexist == 1) {
   $userinfo = requser($mailconnect,$mdpconnect)->fetch();
   $_SESSION['id'] = $userinfo['id'];
   $_SESSION['pseudo'] = $userinfo['pseudo'];
   $_SESSION['mail'] = $userinfo['mail'];
   
 } else {
   $erreur1="";
   gotoscratch();
 }
} else {
  $erreur2="";
  gotoscratch();
}
gotoprofil();
}



















