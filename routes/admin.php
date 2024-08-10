<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IndustryTypeController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\OrganizationTypeController;
use App\Http\Controllers\Admin\PaymentSettingController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\ProfessionController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\StateController;
use App\Models\Admin;
use App\Models\Profession;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    /** Dashboard Route*/
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /** Industry Type Route*/
    Route::resource('industry-types', IndustryTypeController::class);

    /** Organization Type Route*/
    Route::resource('organization-types', OrganizationTypeController::class);

    /** Countries Route*/
    Route::resource('countries', CountryController::class);

    /** States Route*/
    Route::resource('states', StateController::class);

    /** City Route*/
    Route::resource('cities', CityController::class);
    Route::get('get-states/{country_id}', [LocationController::class, 'getStatesOfCountry'])->name('get-states');

    /** Language Route*/
    Route::resource('languages', LanguageController::class);

    /** Profession Route*/
    Route::resource('professions', ProfessionController::class);

    /** Skills Route*/
    Route::resource('skills', SkillController::class);

    /** Plans Route*/
    Route::resource('plans', PlanController::class);

    /** Payment Settings Route*/
    Route::get('payment-settings', [PaymentSettingController::class, 'index'])->name('payment-settings.index');
    Route::post('paypal-settings', [PaymentSettingController::class, 'updatePaypal'])->name('paypal-settings.update');
    Route::post('stripe-settings', [PaymentSettingController::class, 'updateStripe'])->name('stripe-settings.update');

    /** Site Settings Route*/
    Route::get('site-settings', [SiteSettingController::class, 'index'])->name('site-settings.index');
    Route::post('general-settings', [SiteSettingController::class, 'updateGeneralSetting'])->name('general-settings.update');
});


/** Industry Type Route
 * To check all routes list: ctrl+p then >Route List
 */
