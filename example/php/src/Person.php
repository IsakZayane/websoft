<?php
/**
 * Showing of a class in PHP
 */
class Person {
    private $name = null;
    private $occupation = null;

    public function __construct()
    {
        // Nothing to do here for this class
    }

    public function setName(string $name = null) : void
    {
        $this->name = $name;
    }

    public function setOccupation(string $occupation = null) : void
    {
        $this->occupation = $occupation;
    }

    public function getDetails() : string
    {
        return "Person: {$this->name} works as {$this->occupation}.";
    }
}
