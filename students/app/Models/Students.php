<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = "students"; // 動指定 table 為 students，可改變資料
    const UPDATED_AT = null;      // 取消 seeder ⾃動寫入 updated_at欄位
    const CREATED_AT = null;      // 取消 seeder ⾃動寫入 created_at欄位
}