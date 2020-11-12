<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    public function pointStore(Int $user_id)
    {
        $this->user_id = $user_id;
        $this->points = '500';
        $this->save();
        // 上記のあたいをsaveで保存
        return;
    }

}
