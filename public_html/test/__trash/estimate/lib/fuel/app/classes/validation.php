<?php

class Validation extends Fuel\Core\Validation
{

	/**
	 * Match against an array of values
	 *
	 * @param   string
	 * @param   array
	 * @return  bool
	 */
	public function _validation_match_collection($val, $collection = array(), $strict = false)
	{
		if ( ! is_array($collection))
		{
			$collection = func_get_args();
			array_shift($collection);
		}
		
		if (empty($collection))
		{
			$collection = array_keys($this->active_field()->options);
		}
		
		if ( ! is_array($val))
		{
			return in_array($val, $collection);
		}
		
		foreach ($val as $_val)
		{
			if ( ! in_array($_val, $collection))
			{
				return false;
			}
		}
		
		return true;
	}

}
