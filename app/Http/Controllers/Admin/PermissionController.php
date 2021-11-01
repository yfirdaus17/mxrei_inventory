<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
  public function index() {
    $permissions = Permission::all();
    return view('admin.permissions.index', compact('permissions'));
  }
}
