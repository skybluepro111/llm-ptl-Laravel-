<?php
$statusesAd = [
    [
        'value' => '1',
        'text' => 'Comply'
    ],
    [
        'value' => '2',
        'text' => 'Non Comply'
    ],
    [
        'value' => '3',
        'text' => 'Not related'
    ]
];
$statusesHighway = [
    [
        'value' => 1,
        'text' => trans('general.yes')
    ],
    [
        'value' => 0,
        'text' => trans('general.no')
    ]
];
return [
    'project' => [
        'title' => 'Active projects'
    ],
    'modal' => [
        'caption' => 'Reviews Site Investigation Regional Office / Concessionaires',
        'review' => 'Investigation Review Sites',
        'documents' => [
            'title' => 'Document Site Investigation Report',
        ],
        'action' => 'Send site investigation report to the Division of Land Unit (BT)',
    ],
    'first_button' => 'Form',
    'action' => 'Action',

    'questions' => [
        'ad' => [
            [
                'no' => '3.1.1',
                'description' => 'Struktur Paparan Iklan tidak menjadi traffic hazard kepada pengguna lebuhraya',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '3.1.2',
                'description' => 'Struktur Paparan iklan tidak menghalang peralatan kawalan lalulintas',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '3.3',
                'description' => 'Struktur Paparan iklan tidak merosakkan / mencemarkan / melindungi pandangan bangunan / institusi / struktur estetik sejarah / rumah ibadat / bangunan komersil sedia ada',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '3.5',
                'description' => 'Struktur paparan iklan tidak mengganggu kerja – kerja penyenggaraan dan pemeriksaan terhadap struktur sedia ada seperti pier column / rasuk jejambat Struktur paparan iklan tidak mengganggu kerja – kerja penyenggaraan dan pemeriksaan terhadap struktur sedia ada seperti pier column / rasuk jejambat',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '4.1.1',
                'description' => 'Hanya 1 struktur paparan iklan di dalam satu – satu kawasan rehat dan hentian sebelah',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '4.1.2',
                'description' => 'Hanya 2 struktur paparan iklan jenis Unipole / Twinpole yang didirikan secara bertentangan sahaja dibenarkan didirikan di dalam kawasan loop mengikut saiz dan kesesuaian tapak.',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '4.1.3',
                'description' => 'Bagi paparan iklan jenis parapet jambatan / jejambat, hanya satu panel / paparan sahaja bagi dibenarkan bagi setiap arah di satu – satu lokasi',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '4.1.4',
                'description' => '	Jarak antara satu paparan iklan dengan paparan yang lain: Had laju 110km/j dan keatas : 1000meter Had Laju Kurang 110km/j : 500meter',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '4.1.5',
                'description' => 'Jarak antara satu paparan iklan dengan paparan iklan yang lain bagi Lebuhraya satu lorong satu hala dalam satu arah laluan ialah 1000m. Hanya satu panel / paparan yang menghadap arah laluan sahaja dibenarkan',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.1',
                'description' => 'Struktur paparan iklan dilarang didirikan 300m sebelum dan 100m selepas dari satu – satu papan tanda lalulintas',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.2',
                'description' => 'Struktur paparan iklan dilarang didirikan 500m sebelum mana – mana persimpangan mendatar, persimpangan bertingkat, kawasan rehat dan rawat dan hentian sebelah',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.3',
                'description' => 'Struktur paparan iklan dilarang didirikan di selekoh – selekoh yang kurang daripada 1000m radius yang boleh mengganggu jarak penglihatan pemandu',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.4',
                'description' => 'Dilarang membuat penambahan paparan iklan di atas struktur paparan iklan sedia ada dan penambahan struktur iklan lain di lokasi (KM) yang sama',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.5',
                'description' => 'Struktur paparan iklan dilarang didirikan di dalam rezab infrastruktur lain (rezab pencawang / talian elektrik, rezab sungai dan lain – lain) tanpa mendapat kebenaran pihak agensi berkuasa berkenaan',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.6',
                'description' => '	Struktur paparan iklan dilarang didirikan di kawasan cerun (Kecuali yang boleh dipertimbangkan di dalam Perkara 5.1.6)',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.7',
                'description' => 'Struktur paparan iklan dilarang didirikan di dalam terowong dan 1000m sebelum terowong bagi satu – satu arah laluan',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.8',
                'description' => '	Struktur Paparan iklan dilarang didirikan di dalam kawasan Plaza Tol dan 1000m sebelum dan selepas plaza / pondok tol. (Kecuali yang dibenarkan di dalam Perkara 4.1.8)',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.9',
                'description' => 'Struktur paparan iklan dilarang dipasang di jambatan / jejantas yang telah dipasang papantanda petunjuk arah',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.10',
                'description' => 'Struktur Paparan iklan dilarang didirikan di kawasan yang menghalang laluan dan menggugat keselamatan',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '5.1.11',
                'description' => 'Struktur paparan iklan dilarang didirikan di dalam kawasan radius 15km dari landasan kapal terbang kecuali mendapat kebenaran bertulis daripada Jabatan Penerbangan Awam',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '7.1.4',
                'description' => 'Penghujung struktur paparan iklan hendaklah mempunyai setback tidak kurang 3m dari bahu jalan',
                'statuses' => $statusesAd,
                'note' => ''
            ],
            [
                'no' => '7.1.5',
                'description' => 'Struktur paparan iklan tidak dibenarkan melampaui ruang udara kawasan bersebelahan atau diluar rezab lebuhraya',
                'statuses' => $statusesAd,
                'note' => ''
            ]
        ],
        'highway' => [
            [
                'description'   => "Jarak ke persimpangan sediada / pusingan 'U'",
                'statuses'      => $statusesHighway,
                'statusesCount' => 1
            ],
            [
                'description'   => "Jarak jejantas pejalan kaki/terowong terdekat",
                'statuses'      => $statusesHighway,
                'statusesCount' => 1
            ],
            [
                'description'   => "Jarak dengan struktur sediada",
                'statuses'      => $statusesHighway,
                'statusesCount' => 1
            ],
            [
                'description'   => "Garisan Pembangunan",
                'statuses'      => $statusesHighway,
                'statusesCount' => 1
            ],
            [
                'description'   => "Topografi kawasan permohonan<br>a. Cerun Potong / Cerun Tambak (Plan Profile)<br>b. Sistem saliran / perparitan sediada<br>c. Kegunaan tanah sediada",
                'statuses'      => $statusesHighway,
                'statusesCount' => 3
            ],
            [
                'description'   => "Inventori kemudahan lebuhraya sekitar 2km radius dari radius kawasan<br>a. Papan tanda arah jalan / Road sign<br>b. Paparan Iklan / VMS<br>c. RSA / Lay Bye<br>d. Guardrail<br>e. Landskap<br>f. Noise Barrier",
                'statuses'      => $statusesHighway,
                'statusesCount' => 6
            ],
            [
                'description'   => "Jenis pembangunan bersebelahan sediada / di kawasan sekitar",
                'statuses'      => $statusesHighway,
                'statusesCount' => 1
            ],
            [
                'description'   => "Jenis servis tempatan / Keluar Masuk / Terowong / Tembok Jejambat sedia ada",
                'statuses'      => $statusesHighway,
                'statusesCount' => 1
            ],
            [
                'description'   => "Inventory Services / Utilities Sedia Ada<br>a. TNB / Elektrikal<br>b. Telekomunikasi<br>c. Jabatan / Syarikat Bekalan Air<br>d. Time Telekom / Fiber Optic<br>e. Gas Malaysia<br>f. Saiz bagi jenis-jenis utiliti",
                'statuses'      => $statusesHighway,
                'statusesCount' => 6
            ],
            [
                'description'   => "Aliran Trafik<br>a. Keperluan Kajian Trafik / Impact Assessment<br>b. Ulasan Berkaitan Trafik",
                'statuses'      => $statusesHighway,
                'statusesCount' => 2
            ],
            [
                'description'   => "Keselamatan dan Keselesaan Awam",
                'statuses'      => $statusesHighway,
                'statusesCount' => 1
            ],
        ]
    ]
];