<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
// use Baum\Node;


class Type extends Model
{
    //
    public function childTypes() {
      return $this->hasMany('App\Type', 'gid', 'id');
    }
}
