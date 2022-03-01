<?php 
namespace tests;
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase {
    /**
     * Setting default data
     * @throws \Exception
     */
    public function setUp(): void {
        //var_dump($_SERVER);
        $this->firsTest();
        
    }

    /** @test */
    public function firsTest() {
        $data = [];
        $this->assertIsArray($data);
    }
}