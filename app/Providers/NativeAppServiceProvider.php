<?php

namespace App\Providers;

use App\Events\AboutUsEvent;
use App\Events\NginxGuideOpenEvent;
use App\Events\PhpGuideOpenEvent;
use App\Events\RestApiGuideOpenEvent;
use App\Events\VirtualGuideOpenEvent;
use Native\Laravel\Facades\Window;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Menu::new()
            ->submenu(
                'Php',
                Menu::new()->event(PhpGuideOpenEvent::class,'Php','ctrl+p')
                ->event(NginxGuideOpenEvent::class,'Nginx','ctrl+n')
                ->event(VirtualGuideOpenEvent::class,'Virtual Host','ctrl+v')
                ->event(RestApiGuideOpenEvent::class,'Rest API','ctrl+r')
                ->separator()
                ->quit()
            )
            ->label('Python')
            ->label('NodeJs')
            ->label('React')
            ->label('Angular')
            ->windowMenu()
            ->submenu(
                'Help',
                Menu::new()->event(AboutUsEvent::class,'About','ctrl+a')
                ->separator()
                ->label('Version 1.0')
            )
            ->register();

        Window::open()
            ->title('VittorCloud Technologies PVT LTD')
            ->route('home')
            ->width(1200)
            ->height(800);
    }

    protected $listen = [
        'Native\Laravel\Events\Windows\WindowShown' => [
            'App\Listeners\WindowWasShownListener'
        ]
    ];
}
