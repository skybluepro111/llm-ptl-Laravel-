<?php
return [
    'steps' => [
        'title' => 'New User Registration Form',
        'first' => 'User Category',
        'second' => 'User Information Details',
        'third' => 'Validation'
    ],

    'first' => 'Please select your user category',

    'second' => [
        'details' => [
            'title' => 'Company Details',
            'category' => 'Category',
            'concessionaires' => 'Concessionaires',
            'company_name' => 'Company Name',
            'registration' => 'Company Registration',
            'address' => 'Company Address',
            'phone' => 'Phone No.',
            'fax' => 'Fax No.'
        ],
        'account' => [
            'title' => 'Account Details',
            'name' => 'Full Name',
            'email' => 'Email'
        ]
    ],

    'finish' => [
        'first_message' => 'Congratulations. Your registration has been submitted. You will received an activation email which sent to :',
        'notes' => 'Notes : Please activate your account within 24 hours from now in order to avoid auto-delete account feature (for those who did not activate after 24 hours time)',
        'back' => 'Go back to main page'
    ],

    'categories' => [
        1 => 'Select Category',
        2 => '3rd Party Company',
        3 => 'Concessionaires'
    ],

    'types' => [
        'company' => [
            'title' => 'Company',
            'icon' => 'zmdi-account-box'
        ],
        'individual' => [
            'title' => 'Individual',
            'icon' => 'zmdi-account-box-o',
        ],
        'government' => [
            'title' => 'Government Agency',
            'icon' => 'zmdi-account-box'
        ],
        'glc' => [
            'title' => 'Government-Linked Company (GLC)',
            'icon' => 'zmdi-account-box-o'
        ]

    ],

    'company_name' => 'Company name',

    'address' => [
        'address' => 'Address 1',
        'post_address' => 'Address 2',
        'postcode' => 'Postcode',
        'state' => 'State',
        'country' => 'Country',
        'city' => 'City'

    ],

    'contractors' => [
        'company' => [
            2 => '3rd Party Company',
            3 => 'Concessionaires'
        ]
    ],

    'menu1' => 'New User Registration',
    'menu2' => 'How to Apply',
    'menu3' => 'User Login',
    'menu4' => 'Fill in your login details to access',
    




];
