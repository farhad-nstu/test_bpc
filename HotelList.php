<?php

namespace Modules\Hotels\Entities;

use App\Models\District;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class HotelList extends Model
{
    protected $fillable = [
        'h_name', 'district_id', 'h_description', 'h_facility', 'h_contact', 'h_email', 'h_fax', 'h_restaurant_id', 'h_photo', 'h_isActive', 'h_capacity'
    ];

    public static $sortable = ['id' => 'h_id', 'name' => 'h_name'];

    public function districtName(){
        return $this->belongsTo(District::class, 'district_id','district_id');
    }
    public function rooms(){
        return $this->hasMany(HotelRoom::class, 'h_id', 'h_id');
    }
    public function roomTypes(){
        return $this->hasMany(HotelRoomType::class, 'h_id', 'h_id');
    }

    public function config(){
        return $this->hasOne(HotelConfig::class,'h_id','h_id');
    }


    public function todaySellRoomsByHotel(){
        return $this->hasOne(HotelBookingRoom::class, 'h_id', 'h_id')->where('hbr_status',1)->whereDate('hbr_checkin_date', '=', Carbon::today()->toDateString())->selectRaw('h_id, count(*) as count')->groupBy('h_id');
    }

    public function totalRoomByHotel(){
        return $this->hasOne(HotelRoom::class, 'h_id', 'h_id')->selectRaw('h_id, count(*) as count')->groupBy('h_id');
    }
}
