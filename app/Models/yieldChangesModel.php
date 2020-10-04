<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yieldChangesModel extends Model
{
    use HasFactory;
    protected $table='yieldchanges';

    public $timestamps=false;

    protected $fillable = [
        'country',
        'yearr',
        'esc',
        'harvest',
        'changes',
    ];
    protected $guarded =[
    ];

    public function scopeyear($query, $year) {
        if ($year) {
            return $query->where('yearr','like',"%$year%");
        }
    }
    public function scopetipo($query, $tipo) {
        if ($tipo) {
            return $query->where('esc','like',"%$tipo%");
        }
    }
}
