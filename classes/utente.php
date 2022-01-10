<?php 
// PARENT CLASS

class User {
    // Propietà
    protected $nomeAcquirente;
    protected $prodotto;
    protected $prezzo;
    private $livelloCarta;
   

    // COSTRUTTORE 
    public function __construct($nomeAcquirente, $prodotto, $prezzo, $livelloCarta = 3)
    {
        $this->nomeAcquirente = $nomeAcquirente;
        $this->prodotto = $prodotto;
        $this->prezzo = $prezzo;
        $this->livelloCarta = $livelloCarta;
    }

    public function getNome() {
        return $this->nomeAcquirente;
    }
    public function getProdotto() {
        return $this->prodotto;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }


     protected function SetLivelloCarta() {
    $this->prezzo = $this->livelloCarta = 3 ? 250 : 0;
    }

    public function GetLivelloCarta() {

        // Livello per ricervere lo sconto
        $this->SetLivelloCarta();

        // ritorno valore
         return $this->livelloCarta;

    } 


    
}