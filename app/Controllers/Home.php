<?php

namespace App\Controllers;

use App\Models\M_Users;

class Home extends BaseController
{
	/**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
	protected $M_Users;

	public function __construct()
	{
		$this->M_Users = new M_Users();
	}

	public function index()
	{
		$data = [
			'data' => $this->M_Users->findAll()
		];

		echo json_encode($data['data']);
		// return view('index', $data);
	}
}
