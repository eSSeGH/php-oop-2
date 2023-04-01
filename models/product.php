<?php 

require_once __DIR__."/./category.php";

class Product {
    protected string $name;
    protected float $price;
    protected int $stock;
    protected string $code;
    public Category $category;

    function __construct(Category $_category) {

        $this->category = $_category;
    }

    // verifica disponibilità
    public function isInStock() {

        if ($this->stock > 0) {
            return true;
        } else {
            return false;
        }
    }

    // GETTERS
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        $this->price .= "€";
        return $this->price;
    }
    public function getStock()
    {
        $this->stock .= "prodotti/o rimasti/o";
        return $this->stock;
    }
    public function getCode()
    {
        return $this->code;
    }

    // SETTERS

    // tutti i nomi dei prodotti devono essere maiuscoli, 2 > caratteri < 21
    public function setName($name_string)
    {
        if (strlen($name_string) < 3) {
            var_dump("err: Il nome deve avere più di 2 caratteri");
            return; 
        } else if (strlen($name_string) > 20) {
            var_dump("err: Il nome deve al massimo 20 caratteri");
            return; 
        }
        $name = strtoupper($name_string);
        $this->name = $name;
        return $this;
    }

    // tutti i prezzi devono avere € alla fine
    public function setPrice($price)
    {
        if ($price > 0) {
            $this->price = $price;
            return $this;
        }
    }
    public function setStock($stock)
    {
        if ($stock > 0) {
            $this->stock = $stock;
            return $this;
        }
    } 
    public function setCode($code)
    {
        if (strlen($code) == 15) {

            $code_array = str_split($code, 1);

            for ($i = 0; $i < 15; $i++) {
                
                if (!is_numeric($code_array[$i]) ) {
                    var_dump("err: code deve contenere solo valori numerici");
                    return;
                }
            }

            $this->code = $code;
            return $this;

        } else {
            var_dump("err: code deve avere esattamente 15 caratteri");
            return;
        }
    }
}

?>