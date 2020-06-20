<?php

class Movie
{
    private $id;
    private $title;
    private $image;
    private $price;

    function __construct($id, $title, $image, $price)
    {
        $this->id = $id;
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    function getImage() {
        return $this->image;
    }
    function getPrice() {
        return $this->price;
    }
}
