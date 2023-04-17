<?php

    require_once __DIR__ . '/Product.php';
    class Category extends Product{
        private string $type;

        public function __construct($_type)
        {
            $this->type = $_type;
        }
    }
?>