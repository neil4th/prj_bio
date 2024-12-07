<?php

use App\Http\Controllers\BiometricController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PositionEntry;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PersonalDataController;
use App\person_data;

Route::get('/', function () {
    return view('bps_biometric');
});

Route::get('/bps-biometric', function () {
    return view('dailytimerecord');
})->name('bps-biometric');



Route::get('/position', function () {
    return view('pages.position');
})->name('position-page');


// // Handle the form submission
Route::post('/position', [PositionEntry::class, 'store'])->name('position-store');
Route::get('/person', [PersonalDataController::class, 'getAllpersonalData']);
Route::post('/new_person', [PersonalDataController::class, 'createNewpersonalData'])->name('newFerson');




// portal
Route::get('/portal', function () {
    return view('bps_portal');
})->name('My Portal');

// main routes
Route::get('/portal/admin', function () {
    return view('portal.admin_dashboard');
});



Route::get('/employee', function () {
    return view('portal.employee.dashboard_emp');
})->name('employee');


Route::get('/portal/accounting', function () {
    return view('portal.admin_accounting');
});



 // ***** Route Group for HRMS System View *****
Route::group(['prefix' => 'hrms'], function() {
    Route::get('dashboard_hrms', function () { return view('portal.hrms.dashboard_hrms'); })->name('Dashboard-hrms');
    // Route for job application page
    Route::get('job-application', function () {return view('portal.hrms.job_application'); })->name('jobApplication');
    // Route for job postings page
    Route::get('job-postings', function () {return view('portal.hrms.job_postings'); })->name('jobPosting');
    // Route for new employee candidate page

    Route::get('employee-candidate', function () {
        $personaldata = person_data::all();
        return view('portal.hrms.employee_candidate',compact('personaldata'));})->name('employeeCandidate');
    // Route for new employee page
    Route::get('new-employee', function () {return view('portal.hrms.new_employee');})->name('newEmployee');
    // Route for new person page
    Route::get('new-person', function () {return view('portal.hrms.new_person');})->name('newPerson');
    // Route for auth controller
    Route::post('/auth/login',  [EmployeeController::class, 'login_hrms'])->name('hrms-auth-login');
    Route::post('/auth/register',  [EmployeeController::class, 'register_hrms'])->name('hrms-auth-register');
});
    
    // route for jobpost function
    Route::post('/jobpost',  [JobPostController::class, 'createJobpost'])->name('jobpost');
    // biometric dtr
    Route::post('/timein', [BiometricController::class, 'timein'])->name('bio-timein');
    Route::post('/timeout', [BiometricController::class, 'timeout'])->name('bio-timeout');



   // ***** Route Group for Employee System View *****
Route::group(['prefix' => 'employee'], function() {
    // Route for Dashboard
    Route::get('dashboard', function () {return view('portal.employee.dashboard_emp'); })->name('employeeDashboard');
    // Route for Dtr Page
    Route::get('dtr', function () {return view('portal.employee.mydtr'); })->name('DTR');
    // Route for DTR Print Page
    Route::get('Print_dtr', function () {return view('portal.employee.dtr_print'); })->name('print_dtr');
});

















// functions
// Route::get('/api/employee', [EmployeeController::class, 'getAllEmployees']);
// Route::post('/api/employee', [EmployeeController::class, 'createNewEmployee']);
// Route::get('/api/employee/{employee}', [EmployeeController::class, 'getEmployee']);
// Route::put('/api/employee/{employee}', [EmployeeController::class, 'updateEmployeeInfo']);
// Route::delete('/api/employee/{employee}', [EmployeeController::class, 'removeEmployeeData']);

// bren routes



Route::group(['prefix' => 'email'], function(){
    Route::get('inbox', function () { return view('pages.email.inbox'); });
    Route::get('read', function () { return view('pages.email.read'); });
    Route::get('compose', function () { return view('pages.email.compose'); });
});

Route::group(['prefix' => 'apps'], function(){
    Route::get('chat', function () { return view('pages.apps.chat'); });
    Route::get('calendar', function () { return view('pages.apps.calendar'); });
});

