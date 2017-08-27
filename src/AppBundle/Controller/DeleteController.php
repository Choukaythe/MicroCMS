<?php
// src/AppBundle/Controller/DeleteController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Document;

class DeleteController extends Controller
{
    /**
     * @Route("/delete", name="delete")
     */

    public function getdocAction()
    {
        $request = Request::createFromGlobals();
        $id = $request->query->get('id');
        $document = $this->getDoctrine()
            ->getRepository(Document::class)
            ->deleteDocById($id);


        return new RedirectResponse($this->generateUrl('homepage'));
    }
}