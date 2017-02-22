<?php

/**
 * Admin panel
 */
Route::group([
    'prefix' => 'admin',
    'middleware' => ['web', 'admin', 'role:admin'],
    'namespace' => 'Admin'
], function () {
    Route::get('dashboard', '\Backpack\Base\app\Http\Controllers\AdminController@dashboard');
    CRUD::resource('user', 'UserController');
    CRUD::resource('responsibility', 'ResponsibilityController');
    CRUD::resource('highway', 'HighwayController');
    CRUD::resource('concessionaire', 'ConcessionaireController');
    CRUD::resource('contractor_category', 'ContractorCategoryController');
    CRUD::resource('development_details', 'DevelopmentDetailsController');
    CRUD::resource('development_type', 'DevelopmentTypeController');
    CRUD::resource('application_category', 'ApplicationCategoryController');
    CRUD::resource('payment_type', 'PaymentTypeController');
    CRUD::resource('regional_office', 'RegionalOfficeController');
    CRUD::resource('zone', 'ZoneController');
    CRUD::resource('local_authority', 'AuthorityController');
    \CRUD::resource('ad_processing_fee', 'Ad\ProcessingFeeController');
    \CRUD::resource('ad_services_fee', 'Ad\ServicesFeeController');
    \CRUD::resource('highway_processing_fee', 'Highway\ProcessingFeeController');
    \CRUD::resource('highway_services_fee', 'Highway\ServicesFeeController');

});

/**
 * Auth
 */
Route::group(['middleware' => ['web']], function() {
    Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);
    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);

    // Registration Routes...
    Route::group(['as' => 'register.', 'prefix' => 'register'], function () {
        Route::get('/', ['as' => 'auth.register', 'uses' => 'RegisterController@index']);
        Route::get('finish', ['as' => 'finish', 'uses' => 'RegisterController@finish']);
        Route::get('{type}', ['as' => 'step2', 'uses' => 'RegisterController@second']);
        Route::post('{type}', ['as' => 'step2', 'uses' => 'RegisterController@post']);
    });

    // Password Reset Routes...
    Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
    Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
    Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);


    // Activate user
    Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');

    Route::get('/', 'HomeController@index');

    Route::get('documents/{application_id}/{file}', 'HomeController@document')
        ->where(['id' => '[0-9]+', 'file' => '[a-zA-Z0-9_\-]+\.[A-Za-z]{3}']);
});

