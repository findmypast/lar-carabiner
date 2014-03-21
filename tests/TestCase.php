<?php 



class TestCase extends \Illuminate\Foundation\Testing\TestCase {

use \Way\Tests\ModelHelpers;


public function setUp()
{
   parent::setUp();
    $this->prepareTests();
}

    /**
 * Creates the application.
 *
 * @return HttpKernelInterface
 */
public function createApplication()
{
    $unitTesting = true;

    $testEnvironment = 'testing';

    return require __DIR__ . '/../../../../bootstrap/start.php';

    

}



public function prepareTests()
{
    Route::enableFilters();
}




}
