<?php 

require_once __DIR__."/./product.php";

class Food extends Product {
    protected string $expiry_date;
    protected $ingredients = [];

    function __construct(Category $_category) {
        parent::__construct($_category);
    }

    // expiry_date getter and setter
    public function getExpiry_date()
    {
        return $this->expiry_date;
    }

    public function setExpiry_date($expiry_date)
    {
        // verifico che la data non sia nel passato
        $now = date("Y m d");

        if ($expiry_date > $now) {
            $this->expiry_date = $expiry_date;
            return $now;
        } else {
            var_dump("Err: expiry_date non può essere una data del passato");
            return;
        }
    }

    // ingredients getter and setter
    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        // verifico che l'array contenga almeno un oggetto
        if(count($ingredients) > 0) {
            $this->ingredients = $ingredients;
            return $this;
        } else {
            var_dump("Err: ingredients deve contenere almeno un elemento");
            return;
        }
    }


}

?>