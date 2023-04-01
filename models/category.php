<?php 

class Category {

    protected string $type;
    protected string $img;

    function __construct () {}

    // type getter and setters
    public function getType()
    {
        return $this->type;
    }


    public function setType($type_string)
    {
        $type = strtolower($type_string);

        if ($type == 'cane' || $type == 'gatto' ) {

            $this->type = $type;
            return $this;
        } else {
            var_dump("errore: type deve essere uguale a 'gatto' o uguale a 'cane'.");
            return; 
        }
    }

    // img getter and setters
    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
        return $this;
    }
}

?>