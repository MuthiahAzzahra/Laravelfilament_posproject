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
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'username')) {
                $table->string('username')->unique()->after('id');
            }

            if (!Schema::hasColumn('users', 'role')) {
                $table->string('role')->default('Cashier')->after('email')->comment('Role user: Cashier or Admin');
            }

            if (!Schema::hasColumn('users', 'created_by')) {
                $table->string('created_by')->nullable()->after('password');
            }

            if (!Schema::hasColumn('users', 'updated_by')) {
                $table->string('updated_by')->nullable()->after('created_by');
            }

            if (!Schema::hasColumn('users', 'created_at') && !Schema::hasColumn('users', 'updated_at')) {
                $table->timestamps(); // Tambahkan created_at dan updated_at sekaligus
            }

            if (!Schema::hasColumn('users', 'deleted_at')) {
                $table->softDeletes();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'username')) {
                $table->dropColumn('username');
            }

            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }

            if (Schema::hasColumn('users', 'created_by')) {
                $table->dropColumn('created_by');
            }

            if (Schema::hasColumn('users', 'updated_by')) {
                $table->dropColumn('updated_by');
            }

            if (Schema::hasColumn('users', 'created_at') && Schema::hasColumn('users', 'updated_at')) {
                $table->dropTimestamps();
            }

            if (Schema::hasColumn('users', 'deleted_at')) {
                $table->dropSoftDeletes();
            }
        });
    }
};