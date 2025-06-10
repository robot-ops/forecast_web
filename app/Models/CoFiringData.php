<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoFiringData extends Model
{
    //
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'co_firing_data';
    protected $fillable = [
        'admin_id',
        'biomass',
        'batubara',
        'nk_biomass',
        'nk_batubara',
        'mwh_brown',
        'mwh_green',
        'mwh_total',
        'sh_bm',
        'co2_eq_avoid',
        'date_input',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}
