<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{

    protected $table = "product";
    protected $primarykey="id";
    protected $fillable=[
        "type_product",
        "weight",
        "departure_address",
        "destination_address",
        "status",
        "description",
        "client_id",
        "deliveryman_id"
    ];
    use HasFactory;

    public function client():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
