<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    | You can create a CMS page with route "/error" to set the contents
    | of this page. Otherwise a default error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', true),

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Eco Web Studio'),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'https://dev.ecowebstudio.co.uk'),

    /*
    |--------------------------------------------------------------------------
    | Asset URL
    |--------------------------------------------------------------------------
    |
    | This URL is used to properly generate URLs for assets, including
    | URLs generated by the `| theme` & `| asset` filters in Twig, or the
    | `Url::asset()` & `asset()` helpers. If set to null, the URL used will
    | be the current hostname or `app.url` config.
    |
    |     'asset_url' => 'https://cdn.example.com/',
    |
    */

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Trusted hosts
    |--------------------------------------------------------------------------
    |
    | You may specify valid hosts for your application as an array or boolean
    | below. This helps prevent host header poisoning attacks.
    |
    | Possible values:
    |  - `true`: Trust the host specified in app.url, as well as the "www"
    |            subdomain, if applicable.
    |  - `false`: Disable the trusted hosts feature.
    |  - array: Defines the domains to be trusted hosts. Each item should be
    |           a string defining a domain, IP address, or a regex pattern.
    |
    | Example of array values:
    |
    |    'trustedHosts' => [
    |       'example.com',           // Matches just example.com
    |       'www.example.com',       // Matches just www.example.com
    |       '^(.+\.)?example\.com$', // Matches example.com and all subdomains
    |       'https://example.com',   // Matches just example.com
    |    ],
    |
    | NOTE: Even when set to `false`, this functionality is explicitly enabled
    | on the Backend password reset flow for security reasons.
    */

    'trustedHosts' => false,

    /*
    |--------------------------------------------------------------------------
    | Trusted proxies
    |--------------------------------------------------------------------------
    |
    | You may specify valid proxies for your application, in order for URLs
    | and requests to be presented as the proxy address should you request
    | a URL through the proxy.
    |
    | Possible values:
    |  - `null` or `false`: Do not trust any proxies
    |  - `'*'`: Trust all proxies
    |  - string: A single or comma-separated list of proxies to trust
    |  - array: An array of proxies to trust
    |
    | Examples:
    |  - To trust all proxies:
    |
    |      'trustedProxies' => '*'
    |
    |  - To trust two IP addresses as proxies
    |
    |      'trustedProxies' => '192.168.1.1, 192.168.1.2'
    |      'trustedProxies' => ['192.168.1.1', '192.168.1.2']
    */

    'trustedProxies' => null,

    /*
    |--------------------------------------------------------------------------
    | Trusted proxy headers
    |--------------------------------------------------------------------------
    |
    | In addition to the above, you can also determine which headers to trust
    | from your proxy when rewriting the request. This is an integer map value
    | so you may specify more than one value.
    |
    | Possible values:
    |   - 'HEADER_X_FORWARDED_ALL' - trust all forwarded headers
    |   - Illuminate\Http\Request::HEADER_X_FORWARDED_FOR - trust only the proxy IP
    |   - Illuminate\Http\Request::HEADER_X_FORWARDED_HOST - trust only the proxy hostname
    |   - Illuminate\Http\Request::HEADER_X_FORWARDED_PORT - trust only the proxy port
    |   - Illuminate\Http\Request::HEADER_X_FORWARDED_PROTO - trust only the proxy protocol
    |   - Illuminate\Http\Request::HEADER_X_FORWARDED_PREFIX - trust only the proxy prefix
    |   - Illuminate\Http\Request::HEADER_X_FORWARDED_AWS_ELB - trust Amazon Elastic Load Balancing headers
    |   - Illuminate\Http\Request::HEADER_X_FORWARDED_TRAEFIK - trust Traefik reverse proxy headers
    |
    | Examples:
    |   - To trust only the hostname, use the following:
    |
    |       'trustedProxyHeaders' => Illuminate\Http\Request::HEADER_X_FORWARDED_HOST
    |
    |   - For trusting all except the protocol, you can use the following:
    |
    |       'trustedProxyHeaders' => Illuminate\Http\Request::HEADER_X_FORWARDED_FOR
    |           | Illuminate\Http\Request::HEADER_X_FORWARDED_HOST
    |           | Illuminate\Http\Request::HEADER_X_FORWARDED_PORT
    |
    |   - Amazon ELB users should always use the "HEADER_X_FORWARDED_AWS_ELB" option.
    */

    'trustedProxyHeaders' => 'HEADER_X_FORWARDED_ALL',

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    |
    | -------- STOP! --------
    | Before you change this value, consider carefully if that is actually
    | what you want to do. It is HIGHLY recommended that this is always set
    | to UTC (as your server & DB timezone should be as well) and instead you
    | use cms.backendTimezone to set the default timezone used in the backend
    | to display dates & times.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    | WARNING: Avoid setting this to a locale that is not supported by the
    | backend yet, as this can cause issues in the backend.
    |
    | Currently supported backend locales are listed in
    | Backend\Models\Preference->getLocaleOptions()
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY', ''),
    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => array_merge(include(base_path('modules/system/providers.php')), [

        // 'Illuminate\Html\HtmlServiceProvider', // Example

        System\ServiceProvider::class,
    ]),

    /*
    |--------------------------------------------------------------------------
    | Load automatically discovered packages
    |--------------------------------------------------------------------------
    |
    | By default, Winter CMS disables the loading of discovered packages
    | through Laravel's package discovery service, in order to allow packages
    | used by plugins to be disabled if the plugin itself is disabled.
    |
    | Set this to `true` to enable automatic loading of these packages. This
    | will result in packages being loaded, even if the plugin using them is
    | disabled. This is NOT RECOMMENDED.
    |
    | Please note that packages defined in `app.providers` will still be loaded
    | even if discovery is disabled.
    |
    */

    'loadDiscoveredPackages' => false,

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => array_merge(include(base_path('modules/system/aliases.php')), [
        // 'Str' => 'Illuminate\Support\Str', // Example
    ]),
];
