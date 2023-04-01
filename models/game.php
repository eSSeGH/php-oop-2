<?php 

require_once __DIR__."/./product.php";

class Game extends Product {
    protected string $color;
    protected $materials = [];

    function __construct(Category $_category) {
        parent::__construct($_category);
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
        return $this->materials;
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


}

?>