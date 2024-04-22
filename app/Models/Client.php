<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'adress',
        'type'
    ];

    /**
     * Obtains the SALE PROPOSALS related to the client
     */
    public function saleProposals()
    {
        return $this->hasMany(SaleProposal::class);
    }
}
