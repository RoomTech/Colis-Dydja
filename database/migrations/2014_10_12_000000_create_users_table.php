<?php

use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('identifier');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('fullname')->virtualAs('CONCAT(lastname, " ",firstname )');
            $table->string('email')->unique()->nullable();
            $table->string('phone_number')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profil');
            $table->foreignIdFor(Role::class)->constrained()->onDelete('cascade');
            $table->integer('company_id')->index()->nullable();
            $table->string('file')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};