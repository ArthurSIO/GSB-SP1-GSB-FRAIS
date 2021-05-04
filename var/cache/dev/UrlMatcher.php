<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/visiteur' => [[['_route' => 'visiteur', '_controller' => 'App\\Controller\\VisiteurController::index'], null, null, null, false, false, null]],
        '/visiteur/menu/donnerDate' => [[['_route' => 'donnerDate', '_controller' => 'App\\Controller\\VisiteurController::donnerDate'], null, null, null, false, false, null]],
        '/visiteur/menu/renseigner' => [[['_route' => 'renseigner', '_controller' => 'App\\Controller\\VisiteurController::renseigner'], null, null, null, false, false, null]],
        '/visiteur/menu/creerHF' => [[['_route' => 'creerHF', '_controller' => 'App\\Controller\\VisiteurController::creerHF'], null, null, null, false, false, null]],
        '/comptable' => [[['_route' => 'comptable', '_controller' => 'App\\Controller\\ComptableController::index'], null, null, null, false, false, null]],
        '/comptable/choixVisMois' => [[['_route' => 'choisirVisMois', '_controller' => 'App\\Controller\\ComptableController::choisirVisMois'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/comptable/actualiseFrais/([^/]++)(*:76)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        76 => [
            [['_route' => 'actualiseFrais', '_controller' => 'App\\Controller\\ComptableController::actualiseFrais'], ['idFraisForfait'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
