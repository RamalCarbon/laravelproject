<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class line_item extends Controller
{
    public $primaryKey='item_no';
    protected $table= 'line_item';
    public $fillable = [
        'scope',
        'fee'
    ];
    public function line_items(){
        return $this->belongsTo(invoices::class);
    }
}
