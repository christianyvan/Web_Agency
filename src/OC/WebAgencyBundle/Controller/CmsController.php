<?php

namespace OC\WebAgencyBundle\Controller;

//use http\Env\Request;
use OC\WebAgencyBundle\Entity\Post;
use OC\WebAgencyBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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

	public function createPostAction(Request $request){

		$post = new Post;
		$form = $this->createForm(PostType::class,$post);


		// on hydrate l'entité post avec les donnée transmise via la méthode POST
		// $post contient maintenant les données du formulaire
		$form->handleRequest($request);

		if ($request->isMethod('POST'))
		{
			if ($form->isSubmitted() && $form->isValid())
			{
				$title = $form['title']->getData();
				$name = $form['name']->getData();
				$content = $form['content']->getData();
				$email = $form['email']->getData();
				$image = $form['image']->getData();
				$category = $form['category']->getData();

				$post->setTitle($title);
				$post->setName($name);
				$post->setContent($content);
				$post->setEmail($email);
				$post->setImage($image);
				$post->setCategory($category);

				$em = $this->getDoctrine()->getManager();
				$em->persist($post);
				$em->flush();
				$this->addFlash('message','Post Saved Successfully');
				return $this->redirectToRoute('view_posts_route',['post' => $post]);
			}
		}

		return $this->render("OCWebAgencyBundle:form:viewFormCreatePost.html.twig",[
									'form'=> $form->createView()]);
	}

	/**
	 * @param $id
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function updatePostAction($id,Request $request){
		return $this->render("OCWebAgencyBundle:Post:updatePost.html.twig");
	}

	/**
	 * @param $id
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function deletePostAction($id,Request $request){
		return $this->render("OCWebAgencyBundle:Post:deletePost.html.twig");
	}
}
