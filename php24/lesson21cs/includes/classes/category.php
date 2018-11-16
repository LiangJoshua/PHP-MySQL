<?php

class Category
{

    protected $cat_id;

    protected $cat_name;

    protected $cat_description;

    protected $cat_image;

    public function __construct($input = false)
    {
        if (is_array($input)) {
            foreach ($input as $key => $val) {
                $this->$key = $val;
            }
        }
    }

    public function getCat_id()
    {
        return $this->cat_id;
    }

    public function getCat_name()
    {
        return $this->cat_name;
    }

    public function getCat_description()
    {
        return $this->cat_description;
    }

    public function getCat_image()
    {
        return $this->cat_image;
    }
}
?>