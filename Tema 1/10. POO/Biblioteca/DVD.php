<?php
class DVD extends Document
{
    protected static string $documentFormat = "DVD";
    public function __construct(protected int $publicationYear, protected string $documentName, protected int $unitCount)
    {
        parent::__construct($publicationYear, $documentName);
    }
    public function __toString(): string
    {
        return '<p>Nombre: '.$this->documentName.'</p><br>
            <p>Año de publicación: '.$this->publicationYear.'</p><br>
            <p>ID: '.$this->id.'</p><br>
            <p>Unidades incluidas: '.$this->unitCount.'</p><br>';
    }
}