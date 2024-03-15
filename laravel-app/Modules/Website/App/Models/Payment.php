<?php

namespace Modules\Website\App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{

  protected $table = 'payments';
  public $timestamps = true;

  use SoftDeletes;


  public function invoice()
  {
    return $this->belongsTo(Invoice::class, 'invoice_id');
  }

  public function customer()
  {
    return $this->belongsTo(Customer::class, 'customer_id');
  }
}
