<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{

  protected $table = 'invoice_details';
  public $timestamps = true;

  public function invoice()
  {
    return $this->belongsTo(Invoice::class, 'invoice_id');
  }

  public function invoiceDetailFiles()
  {
    return $this->hasMany(InvoiceDetailFile::class);
  }

  public function serviceDetail()
  {
    return $this->belongsTo(ServiceDetail::class, 'service_detail_id');
  }
}
