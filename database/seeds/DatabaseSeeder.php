<?php
use \App\Company;
use \App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CompanyAppSeeder');
		$this->command->info('Company app seeds finished.');
	}

}
class CompanyAppSeeder extends Seeder {

	public function run() {

		// clear our database ------------------------------------------
		DB::table('companies')->delete();
		DB::table('companyadmin')->delete();
		DB::table('categories')->delete();
		DB::table('products')->delete();
		DB::table('companies_categories')->delete();

		$companyOne = \App\Company::create(array(
			'name'         => 'Company One',
			'address'         => 'Address One',
			'phone' => 1234567891
		));

		$companyTwo = \App\Company::create(array(
			'name'         => 'Company Two',
			'address'         => 'Address Two',
			'phone' => 1234567892
		));

		$companyThree = \App\Company::create(array(
			'name'         => 'Company Three',
			'address'         => 'Address Three',
			'phone' => 1234567893
		));

		$this->command->info('The companies are live');


		\App\Companyadmin::create(array(
			'name'  => 'Admin One',
			'company_id' => $companyOne->id
		));
		\App\Companyadmin::create(array(
			'name'  => 'Admin Two',
			'company_id' => $companyTwo->id
		));
		\App\Companyadmin::create(array(
			'name'  => 'Admin Three',
			'company_id' => $companyThree->id
		));

		$this->command->info('Admins assigned to companies');

		\App\Product::create(array(
			'name'    => 'Product One',
			'price'     => 500,
			'company_id' => $companyOne->id
		));
		\App\Product::create(array(
			'name'    => 'Product Two',
			'price'     => 400,
			'company_id' => $companyOne->id
		));

		$this->command->info('Company Products matched');

		$categoryOne = \App\Category::create(array(
			'name'        => 'Category One',
			'industry'        => 'Industry X'
		));
		$categoryTwo = \App\Category::create(array(
			'name'        => 'Category Two',
			'industry'        => 'Industry Y'
		));



		$companyOne->categories()->attach($categoryOne->id);
		$companyOne->categories()->attach($categoryTwo->id);

		$companyTwo->categories()->attach($categoryOne->id);
		$companyTwo->categories()->attach($categoryTwo->id);

		$companyThree->categories()->attach($categoryOne->id);
		$companyThree->categories()->attach($categoryTwo->id);

		$this->command->info('The companies have categories');

	}

}