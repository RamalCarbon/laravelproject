<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invoice extends Controller
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
