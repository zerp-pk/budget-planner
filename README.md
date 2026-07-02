# zerp/budget-planner

Budget Planner module for the [Zerp](https://github.com/zerp-pk) ERP platform. Budget planning module for the Zerp ERP platform

## Requirements

- PHP 8.2+
- A Laravel application with package auto-discovery enabled (built for Zerp, Laravel 12)

## Installation

```bash
composer require zerp/budget-planner
```

The package auto-registers via Laravel's package discovery — no manual service provider registration needed.

## What it provides

- `Zerp\BudgetPlanner\Providers\BudgetPlannerServiceProvider` — boots this module's routes, migrations, and settings
- Frontend pages/components under `src/Resources/js`

## License

MIT — see [LICENSE](LICENSE).
