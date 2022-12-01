<?php

use App\Models\Tag;
use App\Models\Draw;
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
        Schema::create('draws_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Draw::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(Tag::class)
                ->constrained()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('draws_tags');
    }
};
