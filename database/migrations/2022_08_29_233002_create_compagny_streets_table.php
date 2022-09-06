<?php

use App\Models\Street;
use App\Models\Compagny;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compagny_streets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Compagny::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Street::class)->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('compagny_streets');
    }
};
