<?php

return [
    'steps' => [
        'title' => 'New Application',
        'first' => 'Application Category',
        'second' => 'Application Details',
        'third' => 'Processing Fee',
        'fourth' => 'Feedback'
    ],

    'statuses' => [
        'pending' => 'Pending',
        'approved' => 'Approved',
        'rejected' => 'Rejected'
    ],

    'files' => [
        'columns' => [
            'first' => 'No',
            'second' => 'Description',
            'third' => 'File Path'
        ],
        'buttons' => [
            'select' => 'Select file',
            'change' => 'Change',
            'remove' => 'Remove'
        ],

        'rows' => [
            [
                'name' => 'design_concept',
                'title' => 'Pelan Rekabentuk Konsep',
                'subTitle' => "- 'A4 PDF format' + image example-refer in zip file",
                'sub' => false
            ],
            /*[
                'name' => 'location_plan',
                'title' => 'Pelan Lokasi (Google Earth)',
                'subTitle' => false,
                'sub' => false
            ],*/
            [
                'name' => 'image_location',
                'title' => 'Gambar Lokasi',
                'subTitle' => '- At least 1 picture',
                'sub' => false,
                /*'sub' => [
                    [
                        'name' => 'image_location-2'
                    ],
                    [
                        'name' => 'image_location-3'
                    ]
                ]*/
            ],
            [
                'name' => 'review_letter',
                'title' => 'Surat Ulasan Pihak Ketiga',
                'subTitle' => '- Jika Berkaitan',
                'sub' => false
            ],
            [
                'name' => 'structure',
                'title' => 'Pengesahan Struktur Jejantas',
                'subTitle' => '- Jika Berkaitan',
                'sub' => false
            ]
        ],
        'attachment_label' => [
            'design_concept' => 'Pelan Lakaran Struktur',
            'image_location' => 'Gambar Lokasi',
            'image_location-2' => 'Gambar Lokasi 2',
            'image_location-3' => 'Gambar Lokasi 3',
            'image_location-4' => 'Gambar Lokasi 4',
            'image_location-5' => 'Gambar Lokasi 5',
            'image_location-6' => 'Gambar Lokasi 6',
            'image_location-7' => 'Gambar Lokasi 7',
            'review_letter' => 'Surat Ulasan Pihak Ketiga',
            'structure' => 'Pengesahan Struktur Jejantas',
        ]
    ],



    'first' => [
        'hint' => 'Please select application type',
        'types' => [
            'highway' => 'Side Highway Development',
            'billboard' => 'Display Ads'
        ]
    ],

    'second' => [
        'hint' => 'Location Type Display Ads',
        'highway' => [
            'title' => 'Side Highway Development Information Details'
        ],
        'ad' => [
            'location_type' => [
                'title' => 'Location Type Display Ads'
            ]
        ],
        'coordinates' => 'Coordinates',
        'map' => 'Interactive Map',
        'fields' => [
            'category' => [
                'title' => 'Category',
                'first' => 'New application',
                'second' => 'Exiting application'
            ],
            'highway' => 'Highway name',
            'location' => 'Location (km)',
            'area' => 'District',
            'direction' => [
                'title' => 'Direction',
                'items' => [
                    'north' => 'Northbound',
                    'south' => 'Southbound',
                    'east' => 'Eastbound',
                    'west' => 'Westbound'
                ]
            ],
            'from_city' => 'From City',
            'to_city' => 'To City',
            'coordinates' => 'Coordinates',
            'zone' => [
                'title' => 'Zone',
                'items' => [
                    0 => 'Pilih Zon',
                    1 => 'Zon 1',
                    2 => 'Zon 2',
                    3 => 'Zon 3'
                ]
            ],
            'authority' => [
                'title' => 'Local Authority',
                'items' => [
                    'dbkl' => 'DBKL',
                    'mbpj' => 'MBPJ',
                    'mbsj' => 'MPSJ',
                    'mbaj' => 'MBAJ',
                    'mbsa' => 'MBSA',
                    'mbjb' => 'MBJB',
                    'mbi' => 'MBI',
                    'mppp' => 'MPPP',
                    'mbmb' => 'MBMB',
                ]
            ],
            'verify-1' => 'All information provided above is true. If the information is incorrect, the Malaysian Highway Authority reserves the right to cancel our application without reimbursement or costs have been paid.',
            'verify-2' => 'Have read and understand the Guidelines Establishing Side Highway Development / Structure Display Advertising on the reserve Highway Supervision Malaysian Highway Authority before making this application.',
            'verify-3' => 'Will comply with the guidelines established in the Side Highway Development / Structure of Display Advertising on the Supervision of Expressway Reserve Malaysian Highway Authority and any rules, regulations or laws that set.'
        ],
        'file_limit' => 'File upload size limit is 5MB each.',
        'declaration' => 'Declaration'
    ],

    'third' => [
        'title' => 'Processing Fee Based on Development Type Details',
        'development_type' => 'Development Type',
        'processing_fee' => 'Average Development / Processing Fee',
        'height' => 'Height (h)',
        'width' => 'Width (w)',
        'quantity' => [
            'title' => 'Quantity',
            'button' => 'Register Pillar/Stand'
        ],
        'payment' => [
            'title' => 'Payment Method',
            'method' => [
                'check' => 'Cash/Check Deposit',
                'bank' => 'Bank Transfer'
            ],
            'slip_attachment' => 'Payment Slip Attachment',
            'date' => 'Payment Date',
            'note' => '* Payment by cheque only will be accepted for Display Ads Application'
        ],
        'picker' => 'Throw away',
        'slip_num' => 'Payment Slip Ref No.',
        'total' => 'Total Amount (RM)',
        'bank' => 'Bank',
        'banks' => [
            0 => 'Pilih Bank Pengeluar',
            1 => 'Bank Islam',
            2 => 'Bank Muamalat',
            3 => 'CIMB Bank',
            4 => 'Maybank',
            5 => 'RHB Bank',
            6 => 'BSN',
            7 => 'Affin Bank',
            8 => 'Bank Rakyat',
            9 => 'Hong Leong Bank'
        ],
        'structure_size' => [
            'title' => 'Structure Size (meter)'
        ]

    ],

    'fourth' => [
        'title' => 'Butiran Fi Pemprosesan',
        'subtitle' => 'Sila buat semakan maklumat fi pemprosesan sebelum dihantar kepada pihak LLM',
        'payment_details' => 'Payment Details',
        'payment_type' => 'Payment Type',
        'total_payments' => 'Total Payments',
        'notice' => 'Notis :Pembayaran ini adalah untuk tujuan pemprosesan permohonan. Pembayaran ini tidak akan dipulangkan sekiranya permohonan ini tidak berjaya.',
        'button' => 'Submit Proof of Payment'
    ],

    'please_select' => 'Please Select',

];