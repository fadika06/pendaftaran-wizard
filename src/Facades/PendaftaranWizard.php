<?php

namespace Bantenprov\PendaftaranWizard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The PendaftaranWizard facade.
 *
 * @package Bantenprov\PendaftaranWizard
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PendaftaranWizardFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pendaftaran-wizard';
    }
}
