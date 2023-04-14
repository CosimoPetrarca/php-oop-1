<?php

// definizione della classe 'Movie'
class Movie {
    // variabili d'istanza
    public $titolo;
    public $anno;
    public $regista;
    public $genere;
    

    // definisco un costruttore
    public function __construct($titolo, $anno, $regista, $genere) {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->regista = $regista;
        $this->genere = $genere;
        
    }

    // definisco un metodo
    public function informazioni() {
        return "Sotto la regia di {$this->regista} nel {$this->anno} esce il capolavoro '{$this->titolo}' che fa parte del genere {$this->genere}.";
    }
}

?>