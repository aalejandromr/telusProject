<?php

namespace Telus\Example\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;

class WsController extends Controller
{

    public function WsAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $qbPasteBin = $em->createQueryBuilder()
                ->select('u')
                ->from('TelusExampleMyBundle:Sf2Pastebin', 'u');

        if (strlen($id) === 40)
        {
            $qbPasteBin->where('u.sf2PbHash = :id')->setParameter('id', $id);
        }

        $aPasteBin = $qbPasteBin->getQuery()
                ->getResult(Query::HYDRATE_ARRAY);

        return new \Symfony\Component\HttpFoundation\JsonResponse($aPasteBin);
    }

}
