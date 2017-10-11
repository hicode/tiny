<?php

return [
    'source_disk' => env('IMAGE_DISK', 'local'),
    'cache_disk' => env('IMAGE_DISK', 'local'),
    'source_path_prefix' => 'uploads/images',
    'cache_path_prefix' => 'uploads/images/.cache',
    'base_url' => 'img',
    'default_style' => [
        'q' => 75
    ],
    // xs < sm < md < lg
    'presets' => [
        'avatar_xs' => [
            'w' => 30,
            'h' => 30,
            'fit' => 'crop',
        ],
        'avatar_sm' => [
            'w' => 100,
            'h' => 100,
            'fit' => 'crop',
        ],
        'avatar_md' => [
            'w' => 200,
            'h' => 200,
            'fit' => 'crop',
        ]
    ],
    'upload_key' => 'image',
    'route_name' => 'image'
];
