<?php

namespace Tests\Feature;

use App\Models\SurveyTemplate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VersionTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_does_not_create_versions()
    {
        $template = SurveyTemplate::factory()->create();

        $template->update(['name' => "$template->name chaged"]);

        $this->assertDatabaseCount('versions', 1);
    }
}
