<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebRoute extends Model
{
    use HasFactory;

    public function webSubModule()
    {
        return $this->belongsTo(WebSubModule::class, 'web_sub_module_id', 'id');
    }
}
