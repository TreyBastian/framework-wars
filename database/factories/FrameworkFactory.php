<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Framework>
 */
class FrameworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElements(['Laravel',
                'Symfony',
                'Django',
                'Flask',
                'Ruby on Rails',
                'Express',
                'Spring Boot',
                'ASP.NET',
                'Vue.js',
                'React',
                'Angular',
                'Svelte',
                'Ember.js',
                'CakePHP',
                'Zend Framework',
                'CodeIgniter',
                'Yii',
                'Meteor',
                'Phoenix',
                'FastAPI',
                'Next.js',
                'Nuxt.js',
                'Backbone.js',
                'Play Framework',
                'Koa',
                'NestJS']),
        ];
    }
}
