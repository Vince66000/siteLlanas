<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin.getAll' => [[['_route' => 'admin.getAll', '_controller' => 'App\\Controller\\AdminArtworkController::index'], null, null, null, false, false, null]],
        '/Admin.new.artwork' => [[['_route' => 'admin.new.artwork', '_controller' => 'App\\Controller\\AdminArtworkController::new'], null, null, null, false, false, null]],
        '/getAcrylic' => [[['_route' => 'getAcrylic', '_controller' => 'App\\Controller\\ArtworksController::getAcrylic'], null, null, null, false, false, null]],
        '/getPastel' => [[['_route' => 'getPastel', '_controller' => 'App\\Controller\\ArtworksController::getPastel'], null, null, null, false, false, null]],
        '/getInk' => [[['_route' => 'getInk', '_controller' => 'App\\Controller\\ArtworksController::getInk'], null, null, null, false, false, null]],
        '/getSticking' => [[['_route' => 'getSticking', '_controller' => 'App\\Controller\\ArtworksController::getSticking'], null, null, null, false, false, null]],
        '/getDraws' => [[['_route' => 'getDraws', '_controller' => 'App\\Controller\\ArtworksController::getDraws'], null, null, null, false, false, null]],
        '/getWatercolor' => [[['_route' => 'getWatercolor', '_controller' => 'App\\Controller\\ArtworksController::getWatercolor'], null, null, null, false, false, null]],
        '/getVarious' => [[['_route' => 'getVarious', '_controller' => 'App\\Controller\\ArtworksController::getVarious'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact/newMail' => [[['_route' => 'contact/newMail', '_controller' => 'App\\Controller\\ContactController::newMail'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/news' => [[['_route' => 'news', '_controller' => 'App\\Controller\\NewsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/workshop' => [[['_route' => 'workshop', '_controller' => 'App\\Controller\\WorkshopController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/artworks/([^/]++)(*:31)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:92)'
                    .'|([A-z0-9_-]*)/(.+)(*:117)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'admin.delete', '_controller' => 'App\\Controller\\AdminArtworkController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        92 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        117 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
