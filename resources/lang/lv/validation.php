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


    'accepted' => 'Laukā :attribute ir jābūt pieņemtiem.',
    'accepted_if' => 'Laukā :attribute ir jābūt pieņemtiem, kad :other ir :value.',
    'active_url' => 'Laukā :attribute nav derīgs URL.',
    'after' => 'Laukā :attribute ir jābūt datumam pēc :date.',
    'after_or_equal' => 'Laukā :attribute ir jābūt datumam pēc vai vienādām :date.',
    'alpha' => 'Laukā :attribute var būt tikai burti.',
    'alpha_dash' => 'Laukā :attribute var būt tikai burti, cipari, svītras un apakšsvītras.',
    'alpha_num' => 'Laukā :attribute var būt tikai burti un cipari.',
    'array' => 'Laukā :attribute ir jābūt masīvam.',
    'before' => 'Laukā :attribute ir jābūt datumam pirms :date.',
    'before_or_equal' => 'Laukā :attribute ir jābūt datumam pirms vai vienādām :date.',
    'between' => [
        'numeric' => 'Laukā :attribute ir jābūt starp :min un :max.',
        'file' => 'Laukā :attribute ir jābūt starp :min un :max kilobaitiem.',
        'string' => 'Laukā :attribute ir jābūt starp :min un :max simboliem.',
        'array' => 'Laukā :attribute ir jābūt starp :min un :max elementiem.',
    ],
    'boolean' => 'Laukā :attribute ir jābūt patiesam vai nepatiesam.',
    'confirmed' => 'Laukā :attribute nesakrīt.',
    'current_password' => 'Parole ir nepareiza.',
    'date' => 'Laukā :attribute nav derīgs datums.',
    'date_equals' => 'Laukā :attribute ir jābūt vienādam ar :date.',
    'date_format' => 'Laukā :attribute nesakrīt ar formātu :format.',
    'declined' => 'Laukā :attribute ir jābūt noraidītam.',
    'declined_if' => 'Laukā :attribute ir jābūt noraidītam, kad :other ir :value.',
    'different' => 'Laukā :attribute un :other ir jābūt atšķirīgiem.',
    'digits' => 'Laukā :attribute ir jābūt :digits cipariem.',
    'digits_between' => 'Laukā :attribute ir jābūt starp :min un :max cipariem.',
    'dimensions' => 'Laukā :attribute ir nepareiza izmēra dimensijas.',
    'distinct' => 'Laukā :attribute ir dublēta vērtība.',
    'email' => 'Laukā :attribute ir jābūt derīgam e-pasta adresi.',
    'ends_with' => 'Laukā :attribute jābeidzas ar vienu no: :values.',
    'enum' => 'Izvēlētā vērtība nav derīga laukā :attribute.',
    'exists' => 'Izvēlētā vērtība nav derīga laukā :attribute.',
    'file' => 'Laukā :attribute ir jābūt failam.',
    'filled' => 'Laukā :attribute jābūt vērtībai.',
    'gt' => [
        'numeric' => 'Laukā :attribute ir jābūt lielākam par :value.',
        'file' => 'Laukā :attribute ir jābūt lielākam par :value kilobaitiem.',
        'string' => 'Laukā :attribute jābūt vairāk nekā :value simboliem.',
        'array' => 'Laukā :attribute jābūt vairāk nekā :value elementiem.',
    ],
    'gte' => [
        'numeric' => 'Laukā :attribute ir jābūt lielākam vai vienādam ar :value.',
        'file' => 'Laukā :attribute ir jābūt lielākam vai vienādam ar :value kilobaitiem.',
        'string' => 'Laukā :attribute jābūt vismaz :value simboliem.',
        'array' => 'Laukā :attribute jābūt :value elementiem vai vairāk.',
    ],
    'image' => 'Laukā :attribute jābūt attēlam.',
    'in' => 'Izvēlētā vērtība nav derīga laukā :attribute.',
    'in_array' => 'Laukā :attribute nav :other.',
    'integer' => 'Laukā :attribute jābūt veselajam skaitlim.',
    'ip' => 'Laukā :attribute jābūt derīgai IP adresei.',
    'ipv4' => 'Laukā :attribute jābūt derīgai IPv4 adresei.',
    'ipv6' => 'Laukā :attribute jābūt derīgai IPv6 adresei.',
    'json' => 'Laukā :attribute jābūt derīgai JSON virknei.',
    'lt' => [
        'numeric' => 'Laukā :attribute jābūt mazākam par :value.',
        'file' => 'Laukā :attribute jābūt mazākam par :value kilobaitiem.',
        'string' => 'Laukā :attribute jābūt mazāk nekā :value simboliem.',
        'array' => 'Laukā :attribute jābūt mazāk nekā :value elementiem.',
    ],
    'lte' => [
        'numeric' => 'Laukā :attribute jābūt mazākam vai vienādam ar :value.',
        'file' => 'Laukā :attribute jābūt mazākam vai vienādam ar :value kilobaitiem.',
        'string' => 'Laukā :attribute nedrīkst pārsniegt :value simbolus.',
        'array' => 'Laukā :attribute nedrīkst būt vairāk kā :value elementi.',
    ],
    'mac_address' => 'Laukā :attribute jābūt derīgai MAC adresei.',
    'max' => [
        'numeric' => 'Laukā :attribute nedrīkst būt lielāks par :max.',
        'file' => 'Laukā :attribute nedrīkst būt lielāks par :max kilobaitiem.',
        'string' => 'Laukā :attribute nedrīkst būt vairāk par :max simboliem.',
        'array' => 'Laukā :attribute nedrīkst būt vairāk par :max elementiem.',
    ],
    'mimes' => 'Laukā :attribute jābūt failam, kura tips ir: :values.',
    'mimetypes' => 'Laukā :attribute jābūt failam, kura tips ir: :values.',
    'min' => [
        'numeric' => 'Laukā :attribute jābūt vismaz :min.',
        'file' => 'Laukā :attribute jābūt vismaz :min kilobaitiem.',
        'string' => 'Laukā :attribute jābūt vismaz :min simboliem.',
        'array' => 'Laukā :attribute jābūt vismaz :min elementiem.',
    ],
    'multiple_of' => 'Laukā :attribute jābūt dalāmas no :value.',
    'not_in' => 'Izvēlētā vērtība nav derīga laukā :attribute.',
    'not_regex' => 'Laukā :attribute formāts nav pareizs.',
    'numeric' => 'Laukā :attribute jābūt skaitlim.',
    'password' => 'Parole ir nepareiza.',
    'present' => 'Laukā :attribute jābūt.',
    'prohibited' => 'Laukā :attribute ir aizliegts.',
    'prohibited_if' => 'Laukā :attribute ir aizliegts, ja :other ir :value.',
    'prohibited_unless' => 'Laukā :attribute ir aizliegts, ja :other nav :values.',
    'regex' => 'Laukā :attribute formāts nav pareizs.',
    'required' => 'Laukā :attribute ir obligāti jānorāda.',
    'required_array_keys' => 'Laukā :attribute jāietver atslēgas: :values.',
    'required_if' => 'Laukā :attribute ir obligāti jānorāda, ja :other ir :value.',
    'required_if_accepted' => 'Laukā :attribute ir obligāti jānorāda, ja :other ir pieņemts.',
    'required_with' => 'Laukā :attribute ir obligāti jānorāda, ja ir norādīts :values.',
    'required_with_all' => 'Laukā :attribute ir obligāti jānorāda, ja ir norādīti :values.',
    'required_without' => 'Laukā :attribute ir obligāti jānorāda, ja :values nav norādīts.',
    'required_without_all' => 'Laukā :attribute ir obligāti jānorāda, ja nav norādīts neviena no :values.',
    'same' => 'Laukā :attribute un :other jābūt vienādiem.',
    'size' => [
        'numeric' => 'Laukā :attribute jābūt :size.',
        'file' => 'Laukā :attribute jābūt :size kilobaitiem.',
        'string' => 'Laukā :attribute jābūt :size simboliem.',
        'array' => 'Laukā :attribute jābūt :size elementiem.',
    ],
    'starts_with' => 'Laukā :attribute jāsākas ar vienu no: :values.',
    'string' => 'Laukā :attribute jābūt virknei.',
    'timezone' => 'Laukā :attribute jābūt derīgai laika zonai.',
    'unique' => 'Laukā :attribute jau ir aizņemts.',
    'uploaded' => 'Laukā :attribute neizdevās augšupielādēt.',
    'url' => 'Laukā :attribute formāts nav pareizs.',
    'uuid' => 'Laukā :attribute jābūt derīgam UUID.',
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
        'name' => 'vārds',
        'username' => 'lietotājvārds',
        'email' => 'e-pasta adrese',
        'password' => 'parole',
        'role' => 'loma',
    ],


];