Route::group(['prefix' => 'ui-components'], function(){
    Route::get('accordion', function () { return view('pages.ui-components.accordion'); });
    Route::get('alerts', function () { return view('pages.ui-components.alerts'); });
    Route::get('badges', function () { return view('pages.ui-components.badges'); });
    Route::get('breadcrumbs', function () { return view('pages.ui-components.breadcrumbs'); });
    Route::get('buttons', function () { return view('pages.ui-components.buttons'); });
    Route::get('button-group', function () { return view('pages.ui-components.button-group'); });
    Route::get('cards', function () { return view('pages.ui-components.cards'); });
    Route::get('carousel', function () { return view('pages.ui-components.carousel'); });
    Route::get('collapse', function () { return view('pages.ui-components.collapse'); });
    Route::get('dropdowns', function () { return view('pages.ui-components.dropdowns'); });
    Route::get('list-group', function () { return view('pages.ui-components.list-group'); });
    Route::get('media-object', function () { return view('pages.ui-components.media-object'); });
    Route::get('modal', function () { return view('pages.ui-components.modal'); });
    Route::get('navs', function () { return view('pages.ui-components.navs'); });
    Route::get('navbar', function () { return view('pages.ui-components.navbar'); });
    Route::get('pagination', function () { return view('pages.ui-components.pagination'); });
    Route::get('popovers', function () { return view('pages.ui-components.popovers'); });
    Route::get('progress', function () { return view('pages.ui-components.progress'); });
    Route::get('scrollbar', function () { return view('pages.ui-components.scrollbar'); });
    Route::get('scrollspy', function () { return view('pages.ui-components.scrollspy'); });
    Route::get('spinners', function () { return view('pages.ui-components.spinners'); });
    Route::get('tabs', function () { return view('pages.ui-components.tabs'); });
    Route::get('tooltips', function () { return view('pages.ui-components.tooltips'); });
});

Route::group(['prefix' => 'advanced-ui'], function(){
    Route::get('cropper', function () { return view('pages.advanced-ui.cropper'); });
    Route::get('owl-carousel', function () { return view('pages.advanced-ui.owl-carousel'); });
    Route::get('sortablejs', function () { return view('pages.advanced-ui.sortablejs'); });
    Route::get('sweet-alert', function () { return view('pages.advanced-ui.sweet-alert'); });
});

Route::group(['prefix' => 'forms'], function(){
    Route::get('basic-elements', function () { return view('pages.forms.basic-elements'); });
    Route::get('advanced-elements', function () { return view('pages.forms.advanced-elements'); });
    Route::get('editors', function () { return view('pages.forms.editors'); });
    Route::get('wizard', function () { return view('pages.forms.wizard'); });
});

Route::group(['prefix' => 'charts'], function(){
    Route::get('apex', function () { return view('pages.charts.apex'); });
    Route::get('chartjs', function () { return view('pages.charts.chartjs'); });
    Route::get('flot', function () { return view('pages.charts.flot'); });
    Route::get('peity', function () { return view('pages.charts.peity'); });
    Route::get('sparkline', function () { return view('pages.charts.sparkline'); });
});

Route::group(['prefix' => 'tables'], function(){
    Route::get('basic-tables', function () { return view('pages.tables.basic-tables'); });
    Route::get('data-table', function () { return view('pages.tables.data-table'); });
});

Route::group(['prefix' => 'icons'], function(){
    Route::get('feather-icons', function () { return view('pages.icons.feather-icons'); });
    Route::get('mdi-icons', function () { return view('pages.icons.mdi-icons'); });
});

Route::group(['prefix' => 'general'], function(){
    Route::get('blank-page', function () { return view('pages.general.blank-page'); });
    Route::get('faq', function () { return view('pages.general.faq'); });
    Route::get('invoice', function () { return view('pages.general.invoice'); });
    Route::get('profile', function () { return view('pages.general.profile'); });
    Route::get('pricing', function () { return view('pages.general.pricing'); });
    Route::get('timeline', function () { return view('pages.general.timeline'); });
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('login', function () { return view('pages.auth.login'); });
    Route::get('register', function () { return view('pages.auth.register'); });
});

Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('pages.error.404'); });
    Route::get('500', function () { return view('pages.error.500'); });
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// // 404 for undefined routes
// Route::any('/{page?}',function(){
//     return View::make('pages.error.404');
// })->where('page','.*');
