<?php

use App\Models\Bahan;
use App\Models\Resep;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BahansReseps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahans_reseps', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Resep::class);
            $table->foreignIdFor(Bahan::class);
            $table->foreign('bahan_id')
                ->references('id')
                ->on('bahans')
                ->onDelete('cascade');
            $table->foreign('resep_id')
                ->references('id')
                ->on('reseps')
                ->onDelete('cascade');
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
        Schema::dropIfExists('bahans_reseps');
    }
}
