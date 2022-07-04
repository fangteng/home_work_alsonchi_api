<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\DateTimeRepository;

class DateTimeService
{

    private $dateTimeRepository;

    public function __construct(
        DateTimeRepository $dateTimeRepository
    ) {
        $this->dateTimeRepository = $dateTimeRepository;
    }

    /**
     * 查詢行事曆
     */
    public function checkSchedule(string $dateTime, ?int $timeZone = null)
    {
        $schedulePass = 0; //0 pass; >0 not pass

        $dateTime = ($timeZone == 1) ?  date('Y-m-d\TH:i:s', strtotime($dateTime)) : substr($dateTime, 0, 19);

        foreach ($this->dateTimeRepository->getDateTime() as $schedule) {

            if ($dateTime == substr($schedule['datetime_from'], 0, 19)) {
                $schedulePass++;
            }
        }

        if ($schedulePass > 0) {
            return false;
        }
        return true;
    }
}
