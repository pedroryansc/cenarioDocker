<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Email extends Model
{
    protected $connection = "mongodb";

    protected $collection = "emails";

    protected $fillable = ["remetente_id", "destinatario_id", "assunto", "mensagem"];
}
