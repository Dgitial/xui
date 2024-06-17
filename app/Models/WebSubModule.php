<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSubModule extends Model
{
    use HasFactory;

    public function webController()
    {
        return $this->belongsTo(WebController::class);
    }

    public function webModule()
    {
        return $this->belongsTo(WebModule::class);
    }
}
