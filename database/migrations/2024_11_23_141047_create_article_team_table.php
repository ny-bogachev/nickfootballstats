<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('article_team', function (Blueprint $table) {
            $table->integer('article_id');
            $table->integer('team_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('article_team');
    }
};