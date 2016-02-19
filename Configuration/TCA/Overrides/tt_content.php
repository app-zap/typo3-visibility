<?php

$GLOBALS['TCA']['tt_content']['columns'] += [
    'tx_visibility_visibility' => [
        'label' => 'Visibility',
        'config' => [
            'type' => 'select',
            'renderType' =>  'selectSingle',
            'items' => [
                ['always', 0],
                ['hide for mobile', 1],
                ['hide for desktop', 2]
            ]
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_visibility_visibility', '', 'after:colPos');
