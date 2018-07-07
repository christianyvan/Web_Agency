<?php

namespace OC\WebAgencyBundle\Controller;

//use http\Env\Request;
use OC\WebAgencyBundle\Entity\Page;
use OC\WebAgencyBundle\Form\Item;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CmsController extends Controller
{
    public function viewPageAction($id)
	{
             
            $em = $this->getDoctrine()->getManager();
            
            $page = $em->getRepository('OCWebAgencyBundle:Page')->find($id);
            
            
            if (null === $page) {
                    throw new NotFoundHttpException("La page d'id ".$id." n'existe pas.");
            }
            
            $listPages = $em
            ->getRepository('OCWebAgencyBundle:Page')
            ->myfindAll()
            ;
            
            // Récupération de la liste des items d'une page
            $listItems = $em
            ->getRepository('OCWebAgencyBundle:Item')
            ->findBy(array('page' => $page))
            ;
            
            //var_dump($page);
            // print_r($listPages);
            
            return $this->render('OCWebAgencyBundle:Page:view.html.twig', array(
            'page'           => $page,
            'listPages' => $listPages,
            'listItems' => $listItems,
           ));
	}

        
	public function createPageAction(Request $request){

		
	}

	/**
	 * @param $id
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function updatePageAction($id,Request $request){
		
	}

	/**
	 * @param $id
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function deletePageAction($id,Request $request){
		
	}
}
