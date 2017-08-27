<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Document;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky")
     */

    public function getdocAction()
    {
        $request = Request::createFromGlobals();
        $id = $request->query->get('id');
        $document = $this->getDoctrine()
            ->getRepository(Document::class)
            ->findDocById($id);


        return $this->render('default/pagecontent.html.twig', array('document' => $document));
    }
}