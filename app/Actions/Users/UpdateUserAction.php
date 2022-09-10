<?php

namespace App\Actions\Users;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UpdateUserAction
{
  public function update(User $user, array $data): User
  {
    DB::beginTransaction();

    $user->update([
      "firstname" => $data["firstname"],
      "lastname" => $data["lastname"],
      'phone_number' => $data['phone_number'],
      "email" => $data["email"],
      "role_id" => $data["role_id"],
      "profil" => $data["profil"],
    ]);

    DB::commit();

    return $user;
  }
}
