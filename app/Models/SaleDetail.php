<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'proposal_id',
        'product_id',
        'quantity_sold',
        'total_price'
    ];

    public function saleProposals() {
        return $this->belongsTo(SaleProposal::class);
    }
}
