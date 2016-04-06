<?php 

namespace C3Unu\SimplerSaml\Events;

use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Queue\SerializesModels;
use Synwork\User;

class SamlLogout
{
	use SerializesModels;

	/**
	 * @var User
	 */
	private $user;

	/**
	 * Create a new event instance.
	 *
	 * @param User $user
	 * @return \C3Unu\SimplerSaml\Events\SamlLogout
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}
}
