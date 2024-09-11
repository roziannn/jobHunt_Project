<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CustomPageBuilderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\IndustryTypeController;
use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\JobExperienceController;
use App\Http\Controllers\Admin\JobLocationController;
use App\Http\Controllers\Admin\JobRoleController;
use App\Http\Controllers\Admin\JobTypeController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\LearnMoreController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrganizationTypeController;
use App\Http\Controllers\Admin\PaymentSettingController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\ProfessionController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SalaryTypeController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\WhyChooseUsController;
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

    /** Order Route*/
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('orders/invoice/{id}', [OrderController::class, 'invoice'])->name('orders.invoice');

    /** Job Category Route*/
    Route::resource('job-categories', JobCategoryController::class);
    /** Job Education Route*/
    Route::resource('educations', EducationController::class);
    /** Job Type Route*/
    Route::resource('job-types', JobTypeController::class);
    /** Job Salary Route*/
    Route::resource('salary-types', SalaryTypeController::class);
    /** Job Tag Route*/
    Route::resource('tags', TagController::class);
    /** Job Role Route*/
    Route::resource('job-roles', JobRoleController::class);
    /** Job Experience Route*/
    Route::resource('job-experiences', JobExperienceController::class);

    /** Jobs */
    Route::post('job-status/{id}', [JobController::class, 'changeStatus'])->name('job-status.update');
    Route::resource('jobs', JobController::class);

    /** Blogs */
    Route::resource('blogs', BlogController::class);

    /** Hero Section */
    Route::resource('heros', HeroController::class);

    /** Why Choose Us Section */
    Route::resource('why-choose-us', WhyChooseUsController::class);

    /** Learn More Section */
    Route::resource('learn-more', LearnMoreController::class);

    /** Counter Section */
    Route::resource('counter', CounterController::class);

    /** Job Location Section */
    Route::resource('job-location', JobLocationController::class);

    /** Review Section */
    Route::resource('reviews', ReviewController::class);

    /** About Us Page */
    Route::resource('about-us', AboutController::class);

    /** Custom Page Builder*/
    Route::resource('page-builder', CustomPageBuilderController::class);

    /** Newsletter*/
    Route::get('newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');
    Route::delete('newsletter/{id}', [NewsletterController::class, 'destroy'])->name('newsletter.destroy');
    Route::post('newsletter', [NewsletterController::class, 'sendMail'])->name('newsletter.send-mail');

    /** Payment Settings Route*/
    Route::get('payment-settings', [PaymentSettingController::class, 'index'])->name('payment-settings.index');

    Route::post('paypal-settings', [PaymentSettingController::class, 'updatePaypal'])->name('paypal-settings.update');
    Route::post('stripe-settings', [PaymentSettingController::class, 'updateStripe'])->name('stripe-settings.update');
    Route::post('razorpay-settings', [PaymentSettingController::class, 'updateRazorpay'])->name('razorpay-settings.update');

    /** Site Settings Route*/
    Route::get('site-settings', [SiteSettingController::class, 'index'])->name('site-settings.index');
    Route::post('general-settings', [SiteSettingController::class, 'updateGeneralSetting'])->name('general-settings.update');
});


/** Industry Type Route
 * To check all routes list: ctrl+p then >Route List
 */
