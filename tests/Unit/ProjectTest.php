<?php

namespace Tests\Unit;

use App\Models\Project;
use App\Models\Student;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function student_can_make_projects(): void
    {

        $student = Student::factory()->create();

        $project = Project::factory()->create([
            'student_id' => $student->id
        ]);

        $this->assertTrue($student->project->title);
    }
}
