<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_every_page_renders_with_the_navigation_menu(): void
    {
        foreach (['/', '/features', '/about', '/contact'] as $path) {
            $response = $this->get($path);

            $response->assertOk();
            $response->assertSee('Features');
            $response->assertSee('Contact');
        }
    }

    public function test_contact_form_requires_valid_input(): void
    {
        $this->post('/contact', ['name' => '', 'email' => 'not-an-email', 'message' => 'short'])
            ->assertSessionHasErrors(['name', 'email', 'message']);
    }

    public function test_contact_form_accepts_valid_input(): void
    {
        $this->post('/contact', [
            'name' => 'Venkata',
            'email' => 'venkata@example.com',
            'message' => 'I would like to know more about this starter.',
        ])
            ->assertRedirect('/contact')
            ->assertSessionHas('status');
    }
}
