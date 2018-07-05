<?php
/**
 * Created by PhpStorm.
 * Admin: Christian
 * Date: 05/07/2018
 * Time: 11:11
 */

namespace User\UserBundle\Controller;


use User\UserBundle\Entity\Admin;

class LoginController
{
	public function loginAction(Request $request){

		$user = new Admin();
		$form = $this->createForm(PostType::class,$user);


		// on hydrate l'entité post avec les donnée transmise via la méthode POST
		// $post contient maintenant les données du formulaire
		$form->handleRequest($request);

		if ($request->isMethod('POST'))
		{
			if ($form->isSubmitted() && $form->isValid())
			{
				$name = $form['username']->getData();
				$email = $form['email']->getData();

				$name->setName($name);
				$email->setEmail($email);



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
}