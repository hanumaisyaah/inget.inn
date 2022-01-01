<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        DB::unprepared('
        CREATE TRIGGER create_user_trigger AFTER INSERT ON `users` FOR EACH ROW
            BEGIN
                INSERT INTO `notification`(`user_id`, `remind_assignment_at`, `remind_assignment_format`, `remind_schedule_at`, `remind_schedule_format`, `created_at`, `updated_at`) VALUES (NEW.id, 0, "minutes", 0, "minutes", NOW(), NOW());
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `create_user_trigger`');
    }
}
