<?php

namespace Zerp\BudgetPlanner\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Zerp\BudgetPlanner\Models\Budget;

class CloseBudget
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Budget $budget
    ) {}
}
