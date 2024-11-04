<?php

namespace App\Console\Commands;

use App\Models\Framework;
use App\Models\Location;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;

class DatabaseInitCommand extends Command
{
    protected $signature = 'db:init';

    protected $description = 'Prepare the database with initial data';

    public function handle()
    {
        $this->info('Preparing database...');
        Schema::disableForeignKeyConstraints();

        foreach (self::$initialData as $model => $data) {
            $this->info('Preparing ' . str(class_basename($model))->lower()->plural() . ' table...');
            $this->withProgressBar($data, function ($row) use ($model) {
                $model::create($row);
            });
        }

        Schema::enableForeignKeyConstraints();
        $this->newLine();
        $this->info('Database initialized successfully.');
    }

    protected static $initialData = [
        Framework::class => [
            [
                'name' => 'Laravel',
                'url' => 'https://laravel.com/',
                'logo' => 'logo/laravel.svg',
            ],
            [
                'name' => 'Symfony',
                'url' => 'https://symfony.com/',
                'logo' => 'logo/symfony.svg',
            ],
            [
                'name' => 'Django',
                'url' => 'https://www.djangoproject.com/',
                'logo' => 'logo/django.svg',
            ],
            [
                'name' => 'Ruby on Rails',
                'url' => 'https://rubyonrails.org/',
                'logo' => 'logo/rails.svg',
            ],
            [
                'name' => 'Spring',
                'url' => 'https://spring.io/',
                'logo' => 'logo/spring.svg',
            ],
            [
                'name' => 'Angular',
                'url' => 'https://angular.io/',
                'logo' => 'logo/angular.svg',
            ],
            [
                'name' => 'React',
                'url' => 'https://react.dev/',
                'logo' => 'logo/react.svg',
            ],
            [
                'name' => 'Vue.js',
                'url' => 'https://vuejs.org/',
                'logo' => 'logo/vue.svg',
            ],
            [
                'name' => 'Next.js',
                'url' => 'https://nextjs.org/',
                'logo' => 'logo/nextjs.svg',
            ],
            [
                'name' => 'Nuxt.js',
                'url' => 'https://nuxtjs.org/',
                'logo' => 'logo/nuxtjs.svg',
            ],
            [
                'name' => 'Svelte',
                'url' => 'https://svelte.dev/',
                'logo' => 'logo/svelte.svg',
            ],
            [
                'name' => 'Remix',
                'url' => 'https://remix.run/',
                'logo' => 'logo/remix.svg',
            ],
        ],

        Location::class => [
            [
                'name' => 'San Fransisco',
            ],
            [
                'name' => 'New York City',
            ],
            [
                'name' => 'London',
            ],
            [
                'name' => 'Tokyo',
            ],
            [
                'name' => 'Sao Palo',
            ],
            [
                'name' => 'Amsterdam',
            ],
            [
                'name' => 'Bengaluru',
            ],
        ],
    ];
}
