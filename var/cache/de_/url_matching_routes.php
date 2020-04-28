<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/artworks/([^/]++)(*:193)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:255)'
                    .'|([A-z0-9_-]*)/(.+)(*:281)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'admin.delete', '_controller' => 'App\\Controller\\AdminArtworkController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        255 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        281 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
