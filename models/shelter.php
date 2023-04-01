<?php 

require_once __DIR__."/./product.php";

class Shelter extends Product {
    protected string $color;
    protected float $height;
    protected float $width;
    protected float $depth;

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

    // height getter and setter
    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        // verifico che height sia maggiore di 0
        if($height > 0) {
            $this->height = $height;
            return $this;
        } else {
            var_dump("Err: height deve essere maggiore di 0");
            return;
        }
    }

    // width getter and setter
    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        // verifico che width sia maggiore di 0
        if($width > 0) {
            $this->width = $width;
            return $this;
        } else {
            var_dump("Err: width deve essere maggiore di 0");
            return;
        }
    }

    // depth getter and setter
    public function getDepth()
    {
        return $this->depth;
    }

    public function setDepth($depth)
    {
        // verifico che depth sia maggiore di 0
        if($depth > 0) {
            $this->depth = $depth;
            return $this;
        } else {
            var_dump("Err: depth deve essere maggiore di 0");
            return;
        }
    }
}

?>