<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'status',
        'input_aspirasi_id',
        'feedback',
    
    ];
    public function inputaspirasi(){
        return $this->belongsTo(InputAspirasi::class);
    }
}
