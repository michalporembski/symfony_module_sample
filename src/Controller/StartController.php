<?php

namespace MPorembski\SampleModule\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StartController
{
    #[Route('/sample_module_start', name: 'sample_module_start')]
    public function index(): Response
    {
        return new Response(
            'sample_module_start'
        );
    }
}
