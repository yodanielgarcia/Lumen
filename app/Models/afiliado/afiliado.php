<?php 

namespace App\Models\afiliado;

use Illuminate\Database\Eloquent\Model;

class afiliado extends Model {

    protected $table = "afiliado.afiliado";
	protected $fillable  = [
        'object_name','translation'
    ];

}
