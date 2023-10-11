<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
{
    return [
        Column::make('name')
            ->sortable()
            ->searchable(),

        Column::make('email', 'email')
            ->sortable()
            ->searchable(),
    ];
}
}
