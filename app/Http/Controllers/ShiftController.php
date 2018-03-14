<?php

namespace App\Http\Controllers;

use App\Model\Shift;
use App\Repositories\ShiftRepository;


class ShiftController extends Controller
{
	// variable to point to model for repository
	protected $model;


	/**
	 * ShiftController constructor.
	 * @param Shift $shift
	 */
	public function __construct(Shift $shift)
	{
		$this->model = new ShiftRepository($shift);
	}


	public function index()
	{
		$allShifts = [];

		for($i = 0; $i <= 60; $i++) {
			$allShifts[] = $this->model->findShiftsByStaffID((int) $i);
		}

		return view('index')->with('shifts', $allShifts);
    }
}
