<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Blade::component('header', \App\View\Components\Header::class);
        Blade::component('hero', \App\View\Components\Hero::class);
        Blade::component('statistics', \App\View\Components\Statistics::class);
        Blade::component('how-it-works', \App\View\Components\HowItWorks::class);
        Blade::component('testimonials', \App\View\Components\Testimonials::class);
        Blade::component('latest-articles', \App\View\Components\LatestArticles::class);
        Blade::component('footer', \App\View\Components\Footer::class);
        Blade::component('popular-courses', \App\View\Components\PopularCourses::class);
        Blade::component('popular-trainings', \App\View\Components\PopularTrainings::class);
        Blade::component('faq', \App\View\Components\Faq::class);
        Blade::component('testimonials-section', \App\View\Components\TestimonialsSection::class);
        Blade::component('training-description', \App\View\Components\TrainingDescription::class);
        Blade::component('internal-hero', \App\View\Components\InternalHero::class);
    }
}
