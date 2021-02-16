<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing Coffee');
    }
}

class SpecialityCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing Latte');
    }
}


class Collection
{

    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_column($this->items, $key));

    }

}

class VideosCollection extends Collection
{
    public function Length()
    {
        return $this->sum('length');
    }
}

class Video

{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video('Great Shark', 100),
    new Video('Great Shark2', 100),
    new Video('Great Shark3', 200),
]);

echo $videos->sum('length');

class Post extends Model
{

}