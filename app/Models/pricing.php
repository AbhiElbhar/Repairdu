<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pricing extends Model
{
    use HasFactory;
    
    protected $table = 'pricings';

    protected $primarykey = 'id';

    protected $fillable = ['package',
    'price',
    'staff_accounts',
    'contacts_limit',
    'invoice_limit',
    'quotation_limit',
    'project_management',
    'recurring_transaction',
    'inventory_module',
    'live_chat',
    'file_manager',
    'online_payment',
    'time_id',];
}
