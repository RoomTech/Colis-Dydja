<?php

namespace App\Actions\Roles;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class CreateRoleAction
{
  public function handle(array $data): Role
  {
    DB::beginTransaction();
    
    $role = Role::create([
      'name' => $data['name'],
    ]);

    DB::commit();
    return $role;
  }
}
