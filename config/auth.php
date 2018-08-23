<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'admin-api' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'adviser' => [
            'driver' => 'session',
            'provider' => 'advisers',
        ],

        'adviser-api' => [
            'driver' => 'session',
            'provider' => 'advisers',
        ],

        'aposys' => [
            'driver' => 'session',
            'provider' => 'aposys',
        ],

        'aposys-api' => [
            'driver' => 'session',
            'provider' => 'aposys',
        ],

        'cashier' => [
            'driver' => 'session',
            'provider' => 'cashiers',
        ],

        'cashier-api' => [
            'driver' => 'session',
            'provider' => 'cashiers',
        ],

        'e2e_ojt' => [
            'driver' => 'session',
            'provider' => 'e2e_ojts',
        ],

        'e2e_ojt-api' => [
            'driver' => 'session',
            'provider' => 'e2e_ojts',
        ],

        'registrar' => [
            'driver' => 'session',
            'provider' => 'registrars',
        ],

        'registrar-api' => [
            'driver' => 'session',
            'provider' => 'registrars',
        ],

        'student_assistant' => [
            'driver' => 'session',
            'provider' => 'student__assistants',
        ],

        'student_assistant-api' => [
            'driver' => 'session',
            'provider' => 'student__assistants',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],

        'advisers' => [
            'driver' => 'eloquent',
            'model' => App\Adviser::class,
        ],

        'aposys' => [
            'driver' => 'eloquent',
            'model' => App\Aposys::class,
        ],

        'cashiers' => [
            'driver' => 'eloquent',
            'model' => App\Cashier::class,
        ],

        'e2e_ojts' => [
            'driver' => 'eloquent',
            'model' => App\E2e_ojt::class,
        ],

        'registrars' => [
            'driver' => 'eloquent',
            'model' => App\Registrar::class,
        ],

        'student__assistants' => [
            'driver' => 'eloquent',
            'model' => App\Student_Assistant::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'advisers' => [
            'provider' => 'advisers',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'aposys' => [
            'provider' => 'aposys',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'cashier' => [
            'provider' => 'cashiers',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'e2e_ojt' => [
            'provider' => 'e2e_ojts',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'registrar' => [
            'provider' => 'registrar',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'student_assistant' => [
            'provider' => 'student__assistants',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
