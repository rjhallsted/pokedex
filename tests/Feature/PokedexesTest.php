<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PokedexesTest extends TestCase
{
   use RefreshDatabase, WithFaker;

   public function test_a_user_can_create_a_pokedex() {
      $this->withoutExceptionHandling();

      $attributes = [
         'name' => $this->faker->sentence(10)
      ];

      $this->post('/pokedexes', $attributes)->assertRedirect('/pokedexes');

      $this->assertDatabaseHas('pokedexes', $attributes);

      $this->get('/pokedexes')->assertSee($attributes['name']);
   }
}
