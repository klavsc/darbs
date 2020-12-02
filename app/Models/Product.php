<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'size', 'price'
    ];
    public function getPrice()
    {
        return $this->price;
    }

    public function deliveries()
    {
        return $this->hasMany(Delivery::class, 'size', 'size');
    }

    public function getDescription():string
    {
        return $this->description;
    }

    public function getSize():string
    {
        return $this->size;
    }

}
