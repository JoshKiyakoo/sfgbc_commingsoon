<?php
// ======================================================================
//             Designed by:    Eyasu Girma [Kiya]
//                 Mobile:     +251-913-078-029
//                 Email:      sendtokiya@gmail.com
//                 Facebook:   https://facebook.com/JoshKiyakoo
//                 LinkedIn:   https://linkedin.com/in/JoshKiyakoo
//                 Twitter:    https://twitter.com/JoshKiyakoo
//                 Telegram:   https://t.me/JoshKiyakoo
// ======================================================================
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SemienFGBCSubscriberDataTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sfgbc_subscriber', function (Blueprint $table) {
            $table->string('subscriberEmail', 100)->unique();
            $table->enum('subscriberStatus', ['Active','Dormant'])->default('Dormant');
            $table->date('subscribeDate');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sfgbc_subscriber');
    }
}
