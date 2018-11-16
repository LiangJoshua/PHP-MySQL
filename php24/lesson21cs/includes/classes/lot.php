<?php

class lot
{

    protected $lot_id;

    protected $lot_name;

    protected $lot_description;

    protected $lot_image;

    protected $lot_number;

    protected $lot_price;

    protected $cat_id;

    public function __construct($input = false)
    {
        if (is_array($input)) {
            foreach ($input as $key => $val) {
                $this->$key = $val;
            }
        }
    }

    public function getLot_id()
    {
        return $this->lot_id;
    }

    public function getLot_name()
    {
        return $this->lot_name;
    }

    public function getLot_description()
    {
        return $this->lot_description;
    }

    public function getLot_image()
    {
        return $this->lot_image;
    }

    public function getLot_number()
    {
        return $this->lot_number;
    }

    public function getLot_price()
    {
        return $this->lot_price;
    }

    public function getCat_id()
    {
        return $this->lot_id;
    }
}
?>