<?php

namespace Telus\Example\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TelusExampleMyBundle:Default:index.html.twig');//, array('name' => $name));
    }

    private function tiAddSnippet() {
        // Get the security context
        
        $sc = $this->get('security.context');
        
        // Check if the user is fully authenticated (or has been remembered)
        if ($sc->isGranted('IS_AUTHENTICATED_REMEMBERED'))
        {
            // The current user ID
            $sf2PbOwnerId = $sc->getToken()->getUser()->getId();
        } else {
            // Anonymous paste
            $sf2PbOwnerId = 0;
        }
        
        // Get the request (GET/POST) data 
        $request = $this->get('request');
        
        // Calculate SHA-1 sum from the snippet text and the time
        $sf2PbHash = sha1(microtime(true).$request->request->get('snippetText'));
        
                
        // The format ID as selected in the UI
        $sf2PbFormatId = $request->request->get('dataFormatId');

        // The text to insert
        $sf2PbdData = $request->request->get('snippetText');
        
        // ---- Insert snippet into database
        
        /* Get the Entity Manager
         * 
         * This line fetches Doctrine's entity manager object, 
         * which is responsible for handling the process of persisting and 
         * fetching objects to and from the database.
         */
        $em = $this->getDoctrine()->getManager();
        
        /*
         *  In this section, you instantiate and work with the $dSf2PasteBin
         *  object like any other, normal PHP object.
         */
        $dSf2PasteBin = new \Telus\Example\MyBundle\Entity\Sf2Pastebin();
        $dSf2PasteBin->setSf2PbEnabled(true);
        
        $sf2PbFormatId = $this->getDoctrine()->getRepository('TelusExampleMyBundle:Sf2DataFormat')->find($sf2PbFormatId);
        $dSf2PasteBin->setSf2PbFormat($sf2PbFormatId);
        $dSf2PasteBin->setSf2PbOwnerId($sf2PbOwnerId);
        $dSf2PasteBin->setSf2PbHash($sf2PbHash);
        $dSf2PasteBin->setSf2PbData($sf2PbdData);

        /*
         * The persist() method tells Doctrine to "manage" the $product object.
         * This does not actually cause a query to be made to the database (yet).
         */
        $em->persist($dSf2PasteBin);
        
        /*
         * When the flush() method is called, Doctrine looks through all of the 
         * objects that it's managing to see if they need to be persisted to the 
         * database. In this example, the $product object has not been persisted 
         * yet, so the entity manager executes an INSERT query and a row is 
         * created in the product table.
         */
        $em->flush();

        /*
         * In fact, since Doctrine is aware of all your managed entities, 
         * when you call the flush() method, it calculates an overall changeset 
         * and executes the most efficient query/queries possible. For example,
         * if you persist a total of 100 Product objects and then subsequently 
         * call flush(), Doctrine will create a single prepared statement and 
         * re-use it for each insert. This pattern is called Unit of Work, and 
         * it's used because it's fast and efficient.
         * 
         *  http://symfony.com/doc/current/book/doctrine.html
         */
        
        return $sf2PbHash;
    }

    public function viewSnippetAction($sid)
    {
        $em = $this->getDoctrine()->getManager();
        $qbPasteBin = $em->createQueryBuilder()
                ->select('g, h')
                ->from('TelusExampleMyBundle:Sf2Pastebin', 'g')
                ->leftJoin('g.sf2PbFormat', 'h')
                ->where('g.sf2PbHash = :hash')
                ->setParameter('hash', $sid)
                ;        
        
        $aPasteBin = $qbPasteBin->getQuery()->getResult(Query::HYDRATE_ARRAY);
              
        return $this->render('TelusExampleMyBundle:Default:viewSnippet.html.twig', array('aPasteBin' => $aPasteBin));
    }
}
