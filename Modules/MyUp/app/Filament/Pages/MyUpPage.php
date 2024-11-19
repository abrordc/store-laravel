<?php

namespace Modules\MyUp\Filament\Pages;

use Filament\Pages\Page;

class MyUpPage extends Page
{
    public static string $view = 'myup::index';
    public static ?string $navigationLabel = 'my up';
    public static ?string $navigationIcon = 'heroicon-c-academic-cap';

    public function getTitle(): string
    {
        return __('my up');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('my up');
    }

}
