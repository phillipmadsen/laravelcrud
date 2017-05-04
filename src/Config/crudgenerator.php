<?php

return [

    'custom_template' => false,

    /*
    |--------------------------------------------------------------------------
    | Crud Generator Template Stubs Storage Path
    |--------------------------------------------------------------------------
    |
    | Here you can specify your custom template path for the generator.
    |
     */

    'path' => base_path('resources/'),
    
    'modelPath' => base_path('app/Models/'),
    'modelNamespace' => base_path('App\Models'),

    'route' => base_path('routes/web.php'),

    'viewMasterPath'=>base_path('resources/views/backLayout/')

];
