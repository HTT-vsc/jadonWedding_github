<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchasing extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'purchasings';

    public function projects(){
        return $this->belongsTo('App\Project');
    }
    public function clients(){
        return $this->belongsTo('App\Client');
    }
    public function requirements(){
        return $this->belongsTo('App\Requirement');
    }
    public function purchasingtypes(){
        return $this->belongsTo('App\Tasktype');
    }
    public function products(){
        return $this->belongsTo('App\Product');
    }
    public function clientinputs(){
        return $this->belongsTo('App\Clientinput');
    }
    public function controls(){
        return $this->belongsTo('App\Control');
    }
    public function programs(){
        return $this->belongsTo('App\Program');
    }
    public function services(){
        return $this->hasOne('App\Service');
    }
}
