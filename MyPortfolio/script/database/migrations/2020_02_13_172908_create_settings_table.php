<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->integer('ui')->default(1);
            $table->string('site_name')->nullable();
            $table->string('home_img')->nullable();
            $table->string('lang')->default('en');
            $table->string('mailchimp_api_key')->nullable();
            $table->string('mailchimp_list_id')->nullable();
            
            
            $table->text('service_description')->nullable();
            $table->text('portfolio_description')->nullable();
           
            $table->text('subscribe_description')->nullable();
            $table->text('contact_description')->nullable();
            $table->string('hire_link')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
