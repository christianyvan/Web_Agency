<?php

namespace OC\WebAgencyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
	/**
	 * @Route("/post",name="view_post_route")
	 */
	public function viewPostAction(){
		return $this->render();
	}
}
