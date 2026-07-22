<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->string('file_path')->nullable()->after('holder_name');
            $table->text('remarks')->nullable()->after('status');
            $table->foreignId('signed_by')->nullable()->after('verified_by')->constrained('users')->nullOnDelete();
            $table->timestamp('signed_at')->nullable()->after('verified_at');
            $table->string('qr_code_path')->nullable()->after('signed_at');
        });
    }

    public function down(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropConstrainedForeignId('signed_by');
            $table->dropColumn(['file_path', 'remarks', 'signed_at', 'qr_code_path']);
        });
    }
};