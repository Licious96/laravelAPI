<?php
namespace App\Models;
use App\Models\Aquarium;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;
    public function aquarium(){
        return $this->belongsTo(Aquarium::class);
    }
}
