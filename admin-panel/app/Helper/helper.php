<?php
use Carbon\Carbon;
if (!function_exists('generateFileName')){
    function generateFileName($name){
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $day = Carbon::now()->day;
        $hour = Carbon::now()->hour;
        $minute=Carbon::now()->minute;
        $second=Carbon::now()->second;
        $microSecond = Carbon::now()->microsecond;
        return $year.'_'.$month.'_'.$day.'_'.$hour.'_'.$minute.'_'.$second.'_'.$microSecond.'_'.$name;
    }

}
