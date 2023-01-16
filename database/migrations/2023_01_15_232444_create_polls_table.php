<?php

use App\Enums\PollStatus;
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
        Schema::create('polls', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->longText('description')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->dateTime('start_date'); // 2023-01-16 15:00
            $table->dateTime('finish_date'); // 2023-01-16 15:00
            $table->enum('status', array_column(PollStatus::cases(), 'value'));
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
        Schema::dropIfExists('polls');
    }
};
