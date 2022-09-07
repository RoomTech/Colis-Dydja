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
        Schema::create('compagny_streets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Compagny::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Street::class)->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('compagny_streets');
    }
};