<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    public function getNameAttribute($value){
        return ucfirst($value);
    }
    public function getNewNameAttribute(){
        return '- '. ucfirst($this->name);
    }
    public function getStatusTextAttribute(){
        if($this->status == 1){
            return "Đang Làm";
        }else{
            return "Hoàn Thành";
        }
    }
    public function setNameAtrribute($value){
        $this->attributes['name']=ucfirst($value);
    }
}
