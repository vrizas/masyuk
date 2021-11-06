<?php

use App\Models\Resep;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Resep::class);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('resep_id')->references('id')->on('reseps')->onDelete('cascade');
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
        Schema::dropIfExists('komentars');
    }
}
