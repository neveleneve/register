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
    'accepted' => ':attribute skal accepteres.',
    'accepted_if' => ':attribute skal accepteres, når :other er :value.',
    'active_url' => ':attribute er ikke en gyldig URL.',
    'after' => ':attribute skal være en dato efter :date.',
    'after_or_equal' => ':attribute skal være en dato efter eller lig med :date.',
    'alpha' => ':attribute må kun indeholde bogstaver.',
    'alpha_dash' => ':attribute må kun indeholde bogstaver, tal, bindestreger og understreger.',
    'alpha_num' => ':attribute må kun indeholde bogstaver og tal.',
    'array' => ':attribute skal være et array.',
    'before' => ':attribute skal være en dato før :date.',
    'before_or_equal' => ':attribute skal være en dato før eller lig med :date.',
    'between' => [
        'numeric' => ':attribute skal være mellem :min og :max.',
        'file' => ':attribute skal være mellem :min og :max kilobytes.',
        'string' => ':attribute skal være mellem :min og :max tegn.',
        'array' => ':attribute skal have mellem :min og :max elementer.',
    ],
    'boolean' => ':attribute feltet skal være sandt eller falskt.',
    'confirmed' => ':attribute bekræftelsen stemmer ikke.',
    'current_password' => 'Adgangskoden er forkert.',
    'date' => ':attribute er ikke en gyldig dato.',
    'date_equals' => ':attribute skal være en dato lig med :date.',
    'date_format' => ':attribute stemmer ikke overens med formatet :format.',
    'declined' => ':attribute skal afvises.',
    'declined_if' => ':attribute skal afvises, når :other er :value.',
    'different' => ':attribute og :other skal være forskellige.',
    'digits' => ':attribute skal være :digits cifre.',
    'digits_between' => ':attribute skal være mellem :min og :max cifre.',
    'dimensions' => ':attribute har ugyldige billeddimensioner.',
    'distinct' => ':attribute feltet har en duplikeret værdi.',
    'email' => ':attribute skal være en gyldig e-mailadresse.',
    'ends_with' => ':attribute skal slutte med en af følgende: :values.',
    'enum' => 'Det valgte :attribute er ugyldigt.',
    'exists' => 'Det valgte :attribute er ugyldigt.',
    'file' => ':attribute skal være en fil.',
    'filled' => ':attribute feltet skal have en værdi.',
    'gt' => [
        'numeric' => ':attribute skal være større end :value.',
        'file' => ':attribute skal være større end :value kilobytes.',
        'string' => ':attribute skal være større end :value tegn.',
        'array' => ':attribute skal have mere end :value elementer.',
    ],
    'gte' => [
        'numeric' => ':attribute skal være større end eller lig med :value.',
        'file' => ':attribute skal være større end eller lig med :value kilobytes.',
        'string' => ':attribute skal være større end eller lig med :value tegn.',
        'array' => ':attribute skal have :value elementer eller mere.',
    ],
    'image' => ':attribute skal være et billede.',
    'in' => 'Den valgte :attribute er ugyldig.',
    'in_array' => ':attribute feltet findes ikke i :other.',
    'integer' => ':attribute skal være et heltal.',
    'ip' => ':attribute skal være en gyldig IP-adresse.',
    'ipv4' => ':attribute skal være en gyldig IPv4-adresse.',
    'ipv6' => ':attribute skal være en gyldig IPv6-adresse.',
    'json' => ':attribute skal være en gyldig JSON-streng.',
    'lt' => [
        'numeric' => ':attribute skal være mindre end :value.',
        'file' => ':attribute skal være mindre end :value kilobytes.',
        'string' => ':attribute skal være mindre end :value tegn.',
        'array' => ':attribute skal have mindre end :value elementer.',
    ],
    'lte' => [
        'numeric' => ':attribute skal være mindre end eller lig med :value.',
        'file' => ':attribute skal være mindre end eller lig med :value kilobytes.',
        'string' => ':attribute skal være mindre end eller lig med :value tegn.',
        'array' => ':attribute må ikke have mere end :value elementer.',
    ],
    'mac_address' => ':attribute skal være en gyldig MAC-adresse.',
    'max' => [
        'numeric' => ':attribute må ikke være større end :max.',
        'file' => ':attribute må ikke være større end :max kilobytes.',
        'string' => ':attribute må ikke være større end :max tegn.',
        'array' => ':attribute må ikke have mere end :max elementer.',
    ],
    'mimes' => ':attribute skal være en fil af typen: :values.',
    'mimetypes' => ':attribute skal være en fil af typen: :values.',
    'min' => [
        'numeric' => ':attribute skal være mindst :min.',
        'file' => ':attribute skal være mindst :min kilobytes.',
        'string' => ':attribute skal være mindst :min tegn.',
        'array' => ':attribute skal have mindst :min elementer.',
    ],
    'multiple_of' => ':attribute skal være et multiplum af :value.',
    'not_in' => 'Den valgte :attribute er ugyldig.',
    'not_regex' => ':attribute formatet er ugyldigt.',
    'numeric' => ':attribute skal være et nummer.',
    'password' => 'Adgangskoden er forkert.',
    'present' => ':attribute feltet skal være til stede.',
    'prohibited' => ':attribute feltet er forbudt.',
    'prohibited_if' => ':attribute feltet er forbudt, når :other er :value.',
    'prohibited_unless' => ':attribute feltet er forbudt, medmindre :other er i :values.',
    'prohibits' => ':attribute feltet forhindrer tilstedeværelsen af :other.',
    'regex' => ':attribute formatet er ugyldigt.',
    'required' => ':attribute feltet er påkrævet.',
    'required_array_keys' => ':attribute feltet skal indeholde poster for: :values.',
    'required_if' => ':attribute feltet er påkrævet, når :other er :value.',
    'required_unless' => ':attribute feltet er påkrævet, medmindre :other er i :values.',
    'required_with' => ':attribute feltet er påkrævet, når :values er til stede.',
    'required_with_all' => ':attribute feltet er påkrævet, når :values er til stede.',
    'required_without' => ':attribute feltet er påkrævet, når :values ikke er til stede.',
    'required_without_all' => ':attribute feltet er påkrævet, når ingen af :values er til stede.',
    'same' => ':attribute og :other skal stemme overens.',
    'size' => [
        'numeric' => ':attribute skal være :size.',
        'file' => ':attribute skal være :size kilobytes.',
        'string' => ':attribute skal være :size tegn.',
        'array' => ':attribute skal indeholde :size elementer.',
    ],
    'starts_with' => ':attribute skal starte med en af følgende: :values.',
    'string' => ':attribute skal være en streng.',
    'timezone' => ':attribute skal være en gyldig tidszone.',
    'unique' => ':attribute er allerede taget.',
    'uploaded' => ':attribute kunne ikke uploades.',
    'url' => ':attribute skal være en gyldig URL.',
    'uuid' => ':attribute skal være en gyldig UUID.',

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
        'name' => 'navn',
        'username' => 'brugernavn',
        'email' => 'e-mailadresse',
        'password' => 'adgangskode',
        'role' => 'rolle',
    ],


];
