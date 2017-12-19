<?php

namespace FormationLaravel\MesHelpers;

use Carbon\Carbon;

class MonHelper {
    public static function get_day($year, $month, $day) {
        $date = Carbon::createFromDate($year, $month, $day, 'Europe/London');

        return $date->toDateTimeString();
    }
}