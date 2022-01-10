<?php 
require_once __DIR__ . '/utente.php';

class NuovoUtente extends User {
    public $scontoNuovoUtente = 50;

    
    //construct 
    public function __construct($nomeAcquirente, $prodotto, $prezzo )
    {
        // chiamo il costruct padre
        parent::__construct($nomeAcquirente, $prodotto, $prezzo);

    }

     public function SetScontoNuovoUtente() {
         return $this->prezzo - (($this->prezzo * $this->scontoNuovoUtente) / 100);
     }

     public function getScontoNuovoUtente() {
         return $this->SetScontoNuovoUtente();
     }
}