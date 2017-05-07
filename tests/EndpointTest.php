<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class EndPointTest extends TestCase
{
    use DatabaseMigrations;
    use DatabaseTransactions;

    // public function testHello()
    // {
    //     $this->get('/hello');
    //     $this->assertEquals(
    //         $this->response->getContent(),
    //         'Hello World'
    //     );
    // }

    // public function testHai()
    // {
    //     $this->get('/hai');
    //     $this->assertResponseOk();
    //     $this->seeJsonStructure([
    //         'success',
    //         'data' => [
    //             'title'
    //         ]
    //     ]);
    //     $this->seeJson(['success' => true]);
    // }

    public function testAddNote()
    {
        $note = factory(App\Note::class)->create();
        $this->assertInternalType('int', $note->id);
        $this->assertInternalType('string', $note->title);
    }
}
