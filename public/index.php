<?php

use Symfony\Component\HttpFoundation\Response;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    $number = random_int(0, 100);
    return new Response(
        '<html><body>Lucky number: '.$number.'</body></html>'
    );
};
