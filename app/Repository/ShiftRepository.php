<?php
/**
 * Created by PhpStorm.
 * User: moniqueadamson
 * Date: 14/03/2018
 * Time: 11:32
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class ShiftRepository
{
	// Variable is used to inject an instance of the model
	protected $model;

	/**
	 * ShiftRepository constructor.
	 * @param $model
	 */
	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	//Retrieve all entries in the model
	public function all(): Collection
	{
		return $this->model->all();
	}

	public function findShiftsByStaffID(int $staffID): Collection
	{
		return $this->model->where('staffid', $staffID)->get();
	}

}