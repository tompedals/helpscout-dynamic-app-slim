<?php

namespace App;

use DateTime;
use Slim\Views\Twig;
use TomPedals\HelpScoutApp\AppHandlerInterface;
use TomPedals\HelpScoutApp\AppRequest;

class AppHandler implements AppHandlerInterface
{
    /**
     * @var Twig
     */
    private $view;

    /**
     * @param Twig $view
     */
    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    /**
     * @param AppRequest $request
     *
     * @return string The HTML to output within the Help Scout sidebar
     */
    public function handle(AppRequest $request)
    {
        // Render the template with some example customer data
        return $this->view->fetch('app.html.twig', [
            'subscription' => [
                'amount'  => 1500,
                'created' => new DateTime('2015-06-01T09:00:00+00:00'),
            ],
            'charges' => [
                [
                    'reference' => '12345',
                    'date'      => new DateTime('2016-09-20T09:00:10+00:00'),
                    'amount'    => 1500,
                ],
                [
                    'reference' => '12346',
                    'date'      => new DateTime('2016-08-20T09:12:33+00:00'),
                    'amount'    => 1500,
                ],
            ],
        ]);
    }
}
