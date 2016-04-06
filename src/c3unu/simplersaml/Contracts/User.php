<?php namespace C3Unu\SimplerSaml\Contracts;

interface User
{
	/**
	 * Set the raw user array from the provider.
	 * Basically just add the attributes this way to allow arrayAccess
	 *
	 * @param  array $user
	 * @return \C3Unu\SimplerSaml\User
	 */
	public function setRaw(array $user);

	/**
	 * Map the given array onto the user's properties.
	 *
	 * @param  array $attributes
	 * @return \C3Unu\SimplerSaml\User
	 */
	public function map(array $attributes);
}