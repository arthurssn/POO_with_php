<?php

namespace Bank\Model;
/**
 * @property-read string $neighborhood
 * @property-read string $street
 * @property-read string $number
 * @property-write  string $city
 */
final class Address
{
    private string $city;
    private string $neighborhood;
    private string $street;
    private string $number;

    public function __construct(string $city, string $neighborhood, string $street, string $number)
    {
        $this->city = $city;
        $this->neighborhood = $neighborhood;
        $this->street = $street;
        $this->number = $number;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity($newName): string
    {
        return $this->city = $newName;
    }

    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function __toString(): string
    {
        return "{$this->street}, {$this->number}, {$this->neighborhood}, {$this->city}";
    }

    public function __call($name, $arguments)
    {
        echo "\n\nO método {$name}({$arguments}) não existe.\n\n";
    }

    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        return $this->$method();
    }

    public function __set($name, $value)
    {
        $name = ucfirst($name);
        $method = "set{$name}";
        return $this->$method($value);
    }
}