<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{

  protected $table = 'invoice_details';
  public $timestamps = true;

  public function invoice()
  {
    return $this->belongsTo('Invoice', 'invoice_id');
  }

  public function serviceDetail()
  {
    return $this->belongsTo('ServiceDetail', 'service_detail_id');
  }
}
