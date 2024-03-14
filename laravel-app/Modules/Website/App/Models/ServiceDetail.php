<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceDetail extends Model
{

  protected $table = 'service_details';
  public $timestamps = true;

  use SoftDeletes;

  public static $status = ['draft', 'publish'];
  public static $discountTypes = ['fix', 'percent'];

  public function service()
  {
    return $this->belongsTo('Service', 'service_id');
  }

  public function color()
  {
    return $this->belongsTo('Color', 'color');
  }

  public function size()
  {
    return $this->belongsTo('Size', 'size_id');
  }

  public function paper()
  {
    return $this->belongsTo('Paper', 'paper_id');
  }

  public function binding()
  {
    return $this->belongsTo('Binding', 'binding_id');
  }

  public function cellophane()
  {
    return $this->belongsTo('Cellophane', 'cellophane_id');
  }

  public function invoiceDetails()
  {
    return $this->hasMany('InvoiceDetail');
  }

  public function cover()
  {
    return $this->belongsTo('Cover', 'cover_id');
  }
}
