<?php
class Employee {

	private $salary_rate = 200;
	protected $expenses_per_hour = 10;
	
	public function set_salary_rate(int $rate)
	{
		$this->salary_rate = $rate;
	}
	
	public function calculate_salary($work_hours = 0)
	{
		return $this->salary_rate * $work_hours;
	}
}
