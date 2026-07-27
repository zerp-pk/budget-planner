<?php

namespace Zerp\BudgetPlanner\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zerp\BudgetPlanner\Providers\BudgetPlannerServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [BudgetPlannerServiceProvider::class];
    }
}
