<?php

namespace Admin\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AdminUserBundle extends Bundle
{
	public function getParent()
	{
		//overriding template
		return 'FOSUserBundle';
	}
}
