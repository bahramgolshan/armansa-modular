<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetailFile extends Model
{
  use HasFactory;

  protected $table = 'invoice_detail_files';

  public static $types = ['file_content', 'file_cover'];

  public function invoiceDetail()
  {
    return $this->belongsTo(InvoiceDetail::class, 'invoice_detail_id');
  }
}
