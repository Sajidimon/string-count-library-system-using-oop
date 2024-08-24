<?php


class Book
{

    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies)
    {

        $this->title = $title;

        $this->availableCopies = $availableCopies;

    }

    function getTitle()
    {

        return $this->title;
    }

    function getAvailableCopies()
    {
        return $this->availableCopies;
    }

    function borrowBook()
    {

        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies available for '{$this->title}' to borrow.\n";
        }

    }

    function returnBook()
    {

        $this->availableCopies++;
    }

}


class Member
{

    private $name;


    public function __construct($name)
    {

        $this->name = $name;

    }

    function getName()
    {
        $this->name;
    }

    function borrowBook($book)
    {
        $book->borrowBook();
        echo "{$this->name} borrowed '{$book->getTitle()}'.\n";
    }

    function returnBook($book)
    {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'.\n";
    }


}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

$member1->borrowBook($book1);
$member2->borrowBook($book2);

echo "Available Copies of '{$book1->getTitle()}': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '{$book2->getTitle()}': " . $book2->getAvailableCopies() . "\n";