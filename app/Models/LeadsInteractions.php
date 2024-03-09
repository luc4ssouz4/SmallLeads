<?php

namespace App\Models;

use App\Models\Leads;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LeadsInteractions extends Model
{
    use HasFactory;
    protected $table = "leads_interactions";

    protected $fillable = [
        'lead_id',
        'interacao',
        'nota'
    ];
    

    public function leads(): HasOne
    {
        return $this->hasOne(Leads::class, 'id', 'lead_id');
    }
}
