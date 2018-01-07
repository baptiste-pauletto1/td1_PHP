<?php
class Book
{
    private $title;
    private $author;
    private $editor;
    private $pageNb;

    public function __construct($title,$author,$editor,$pageNb)
    {
        $this->title = $title;
        $this->author = $author;
        $this->editor = $editor;
        $this->pageNb = $pageNb;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function getAuthor()
    {
        return $this->author;
    }


    public function setAuthor($author)
    {
        $this->author = $author;
    }


    public function getEditor()
    {
        return $this->editor;
    }

    public function setEditor($editor)
    {
        $this->editor = $editor;
    }


    public function getPageNb()
    {
        return $this->pageNb;
    }

    public function setPageNb($pageNb)
    {
        $this->pageNb = $pageNb;
    }

    public function afficherLivre()
    {
        echo 'Le livre : ' . $this->title . ' a été écrit par ' . $this->author . ' est édité par : ' . $this->editor . ' et compte ' . $this->pageNb . ' pages.' . PHP_EOL;
    }

    public function __toString()
    {
        return $this->title . $this->author . $this->editor . $this->pageNb;
    }


}//Book()

class Library{
    const MAX_BOOKS = 50000;
    private $name;
    private $address;
    private $max;
    private $books;

    public function __construct($name,$address,$max)
    {
        $this->name = $name;
        $this->address = $address;
        if ($max>self::MAX_BOOKS)
            $this->max=self::MAX_BOOKS;
        else
            $this->max = $max;
        $this->books = array();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getMax()
    {
        return $this->max;
    }

    public function setMax($max)
    {
        $this->max = $max;
    }


    public function getBooks()
    {
        return $this->books;
    }

    public function afficherLivres(){
        foreach ($this->books as $key => &$val)
        {
            echo  '</br>' . $val->afficherLivre() ;
        }
    }

    public function ajouterLivre($book){
        $this->books[] = $book;
    }

    public function enleverLivre($book){
        unset($this->books[$book]);
    }

    public function supprimerDoublons(){
        $this->books = array_unique($this->books);
    }

    public function lireDeuxBibliotheques($library){
        foreach ($this->books as $key => &$val)
        {
            echo $val->afficherLivre();
        }
        foreach ($library->books as $key => &$val)
        {
            echo $val->afficherLivre();
        }
    }

    public function triParAuteur(){
        asort($this->books);
    }

}
?>