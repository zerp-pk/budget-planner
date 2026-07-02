<?php

namespace Zerp\BudgetPlanner\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Zerp\Account\Events\UpdateBudgetSpending;
use Zerp\BudgetPlanner\Listeners\UpdateBudgetSpendingLis;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UpdateBudgetSpending::class => [
            UpdateBudgetSpendingLis::class,
        ],
    ];
}
