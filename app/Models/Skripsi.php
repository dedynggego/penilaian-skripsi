<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Skripsi extends Model
{
    use HasFactory;
    protected $table = 'skripsis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'nama_mahasiswa',
        'npm',
        'total_nilai',
        'status',
        'tanggal',
        'jam',
        // 'pembimbing1',
        // 'pembimbing2',
        // 'penguji1',
        // 'penguji2',
        // 'penguji3',
    ];

    public function users(){
        return $this->belongsToMany(User::class)->withPivot(['nilai']);
    }
    // public function users(){
    //     return $this->hasMany(User::class, 
        
    //     ['id,id'],
    //      ['pembimbing1',
    //     'pembimbing2',]);
    // }
}
