<?php

// View
$container['view'] = function ($c) {
    $settings = $c->get('settings');

    $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);

    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

$container[App\AppHandler::class] = function ($c) {
    return new App\AppHandler($c->get('view'));
};

$container[TomPedals\HelpScoutApp\AppAction::class] = function ($c) {
    return new TomPedals\HelpScoutApp\AppAction(
        $c->get(TomPedals\HelpScoutApp\AppRequestFactory::class),
        $c->get(App\AppHandler::class)
    );
};

$container[TomPedals\HelpScoutApp\AppRequestFactory::class] = function ($c) {
    return new TomPedals\HelpScoutApp\AppRequestFactory($c->get('settings')['helpscout_app_secret']);
};

$container[TomPedals\HelpScoutApp\AppAction::class] = function ($c) {
    return new TomPedals\HelpScoutApp\AppAction(
        $c->get(TomPedals\HelpScoutApp\AppRequestFactory::class),
        $c->get(App\AppHandler::class)
    );
};
