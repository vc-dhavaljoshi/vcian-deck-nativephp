<?php

namespace App\Providers;

use App\Events\AboutUsEvent;
use App\Events\NginxGuideOpenEvent;
use App\Events\PhpDeckOpenEvent;
use App\Events\PhpGuideOpenEvent;
use App\Events\RestApiGuideOpenEvent;
use App\Events\VirtualGuideOpenEvent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Native\Laravel\Facades\Window;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Event::listen(PhpGuideOpenEvent::class,function (){
            Window::open('php-guide')->title('Php Guide')->width(800)->height(800)->route('php-guide');
        });
        Event::listen(NginxGuideOpenEvent::class,function (){
            Window::open('nginx-guide')->title('Nginx Guide')->width(800)->height(800)->route('nginx-guide');
        });
        Event::listen(VirtualGuideOpenEvent::class,function (){
            Window::open('virtual-guide')->title('Virtual Host Guide')->route('virtual-guide');
        });
        Event::listen(RestApiGuideOpenEvent::class,function (){
            Window::open('rest-api-guide')->title('Rest API Guide')->route('rest-api-guide');
        });
        Event::listen(AboutUsEvent::class,function (){
            Window::open('about')->title('About')->width(800)->height(800)->route('about');
        });
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
