<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Veranstaltungen',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Bernhard Schütz',
    'author_email' => 'schuetz@azurgruen.de',
    'dependencies' => 'extbase,fluid,vhs',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.9.99',
            'vhs' => ''
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
