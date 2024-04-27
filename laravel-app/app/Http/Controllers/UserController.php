<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Invoice;
use App\Models\Payment;

class UserController extends Controller
{
  public function index()
  {
    $users = User::orderby('id', 'DESC')->paginate(15);

    return view('content.apps.app-user-list', [
      'users' => $users,
    ]);
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function show(Request $request)
  {
    $id = Route::current()->parameter('id');

    $user = User::findOrfail($id);
    $invoices = Invoice::where('user_id', $id)->orderBy('id', 'DESC')->get();
    $invoicesStatusColors = [
      'awaiting_payment' => 'warning',
      'awaiting_approval' => 'primary',
      'processing' => 'info',
      'delivered' => 'success',
      'rejected' => 'danger',
    ];

    return view('content.apps.app-user-preview', [
      'user' => $user,
      'invoices' => $invoices,
      'invoicesStatusColors' => $invoicesStatusColors,
    ]);
  }

  public function edit(string $id)
  {
    //
  }

  public function update(Request $request, string $id)
  {
    //
  }

  public function destroy(string $id)
  {
    //
  }
}
