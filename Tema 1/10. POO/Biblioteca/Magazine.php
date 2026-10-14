<?php
class Magazine extends Document
{
    protected static string $documentFormat = "Magazine";
    protected int $pagesCount;
    public function __construct(int $publicationYear, string $documentName, int $pagesCount)
    {
        parent::__construct($publicationYear, $documentName);
        $this->pagesCount = $pagesCount;
    }
    public function __toString(): string
    {
        return '<p>Nombre: '.$this->documentName.'</p><br>
            <p>Año de publicación: '.$this->publicationYear.'</p><br>
            <p>ID: '.$this->id.'</p><br>
            <p>'.$this->pagesCount.'</p><br>';
    }
}