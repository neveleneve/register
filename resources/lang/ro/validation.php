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


    'reset' => 'Parola a fost resetată cu succes!',
    'sent' => 'Link-ul pentru resetarea parolei a fost trimis pe email!',
    'throttled' => 'Te rog să aștepți înainte de a încerca din nou',
    'token' => 'Token-ul pentru resetarea parolei este invalid.',
    'user' => 'Nu există utilizator cu acest email.',

    'accepted' => 'Câmpul :attribute trebuie acceptat.',
    'accepted_if' => 'Câmpul :attribute trebuie acceptat atunci când :other este :value.',
    'active_url' => 'Câmpul :attribute nu este un URL valid.',
    'after' => 'Câmpul :attribute trebuie să fie o dată ulterioară lui :date.',
    'after_or_equal' => 'Câmpul :attribute trebuie să fie o dată ulterioară sau egală cu :date.',
    'alpha' => 'Câmpul :attribute poate conține doar litere.',
    'alpha_dash' => 'Câmpul :attribute poate conține doar litere, cifre, cratime și linii de subliniere.',
    'alpha_num' => 'Câmpul :attribute poate conține doar litere și cifre.',
    'array' => 'Câmpul :attribute trebuie să fie un array.',
    'before' => 'Câmpul :attribute trebuie să fie o dată anterioară lui :date.',
    'before_or_equal' => 'Câmpul :attribute trebuie să fie o dată anterioară sau egală cu :date.',
    'between' => [
        'numeric' => 'Câmpul :attribute trebuie să fie între :min și :max.',
        'file' => 'Câmpul :attribute trebuie să aibă între :min și :max kilobyte.',
        'string' => 'Câmpul :attribute trebuie să aibă între :min și :max caractere.',
        'array' => 'Câmpul :attribute trebuie să aibă între :min și :max elemente.',
    ],
    'boolean' => 'Câmpul :attribute trebuie să fie adevărat sau fals.',
    'confirmed' => 'Câmpul :attribute nu se potrivește.',
    'current_password' => 'Parola este incorectă.',
    'date' => 'Câmpul :attribute nu este o dată validă.',
    'date_equals' => 'Câmpul :attribute trebuie să fie egal cu :date.',
    'date_format' => 'Câmpul :attribute nu se potrivește cu formatul :format.',
    'declined' => 'Câmpul :attribute trebuie să fie refuzat.',
    'declined_if' => 'Câmpul :attribute trebuie să fie refuzat atunci când :other este :value.',
    'different' => 'Câmpul :attribute și :other trebuie să fie diferite.',
    'digits' => 'Câmpul :attribute trebuie să conțină :digits cifre.',
    'digits_between' => 'Câmpul :attribute trebuie să aibă între :min și :max cifre.',
    'dimensions' => 'Dimensiunile imaginii :attribute sunt invalide.',
    'distinct' => 'Câmpul :attribute are o valoare duplicată.',
    'email' => 'Câmpul :attribute trebuie să fie o adresă de email validă.',
    'ends_with' => 'Câmpul :attribute trebuie să se termine cu unul dintre următoarele: :values.',
    'enum' => 'Valoarea selectată este invalidă pentru :attribute.',
    'exists' => 'Valoarea selectată este invalidă pentru :attribute.',
    'file' => 'Câmpul :attribute trebuie să fie un fișier.',
    'filled' => 'Câmpul :attribute trebuie să aibă o valoare.',
    'gt' => [
        'numeric' => 'Câmpul :attribute trebuie să fie mai mare decât :value.',
        'file' => 'Câmpul :attribute trebuie să fie mai mare de :value kilobyte.',
        'string' => 'Câmpul :attribute trebuie să aibă mai mult de :value caractere.',
        'array' => 'Câmpul :attribute trebuie să aibă mai mult de :value elemente.',
    ],
    'gte' => [
        'numeric' => 'Câmpul :attribute trebuie să fie mai mare sau egal cu :value.',
        'file' => 'Câmpul :attribute trebuie să fie mai mare sau egal cu :value kilobyte.',
        'string' => 'Câmpul :attribute trebuie să aibă cel puțin :value caractere.',
        'array' => 'Câmpul :attribute trebuie să aibă :value elemente sau mai multe.',
    ],
    'image' => 'Câmpul :attribute trebuie să fie o imagine.',
    'in' => 'Valoarea selectată este invalidă pentru :attribute.',
    'in_array' => 'Câmpul :attribute nu există în :other.',
    'integer' => 'Câmpul :attribute trebuie să fie un număr întreg.',
    'ip' => 'Câmpul :attribute trebuie să fie o adresă IP validă.',
    'ipv4' => 'Câmpul :attribute trebuie să fie o adresă IPv4 validă.',
    'ipv6' => 'Câmpul :attribute trebuie să fie o adresă IPv6 validă.',
    'json' => 'Câmpul :attribute trebuie să fie un string JSON valid.',
    'lt' => [
        'numeric' => 'Câmpul :attribute trebuie să fie mai mic decât :value.',
        'file' => 'Câmpul :attribute trebuie să fie mai mic de :value kilobyte.',
        'string' => 'Câmpul :attribute trebuie să aibă mai puțin de :value caractere.',
        'array' => 'Câmpul :attribute trebuie să aibă mai puțin de :value elemente.',
    ],
    'lte' => [
        'numeric' => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value.',
        'file' => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value kilobyte.',
        'string' => 'Câmpul :attribute trebuie să aibă cel mult :value caractere.',
        'array' => 'Câmpul :attribute nu trebuie să aibă mai mult de :value elemente.',
    ],
    'mac_address' => 'Câmpul :attribute trebuie să fie o adresă MAC validă.',
    'max' => [
        'numeric' => 'Câmpul :attribute nu poate fi mai mare decât :max.',
        'file' => 'Câmpul :attribute nu poate fi mai mare de :max kilobyte.',
        'string' => 'Câmpul :attribute nu poate avea mai mult de :max caractere.',
        'array' => 'Câmpul :attribute nu poate avea mai mult de :max elemente.',
    ],
    'mimes' => 'Câmpul :attribute trebuie să fie un fișier de tip: :values.',
    'mimetypes' => 'Câmpul :attribute trebuie să fie un fișier de tip: :values.',
    'min' => [
        'numeric' => 'Câmpul :attribute trebuie să fie cel puțin :min.',
        'file' => 'Câmpul :attribute trebuie să fie de cel puțin :min kilobyte.',
        'string' => 'Câmpul :attribute trebuie să aibă cel puțin :min caractere.',
        'array' => 'Câmpul :attribute trebuie să aibă cel puțin :min elemente.',
    ],
    'multiple_of' => 'Câmpul :attribute trebuie să fie un multiplu de :value.',
    'not_in' => 'Valoarea selectată este invalidă pentru :attribute.',
    'not_regex' => 'Formatul :attribute este invalid.',
    'numeric' => 'Câmpul :attribute trebuie să fie un număr.',
    'password' => 'Parola este incorectă.',
    'present' => 'Câmpul :attribute trebuie să fie prezent.',
    'prohibited' => 'Câmpul :attribute este interzis.',
    'prohibited_if' => 'Câmpul :attribute este interzis atunci când :other este :value.',
    'prohibited_unless' => 'Câmpul :attribute este interzis, cu excepția cazului în care :other este :values.',
    'regex' => 'Formatul :attribute este invalid.',
    'required' => 'Câmpul :attribute este obligatoriu.',
    'required_if' => 'Câmpul :attribute este obligatoriu atunci când :other este :value.',
    'required_unless' => 'Câmpul :attribute este obligatoriu, cu excepția cazului în care :other este :values.',
    'required_with' => 'Câmpul :attribute este obligatoriu atunci când :values este prezent.',
    'required_with_all' => 'Câmpul :attribute este obligatoriu atunci când :values sunt prezente.',
    'required_without' => 'Câmpul :attribute este obligatoriu atunci când :values nu este prezent.',
    'required_without_all' => 'Câmpul :attribute este obligatoriu atunci când niciunul din :values nu este prezent.',
    'same' => 'Câmpul :attribute trebuie să fie identic cu :other.',
    'size' => [
        'numeric' => 'Câmpul :attribute trebuie să aibă dimensiunea :size.',
        'file' => 'Câmpul :attribute trebuie să aibă dimensiunea :size kilobyte.',
        'string' => 'Câmpul :attribute trebuie să aibă lungimea de :size caractere.',
        'array' => 'Câmpul :attribute trebuie să conțină :size elemente.',
    ],
    'starts_with' => 'Câmpul :attribute trebuie să înceapă cu unul dintre următoarele: :values.',
    'string' => 'Câmpul :attribute trebuie să fie un string.',
    'timezone' => 'Câmpul :attribute trebuie să fie un fus orar valid.',
    'unique' => 'Câmpul :attribute a fost deja folosit.',
    'uploaded' => 'Încărcarea :attribute a eșuat.',
    'url' => 'Formatul :attribute este invalid.',
    'uuid' => 'Câmpul :attribute trebuie să fie un UUID valid.',
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
        'name' => 'nume',
        'username' => 'nume de utilizator',
        'email' => 'adresă de email',
        'password' => 'parolă',
        'role' => 'rol',
    ],


];
