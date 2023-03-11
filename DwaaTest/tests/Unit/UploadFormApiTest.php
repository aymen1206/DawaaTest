<?php

namespace Tests\Unit;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UploadFormApiTest extends TestCase
{
    /**
     * A unit test For Upload Form Api.
     *
     */
    public function test_example()
    {
        //preperation /prepare

        //action /preform
        $this->postJson(route('API.SubmitForm'),[
        'Name'=>'Aymen hashim',
        'DOB'=>'10-10-1995',
        'genderId'=>'1',
        'NationalityId'=>'2',
        'CV' => new \Illuminate\Http\UploadedFile(resource_path('..\..\test-files\CV_For_test.pdf'), 'CV_For_test.pdf', null, null, true),
        ]
        )
        ->assertCreated();
 
    }
}
