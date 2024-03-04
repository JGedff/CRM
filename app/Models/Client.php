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
        'client_type_id'
    ];

    public function clientTypes() {
        return $this->belongsTo(ClientType::class);
    }

    public function saleProposals() {
        return $this->hasMany(SaleProposal::class);
    }
}
