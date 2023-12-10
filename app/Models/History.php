<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class History extends Model
    {
        use HasFactory;
        protected $primaryKey = 'sjrh_id';
        protected $table = 'historys';
        protected $fillable = [
            'kategori_id','sjrh_nama','sjrh_subjudul', 'sjrh_desc','sjrh_img'
        ];
        public function kategori(){
            return $this->belongsTo(Kategori::class,'kategori_id','kategori_id');
        }
    static function getHistory(){
            $return=DB::table('historys')
            ->join('kategoris','historys.kategori_id', '=', 'kategoris.kategori_id');
            return $return; 

        }
    }
