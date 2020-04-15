<?php
include('connexion.php');
include('class-sujet.php');
include('class-stagiaire.php');
include('class-encadrant.php');
include('class-Admin.php');
include('class-Stage.php');






class Udao
{
    function __construct(){ 
        connection::connect();
    }
    
/*
*
*Charge tout les sujets disponible
*
*/
function loadSujets(){
    $tab=array();
	$q=connection::Select('select * from sujet');  
    foreach($q as $ligne)
{
        $Suj=new sujet();
        $Suj->id=$ligne['idSuj'];
        $Suj->auteur=$ligne['auteur'];
        $Suj->designation=$ligne['desg'];
        $Suj->description=$ligne['descr'];
        $Suj->duree=$ligne['duree'];
         array_push($tab,$Suj);
}
	return $tab;  
}
/*
*
*Charge un sujet
*
*/
function EditSujets($ID){
    $tab=array();
	$q=connection::Select("select * from sujet where idSuj='".$ID."' ");  
    foreach($q as $ligne)
{
        $Suj=new sujet();
        $Suj->id=$ligne['idSuj'];
        $Suj->auteur=$ligne['auteur'];
        $Suj->designation=$ligne['desg'];
        $Suj->description=$ligne['descr'];
        $Suj->duree=$ligne['duree'];
         array_push($tab,$Suj);
}
	return $tab;  
}
   
/*
*
*insertion dans la table sujet
*
*/
function AjouterSujet($auteur,$desgn,$descr,$duree)
{ 
    $sql="insert into sujet (auteur,desg,descr,duree) values('".$auteur."','".$desgn."','".$descr."','".$duree."') ";
    $rs=connection::Maj($sql);
}

/*
*
*Update sujet
*
*/
function UpdateSujet($ID,$auteur,$desgn,$descr,$duree){
    
    $sql="UPDATE sujet 
    set auteur ='".$auteur."',
    desg='".$desgn."',
    descr='".$descr."',
    duree='".$duree."'
    where idSuj='".$ID."'
    ";
    $rs=connection::Maj($sql);
}
/*
*
*Delete sujet
*
*/
function DeleteSujet($ID){
    $sql="Delete from sujet where idSuj='".$ID."' ";
    $rs=connection::Maj($sql);
}
    
    
    
    
    
/*
*
*Insertion dans la table Stagiaires
*
*/
function AjouterStagiaire($cin,$nom,$prenom,$sexe,$photo,$email,$tel,$daten,$niveau,$filiere,$ecole)
{
     $sql="insert into stagiaires (cin,nom,prenom,sexe,photo,email,tel,daten,niveau,filiere,ecole) values('".$cin."','".$nom."','".$prenom."','".$sexe."','".$photo."','".$email."','".$tel."','".$daten."','".$niveau."','".$filiere."','".$ecole."') ";
    $rs=connection::Maj($sql); 
}

/*
*
*charger tous les stagiaires
*
*/
function loadStagiaires(){
     $tab=array();
	$q=connection::Select('select * from stagiaires');  
    foreach($q as $ligne){
        $Stag =new Stagiaire();
        $Stag->id=$ligne['idSta'];
        $Stag->cin=$ligne['cin'];
        $Stag->nom=$ligne['nom'];
        $Stag->prenom=$ligne['prenom'];
        $Stag->daten=$ligne['daten'];
        $Stag->photo=$ligne['photo'];
        $Stag->ecole=$ligne['ecole'];
        $Stag->filiere=$ligne['filiere'];
        $Stag->niveau=$ligne['niveau'];
        $Stag->email=$ligne['email'];
        $Stag->tel=$ligne['tel'];
        $Stag->sexe=$ligne['sexe'];
        array_push($tab,$Stag);
    }
    return $tab;
    
}
/*
*
*Charger les infos d'un stagiaire pour l'edition
*
*/
 
function EditStagiaires($ID){
     $tab=array();
	$q=connection::Select("select * from stagiaires where idSta= '".$ID."'");  
    foreach($q as $ligne){
        $Stag =new Stagiaire();
        $Stag->id=$ligne['idSta'];
        $Stag->cin=$ligne['cin'];
        $Stag->nom=$ligne['nom'];
        $Stag->prenom=$ligne['prenom'];
        $Stag->daten=$ligne['daten'];
        $Stag->photo=$ligne['photo'];
        $Stag->ecole=$ligne['ecole'];
        $Stag->filiere=$ligne['filiere'];
        $Stag->niveau=$ligne['niveau'];
        $Stag->email=$ligne['email'];
        $Stag->tel=$ligne['tel'];
        $Stag->sexe=$ligne['sexe'];
        array_push($tab,$Stag);
    }
    return $tab;
    
}

/*
*
*Insertion des encadrants dans la table encadrants
*
*/
function AjouterEncadrant($cin,$nom,$prenom,$photo,$email,$tel,$daten,$log,$pwd,$dept,$qs){
     $sql="insert into encadrants (cinEnc,nomEnc,prenomEnc,photoEnc,emailEnc,telEnc,datenEnc,log,pwd,dept,questionsecrete) values('".$cin."','".$nom."','".$prenom."','".$photo."','".$email."','".$tel."','".$daten."','".$log."','".$pwd."','".$dept."','".$qs."') ";
    $rs=connection::Maj($sql); 
}
/*
*
*Charger tous les Encadrants
*
*/
function loadEncadrants(){
    
    $tab=array();
	$q=connection::Select('select * from encadrants');  
    foreach($q as $ligne){
        $Enc =new Encadrant();
        $Enc->id=$ligne['idEnc'];
        $Enc->cin=$ligne['cinEnc'];
        $Enc->nom=$ligne['nomEnc'];
        $Enc->prenom=$ligne['prenomEnc'];
        $Enc->daten=$ligne['datenEnc'];
        $Enc->photo=$ligne['photoEnc'];
        $Enc->dept=$ligne['dept'];
        $Enc->qs=$ligne['questionsecrete'];
        $Enc->log=$ligne['log'];
        $Enc->email=$ligne['emailEnc'];
        $Enc->tel=$ligne['telEnc'];
        $Enc->pwd=$ligne['pwd'];
        
        array_push($tab,$Enc);
    }
    return $tab;
}
    /*
*
*Charger les infos d'un encadrant pour modification
*
*/
function EditEncadrants($ID){
    
    $tab=array();
	$q=connection::Select("select * from encadrants where idEnc='".$ID."'");  
    foreach($q as $ligne){
        $Enc =new Encadrant();
        $Enc->id=$ligne['idEnc'];
        $Enc->cin=$ligne['cinEnc'];
        $Enc->nom=$ligne['nomEnc'];
        $Enc->prenom=$ligne['prenomEnc'];
        $Enc->daten=$ligne['datenEnc'];
        $Enc->photo=$ligne['photoEnc'];
        $Enc->dept=$ligne['dept'];
        $Enc->qs=$ligne['questionsecrete'];
        $Enc->log=$ligne['log'];
        $Enc->email=$ligne['emailEnc'];
        $Enc->tel=$ligne['telEnc'];
        $Enc->pwd=$ligne['pwd'];
        
        array_push($tab,$Enc);
    }
    return $tab;
} /*
*
*Charger les infos d'un encadration pour modification
*
*/
function EditEncadrant($ID){
    
    $tab=array();
	$q=connection::Select("select * from encadrants where cinEnc='".$ID."'");  
    foreach($q as $ligne){
        $Enc =new Encadrant();
        $Enc->id=$ligne['idEnc'];
        $Enc->cin=$ligne['cinEnc'];
        $Enc->nom=$ligne['nomEnc'];
        $Enc->prenom=$ligne['prenomEnc'];
        $Enc->daten=$ligne['datenEnc'];
        $Enc->photo=$ligne['photoEnc'];
        $Enc->dept=$ligne['dept'];
        $Enc->qs=$ligne['questionsecrete'];
        $Enc->log=$ligne['log'];
        $Enc->email=$ligne['emailEnc'];
        $Enc->tel=$ligne['telEnc'];
        $Enc->pwd=$ligne['pwd'];
        
        array_push($tab,$Enc);
    }
    return $tab;
}
    
/*
*
*UPDATE ENCADRANT
*
*/

function UpdateEncadrant($ID,$cin,$nom,$prenom,$photo,$email,$tel,$daten,$log,$pwd,$dept,$qs){

    $sql="UPDATE encadrants 
    SET cinEnc='".$cin."',
    nomEnc='".$nom."',
    prenomEnc='".$prenom."',
    datenEnc='".$daten."',
    dept='".$dept."',
    photoEnc='".$photo."',
    emailEnc='".$email."',
    telEnc='".$tel."',
    log='".$log."',
    pwd='".$pwd."',
    questionsecrete='".$qs."'
    WHERE idEnc='".$ID."'
    ";

    $rs=connection::Maj($sql); 
}
/*
*
*Supprimer un encadrant
*
*/
function DeleteEncadrant($ID){
    $sql="Delete from encadrants where idEnc='".$ID."'";
    $rs=connection::Maj($sql);
}

/*
*
*Authentification Admins
*
*/
function Authentification($log,$pwd){
    
     
	$q=connection::Select("select * from admin where log='".$log."' and pwd='".$pwd."' ");  
    
    if($ligne=$q->fetch()){
        
        $Admin=new Admin();
        
        $Admin->id=$ligne['id'];
        $Admin->log=$ligne['log'];
        $Admin->pwd=$ligne['pwd'];
        $Admin->photo=$ligne['photo'];
    }
    return $Admin;
}
/*
*
*Authentification Encadrants
*
*/
function AuthentificationEnc($log,$pwd){
    
     
	$q=connection::Select("select * from encadrants where log='".$log."' and pwd='".$pwd."' ");  
    
    if($ligne=$q->fetch()){
       $Enc =new Encadrant();
        $Enc->id=$ligne['idEnc'];
        $Enc->cin=$ligne['cinEnc'];
        $Enc->nom=$ligne['nomEnc'];
        $Enc->prenom=$ligne['prenomEnc'];
        $Enc->daten=$ligne['datenEnc'];
        $Enc->photo=$ligne['photoEnc'];
        $Enc->dept=$ligne['dept'];
        $Enc->qs=$ligne['questionsecrete'];
        $Enc->log=$ligne['log'];
        $Enc->email=$ligne['emailEnc'];
        $Enc->tel=$ligne['telEnc'];
        $Enc->pwd=$ligne['pwd'];
    }
    return $Enc;
}

    
/*
*
*Supprimer un stagiaire
*
*/
function DeleteStagiaire($ID){
    $sql="Delete from stagiaires where idSta='".$ID."'";
    $rs=connection::Maj($sql);
}
    
/*
*
*Affecter stage a un stagiaire
*
*/
 
