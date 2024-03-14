<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{

  protected $table = 'payments';
  public $timestamps = true;

  use SoftDeletes;



  public function invoice()
  {
    return $this->belongsTo('Invoice', 'invoice_id');
  }
}
