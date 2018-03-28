<?php

Route::group(['prefix' => 'api/pendaftaran-wizard', 'middleware' => ['web']], function() {
    $controllers = (object) [
        'index'     => 'Bantenprov\PendaftaranWizard\Http\Controllers\PendaftaranWizardController@index',
        'create'    => 'Bantenprov\PendaftaranWizard\Http\Controllers\PendaftaranWizardController@create',
        'show'      => 'Bantenprov\PendaftaranWizard\Http\Controllers\PendaftaranWizardController@show',
        'store'     => 'Bantenprov\PendaftaranWizard\Http\Controllers\PendaftaranWizardController@store',
        'edit'      => 'Bantenprov\PendaftaranWizard\Http\Controllers\PendaftaranWizardController@edit',
        'update'    => 'Bantenprov\PendaftaranWizard\Http\Controllers\PendaftaranWizardController@update',
        'destroy'   => 'Bantenprov\PendaftaranWizard\Http\Controllers\PendaftaranWizardController@destroy',
    ];

    Route::get('/',             $controllers->index)->name('pendaftaran-wizard.index');
    Route::get('/create',       $controllers->create)->name('pendaftaran-wizard.create');
    Route::get('/{id}',         $controllers->show)->name('pendaftaran-wizard.show');
    Route::post('/',            $controllers->store)->name('pendaftaran-wizard.store');
    Route::get('/{id}/edit',    $controllers->edit)->name('pendaftaran-wizard.edit');
    Route::put('/{id}',         $controllers->update)->name('pendaftaran-wizard.update');
    Route::delete('/{id}',      $controllers->destroy)->name('pendaftaran-wizard.destroy');
});
