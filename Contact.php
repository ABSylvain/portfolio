<?php 

class Contact {
    private $expediteur;
    private $joindre;
    private $message;

    function GetExpediteur (){
        return $this->expediteur;
    }
    function __construct($expediteur, $joindre, $message) {
        $this->expediteur = $expediteur;
        $this->joindre = $joindre;
        $this->message = $message;
    }
    function save() {
        if (!is_dir('./contact')) {
            mkdir('./contact');
        }
        $fichier = fopen('./contact/'.$this->GetExpediteur().'.txt', 'w');
        fwrite($fichier, serialize($this));
        fclose($fichier);
    }
}
?>