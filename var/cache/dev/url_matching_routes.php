<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil.index', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin.voyages', '_controller' => 'App\\Controller\\Admin\\AdminVoyagesController::index'], null, null, null, false, false, null]],
        '/admin/ajout' => [[['_route' => 'admin.voyage.ajout', '_controller' => 'App\\Controller\\Admin\\AdminVoyagesController::ajout'], null, null, null, false, false, null]],
        '/basefront' => [[['_route' => 'app_basefront', '_controller' => 'App\\Controller\\BasefrontController::index'], null, null, null, false, false, null]],
        '/voyages' => [[['_route' => 'voyages', '_controller' => 'App\\Controller\\VoyagesController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|suppr/([^/]++)(*:31)'
                    .'|edit/([^/]++)(*:51)'
                .')'
                .'|/voyages/(?'
                    .'|tri/([^/]++)/([^/]++)(*:92)'
                    .'|recherche/([^/]++)(*:117)'
                    .'|voyage/([^/]++)(*:140)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:180)'
                    .'|wdt/([^/]++)(*:200)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:246)'
                            .'|router(*:260)'
                            .'|exception(?'
                                .'|(*:280)'
                                .'|\\.css(*:293)'
                            .')'
                        .')'
                        .'|(*:303)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'admin.voyage.suppr', '_controller' => 'App\\Controller\\Admin\\AdminVoyagesController::suppr'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'admin.voyage.edit', '_controller' => 'App\\Controller\\Admin\\AdminVoyagesController::edit'], ['id'], null, null, false, true, null]],
        92 => [[['_route' => 'voyages.sort', '_controller' => 'App\\Controller\\VoyagesController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        117 => [[['_route' => 'voyages.findallequal', '_controller' => 'App\\Controller\\VoyagesController::findAllEqual'], ['champ'], null, null, false, true, null]],
        140 => [[['_route' => 'voyages.showone', '_controller' => 'App\\Controller\\VoyagesController::showOne'], ['id'], null, null, false, true, null]],
        180 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        200 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        246 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        260 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        280 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        293 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        303 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
