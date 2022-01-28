<?php
require_once __DIR__ . '/Products.php';

class Sweatshirt extends Products {
    //override
    public $price = 25;

    public function __construct($_nameProduct, $_size, $price) {
        parent::__construct($_nameProduct, $_size);
        $this->$price = $_price;
    }
}
?>