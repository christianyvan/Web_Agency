<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 01/07/2018
 * Time: 18:03
 */

namespace OC\WebAgencyBundle\Controller;


class HomeController
{
	public function indexAction(){
		return $this->render("OCWebAgencyBundle:Home:index.html.twig");
	}
}