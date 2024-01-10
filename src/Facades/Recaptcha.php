<?php

namespace Pellu\Recaptcha\Facades;

use Illuminate\Support\Facades\Facade;
use Pellu\Recaptcha\Recaptcha as RecaptchaInstance;

/**
 * Recaptcha Facade
 *
 * @package Pellu\Recaptcha\Facades
 * @see RecaptchaInstance
 */
class Recaptcha extends Facade
{
    protected static function getFacadeAccessor()
    {
        return RecaptchaInstance::class;
    }
}