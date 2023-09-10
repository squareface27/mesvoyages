<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil.index', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin/environnements' => [[['_route' => 'admin.environnements', '_controller' => 'App\\Controller\\Admin\\AdminEnvironnementController::index'], null, null, null, false, false, null]],
        '/admin/environnement/ajout' => [[['_route' => 'admin.environnement.ajout', '_controller' => 'App\\Controller\\Admin\\AdminEnvironnementController::ajout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin.voyages', '_controller' => 'App\\Controller\\Admin\\AdminVoyagesController::index'], null, null, null, false, false, null]],
        '/admin/ajout' => [[['_route' => 'admin.voyage.ajout', '_controller' => 'App\\Controller\\Admin\\AdminVoyagesController::ajout'], null, null, null, false, false, null]],
        '/basefront' => [[['_route' => 'app_basefront', '_controller' => 'App\\Controller\\BasefrontController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
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
                    .'|e(?'
                        .'|nvironnement/suppr/([^/]++)(*:48)'
                        .'|dit/([^/]++)(*:67)'
                    .')'
                    .'|suppr/([^/]++)(*:89)'
                .')'
                .'|/voyages/(?'
                    .'|tri/([^/]++)/([^/]++)(*:130)'
                    .'|recherche/([^/]++)(*:156)'
                    .'|voyage/([^/]++)(*:179)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:219)'
                    .'|wdt/([^/]++)(*:239)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:285)'
                            .'|router(*:299)'
                            .'|exception(?'
                                .'|(*:319)'
                                .'|\\.css(*:332)'
                            .')'
                        .')'
                        .'|(*:342)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'admin.environnement.suppr', '_controller' => 'App\\Controller\\Admin\\AdminEnvironnementController::suppr'], ['id'], null, null, false, true, null]],
        67 => [[['_route' => 'admin.voyage.edit', '_controller' => 'App\\Controller\\Admin\\AdminVoyagesController::edit'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'admin.voyage.suppr', '_controller' => 'App\\Controller\\Admin\\AdminVoyagesController::suppr'], ['id'], null, null, false, true, null]],
        130 => [[['_route' => 'voyages.sort', '_controller' => 'App\\Controller\\VoyagesController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        156 => [[['_route' => 'voyages.findallequal', '_controller' => 'App\\Controller\\VoyagesController::findAllEqual'], ['champ'], null, null, false, true, null]],
        179 => [[['_route' => 'voyages.showone', '_controller' => 'App\\Controller\\VoyagesController::showOne'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        239 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        285 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        299 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        319 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        332 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        342 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
