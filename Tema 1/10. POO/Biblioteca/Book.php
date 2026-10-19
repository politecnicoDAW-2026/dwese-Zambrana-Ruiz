<?php
class Book extends Document
{
    protected static string $documentFormat = "Book";
    public function __construct(int $publicationYear, string $documentName, protected string $authorName, protected int $pagesCount)
    {
        parent::__construct($publicationYear, $documentName);
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