<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/e/statmohamed' => [[['_route' => 'statmohamed', '_controller' => 'App\\Controller\\EvenementController::reclamation_stat'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/evenement/pdf' => [[['_route' => 'pdf0', '_controller' => 'App\\Controller\\EvenementController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/gategorie/evenement' => [[['_route' => 'gategorie_evenement_index', '_controller' => 'App\\Controller\\GategorieEvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gategorie/evenement/new' => [[['_route' => 'gategorie_evenement_new', '_controller' => 'App\\Controller\\GategorieEvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gategorie/evenement/gategorie/pdfsnappy' => [[['_route' => 'pdfsnappy', '_controller' => 'App\\Controller\\GategorieEvenementController::listCandidats'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_reservation_search', '_controller' => 'App\\Controller\\IndexController::search'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/template' => [[['_route' => 'template', '_controller' => 'App\\Controller\\TemplateController::index'], null, null, null, false, false, null]],
        '/templatefront' => [[['_route' => 'templatefront', '_controller' => 'App\\Controller\\TemplateController::indexfront'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/evenement/(?'
                    .'|([^/]++)(?'
                        .'|(*:32)'
                        .'|/edit(*:44)'
                        .'|(*:51)'
                    .')'
                    .'|r/([^/]++)(*:69)'
                .')'
                .'|/gategorie/evenement/([^/]++)(?'
                    .'|(*:109)'
                    .'|/edit(*:122)'
                    .'|(*:130)'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|([^/]++)(?'
                            .'|(*:169)'
                            .'|/edit(*:182)'
                        .')'
                        .'|delete/([^/]++)(*:206)'
                    .')'
                    .'|servation/(?'
                        .'|([^/]++)/edit(*:241)'
                        .'|delete/([^/]++)(*:264)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:302)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:341)'
                    .'|wdt/([^/]++)(*:361)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:407)'
                            .'|router(*:421)'
                            .'|exception(?'
                                .'|(*:441)'
                                .'|\\.css(*:454)'
                            .')'
                        .')'
                        .'|(*:464)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        69 => [[['_route' => 'showmapevenement', '_controller' => 'App\\Controller\\EvenementController::showMap'], ['id'], ['GET' => 0], null, false, true, null]],
        109 => [[['_route' => 'gategorie_evenement_show', '_controller' => 'App\\Controller\\GategorieEvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        122 => [[['_route' => 'gategorie_evenement_edit', '_controller' => 'App\\Controller\\GategorieEvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        130 => [[['_route' => 'gategorie_evenement_delete', '_controller' => 'App\\Controller\\GategorieEvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        169 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        182 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        206 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        341 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        361 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        407 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        421 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        441 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        454 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        464 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
