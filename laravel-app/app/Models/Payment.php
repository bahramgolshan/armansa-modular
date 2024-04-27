<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{

  protected $table = 'payments';
  public $timestamps = true;

  use SoftDeletes;


  public static $status = ['success', 'error', 'cancel'];

  public function invoice()
  {
    return $this->belongsTo(Invoice::class, 'invoice_id');
  }

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
