<?php 

namespace C3Unu\SimplerSaml\Events;

use C3Unu\SimplerSaml\Contracts\User;

use Illuminate\Queue\SerializesModels;

class SamlLogin
{
	use SerializesModels;

	/**
	 * @var User
	 */
	public $user;

	/**
	 * Create a new event instance.
	 *
	 * @param User $user
	 * @return \C3Unu\SimplerSaml\Events\SamlLogin
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

}
