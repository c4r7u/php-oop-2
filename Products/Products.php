<?php 
    class Products{
        public $nameProduct;
        public $size;
        protected $price = 25;

        public function __construct ($nameProduct, $size, $price) {
            $this->nameProduct = $nameProduct;
            $this->size = $size;
        }
    }

?>