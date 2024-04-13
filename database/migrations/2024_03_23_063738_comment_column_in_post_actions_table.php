<?php

use App\Models\PostAction;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('post_actions', function (Blueprint $table) {
            $table->tinyInteger('action_type')->after('post_id');
        });
        DB::statement('ALTER TABLE post_actions CHANGE `like` action_value TINYINT(1)');

        PostAction::query()->update(['action_type' => 1]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_actions', function (Blueprint $table) {
            $table->dropColumn('action_type');
        });
        DB::statement('ALTER TABLE post_actions CHANGE action_value `like` TINYINT(1)');
    }
};
