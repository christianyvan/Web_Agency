<?php
/**
 * Created by PhpStorm.
 * Admin: Christian
 * Date: 01/07/2018
 * Time: 18:03
 */

namespace OC\WebAgencyBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller
{
	public function indexAction(){
            
            $em = $this->getDoctrine()->getManager();
            $listPages = $em
            ->getRepository('OCWebAgencyBundle:Page')
            ->myfindAll()
            ;
            
            return $this->render('OCWebAgencyBundle:Home:index.html.twig', array(
            'listPages' => $listPages,
            ));
		
	}
}