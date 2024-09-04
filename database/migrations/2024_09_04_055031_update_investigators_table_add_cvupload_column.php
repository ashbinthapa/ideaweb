<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('investigators', function (Blueprint $table) {
            $table->string('cvupload')->nullable(); // Add this line to add the new column

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('investigators', function (Blueprint $table) {
            $table->dropColumn('cvupload'); // Add this line to remove the column if the migration is rolled back

        });
    }
};