    function AffecterSujet($ids,$idenc,$idst,$datedebut,$datefin){
        
     $sql="insert into stage
     (idsujet,idencadrant,idstagiaire,datedebut,datefin)
     values ('".$ids."','".$idenc."','".$idst."','".$datedebut."','".$datefin."') ";
    $rs=connection::Maj($sql); 
}
    
/*
*
*Load infos pour la table du stage
*
*/
function LoadStageEncours(){
    
     $tab=array();
	$q=connection::Select('select * from stagiaires S,sujet SJ,Encadrants E,Stage SG where S.cin=SG.idstagiaire and SJ.idSuj=SG.idsujet and E.cinEnc=SG.idencadrant and E.cinEnc=SJ.auteur and SG.etat=0');  //0 = en cours !#0 terminé
    foreach($q as $ligne){
    
    $stage=new Stage();
    
    
    
     $stage->idStagiaire=$ligne['idSta'] ;
     $stage->nomStag=$ligne['nom'] ;
     $stage->prenomStag=$ligne['prenom'] ;
     $stage->photoStag=$ligne['photo'] ;
     $stage->cinStag=$ligne['cin'] ;
//encadrant
     $stage->idEnc=$ligne['idEnc'];
     $stage->nomEnc=$ligne['nomEnc'];
     $stage->prenomEnc=$ligne['prenomEnc'];
     $stage->photoEnc=$ligne['photoEnc'];
     $stage->cinEnc=$ligne['cinEnc'];
    //Stage
     $stage->idStage=$ligne['idstage'];
     $stage->Datedebut=$ligne['datedebut'];
     $stage->Datefin=$ligne['datefin'];
     $stage->Note=$ligne['note'];
     $stage->Remarque=$ligne['remarque'];
     $stage->Etat=$ligne['etat'];
    //sujet
     $stage->IdSujet=$ligne['idSuj'];
     $stage->Descr=$ligne['descr'];
     $stage->Desg=$ligne['desg'];
     $stage->Duree=$ligne['duree'];
     $stage->Auteur=$ligne['auteur'];
        array_push($tab,$stage);
    }
    return $tab;
    
    
}
    
    
/*
*
*UPDATE Stagiaire
*
*/

function UpdateStagiaire($ID,$cin,$nom,$prenom,$photo,$email,$tel,$daten,$sexe,$niveau,$filiere,$ecole){

    $sql="UPDATE stagiaires 
    SET cin='".$cin."',
    nom='".$nom."',
    prenom='".$prenom."',
    daten='".$daten."',
    niveau='".$niveau."',
    photo='".$photo."',
    email='".$email."',
    tel='".$tel."',
    filiere='".$filiere."',
    ecole='".$ecole."',
    sexe='".$sexe."'
    WHERE idSta='".$ID."'
    ";

    $rs=connection::Maj($sql); 
}
    
    
/*
*
*Load infos pour la table du stage
*
*/
function LoadStageConclus(){
    
     $tab=array();
	$q=connection::Select('select * from stagiaires S,sujet SJ,Encadrants E,Stage SG where S.cin=SG.idstagiaire and SJ.idSuj=SG.idsujet and E.cinEnc=SG.idencadrant and E.cinEnc=SJ.auteur and SG.etat <> 0');  //0 = en cours !#0 terminé
    foreach($q as $ligne){
    
    $stage=new Stage();
    
    
    
     $stage->idStagiaire=$ligne['idSta'] ;
     $stage->nomStag=$ligne['nom'] ;
     $stage->prenomStag=$ligne['prenom'] ;
     $stage->photoStag=$ligne['photo'] ;
     $stage->cinStag=$ligne['cin'] ;
//encadrant
     $stage->idEnc=$ligne['idEnc'];
     $stage->nomEnc=$ligne['nomEnc'];
     $stage->prenomEnc=$ligne['prenomEnc'];
     $stage->photoEnc=$ligne['photoEnc'];
     $stage->cinEnc=$ligne['cinEnc'];
    //Stage
     $stage->idStage=$ligne['idstage'];
     $stage->Datedebut=$ligne['datedebut'];
     $stage->Datefin=$ligne['datefin'];
     $stage->Note=$ligne['note'];
     $stage->Remarque=$ligne['remarque'];
     $stage->Etat=$ligne['etat'];
    //sujet
     $stage->IdSujet=$ligne['idSuj'];
     $stage->Descr=$ligne['descr'];
     $stage->Desg=$ligne['desg'];
     $stage->Duree=$ligne['duree'];
     $stage->Auteur=$ligne['auteur'];
        array_push($tab,$stage);
    }
    return $tab;  
}
    
