<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');             //-----DISPLAY ERRORS-----//
error_reporting(E_ALL);

class Team
{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)           # . . . -> ACCEPTS ANY NUMBER OF VARIABLES, accessible as an array
    {
        return new static(... $params);
    }

    public function name()
    {
        return $this->name;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {

    }

    public function members()
    {
        return $this->members;
    }

    public function manager()
    {

    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$acme = Team::start('acme', [
    new Member('jane doe'),
    new Member('john doe'),


]);

var_dump($acme->members());