<?php

namespace app/ValueObjects;

use DateTime;
use Exception;

class DepartmentPeriod
{
    private $start_date;
    private $end_date;

    public function __construct(Datetime $start_date,DateTime $end_date)
    {
        if($start_date > $end_date){
            throw new Exception('開始日は終了日より前の日を入力してください。');
        }

        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    /**
     * @return DateTime
     */
    public function getStartDate():DateTime
    {
        return $this->start_date;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->end_date;
    }
}
