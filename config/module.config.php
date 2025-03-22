<?php
namespace LHDBlang;

return [
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => OMEKA_PATH . '/modules/LHDBlang/language',
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
];
