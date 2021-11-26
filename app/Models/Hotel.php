<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'name',
        'ratings',
        'address',
        'supplier',
        'active'
    ];

    public function hotelReviews(){
        return $this->hasMany(HotelReview::class,'hotel_id');
    }    
}
