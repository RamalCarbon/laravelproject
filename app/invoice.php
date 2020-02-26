<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    public $primaryKey='invoice_no';
    protected $table= 'invoices';
    public $timestamps= false;
    public $fillable = [
        'client_name',
        'client_address',
        'notes',
        'date_created',
        'access_code'
    ];
    public function line_items(){
        return $this->hasMany(line_items::class);
    }
}
