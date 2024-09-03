<?php

namespace App\Booking;

use App\Models\Employee;
use App\Models\Service;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Spatie\Period\PeriodCollection;

class ScheduleAvailability
{
    protected PeriodCollection $periods;

    public function __construct(protected Employee $employee, protected Service $service)
    {
        $this->periods = new PeriodCollection();
    }

    public function forPeriod(Carbon $startsAt, Carbon $endsAt)
    {
        collect(CarbonPeriod::create($startsAt, $endsAt)->days())
            ->each(function (Carbon $date) {
                $this->addAvailabilityFromSchedule($date);
            });
        return $this->periods;
    }

    protected function addAvailabilityFromSchedule(Carbon $date)
    {
        if (!$schedule = $this->employee->schedules->where('starts_at', '<=', $date)->where('ends_at', '>=', $date)->first()) {
            return;
        };
    }
}
