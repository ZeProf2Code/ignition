<?php

namespace Facade\Ignition\Solutions;

use Facade\IgnitionContracts\RunnableSolution;
use Illuminate\Support\Facades\Artisan;

class LivewireDiscoverSolution implements RunnableSolution
{
    private $customTitle;

    public function __construct($customTitle = '')
    {
        $this->customTitle = $customTitle;
    }

    public function getSolutionTitle(): string
    {
        return $this->customTitle;
    }

    public function getSolutionDescription(): string
    {
        return 'You might have forgotten to discover your livewire components. You can discover your livewire components using `php artisan livewire:discover`.';
    }

    public function getDocumentationLinks(): array
    {
        return [
            'Livewire: Artisan Commands' => 'https://laravel-livewire.com/docs/2.x/artisan-commands',
        ];
    }

    public function getRunParameters(): array
    {
        return [];
    }

    public function getSolutionActionDescription(): string
    {
        return 'Pressing the button below will try to discover your components.';
    }

    public function getRunButtonText(): string
    {
        return 'Run livewire components discover';
    }

    public function run(array $parameters = [])
    {
        Artisan::call('livewire:discover');
    }
}
