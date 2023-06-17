<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ValueObjects\DepartmentPeriod;

class DepartmentHistory extends Model
{
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    public function period():DepartmentPeriod
    {
        return new DepartmentPeriod(
            $this->start_date,
            $this->end_date
        );
    }

    public function setPeriod(DepartmentPeriod $period):void
    {
        $this->start_date = $period->getStartDate();
        $this->end_date = $period->getEndDate();
    }


}