Route::group(['middleware' => ['web', 'auth']], function(){

    /**
     * Dashboard
     */
    Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], function () {

        Route::get('/', ['as' => 'index', 'uses' => 'DashboardController@index']);
        Route::get('data', ['as' => 'data', 'uses' => 'DashboardController@getData']);

        /**
         * Applications
         */
        Route::group(['as' => 'application.', 'prefix' => 'application'], function () {
            Route::get('edit/{application}', ['as' => 'edit', 'uses' => 'DashboardController@editApplication']);
        });

    });

    /**
     * Apply
     */
    Route::group(['as' => 'apply.', 'prefix' => 'apply'], function(){

        Route::get('/', ['as' => 'index', 'uses' => 'ApplicationController@index']);
        Route::get('{type}/form', ['as' => 'second', 'uses' => 'ApplicationController@second']);
        Route::post('{type}/form', ['as' => 'second', 'uses' => 'ApplicationController@secondStore']);

        Route::get('{type}/fee', ['as' => 'third', 'uses' => 'ApplicationController@third']);
        Route::post('{type}/fee', ['as' => 'third', 'uses' => 'ApplicationController@thirdStore']);

        Route::get('{type}/wait/', ['as' => 'fourth', 'uses' => 'ApplicationController@fourth']);
        Route::post('{type}/wait', ['as' => 'fourth', 'uses' => 'ApplicationController@fourthStore']);

        Route::get('{type}/success', ['as' => 'fifth', 'uses' => 'ApplicationController@fifth']);

        Route::get('local_authorities/{id?}', ['as' => 'local_authorities', 'uses' => 'ApplicationController@getLocalAuthorities']);
        Route::get('fees/{development_type_id?}', ['as' => 'fees', 'uses' => 'ApplicationController@getProcessingFees']);

    });

    /**
     * Internal area
     */
    Route::group(['as' => 'internal.', 'namespace' => 'Internal', 'prefix' => 'internal'], function() {

        /**
         * BKPA
         */
        Route::group([
            'as' => 'bkpa.',
            'prefix' => 'bkpa',
            'namespace' => 'BKPA',
            'middleware' => ['role:admin,bkpa']
        ], function () {

            /**
             * Inbox
             */
            Route::group(['as' => 'inbox.'], function(){
                Route::get('/', ['as' => 'index', 'uses' => 'InboxController@index']);
                Route::get('inbox/data', ['as' => 'data', 'uses' => 'InboxController@getData']);
            });

            /**
             * Receipt
             */
            Route::group(['as' => 'receipt.', 'prefix' => 'receipt'], function(){
                Route::get('/', ['as' => 'index', 'uses' => 'ReceiptController@index']);
                Route::get('data', ['as' => 'data', 'uses' => 'ReceiptController@getData']);

                Route::get('action/{payment?}', ['as' => 'action', 'uses' => 'ReceiptController@getActionForm']);
                Route::post('action/{payment?}', ['as' => 'actionPost', 'uses' => 'ReceiptController@action']);

                Route::get('info/{application}', ['as' => 'info', 'uses' => 'ReceiptController@getInfo']);
            });

        });

        /**
         * BPO
         */
        Route::group([
            'as' => 'bpo.',
            'prefix' => 'bpo',
            'namespace' => 'BPO',
            'middleware' => ['role:admin,bpo']
        ], function () {
            /**
             * Inbox
             */
            Route::group(['as' => 'inbox.'], function(){
                Route::get('/', ['as' => 'index', 'uses' => 'InboxController@index']);
                Route::get('inbox/data', ['as' => 'data', 'uses' => 'InboxController@getData']);
            });

            /**
             * Applications
             */
            Route::group(['as' => 'application.', 'prefix' => 'application'], function(){
                Route::get('/', ['as' => 'index', 'uses' => 'ApplicationController@index']);
                Route::get('data', ['as' => 'data', 'uses' => 'ApplicationController@getData']);
                Route::get('info/{application}', ['as' => 'info', 'uses' => 'ApplicationController@getInfo']);
                Route::get('modal/{application?}', ['as' => 'action', 'uses' => 'ApplicationController@getModal']);
                Route::post('modal/{application?}', ['as' => 'actionPost', 'uses' => 'ApplicationController@postModal']);
            });

            /**
             * Project
             */
            Route::group(['as' => 'project.', 'prefix' => 'project'], function(){
                Route::get('/', ['as' => 'index', 'uses' => 'ProjectController@index']);
                Route::get('info/{project}', ['as' => 'info', 'uses' => 'ProjectController@info']);
                Route::get('data', ['as' => 'data', 'uses' => 'ProjectController@getData']);

                Route::get('modal/{project?}', ['as' => 'action', 'uses' => 'ProjectController@getModal']);
                Route::post('modal/{project?}', ['as' => 'postModal', 'uses' => 'ProjectController@postModal']);

                Route::get('active', ['as' => 'active', 'uses' => 'ProjectController@active']);
            });



        });

        /**
         * BUT
         */
        Route::group([
            'as' => 'but.',
            'prefix' => 'but',
            'namespace' => 'BUT',
            'middleware' => ['role:admin,but']
        ], function () {
            /**
             * Inbox
             */
            Route::group(['as' => 'inbox.'], function () {
                Route::get('/', ['as' => 'index', 'uses' => 'InboxController@index']);
                Route::get('inbox/data', ['as' => 'data', 'uses' => 'InboxController@getData']);
            });

            /**
             * Applications
             */
            Route::group(['as' => 'application.', 'prefix' => 'application'], function () {
                Route::get('/', ['as' => 'index', 'uses' => 'ApplicationController@index']);
                Route::get('data', ['as' => 'data', 'uses' => 'ApplicationController@getData']);
                Route::get('info/{application}', ['as' => 'info', 'uses' => 'ApplicationController@getInfo']);
                Route::get('modal/{application?}', ['as' => 'action', 'uses' => 'ApplicationController@getModal']);
                Route::post('modal/{application?}', ['as' => 'actionPost', 'uses' => 'ApplicationController@postModal']);
            });

            /**
             * Project
             */
            Route::group(['as' => 'project.', 'prefix' => 'project'], function () {
                Route::get('/', ['as' => 'index', 'uses' => 'ProjectController@index']);
                Route::get('info/{project}', ['as' => 'info', 'uses' => 'ProjectController@info']);
                Route::get('data', ['as' => 'data', 'uses' => 'ProjectController@getData']);

                Route::get('modal/{project?}', ['as' => 'action', 'uses' => 'ProjectController@getModal']);
                Route::post('modal/{project?}', ['as' => 'postModal', 'uses' => 'ProjectController@postModal']);

                Route::get('active', ['as' => 'active', 'uses' => 'ProjectController@active']);
            });

            Route::post('documents/upload', ['as' => 'documentUpload', 'uses' => 'BaseController@documentUpload']);
            Route::post('project/info/postReview', ['as' => 'postReview', 'uses' => 'BaseController@postReview']);
            Route::post('project/info/postKKR', ['as' => 'postKKR', 'uses' => 'BaseController@postKKR']);

        });


        /**
         * PW
         *
         */
        Route::group([
            'as' => 'pw.',
            'prefix' => 'pw',
            'namespace' => 'PW',
            'middleware' => ['role:admin,pw']
        ], function () {
            /**
             * Inbox
             */
            Route::group(['as' => 'inbox.'], function () {
                Route::get('/', ['as' => 'index', 'uses' => 'InboxController@index']);
                Route::get('inbox/data', ['as' => 'data', 'uses' => 'InboxController@getData']);
            });

            /**
             * Projects
             */
            Route::group(['as' => 'project.', 'prefix' => 'project'], function () {
                Route::get('/', ['as' => 'index', 'uses' => 'ProjectController@index']);
                Route::get('data', ['as' => 'data', 'uses' => 'ProjectController@getData']);
                Route::get('modal/{project?}', ['as' => 'action', 'uses' => 'ProjectController@getModal']);
                Route::post('modal/{project?}', ['as' => 'actionPost', 'uses' => 'ProjectController@postModal']);
                Route::get('{project}/questions', ['as' => 'questions', 'uses' => 'ProjectController@getQuestions']);
                Route::post('{project}/questions', ['as' => 'questionsStore', 'uses' => 'ProjectController@storeQuestions']);
            });

        });

        /**
         * Management
         */
        Route::group(['as' => 'management.', 'prefix' => 'management', 'namespace' => 'Management', 'middleware' => 'can:access management'], function () {
            /**
             * Inbox
             */
            Route::group(['as' => 'dashboard.'], function () {
                Route::get('/', ['as' => 'index', 'uses' => 'DashboardController@index']);
            });

        });

    });

    /**
     * Messenger
     */
    Route::group([
        'as' => 'messenger.',
        'namespace' => 'Messages',
        'prefix' => 'messenger',
        'middleware' => 'role:admin,applicant,but,bpo,pw'
    ], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'MessageController@inbox']);
        Route::get('items/{type?}', ['as' => 'items', 'uses' => 'MessageController@getItems']);
        Route::get('messages/{type?}/{id?}', ['as' => 'messages', 'uses' => 'MessageController@getMessages']);
        Route::get('send', ['as' => 'send', 'uses' => 'MessageController@mySend']);
        Route::get('message/read/{id}', ['as' => 'read', 'uses' => 'MessageController@readMessage']);
        Route::post('message/send', ['as' => 'sendMessage', 'uses' => 'MessageController@send']);
    });
});

/**
 * API
 */
Route::group(['middleware' => ['api', 'cors'], 'as' => 'api::',
    'namespace' => 'API\V1', 'prefix' => 'api/v1'], function () {
    /**
     * API Functions
     */
    Route::group(['middleware' => ['jwt.auth']], function () {
        Route::group(['as' => 'account.', 'prefix' => 'account'], function () {
            Route::get('', [
                'as' => 'show',
                'uses' => 'AccountController@show'
            ]);
        });
        Route::group(['as' => 'post.', 'prefix' => 'posts'], function () {
            Route::get('', [
                'as' => 'index',
                'uses' => 'PostController@index'
            ]);
            Route::post('', [
                'as' => 'store',
                'uses' => 'PostController@store',
            ]);
            Route::delete('{post}', [
                'as' => 'destroy',
                'uses' => 'PostController@destroy'
            ]);
        });
    });
    /**
     * API Auth
     */
    Route::post('auth', [
        'as' => 'auth.store',
        'uses' => 'AuthController@authenticate'
    ]);
});