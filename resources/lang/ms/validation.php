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
    'accepted_if' => ':attribute mesti diterima apabila :other ialah :value.',
    'active_url' => ':attribute bukan URL yang sah.',
    'after' => ':attribute mesti tarikh selepas :date.',
    'after_or_equal' => ':attribute mesti tarikh selepas atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh mengandungi huruf.',
    'alpha_dash' => ':attribute hanya boleh mengandungi huruf, nombor, sempang, dan garis bawah.',
    'alpha_num' => ':attribute hanya boleh mengandungi huruf dan nombor.',
    'array' => ':attribute mesti array.',
    'before' => ':attribute mesti tarikh sebelum :date.',
    'before_or_equal' => ':attribute mesti tarikh sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute mesti antara :min dan :max.',
        'file' => ':attribute mesti antara :min dan :max kilobyte.',
        'string' => ':attribute mesti antara :min dan :max aksara.',
        'array' => ':attribute mesti mempunyai antara :min dan :max item.',
    ],
    'boolean' => 'Medan :attribute mesti benar atau salah.',
    'confirmed' => 'Pengesahan :attribute tidak sepadan.',
    'current_password' => 'Kata laluan salah.',
    'date' => ':attribute bukan tarikh yang sah.',
    'date_equals' => ':attribute mesti tarikh yang sama dengan :date.',
    'date_format' => ':attribute tidak sepadan dengan format :format.',
    'declined' => ':attribute mesti ditolak.',
    'declined_if' => ':attribute mesti ditolak apabila :other ialah :value.',
    'different' => ':attribute dan :other mesti berbeza.',
    'digits' => ':attribute mesti :digits digit.',
    'digits_between' => ':attribute mesti antara :min dan :max digit.',
    'dimensions' => ':attribute mempunyai dimensi imej yang tidak sah.',
    'distinct' => 'Medan :attribute mempunyai nilai pendua.',
    'email' => ':attribute mesti alamat emel yang sah.',
    'ends_with' => ':attribute mesti berakhir dengan salah satu daripada yang berikut: :values.',
    'enum' => ':attribute yang dipilih tidak sah.',
    'exists' => ':attribute yang dipilih tidak sah.',
    'file' => ':attribute mesti fail.',
    'filled' => 'Medan :attribute mesti mempunyai nilai.',
    'gt' => [
        'numeric' => ':attribute mesti lebih besar daripada :value.',
        'file' => ':attribute mesti lebih besar daripada :value kilobyte.',
        'string' => ':attribute mesti lebih besar daripada :value aksara.',
        'array' => ':attribute mesti mempunyai lebih daripada :value item.',
    ],
    'gte' => [
        'numeric' => ':attribute mesti lebih besar atau sama dengan :value.',
        'file' => ':attribute mesti lebih besar atau sama dengan :value kilobyte.',
        'string' => ':attribute mesti lebih besar atau sama dengan :value aksara.',
        'array' => ':attribute mesti mempunyai :value item atau lebih.',
    ],
    'image' => ':attribute mesti imej.',
    'in' => ':attribute yang dipilih tidak sah.',
    'in_array' => 'Medan :attribute tidak wujud dalam :other.',
    'integer' => ':attribute mesti integer.',
    'ip' => ':attribute mesti alamat IP yang sah.',
    'ipv4' => ':attribute mesti alamat IPv4 yang sah.',
    'ipv6' => ':attribute mesti alamat IPv6 yang sah.',
    'json' => ':attribute mesti string JSON yang sah.',
    'lt' => [
        'numeric' => ':attribute mesti kurang daripada :value.',
        'file' => ':attribute mesti kurang daripada :value kilobyte.',
        'string' => ':attribute mesti kurang daripada :value aksara.',
        'array' => ':attribute mesti mempunyai kurang daripada :value item.',
    ],
    'lte' => [
        'numeric' => ':attribute mesti kurang atau sama dengan :value.',
        'file' => ':attribute mesti kurang atau sama dengan :value kilobyte.',
        'string' => ':attribute mesti kurang atau sama dengan :value aksara.',
        'array' => ':attribute tidak boleh mempunyai lebih daripada :value item.',
    ],
    'mac_address' => ':attribute mesti alamat MAC yang sah.',
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar daripada :max.',
        'file' => ':attribute tidak boleh lebih besar daripada :max kilobyte.',
        'string' => ':attribute tidak boleh lebih besar daripada :max aksara.',
        'array' => ':attribute tidak boleh mempunyai lebih daripada :max item.',
    ],
    'mimes' => ':attribute mesti fail jenis: :values.',
    'mimetypes' => ':attribute mesti fail jenis: :values.',
    'min' => [
        'numeric' => ':attribute mesti sekurang-kurangnya :min.',
        'file' => ':attribute mesti sekurang-kurangnya :min kilobyte.',
        'string' => ':attribute mesti sekurang-kurangnya :min aksara.',
        'array' => ':attribute mesti mempunyai sekurang-kurangnya :min item.',
    ],
    'multiple_of' => ':attribute mesti gandaan :value.',
    'not_in' => ':attribute yang dipilih tidak sah.',
    'not_regex' => 'Format :attribute tidak sah.',
    'numeric' => ':attribute mesti nombor.',
    'password' => 'Kata laluan salah.',
    'present' => 'Medan :attribute mesti ada.',
    'prohibited' => 'Medan :attribute dilarang.',
    'prohibited_if' => 'Medan :attribute dilarang apabila :other ialah :value.',
    'prohibited_unless' => 'Medan :attribute dilarang kecuali :other ada dalam :values.',
    'prohibits' => 'Medan :attribute melarang :other daripada hadir.',
    'regex' => 'Format :attribute tidak sah.',
    'required' => 'Medan :attribute diperlukan.',
    'required_array_keys' => 'Medan :attribute mesti mengandungi entri untuk: :values.',
    'required_if' => 'Medan :attribute diperlukan apabila :other ialah :value.',
    'required_unless' => 'Medan :attribute diperlukan kecuali :other ada dalam :values.',
    'required_with' => 'Medan :attribute diperlukan apabila :values ada.',
    'required_with_all' => 'Medan :attribute diperlukan apabila :values ada.',
    'required_without' => 'Medan :attribute diperlukan apabila :values tiada.',
    'required_without_all' => 'Medan :attribute diperlukan apabila tiada satu pun daripada :values ada.',
    'same' => ':attribute dan :other mesti sepadan.',
    'size' => [
        'numeric' => ':attribute mesti :size.',
        'file' => ':attribute mesti :size kilobyte.',
        'string' => ':attribute mesti :size aksara.',
        'array' => ':attribute mesti mengandungi :size item.',
    ],
    'starts_with' => ':attribute mesti bermula dengan salah satu daripada yang berikut: :values.',
    'string' => ':attribute mesti string.',
    'timezone' => ':attribute mesti zon masa yang sah.',
    'unique' => ':attribute sudah diambil.',
    'uploaded' => ':attribute gagal untuk memuat naik.',
    'url' => ':attribute mesti URL yang sah.',
    'uuid' => ':attribute mesti UUID yang sah.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'nama',
        'username' => 'nama pengguna',
        'email' => 'alamat emel',
        'password' => 'kata laluan',
        'role' => 'peranan',
    ],


];
