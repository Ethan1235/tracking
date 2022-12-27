<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	public function up()
	{
		Schema::create('packages', function(Blueprint $table) {
            $table->increments('id');
            $table->string('platform');
            $table->string('tracking_number')->unique();
            $table->string('order_id');
            $table->string('country');
            $table->string('method');
            $table->string('paid_date');
            $table->string('shipped_month');
            $table->string('shipped_week');
            $table->date('shipped_date');
            $table->decimal('amount');
            $table->decimal('ship_fee');
            $table->string('currency');
            $table->integer('items')->unsigned();
            $table->decimal('weight');
            $table->integer('logistics_status')->unsigned()->default(0);
            $table->integer('is_closed')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('packages');
	}
};
