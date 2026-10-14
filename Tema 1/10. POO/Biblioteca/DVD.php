<?php
class DVD extends Document
{
    protected static string $documentFormat = "DVD";
    protected int $unitCount;
    public function __construct(int $publicationYear, string $documentName, string $unitCount)
    {
        parent::__construct($publicationYear, $documentName);
        $this->unitCount = $unitCount;
    }
    public function __toString(): string
    {
        return '<p>Nombre: '.$this->documentName.'</p><br>
            <p>Año de publicación: '.$this->publicationYear.'</p><br>
            <p>ID: '.$this->id.'</p><br>
            <p>Unidades incluidas: '.$this->unitCount.'</p><br>';
    }
}