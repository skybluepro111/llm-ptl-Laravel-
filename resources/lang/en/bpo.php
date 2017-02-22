<?php
return [
    'inbox' => [
        'statuses' => [
            'approve' => 'Approved',
            'new' => 'New',
            'rejected' => 'Rejected'
        ]
    ],

    'document' => 'Document Attachment',

    'application' => [
        'title' => 'Applications',
        'info' => [
            'tabs' => [
                'company'   => 'Company Details',
                'project'   => 'Project Details',
                'report'    => 'Site Inspection Report',
                'results'   => 'Internal Meeting Status',
                'kkr'       => 'KKR Approval Status',
                'documents' => 'eDocument (Reference)'
            ],

            'company' => [
                // first step
                'applicant_info' => 'Applicant Information',
                'applicant_category' => 'Applicant Category',
                'name' => 'Company Name',
                'number_registration' => 'Company Registration Number',
                'address' => 'Company Address',
                'phone_office' => 'Phone number',
                'phone_fax' => 'Fax number',

                // second step
                'owner' => 'Account owner',
                'name_account' => 'Name of the owner',
                'email' => 'Email owner',
                'cell_phone' => 'No. Cell phone'
            ],

            'project' => [
                'highway' => 'Highway name',
                'concession' => 'Concession Company Involved',
                'location' => 'Location',
                'direction' => 'Direction',
                'from_city' => 'From City',
                'to_city' => 'To City',
                'coordinates' => 'Coordinates',
                'documents' => 'Related documents'

            ],
            'documents' => [
                'new_document' => 'New File Upload',
                'exiting' => 'Document References'
            ],
            'kkr' => [
                'status_result' => 'Status result'
            ],
            'meeting' => [
                ''
            ]
        ],
        'modal' => [
            'application_details' => 'Application Details',
            'confirmation_bkpa' => 'Confirmation BKPA'
        ]
    ],
    'project' => [
        'title' => 'Projects',
        'modal' => [
            'status' => 'Send the project file to the Office of Regional and Concessionaires are selected for each'
        ],
        'info' => [
            'meeting' => [
                'title' => 'Meeting results MJKPI',
                'meeting_no' => 'Meeting No',
                'summary' => 'Summary',
                'statuses' => ['Supported', 'Unsupported', 'Postponed']
            ]
        ]
    ],
    'modal' => [
        'title' => 'Delivery Division Regional Office / Concession',
        'verification' => 'Verification Division Land Unit',
        'act' => [
            'first' => 'Jana file number'
        ],

    ]
];