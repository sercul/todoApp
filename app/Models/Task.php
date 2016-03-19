<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    protected $fillable = array('text', 'priority');

    const RUN = 0;
    const DONE = 1;

    public static function done($id){
        $task = self::find($id);
        $task->status =  self::DONE;
        $task->update();
        return $task;
    }
}
