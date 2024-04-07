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

    /**
     * Obtains the CLIENT related to the sale proposal
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Obtains the PRODUCTS related to the sale proposal
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
