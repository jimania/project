<?php
/**
 * Created by PhpStorm.
 * User: Jimania
 * Date: 4/8/2016
 * Time: 3:14 PM
 */
use App\Company;
class CompanyTest extends TestCase {

    /**
     * Default preparation for each test
     */
    public function setUp()
    {
        parent::setUp(); // Don't forget this!

        $this->prepareForTests();
    }

    /**
     * Migrates the database and set the mailer to 'pretend'.
     * This will cause the tests to run quickly.
     */
    private function prepareForTests()
    {
        Artisan::call('migrate');
        Mail::pretend(true);
        $company = Company::all();
    }
}