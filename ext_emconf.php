<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Dot Forms',
    'description' => 'Create virtual fields just like flex forms, but with pure TCA.',
    'version' => '2.0.0',
    'category' => 'be',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.99.99',
        ],
    ],
    'state' => 'stable',
    'author' => 'Thorben Nissen',
    'author_email' => 'thorben@webcoast.dk',
    'author_company' => 'WEBcoast',
    'autoload' => [
        'psr-4' => [
            'WEBcoast\\DotForms\\' => 'Classes',
        ],
    ],
];
