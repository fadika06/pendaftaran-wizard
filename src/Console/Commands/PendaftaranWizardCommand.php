<?php

namespace Bantenprov\PendaftaranWizard\Console\Commands;

use Illuminate\Console\Command;

/**
 * The PendaftaranWizardCommand class.
 *
 * @package Bantenprov\PendaftaranWizard
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PendaftaranWizardCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:pendaftaran-wizard';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\PendaftaranWizard package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenprov\PendaftaranWizard package');
    }
}
