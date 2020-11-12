<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['college_name','undergraduate','remittance','rent'
,'where_live','sex','part','troble','frend','from','accident','image'];

public function experienceStore(Int $user_id, Array $data,$image)
    {
        $this->user_id = $user_id;
        $this->college_name = $data['college_name'];
        $this->undergraduate = $data['undergraduate'];
        $this->remittance = $data['remittance'];
        $this->rent = $data['rent'];
        $this->where_live = $data['where_live'];
        $this->sex = $data['sex'];
        $this->part = $data['part'];
        $this->troble = $data['troble'];
        $this->frend = $data['frend'];
        $this->from = $data['from'];
        $this->accident = $data['accident'];
        $this->image = $image;
        $this->save();
        // 上記のあたいをsaveで保存
        return;
    }
}

