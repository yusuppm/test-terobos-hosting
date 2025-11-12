<?php

return [
    'credentials' => [
        'file' => env('FIREBASE_CREDENTIALS'),
    ],
    'database' => [
        'url' => env('FIREBASE_DATABASE_URL'),
    ],
    'api_key' => env('FIREBASE_API_KEY'),
    'project_id' => env('FIREBASE_PROJECT_ID'),
    
    // Collections/References
    'collections' => [
        'users' => 'users',
        'news' => 'news',
        'projects' => 'projects',
        'shops' => 'shops',
    ],
];
