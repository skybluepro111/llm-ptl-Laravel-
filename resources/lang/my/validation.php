<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute mesti diterima.',
    'active_url' => ':attribute adalah pautan URL yang tidak sah.',
    'after' => ':attribute mestilah satu tarih selepas :date.',
    'alpha' => ':attribute hanya boleh mengandungi huruf sahaja.',
    'alpha_dash' => ':attribute hanya boleh mengandungi huruf, nombor dan sengkang sahaja.',
    'alpha_num' => ':attribute hanya boleh mengandungi huruf dan nombor sahaja.',
    'array' => ':attribute mestilah satu jajaran.',
    'before' => ':attribute mestilah satu tarikh sebelum :date.',
    'between' => [
        'numeric' => ':attribute mesti satu nilai di antara :min dan :max.',
        'file' => ':attribute mesti di antara :min dan :max kilobit.',
        'string' => ':attribute mestilah karakter di antara :min dan :max.',
        'array' => ':attribute mesti di antara :min dan :max.',
    ],
    'boolean' => 'Medan :attribute mestilah samada betul atau salah.',
    'confirmed' => 'Pengesahan :attribute tidak padan.',
    'date' => ':attribute adalah tarikh yang tidak sah.',
    'date_format' => ':attribute tidak mematuhi format :format.',
    'different' => ':attribute dan :other mestilah berlainan.',
    'digits' => ':attribute mesti mengandungi :digits digit.',
    'digits_between' => ':attribute mesti di antara :min dan :max digit.',
    'distinct' => 'Medan :attribute mengandungi nilai salinan.',
    'email' => ':attribute mestilah alamat e-mel yang sah.',
    'exists' => ':attribute adalah tidak sah.',
    'filled' => 'Medan :attribute adalah diperlukan.',
    'image' => ':attribute mestilah fail imej.',
    'in' => ':attribute yang dipilih adalah tidak sah.',
    'in_array' => 'Medan :attribute tidak wujud di dalam :other.',
    'integer' => ':attribute mestilah satu nilai integer.',
    'ip' => ':attribute mestilah alamat IP yang sah.',
    'json' => ':attribute mestilah rentetan JSON yang sah.',
    'max' => [
        'numeric' => 'Nilai :attribute tidak boleh lebih daripada :max.',
        'file' => 'Saiz :attribute mestilah kurang daripada :max kilobit.',
        'string' => 'Panjang :attribute mestilah kurang daripada :max karakter.',
        'array' => ':attribute mestilah mengandungi kurang daripada :max perkara.',
    ],
    'mimes' => ':attribute mestilah fail jenis: :values.',
    'min' => [
        'numeric' => ':attribute mesti sekurang-kurangnya :min.',
        'file' => 'Saiz :attribute mesti sekurang-kurangnya :min kilobit.',
        'string' => 'Panjang :attribute mestilah sekurang-kurangnya :min karakter.',
        'array' => ':attribute mestilah mengandungi sekurang-kurangnya :min perkara.',
    ],
    'not_in' => ':attribute yang dipilih adalah tidak sah.',
    'numeric' => ':attribute mestilah suatu nombor.',
    'present' => 'Medan :attribute mesti wujud.',
    'regex' => 'Format :attribute adalah tidak sah.',
    'required' => 'Medan :attribute diperlukan.',
    'required_if' => 'Medan :attribute diperlukan apabila :other adalah :value.',
    'required_unless' => 'Medan :attribute diperlukan kecuali :other adalah :values.',
    'required_with' => 'Medan :attribute field diperlukan apabila :values wujud.',
    'required_with_all' => 'Medan :attribute diperlukan apabila :values wujud.',
    'required_without' => 'Medan :attribute diperlukan apabila :values tidak wujud.',
    'required_without_all' => 'Medan :attribute diperlukan apabila :values tidak wujud.',
    'same' => ':attribute dan :other mestilah sama.',
    'size' => [
        'numeric' => ':attribute mestilah :size.',
        'file' => 'Saiz :attribute mestilah :size kilobit.',
        'string' => 'Panjang :attribute mestilah :size karakter.',
        'array' => ':attribute mesti mengandungi :size perkara.',
    ],
    'string' => ':attribute mestilah rentetan.',
    'timezone' => ':attribute mestilah zon masa yang sah.',
    'unique' => ':attribute telah digunakan.',
    'url' => 'Format :attribute adalah tidak sah.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
