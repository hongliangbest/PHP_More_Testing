<?php
/**
 * User: Andy
 * Date: 2020/3/22
 * Time: 22:00
 */

class DivFactory extends Factory
{
	public function create()
	{
		return new DivOperation();
	}
}