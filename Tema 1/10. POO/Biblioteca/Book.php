<?php
class Book extends Document
{
    protected static string $documentFormat = "Book";
    protected string $authorName;
    protected int $pagesCount;
    public function __construct(int $publicationYear, string $documentName, string $authorName, int $pagesCount)
    {
        parent::__construct($publicationYear, $documentName);
        $this->authorName = $authorName;
        $this->pagesCount = $pagesCount;
    }
    public function __toString(): string
    {
        return '<p>Nombre: '.$this->documentName.'</p><br>
            <p>Autor: '.$this->authorName.'</p><br>
            <p>Año de publicación: '.$this->publicationYear.'</p><br>
            <p>ID: '.$this->id.'</p><br>
            <p>'.$this->pagesCount.'</p><br>';
    }
}