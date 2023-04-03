<?php 

require_once __DIR__."/./product.php";

class Game extends Product {
    protected string $color;
    protected $materials = [];

    function __construct($_category, $_name, $_price, $_stock, $_code, $_color, array $_materials) {
        parent::__construct($_category, $_name, $_price, $_stock, $_code);

        $this->setColor($_color);
        $this->setMaterials($_materials);
    }

    // color getter and setter
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color_value)
    {
        // verifico che color abbia uno specifico formato
        $color = strtoupper($color_value);

        if ($color == 'RO' || 
            $color == 'AR' || 
            $color == 'GI' || 
            $color == 'VE' ||
            $color == 'AZ' ||
            $color == 'BL' ||
            $color == 'VI' ||
            $color == 'NE' ||
            $color == 'BI') {

            $this->color = $color;
            return $this;
        } else {
            var_dump("Err: color può essere solo un valore tra i seguenti: 'RO','AR','GI','VE','AZ','BL','VI','NE',BI'");
            return;
        }
    }

    // materials getter and setter
    public function getMaterials()
    {
        $materials_string = implode(', ', $this->materials);
        return $materials_string;
    }

    public function setMaterials($materials)
    {
        // verifico che l'array contenga almeno un oggetto
        if(count($materials) > 0) {
            $this->materials = $materials;
            return $this;
        } else {
            var_dump("Err: materials deve contenere almeno un elemento");
            return;
        }
    }

    // print game card html 
    public function printGameCardHTML() {

        echo "<div class=\"col\" style='flex-basis: calc(100%/3 - 30px*2/3)'>
        <div class=\"card\" style='height: 100%;'>
            <div class=\"card-body\">
            <h5 class=\"card-title\" style='text-align: center;'>{$this->getName()}</h5>
            <span class='card-img-top mb-4' style='font-size: 50px; display: block; text-align: center;'>{$this->category->getImg()}</span>
            <ul>
                <li><strong>Prezzo:</strong> {$this->getPrice()}</li>
                <li><strong>Cuantità:</strong> {$this->getStock()}</li>
                <li><strong>Codice:</strong> {$this->getCode()}</li>
                <li><strong>Colore:</strong> {$this->getColor()}</li>
                <li><strong>Materiali:</strong> {$this->getMaterials()}</li>
            </ul>
            </div>
        </div>
        </div>";
    }


}

?>