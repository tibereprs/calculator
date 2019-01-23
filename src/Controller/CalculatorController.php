<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\Calculator;

class CalculatorController extends AbstractController
{

    /**
     * @Route("/", name="_calculator")
     * @param Request $request
     * @param Calculator $calculate
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function calculatorAction(Request $request, Calculator $calculate)
    {
        $formCalculator = $this->createFormBuilder()
        ->add('number1', IntegerType::class)
        ->add('operator', ChoiceType::class, [
            'choices'  => [
                '+' => 'plus',
                '-' => 'minus',
                '*' => 'multiplication',
                '/' => 'division',
            ],
        ])
        ->add('number2', IntegerType::class)
        ->add('calculate', SubmitType::class)
        ->getForm();

        $formCalculator->handleRequest($request);

        if ($formCalculator->isSubmitted() && $formCalculator->isValid()) {
            $resultCalculator = $formCalculator->getData();

            $response = $calculate->calculate($resultCalculator);

            if ($response) {
                return $this->render('calculator.html.twig', array(
                    'formCalculator' => $formCalculator->createView(),
                    'response' => $response
                ));
            } else {
                $this->addFlash(
                    'error',
                    'There was an error, please try again!'
                );

                return $this->redirectToRoute('_calculator');
            }

        }

        return $this->render('calculator.html.twig', array(
            'formCalculator' => $formCalculator->createView()
        ));
    }
}