 /*
*
*Load infos pour la table des stagiaires d'un encadrant
*
*/
function LoadStageEncourEnc($ID){
    
     $tab=array();
	$q=connection::Select("select * from stagiaires S,sujet SJ,Encadrants E,Stage SG where S.cin=SG.idstagiaire and SJ.idSuj=SG.idsujet and E.cinEnc=SG.idencadrant and E.cinEnc=SJ.auteur  and E.cinEnc='".$ID."'and SG.etat=0");  //0 = en cours !#0 terminé
    foreach($q as $ligne){
    
    $stage=new Stage();
    
    
    
     $stage->idStagiaire=$ligne['idSta'] ;
     $stage->nomStag=$ligne['nom'] ;
     $stage->prenomStag=$ligne['prenom'] ;
     $stage->photoStag=$ligne['photo'] ;
     $stage->cinStag=$ligne['cin'] ;
//encadrant
     $stage->idEnc=$ligne['idEnc'];
     $stage->nomEnc=$ligne['nomEnc'];
     $stage->prenomEnc=$ligne['prenomEnc'];
     $stage->photoEnc=$ligne['photoEnc'];
     $stage->cinEnc=$ligne['cinEnc'];
    //Stage
     $stage->idStage=$ligne['idstage'];
     $stage->Datedebut=$ligne['datedebut'];
     $stage->Datefin=$ligne['datefin'];
     $stage->Note=$ligne['note'];
     $stage->Remarque=$ligne['remarque'];
     $stage->Etat=$ligne['etat'];
    //sujet
     $stage->IdSujet=$ligne['idSuj'];
     $stage->Descr=$ligne['descr'];
     $stage->Desg=$ligne['desg'];
     $stage->Duree=$ligne['duree'];
     $stage->Auteur=$ligne['auteur'];
        array_push($tab,$stage);
    }
    return $tab;
    
    
}   
    
    
/*
*
*Charge tous les sujets d'un encadrant'
*
*/
function loadMesSujets($ID){
    $tab=array();
	$q=connection::Select("select * from sujet where auteur='".$ID."' ");  
    foreach($q as $ligne)
{
        $Suj=new sujet();
        $Suj->id=$ligne['idSuj'];
        $Suj->auteur=$ligne['auteur'];
        $Suj->designation=$ligne['desg'];
        $Suj->description=$ligne['descr'];
        $Suj->duree=$ligne['duree'];
         array_push($tab,$Suj);
}
	return $tab;  
}
    
