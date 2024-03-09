<?php

namespace App\Models;

use App\Models\LeadsInteractions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Leads extends Model
{
    use HasFactory;
    protected $table = "leads";

    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'telefone',
        'empresa',
        'tags',
        'convertido'
    ];

    public function interact(): HasMany
    {
        return $this->hasMany(LeadsInteractions::class, 'lead_id');
    }
}
