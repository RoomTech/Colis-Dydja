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
            $table->string('lastNameExpeditor');
            $table->string('firstNameExpeditor');
            $table->string('fullNameExpeditor')->virtualAs('CONCAT(lastNameExpeditor, " ",firstNameExpeditor )');
            $table->string('phoneNumberExpeditor');
            $table->string('lastNameRecipient');
            $table->string('firstNameRecipient');
            $table->string('fullNameRecipient')->virtualAs('CONCAT(lastNameRecipient, " ",firstNameRecipient )');
            $table->string('phoneNumberRecipient');
            $table->string('packageStatus');
            $table->string('descriptionPackages');
            $table->string('pricesPackages');
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