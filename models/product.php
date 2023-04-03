<?php 

require_once __DIR__."/./category.php";
require_once __DIR__."/../traits/validator.php";

class Product {
    use Validator;

    protected string $name;
    protected float $price;
    protected int $stock;
    protected string $code;
    public Category $category;

    function __construct(Category $_category, $_name, $_price, $_stock, $_code) {

        $this->category = $_category;
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setStock($_stock);
        $this->setCode($_code);
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
        $price_string = $this->price ."€";
        return $price_string;
    }
    public function getStock()
    {
        $stock_string = $this->stock . " prodotti rimasti";
        return $stock_string;
    }
    public function getCode()
    {
        return $this->code;
    }

    // SETTERS

    public function setName($name_string)
    {
        $this->testString($name_string, 3, 30);


        $this->name = strtoupper($name_string);
        return $this;
    } 
    public function setPrice($new_price)
    {
        $this->testNum($new_price);
        $this->price = $new_price;
        return $this;
        
    }
    public function setStock($new_stock)
    {
        $this->testNum($new_stock);
        $this->stock = $new_stock;
        return $this;
    } 
    public function setCode($code)
    {
        if (strlen($code) == 15) {

            $code_array = str_split($code, 1);

            for ($i = 0; $i < 15; $i++) {
                
                if (!is_numeric($code_array[$i]) ) {
                    throw new Exception("$code non è valido. Il codice inserito deve contenere solo numeri");
                }
            }

            $this->code = $code;
            return $this;

        } else {
            throw new Exception("$code non è valido. Il codice inserito deve contenere esattamente 15 cifre");
        }
    }
}

?>