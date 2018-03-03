<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}/schedule", name="schedule")
     * @Template(":default:schedule.html.twig")
     */
    public function scheduleAction(Request $request)
    {
        // replace this example code with whatever you need
        return [];
    }

    /**
     * @Route("/{_locale}", name="index")
     * @Template(":default:may.html.twig")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':default:may.html.twig');
    }

    /**
     * @Route("/{_locale}", name="index")
     * @Template(":default:may.html.twig")
     */
    public function listAction(Request $request)
    {
        // replace this example code with whatever you need
        return [];
    }
}
