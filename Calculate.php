<?php

abstract class Pizza
{
    protected $price;

    protected $pizza;

    protected $cream;

    protected function getPizza()
    {
        return $this->pizza;
    }

    protected function getCream()
    {
        return $this->cream;
    }

    protected function getPrice()
    {
        return $this->price;
    }

    public function setPrice($size)
    {
        switch ($size) {
            case 21:
                $this->price = 150;
                break;
            case 26:
                $this->price = 250;
                break;
            case 31:
                $this->price = 350;
                break;
            case 45:
                $this->price = 450;
                break;
        }
    }

    public function setPizza($pizzaId)
    {
        switch ($pizzaId) {
            case 'gai':
                $this->pizza = 'Гавайская';
                break;
            case 'pep':
                $this->pizza = 'Пепперони';
                break;
            case 'der':
                $this->pizza = 'Деревенская';
                break;
            case 'mas':
                $this->pizza = 'Грибная';
                break;
        }
    }

    public function setCream($cream)
    {
        switch ($cream) {
            case 'chease':
                $this->cream = 'сырный';
                break;
            case 'sweet':
                $this->cream = 'кисло-сладкий';
                break;
            case 'garlic':
                $this->cream = 'чесночный';
                break;
            case 'barbecue':
                $this->cream = 'барбекю';
                break;
        }
    }
}

class Calculate extends Pizza
{

    public function __construct($size,$pizzaId,$cream)
    {
        parent::setPrice($size);
        parent::setPizza($pizzaId);
        parent::setCream($cream);
    }

    public function calculatePrice()
    {
        return $this->getPrice();
    }

    public function getCream()
    {
        return parent::getCream();
    }

    public function getPizza()
    {
        return parent::getPizza();
    }
}

