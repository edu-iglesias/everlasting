<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseRequestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_request', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('projectPurpose', 255);
			$table->string('projectType', 255);
			$table->string('sourceOfFund', 255);
			$table->string('amount', 45);
			$table->integer('controlNo');
			$table->string('status', 255);
			$table->integer('requisitioner')->references('id')->on('users');
			$table->integer('office')->references('id')->on('offices');
			$table->string('reason', 255);
			$table->dateTime('dateRequested');
			$table->dateTime('dateReceived');
			$table->dateTime('dueDate');
			$table->string('otherType', 255);
			$table->integer('created_by')->unsigned();
			$table->timestamps();

			//DB::unprepared("ALTER TABLE  purchase_request CHANGE  controlNo  controlNo INT( 5 ) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT");
			//DB::query("ALTER TABLE 'purchase_request' ADD 'haha' VARCHAR(60) ");
			//DB::statement('ALTER TABLE MyTable ADD MyColumn INT UNSIGNED ZEROFILL NOT NULL');
		});

		DB::unprepared("ALTER TABLE  purchase_request CHANGE  controlNo  controlNo INT( 5 ) ZEROFILL");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase_request');
	}

}
