<?php

namespace OC\WebAgencyBundle\Controller;

use http\Env\Request;
use OC\WebAgencyBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{

	public function viewPostAction()
	{
		return $this->render("OCWebAgencyBundle:Post:viewPost.html.twig");
	}

	public function viewPostsAction()
	{
		$em = $this->getDoctrine()->getManager();

		$posts = $em->getRepository('OC\WebAgencyBundle\Entity\Post')->findAll();
		return $this->render("OCWebAgencyBundle:Post:viewPosts.html.twig",array('posts'=>$posts));
	}

	public function createPostAction(){
		return $this->render("OCWebAgencyBundle:Post:createPost.html.twig");
	}

	public function updatePostAction($id,Request $request){
		return $this->render("OCWebAgencyBundle:Post:updatePost.html.twig");
	}

	public function deletePostAction($id,Request $request){
		return $this->render("OCWebAgencyBundle:Post:deletePost.html.twig");
	}
}
