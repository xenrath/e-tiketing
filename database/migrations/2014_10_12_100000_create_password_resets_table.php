<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreatePasswordResetsTable extends Migration
=======
return new class extends Migration
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
<<<<<<< HEAD
}
=======
};
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
