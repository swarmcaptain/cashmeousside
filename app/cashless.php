<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cashless extends Model
{
    protected $table = 'cashless';

    protected $fillable = [
        'status',
        'merchant_id',
        'terminal_id',
        'prosys_id',
        'dba_name',
        'store_name',
        'store_phone',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'chain_id'

    ];

}

/*
 *    Schema::create('cashless', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status', 10 );
            $table->bigInteger('merchant_id')->unsigned()->nullable();
            $table->smallInteger( 'terminal_id')->unsigned()->nullable();
            $table->bigInteger('prosys_id')->unique()->unsigned();
            $table->string('dba_name');
            $table->string('store_name');
            $table->bigInteger('store_phone')->unsigned()->nullable();
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state', 2);
            $table->mediumInteger( 'zip' )->unsigned()->nullable();
            $table->string('chain_id');
            $table->rememberToken();
            $table->timestamps();
        });
 */