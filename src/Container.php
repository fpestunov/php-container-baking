<?php

namespace Example\Container;

class Container  
{
	protected $instances = [];

	public function instance($key, $value)
	{
	    $this->instances[$key] = $value;

	    return $this;
	}

	public function make($key)
	{
	    if (array_key_exists($key, $this->instances)) {
	        return $this->instances[$key];
	    }

	    throw new \Exception('Unable to resolve binding from container.');
	}
}
