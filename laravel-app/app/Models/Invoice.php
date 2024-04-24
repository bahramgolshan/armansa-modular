<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{

  protected $table = 'invoices';
  public $timestamps = true;

  use SoftDeletes;

  public static $status = [
    'awaiting_payment', //در انتظار پرداخت
    'awaiting_approval', //در انتظار تایید سفارش
    'processing', //در حال انجام
    'delivered', //تحویل داده شد
    'rejected' //سفارش رد شد
  ];


  public function payments()
  {
    return $this->hasMany(Payment::class);
  }

  public function invoiceDetails()
  {
    return $this->hasMany(InvoiceDetail::class);
  }

  public function customer()
  {
    return $this->belongsTo(Customer::class, 'customer_id');
  }
}
