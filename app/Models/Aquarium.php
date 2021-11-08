<?php
namespace App\Models;
use App\Models\Fish;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aquarium extends Model
{
    use HasFactory;

    protected $fillable = [
        'glass_type',
        'size',
        'shape'
    ];

    public function fishes(){
        return $this->hasMany(Fish::class);
    }
}
