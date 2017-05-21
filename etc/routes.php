<?php

return [
    ['GET', '/', \CheckIn\App\Controller\HomeController::class],
    ['GET', '/checkin', \CheckIn\App\Controller\CheckinController::class],
];
