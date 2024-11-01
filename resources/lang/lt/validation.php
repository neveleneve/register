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


    'accepted' => 'Lauke :attribute turi būti priimta.',
    'accepted_if' => 'Lauke :attribute turi būti priimta, kai :other yra :value.',
    'active_url' => 'Laukas :attribute nėra galiojantis URL.',
    'after' => 'Lauke :attribute turi būti data po :date.',
    'after_or_equal' => 'Lauke :attribute turi būti data po arba lygi :date.',
    'alpha' => 'Lauke :attribute gali būti tik raidės.',
    'alpha_dash' => 'Lauke :attribute gali būti tik raidės, skaičiai, brūkšniai ir pabraukimai.',
    'alpha_num' => 'Lauke :attribute gali būti tik raidės ir skaičiai.',
    'array' => 'Laukas :attribute turi būti masyvas.',
    'before' => 'Lauke :attribute turi būti data prieš :date.',
    'before_or_equal' => 'Lauke :attribute turi būti data prieš arba lygi :date.',
    'between' => [
        'numeric' => 'Lauke :attribute turi būti tarp :min ir :max.',
        'file' => 'Lauke :attribute turi būti tarp :min ir :max kilobaitų.',
        'string' => 'Lauke :attribute turi būti tarp :min ir :max simbolių.',
        'array' => 'Lauke :attribute turi būti tarp :min ir :max elementų.',
    ],
    'boolean' => 'Laukas :attribute turi būti teisingas arba neteisingas.',
    'confirmed' => 'Laukas :attribute nesutampa.',
    'current_password' => 'Slaptažodis yra neteisingas.',
    'date' => 'Laukas :attribute nėra galiojanti data.',
    'date_equals' => 'Lauke :attribute turi būti lygi :date.',
    'date_format' => 'Laukas :attribute nesutampa su formatu :format.',
    'declined' => 'Lauke :attribute turi būti atmestas.',
    'declined_if' => 'Lauke :attribute turi būti atmestas, kai :other yra :value.',
    'different' => 'Laukas :attribute ir :other turi būti skirtingi.',
    'digits' => 'Lauke :attribute turi būti :digits skaitmenys.',
    'digits_between' => 'Lauke :attribute turi būti tarp :min ir :max skaitmenų.',
    'dimensions' => 'Lauko :attribute matmenys yra neteisingi.',
    'distinct' => 'Lauke :attribute yra dubliuota reikšmė.',
    'email' => 'Lauke :attribute turi būti galiojantis el. pašto adresas.',
    'ends_with' => 'Laukas :attribute turi baigtis vienu iš: :values.',
    'enum' => 'Pasirinkta reikšmė yra neteisinga :attribute.',
    'exists' => 'Pasirinkta reikšmė yra neteisinga :attribute.',
    'file' => 'Laukas :attribute turi būti failas.',
    'filled' => 'Laukas :attribute turi turėti reikšmę.',
    'gt' => [
        'numeric' => 'Laukas :attribute turi būti didesnis nei :value.',
        'file' => 'Laukas :attribute turi būti didesnis nei :value kilobaitų.',
        'string' => 'Laukas :attribute turi turėti daugiau nei :value simbolių.',
        'array' => 'Laukas :attribute turi turėti daugiau nei :value elementų.',
    ],
    'gte' => [
        'numeric' => 'Laukas :attribute turi būti didesnis arba lygus :value.',
        'file' => 'Laukas :attribute turi būti didesnis arba lygus :value kilobaitų.',
        'string' => 'Laukas :attribute turi turėti bent :value simbolių.',
        'array' => 'Laukas :attribute turi turėti :value elementų arba daugiau.',
    ],
    'image' => 'Laukas :attribute turi būti vaizdas.',
    'in' => 'Pasirinkta reikšmė yra neteisinga :attribute.',
    'in_array' => 'Laukas :attribute neegzistuoja :other.',
    'integer' => 'Laukas :attribute turi būti sveikasis skaičius.',
    'ip' => 'Laukas :attribute turi būti galiojantis IP adresas.',
    'ipv4' => 'Laukas :attribute turi būti galiojantis IPv4 adresas.',
    'ipv6' => 'Laukas :attribute turi būti galiojantis IPv6 adresas.',
    'json' => 'Laukas :attribute turi būti galiojantis JSON eilutė.',
    'lt' => [
        'numeric' => 'Laukas :attribute turi būti mažesnis nei :value.',
        'file' => 'Laukas :attribute turi būti mažesnis nei :value kilobaitų.',
        'string' => 'Laukas :attribute turi turėti mažiau nei :value simbolių.',
        'array' => 'Laukas :attribute turi turėti mažiau nei :value elementų.',
    ],
    'lte' => [
        'numeric' => 'Laukas :attribute turi būti mažesnis arba lygus :value.',
        'file' => 'Laukas :attribute turi būti mažesnis arba lygus :value kilobaitų.',
        'string' => 'Laukas :attribute turi turėti ne daugiau kaip :value simbolių.',
        'array' => 'Laukas :attribute negali turėti daugiau nei :value elementų.',
    ],
    'mac_address' => 'Laukas :attribute turi būti galiojantis MAC adresas.',
    'max' => [
        'numeric' => 'Laukas :attribute negali būti didesnis nei :max.',
        'file' => 'Laukas :attribute negali būti didesnis nei :max kilobaitų.',
        'string' => 'Laukas :attribute negali turėti daugiau nei :max simbolių.',
        'array' => 'Laukas :attribute negali turėti daugiau nei :max elementų.',
    ],
    'mimes' => 'Laukas :attribute turi būti failas, kurio tipas: :values.',
    'mimetypes' => 'Laukas :attribute turi būti failas, kurio tipas: :values.',
    'min' => [
        'numeric' => 'Laukas :attribute turi būti bent :min.',
        'file' => 'Laukas :attribute turi turėti bent :min kilobaitų.',
        'string' => 'Laukas :attribute turi turėti bent :min simbolių.',
        'array' => 'Laukas :attribute turi turėti bent :min elementų.',
    ],
    'multiple_of' => 'Laukas :attribute turi būti dalomas iš :value.',
    'not_in' => 'Pasirinkta reikšmė yra neteisinga :attribute.',
    'not_regex' => 'Lauko :attribute formatas yra neteisingas.',
    'numeric' => 'Laukas :attribute turi būti skaičius.',
    'password' => 'Slaptažodis yra neteisingas.',
    'present' => 'Laukas :attribute turi būti.',
    'prohibited' => 'Laukas :attribute yra uždraustas.',
    'prohibited_if' => 'Laukas :attribute yra uždraustas, kai :other yra :value.',
    'prohibited_unless' => 'Laukas :attribute yra uždraustas, nebent :other yra :values.',
    'regex' => 'Lauko :attribute formatas yra neteisingas.',
    'required' => 'Laukas :attribute yra privalomas.',
    'required_if' => 'Laukas :attribute yra privalomas, kai :other yra :value.',
    'required_unless' => 'Laukas :attribute yra privalomas, nebent :other yra :values.',
    'required_with' => 'Laukas :attribute yra privalomas, kai :values yra pateiktas.',
    'required_with_all' => 'Laukas :attribute yra privalomas, kai :values yra pateikti.',
    'required_without' => 'Laukas :attribute yra privalomas, kai :values nėra pateiktas.',
    'required_without_all' => 'Laukas :attribute yra privalomas, kai nė viena iš :values nėra pateikta.',
    'same' => 'Laukas :attribute ir :other turi sutapti.',
    'size' => [
        'numeric' => 'Laukas :attribute turi būti :size.',
        'file' => 'Laukas :attribute turi būti :size kilobaitų.',
        'string' => 'Laukas :attribute turi būti :size simbolių.',
        'array' => 'Laukas :attribute turi turėti :size elementų.',
    ],
    'starts_with' => 'Laukas :attribute turi prasidėti vienu iš: :values.',
    'string' => 'Laukas :attribute turi būti tekstas.',
    'timezone' => 'Laukas :attribute turi būti galiojanti laiko zona.',
    'unique' => 'Laukas :attribute jau užimtas.',
    'uploaded' => 'Lauko :attribute įkėlimas nepavyko.',
    'url' => 'Lauko :attribute formatas yra neteisingas.',
    'uuid' => 'Laukas :attribute turi būti galiojantis UUID.',
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
        'name' => 'vardas',
        'username' => 'vartotojo vardas',
        'email' => 'el. pašto adresas',
        'password' => 'slaptažodis',
        'role' => 'vaidmuo',
    ],
    

];
