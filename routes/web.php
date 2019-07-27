<?php

Route::get('/',[
   'uses' => 'ProjectController@index',
   'as'   => '/'
]);

Route::get('/about',[
   'uses' => 'ProjectController@about',
   'as'   => 'about'
]);

Route::get('/blog',[
   'uses' => 'ProjectController@blog',
   'as'   => 'blog'
]);




Route::get('/contact',[
   'uses' => 'ContactController@contact',
   'as'   => 'contact'
]);

Route::post('/new-contact',[
   'uses' => 'ContactController@newContact',
   'as'   => 'new-contact'
]);

Route::get('/company-sign-up',[
   'uses' => 'CompanySignUpController@index',
   'as'   => 'company-sign-up'
]);

Route::post('/new-company-sign-up',[
   'uses' => 'CompanySignUpController@newCompanySignUp',
   'as'   => 'new-company-sign-up'
]);

Route::post('/company-visitor-logout',[
   'uses' => 'CompanySignUpController@companyVisitorLogout',
   'as'   => 'company-visitor-logout'
]);

Route::get('/company-login',[
    'uses' => 'CompanySignUpController@companyLogin',
    'as'   => 'company-login'
]);

Route::post('/new-company-login',[
    'uses' => 'CompanySignUpController@newCompanyLogin',
    'as'   => 'new-company-login'
]);

Route::get('/company-dashboard',[
    'uses' => 'CompanyJobPostController@companyDashboard',
    'as'   => 'company-dashboard'
]);

Route::post('/new-company-job-post',[
    'uses' => 'CompanyJobPostController@newCompanyJobPost',
    'as'   => 'new-company-job-post'
]);





Route::get('/send-application',[
    'uses' => 'CompanyReceiveJobPostController@sendApplication',
    'as'   => 'send-application'
]);





Route::get('/candidate-sign-up',[
    'uses' => 'CandidateSignUpController@index',
    'as'   => 'candidate-sign-up'
]);

Route::post('/new-candidate-sign-up',[
    'uses' => 'CandidateSignUpController@newCandidateSignUp',
    'as'   => 'new-candidate-sign-up'
]);

Route::post('/candidate-visitor-logout',[
    'uses' => 'CandidateSignUpController@candidateVisitorLogout',
    'as'   => 'candidate-visitor-logout'
]);

Route::get('/candidate-login',[
    'uses' => 'CandidateSignUpController@candidateLogin',
    'as'   => 'candidate-login'
]);

Route::post('/new-candidate-login',[
    'uses' => 'CandidateSignUpController@newCandidateLogin',
    'as'   => 'new-candidate-login'
]);

Route::get('/candidate-profile',[
    'uses' => 'CandidateJobController@candidateProfile',
    'as'   => 'candidate-profile'
]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'test'], function () {


    Route::get('job/add-job',[
        'uses' => 'AdminJobController@addJob',
        'as'   => 'add-job'
    ]);

    Route::post('job/new-job',[
        'uses' => 'AdminJobController@newJob',
        'as'   => 'new-job'
    ]);

    Route::get('job/manage-job',[
        'uses' => 'AdminJobController@manageJob',
        'as'   => 'manage-job'
    ]);

    Route::get('job/edit-job/{id}',[
        'uses' => 'AdminJobController@editJob',
        'as'   => 'edit-job'
    ]);

    Route::post('job/update-job',[
        'uses' => 'AdminJobController@updateJob',
        'as'   => 'update-job'
    ]);

    Route::post('job/delete-job',[
        'uses' => 'AdminJobController@deleteJob',
        'as'   => 'delete-job'
    ]);

    Route::get('/see-company',[
        'uses' => 'RegisteredCompanyController@seeCompany',
        'as'   => 'see-company'
    ]);

    Route::post('/delete-company',[
        'uses' => 'RegisteredCompanyController@deleteCompany',
        'as'   => 'delete-company'
    ]);

    Route::get('/see-candidate',[
        'uses' => 'RegisteredCandidateController@seeCandidate',
        'as'   => 'see-candidate'
    ]);

    Route::post('/delete-candidate',[
        'uses' => 'RegisteredCandidateController@deleteCandidate',
        'as'   => 'delete-candidate'
    ]);




    Route::get('/see-contact',[
        'uses' => 'ContactController@seeContact',
        'as'   => 'see-contact'
    ]);

    Route::post('/delete-contact',[
        'uses' => 'ContactController@deleteContact',
        'as'   => 'delete-contact'
    ]);
});


