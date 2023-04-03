<?php 

require_once __DIR__."/./product.php";

class Food extends Product {
    protected string $expiry_date;
    protected $ingredients = [];

    function __construct($_category, $_name, $_price, $_stock, $_code, $_expiry_date, array $_ingredients) {
        parent::__construct($_category, $_name, $_price, $_stock, $_code);

        $this->setExpiry_date($_expiry_date);
        $this->setIngredients($_ingredients);
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
        $ingredients_string = implode(', ', $this->ingredients);
        return $ingredients_string;
    }

    public function setIngredients(array $ingredients)
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

    // print food card html 
    public function printFoodCardHTML() {

        echo "<div class=\"col\" style='flex-basis: calc(100%/3 - 30px*2/3)'>
        <div class=\"card\" style='height: 100%;'>
          <div class=\"card-body\">
            <h5 class=\"card-title\" style='text-align: center;'>{$this->getName()}</h5>
            <span class='card-img-top mb-4' style='font-size: 50px; display: block; text-align: center;'>{$this->category->getImg()}</span>
            <ul style='list-style-type: none;'>
                <li><strong>Prezzo:</strong> {$this->getPrice()}</li>
                <li><strong>Cuantità:</strong> {$this->getStock()}</li>
                <li><strong>Codice:</strong> {$this->getCode()}</li>
                <li><strong>Data di scadenza:</strong> {$this->getExpiry_date()}</li>
                <li><strong>Ingredienti:</strong> {$this->getIngredients()}</li>
            </ul>
          </div>
        </div>
      </div>";
    }


}

?>