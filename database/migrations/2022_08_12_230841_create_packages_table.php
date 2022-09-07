<?php

use App\Models\User;
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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('identifier');
            $table->string('lastname_expeditor');
            $table->string('firstname_expeditor');
            $table->string('fullname_expeditor')->virtualAs('CONCAT(lastname_expeditor, " ",firstname_expeditor )');
            $table->string('phone_expeditor');
            $table->string('lastname_recipient');
            $table->string('firstname_recipient');
            $table->string('fullname_recipient')->virtualAs('CONCAT(lastname_recipient, " ",firstname_recipient )');
            $table->string('phone_recipient');
            $table->string('package_status');
            $table->string('description_package');
            $table->string('price_package');
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('packages');
    }
};