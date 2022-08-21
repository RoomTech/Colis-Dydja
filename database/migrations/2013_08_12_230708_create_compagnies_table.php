<?php

use App\Models\Compagny;
use App\Models\Street;
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
        Schema::create('compagnies', function (Blueprint $table) {
            $table->id();
            $table->string('identifier');
            $table->string('nameOfCompagny');
            $table->string('nameOwner');
            $table->foreignIdFor(Street::class)->constrained()->onDelete('cascade');
            $table->string('openingHours');
            $table->string('closingTime');
            $table->string('numberEmployment');
            $table->string('phoneNumber')->unique();
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
        Schema::dropIfExists('compagnies');
    }
};