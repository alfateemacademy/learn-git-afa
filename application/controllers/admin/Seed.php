<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seed extends CI_Controller {

	protected $faker;

	public function __construct()
	{
		parent::__construct();
		$this->faker = Faker\Factory::create();
		$this->load->model('product_model');
	}

	public function run()
	{
		for ($i=0; $i < 50; $i++) {
			$title = $this->faker->firstName;
  			$options = array(
				'create_date' => $this->faker->date(),
				'brand_id' => 19,
				'title' => $title,
				'slug' => $title,
				'code' => 'SKU: ' . $this->faker->randomNumber(5),
				'product_condition' => 'New',
				'price' => $this->faker->randomFloat(),
				'description' => $this->faker->paragraph(),
				'product_img' => $this->faker->imageUrl(100, 100),
				'status' => 'Active',
				'meta_description' => $this->faker->text,
				'meta_keyword' => implode(",", $this->faker->words(10))
			);
			$this->product_model->create($options);
		}
	}

}