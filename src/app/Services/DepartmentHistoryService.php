<?php
namespace App\Services;

use App\DepartmentHistory;

class DepartmentHistoryService
{

    public function getHistoryForEmployee(int $employeeId): Collection
    {
        return DepartmentHistory::where('employee_id', $employeeId)
            ->orderBy('start_date', 'asc')
            ->get();
    }

}
