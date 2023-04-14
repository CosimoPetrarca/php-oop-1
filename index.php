<?php

// definizione della classe 'Movie'
class Movie {
    // variabili d'istanza
    public $titolo;
    public $anno;
    public $regista;
    

    // definisco un costruttore
    public function __construct($titolo, $anno, $regista) {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->regista = $regista;
        
    }

    // definisco un metodo
    public function informazioni() {
        return "Sotto la regia di {$this->regista} nel {$this->anno} esce il capolavoro '{$this->titolo}'.";
    }
}

?>