<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Email extends Model
{
    protected $connection = "mongodb";

    protected $collection = "emails";

    protected $fillable = ["rementente_id", "destinatario_id", "assunto", "mensagem", "anexos"];

    protected $casts = ["anexos" => "array"];
}
