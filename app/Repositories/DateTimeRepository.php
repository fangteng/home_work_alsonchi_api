<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class DateTimeRepository
{
    public function getDateTime()
    {
        return $this->data();
    }

    private function data()
    {
        return [
            [
                "datetime_from" => "2021-11-30T10:00:00-05:00",
                "datetime_to" => "2021-11-30T11:00:00-05:00",
                "label" => "Appointment"
            ],
            [
                "datetime_from" => "2021-11-30T11:00:00-05:00",
                "datetime_to" => "2021-11-30T12:00:00-05:00",
                "label" => "Appointment"
            ],
            [
                "datetime_from" => "2021-11-30T12:00:00-05:00",
                "datetime_to" => "2021-11-30T13:00:00-05:00",
                "label" => "Appointment"
            ],
            [
                "datetime_from" => "2021-11-30T14:00:00-05:00",
                "datetime_to" => "2021-11-30T15:00:00-05:00",
                "label" => "Appointment"
            ],
            [
                "datetime_from" => "2021-11-30T17:00:00-05:00",
                "datetime_to" => "2021-11-30T18:00:00-05:00",
                "label" => "Appointment"
            ],
            [
                "datetime_from" => "2021-12-03T11:00:00-05:00",
                "datetime_to" => "2021-12-03T16:00:00-05:00",
                "label" => "Hockey Game"
            ]
        ];
    }
}
