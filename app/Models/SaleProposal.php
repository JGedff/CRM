<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleProposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'state',
        'quantity_sold',
        'total_price'
    ];

    public function clients() {
        return $this->belongsTo(Client::class);
    }
    
    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
