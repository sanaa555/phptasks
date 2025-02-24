<?php
class Author
{
    private $name;
    private $email;
    private $gender;

    function __construct($name = "authorName", $email = "sanaa@gmail.com", $gender = "gender")
    {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getEmail(): string
    {
        return $this->email;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getGender()
    {
        return $this->gender;
    }

    function __toString()
    {
        return "Author[name={$this->name}, email={$this->email}, gender={$this->gender}]";
    }
}

$author1 = new Author("sanaa", "sanaa@gmail.com", "f");

class Book
{
    private $name;
    private $author;
    private $price;
    private $qty;

    function __construct($name, Author $author, $price, $qty = 0)
    {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }

    function __toString()
    {
        return "Book[name=$this->name, author=$this->author, price=$this->price, quantity=$this->qty]";
    }
}

$b = new Book("en", $author1, 333, 8);
echo $b;
