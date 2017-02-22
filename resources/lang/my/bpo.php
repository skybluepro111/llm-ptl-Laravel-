<?php
return [
    'inbox' => [
        'statuses' => [
            'approve' => 'Diluluskan',
            'new' => 'Baru',
            'rejected' => 'Ditolak'
        ]
    ],

    'document' => 'Dokumen Lampiran',

    'application' => [
        'title' => 'Permohonan',
        'info' => [
            'tabs' => [
                'company' => 'Maklumat Syarikat',
                'project' => 'Maklumat Projek',
                'report' => 'Laporan Pemeriksaan Tapak',
                'results' => 'Status Mesyuarat Dalaman'
            ],

            'company' => [
                // first step
                'applicant_info' => 'Butiran Pemohon',
                'applicant_category' => 'Kategori Pemohon',
                'name' => 'Nama Syarikat',
                'number_registration' => 'No. Pendaftaran Syarikat',
                'address' => 'Alamat Syarikat',
                'phone_office' => 'No. Telefon',
                'phone_fax' => 'No. Faks',

                // second step
                'owner' => 'Pemilik Akaun',
                'name_account' => 'Nama Pemilik',
                'email' => 'E-mel Pemilik',
                'cell_phone' => 'No. H/P'
            ],

            'project' => [
                'highway' => 'Nama Lebuhraya',
                'concession' => 'Syarikat Konsesi Terlibat',
                'location' => 'Lokasi',
                'direction' => 'Arah',
                'from_city' => 'Daripada Bandar',
                'to_city' => 'Ke Bandar',
                'coordinates' => 'Koordinat',
                'documents' => 'Dokumen Berkaitan'

            ]
        ],
        'modal' => [
            'application_details' => 'Butiran Permohonan',
            'confirmation_bkpa' => 'Pengesahan BKPA'
        ]
    ],
    'project' => [
        'title' => 'Projek',
        'modal' => [
            'status' => 'Hantar Fail Projek ke Pejabat Wilayah / Konsesi yang berkenaan'
        ]
    ],
    'modal' => [
        'title' => 'Penghantaran Pejabat Wilayah / Konsesi',
        'verification' => 'Pengesahan Bahagian Pemantauan Operasi',
        'act' => [
            'first' => 'Jana Nombor Fail'
        ],

    ]
];