<?php

trait Title
{
    
    private $title;
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
}

class Book
{
    use Title;
}

$hobbit = new Book();
$hobbit->setTitle('Hobbit an unexpected journey');
print $hobbit->getTitle();

class Dvd
{
    use Title;
}

class TraitHandler
{
    use Title 
    {
        getTitle as private;
    }
    
    public function getTitle()
    {
        return 'Trait Handler';
    }
}

$trait = new TraitHandler();
print $trait->getTitle(); //Trait Handler