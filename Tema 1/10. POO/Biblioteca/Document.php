<?php
abstract class Document
{
    protected string $id;
    protected static string $documentFormat;
    protected int $publicationYear;
    protected string $documentName;
    public function __construct(int $publicationYear, string $documentName)
    {
        $this->id = uniqid(self::$documentFormat);
        $this->publicationYear = $publicationYear;
        $this->documentName = $documentName;
    }
    public function modifyPublicationYear(int $publicationYear)
    {
        $this->publicationYear = $publicationYear;
    }
    public function __toString(): string
    {
        return '<p>Nombre: '.$this->documentName.'</p><br>
            <p>Año de publicación: '.$this->publicationYear.'</p><br>
            <p>ID: '.$this->id.'</p><br>';
    }
}