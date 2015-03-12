<?php

namespace Tex\Bundle\CotacaoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tex\Bundle\CotacaoBundle\Entity\Cotacao;
use Tex\Bundle\CotacaoBundle\Entity\Condutor;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        // return $this->render('CotacaoBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createCotacaoAction()
    {
        $cotacao = new Cotacao();
        $cotacao->setToken('abc123');

        $condutores = [];

        $condutor = new Condutor();
        $condutor->setNome('Foo');
        $condutor->setSexo('F');
        $condutor->setNascimento(new \DateTime('2012-01-01'));
        $condutor->setCotacao($cotacao);
        array_push($condutores, $condutor);

        $condutor1 = new Condutor();
        $condutor1->setNome('Bar');
        $condutor1->setSexo('M');
        $condutor1->setNascimento(new \DateTime('2012-01-01'));
        $condutor1->setCotacao($cotacao);
        array_push($condutores, $condutor1);

        $em = $this->getDoctrine()->getManager();
        $em->persist($cotacao);
        // $em->persist($condutor);
        // $em->persist($condutor1);
        foreach ($condutores as $c) {
            $em->persist($c);
        }
        $em->flush();

        return new Response(
            "Created condutores id: {$condutor->getId()}, and cotacao id: {$cotacao->getId()}"
        );

        // return new Response(
        //     "Created condutores id: {$condutores[0]->getId()}, {$condutores[1]->getId()} and cotacao id: {$cotacao->getId()}"
        // );
    }
}
