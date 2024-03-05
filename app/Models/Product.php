<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'monthly_quota',
        'duration'
    ];

    public function saleProposals() {
        return $this->belongsToMany(SaleProposal::class);
    }
}
