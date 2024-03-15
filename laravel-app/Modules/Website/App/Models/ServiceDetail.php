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
  public static $bindingDirection = ['fa_v', 'fa_h', 'en_v', 'en_h'];

  public function service()
  {
    return $this->belongsTo(Service::class, 'service_id');
  }

  public function color()
  {
    return $this->belongsTo(Color::class, 'color_id');
  }

  public function size()
  {
    return $this->belongsTo(Size::class, 'size_id');
  }

  public function paper()
  {
    return $this->belongsTo(Paper::class, 'paper_id');
  }

  public function binding()
  {
    return $this->belongsTo(Binding::class, 'binding_id');
  }

  public function cellophane()
  {
    return $this->belongsTo(Cellophane::class, 'cellophane_id');
  }

  public function invoiceDetails()
  {
    return $this->hasMany(InvoiceDetail::class);
  }

  public function cover()
  {
    return $this->belongsTo(Cover::class, 'cover_id');
  }
}
