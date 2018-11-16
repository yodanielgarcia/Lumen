<?php

namespace App\Models\traductions;

use Illuminate\Database\Eloquent\Model;

class vistaTraducciones extends Model
{
    protected $table = "dblink.vis_lang_object";
	protected $fillable  = [
        'object_name','translation'
    ];
}
