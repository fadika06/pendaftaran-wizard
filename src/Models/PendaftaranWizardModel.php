<?php namespace Bantenprov\PendaftaranWizard\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The PendaftaranWizardModel class.
 *
 * @package Bantenprov\PendaftaranWizard
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PendaftaranWizardModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'pendaftaran';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
