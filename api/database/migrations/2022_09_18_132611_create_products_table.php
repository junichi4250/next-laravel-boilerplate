<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->string('image', 100)->nullable();
            $table->string('image2',100)->nullable();
            $table->string('image3', 100)->nullable();
            $table->string('image4', 100)->nullable();
            $table->string('image5', 100)->nullable();
            $table->string('youtube_id', 20)->nullable();
            $table->string('preview_url', 100)->nullable();
            $table->char('sale_flag', 1)->nullable();
            $table->char('proof_type', 1)->nullable();
            $table->char('name_select_flg', 1)->nullable();
            $table->char('purchased_cnt_flg', 1)->nullable();
            $table->char('photo_select_restriction_flg', 1)->nullable();
            $table->char('same_photo_select_restriction_flg', 1)->nullable();
            $table->char('photo_not_select_flg', 1)->nullable();
            $table->integer('page_count_min')->nullable();
            $table->integer('page_count_max')->nullable();
            $table->integer('select_page_unit')->nullable();
            $table->char('preview_start', 1)->nullable();
            $table->string('display_code', 100);
            // $table->id('parent_product_id')->nullable();
            $table->integer('disp_order');
            $table->char('invalid_flg', 1);
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
        Schema::dropIfExists('products');
    }
}