    /*
*
*Load infos pour la table des stagiaires d'un encadrants terminé
*
*/
function LoadStageConclusEnc($ID){
    
     $tab=array();
	$q=connection::Select("select * from stagiaires S,sujet SJ,Encadrants E,Stage SG where S.cin=SG.idstagiaire and SJ.idSuj=SG.idsujet and E.cinEnc=SG.idencadrant and E.cinEnc=SJ.auteur  and E.cinEnc='".$ID."'and SG.etat=1");  //0 = en cours !#0 terminé
    foreach($q as $ligne){
    
    $stage=new Stage();
    
    
    
     $stage->idStagiaire=$ligne['idSta'] ;
     $stage->nomStag=$ligne['nom'] ;
     $stage->prenomStag=$ligne['prenom'] ;
     $stage->photoStag=$ligne['photo'] ;
     $stage->cinStag=$ligne['cin'] ;
//encadrant
     $stage->idEnc=$ligne['idEnc'];
     $stage->nomEnc=$ligne['nomEnc'];
     $stage->prenomEnc=$ligne['prenomEnc'];
     $stage->photoEnc=$ligne['photoEnc'];
     $stage->cinEnc=$ligne['cinEnc'];
    //Stage
     $stage->idStage=$ligne['idstage'];
     $stage->Datedebut=$ligne['datedebut'];
     $stage->Datefin=$ligne['datefin'];
     $stage->Note=$ligne['note'];
     $stage->Remarque=$ligne['remarque'];
     $stage->Etat=$ligne['etat'];
    //sujet
     $stage->IdSujet=$ligne['idSuj'];
     $stage->Descr=$ligne['descr'];
     $stage->Desg=$ligne['desg'];
     $stage->Duree=$ligne['duree'];
     $stage->Auteur=$ligne['auteur'];
        array_push($tab,$stage);
    }
    return $tab;
    
    
}   
    
/*
*
*Load infos pour la table des stagiaires d'un encadrants pour les noter
*
*/
function LoadStageNote($ID,$Stag){
    
     $tab=array();
	$q=connection::Select("select * from stagiaires S,sujet SJ,Encadrants E,Stage SG where S.cin=SG.idstagiaire and SJ.idSuj=SG.idsujet and E.cinEnc=SG.idencadrant and E.cinEnc=SJ.auteur  and E.cinEnc='".$ID."' and S.cin='".$Stag."' and SG.etat=0");  //0 = en cours !#0 terminé
    foreach($q as $ligne){
    
    $stage=new Stage();
    
    
    
     $stage->idStagiaire=$ligne['idSta'] ;
     $stage->nomStag=$ligne['nom'] ;
     $stage->prenomStag=$ligne['prenom'] ;
     $stage->photoStag=$ligne['photo'] ;
     $stage->cinStag=$ligne['cin'] ;
//encadrant
     $stage->idEnc=$ligne['idEnc'];
     $stage->nomEnc=$ligne['nomEnc'];
     $stage->prenomEnc=$ligne['prenomEnc'];
     $stage->photoEnc=$ligne['photoEnc'];
     $stage->cinEnc=$ligne['cinEnc'];
    //Stage
     $stage->idStage=$ligne['idstage'];
     $stage->Datedebut=$ligne['datedebut'];
     $stage->Datefin=$ligne['datefin'];
     $stage->Note=$ligne['note'];
     $stage->Remarque=$ligne['remarque'];
     $stage->Etat=$ligne['etat'];
    //sujet
     $stage->IdSujet=$ligne['idSuj'];
     $stage->Descr=$ligne['descr'];
     $stage->Desg=$ligne['desg'];
     $stage->Duree=$ligne['duree'];
     $stage->Auteur=$ligne['auteur'];
        array_push($tab,$stage);
    }
    return $tab;
    
    
}   
    
/*
*
*Evaluates the trainee 
*
*/
function Noter($ID,$note,$remarque){
    
    $sql="UPDATE stage 
    SET note='".$note."',
    remarque='".$remarque."',
    etat=1
   
    WHERE idstagiaire='".$ID."'
    ";

    $rs=connection::Maj($sql); 
    
}
    
/*
*
*Password recovery
*
*/
     function RecMypwd($log,$secret){
        
        $ar=array();
        $rs=connection::Select("select pwd from encadrants where log='".$log."' and questionsecrete='".$secret."'");
        
        foreach($rs as $pass){
            $u=new encadrant();
            $u->pwd=$pass['pwd'];
            array_push($ar,$pass);
        }
        return $ar;

    }
    
    
    //function that archives internship when they expire
    
    function Archiver($idsujet,$auteur,$designation,$fin,$debut,$idstage){
        
         $sql="insert into Archive (idsujet,auteur,designation,fin,debut,idstage) values('".$idsujet."','".$auteur."','".$designation."','".$fin."','".$debut."','".$idstage."') ";
    $rs=connection::Maj($sql); 
        
        
    }
    
}
?>