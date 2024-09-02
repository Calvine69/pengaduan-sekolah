<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $primaryKey= 'nisn';

    protected $fillable = [
        'nisn',
        'kelas',
    ];
    
    public function inputaspirasi(){
        return $this->hasMany(InputAspirasi::class);
    }
}
