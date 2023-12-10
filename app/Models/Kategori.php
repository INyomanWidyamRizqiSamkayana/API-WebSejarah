<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kategori extends Model
{
    use HasFactory;
    public $primaryKey='kategori_id';
    protected $table = 'kategoris'; 
    protected $fillable = [
        'shop_name','contact_name','shop_desc','shop'
    ];
    public function history(){
        return $this->hasMany(History::class,'sjrh_id','sjrh_id');
    }
}
