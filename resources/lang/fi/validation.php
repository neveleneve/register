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

    'accepted' => ':attribute må aksepteres.',
    'accepted_if' => ':attribute må aksepteres når :other er :value.',
    'active_url' => ':attribute er ikke en gyldig URL.',
    'after' => ':attribute må være en dato etter :date.',
    'after_or_equal' => ':attribute må være en dato lik eller etter :date.',
    'alpha' => ':attribute kan kun inneholde bokstaver.',
    'alpha_dash' => ':attribute kan kun inneholde bokstaver, tall, bindestreker og understrekinger.',
    'alpha_num' => ':attribute kan kun inneholde bokstaver og tall.',
    'array' => ':attribute må være et array.',
    'before' => ':attribute må være en dato før :date.',
    'before_or_equal' => ':attribute må være en dato lik eller før :date.',
    'between' => [
        'numeric' => ':attribute må være mellom :min og :max.',
        'file' => ':attribute må være mellom :min og :max kilobytes.',
        'string' => ':attribute må være mellom :min og :max tegn.',
        'array' => ':attribute må ha mellom :min og :max elementer.',
    ],
    'boolean' => ':attribute-feltet må være sant eller falskt.',
    'confirmed' => ':attribute bekreftelsen samsvarer ikke.',
    'current_password' => 'Passordet er feil.',
    'date' => ':attribute er ikke en gyldig dato.',
    'date_equals' => ':attribute må være en dato lik :date.',
    'date_format' => ':attribute samsvarer ikke med formatet :format.',
    'declined' => ':attribute må avvises.',
    'declined_if' => ':attribute må avvises når :other er :value.',
    'different' => ':attribute og :other må være forskjellige.',
    'digits' => ':attribute må være :digits siffer.',
    'digits_between' => ':attribute må være mellom :min og :max siffer.',
    'dimensions' => ':attribute har ugyldige bildedimensjoner.',
    'distinct' => ':attribute-feltet har en duplikatverdi.',
    'email' => ':attribute må være en gyldig e-postadresse.',
    'ends_with' => ':attribute må slutte med en av følgende: :values.',
    'enum' => 'Den valgte :attribute er ugyldig.',
    'exists' => 'Den valgte :attribute er ugyldig.',
    'file' => ':attribute må være en fil.',
    'filled' => ':attribute-feltet må ha en verdi.',
    'gt' => [
        'numeric' => ':attribute må være større enn :value.',
        'file' => ':attribute må være større enn :value kilobytes.',
        'string' => ':attribute må være større enn :value tegn.',
        'array' => ':attribute må ha mer enn :value elementer.',
    ],
    'gte' => [
        'numeric' => ':attribute må være større enn eller lik :value.',
        'file' => ':attribute må være større enn eller lik :value kilobytes.',
        'string' => ':attribute må ha :value tegn eller flere.',
        'array' => ':attribute må ha :value elementer eller flere.',
    ],
    'image' => ':attribute må være et bilde.',
    'in' => 'Den valgte :attribute er ugyldig.',
    'in_array' => ':attribute-feltet eksisterer ikke i :other.',
    'integer' => ':attribute må være et heltall.',
    'ip' => ':attribute må være en gyldig IP-adresse.',
    'ipv4' => ':attribute må være en gyldig IPv4-adresse.',
    'ipv6' => ':attribute må være en gyldig IPv6-adresse.',
    'json' => ':attribute må være en gyldig JSON-streng.',
    'lt' => [
        'numeric' => ':attribute må være mindre enn :value.',
        'file' => ':attribute må være mindre enn :value kilobytes.',
        'string' => ':attribute må være mindre enn :value tegn.',
        'array' => ':attribute må ha færre enn :value elementer.',
    ],
    'lte' => [
        'numeric' => ':attribute må være mindre enn eller lik :value.',
        'file' => ':attribute må være mindre enn eller lik :value kilobytes.',
        'string' => ':attribute må ha maksimalt :value tegn.',
        'array' => ':attribute må ikke ha mer enn :value elementer.',
    ],
    'mac_address' => ':attribute må være en gyldig MAC-adresse.',
    'max' => [
        'numeric' => ':attribute kan ikke være større enn :max.',
        'file' => ':attribute kan ikke være større enn :max kilobytes.',
        'string' => ':attribute kan ikke ha mer enn :max tegn.',
        'array' => ':attribute kan ikke ha mer enn :max elementer.',
    ],
    'mimes' => ':attribute må være en fil av typen: :values.',
    'mimetypes' => ':attribute må være en fil av typen: :values.',
    'min' => [
        'numeric' => ':attribute må være minst :min.',
        'file' => ':attribute må være minst :min kilobytes.',
        'string' => ':attribute må ha minst :min tegn.',
        'array' => ':attribute må ha minst :min elementer.',
    ],
    'multiple_of' => ':attribute må være et multiplum av :value.',
    'not_in' => 'Den valgte :attribute er ugyldig.',
    'not_regex' => ':attribute-formatet er ugyldig.',
    'numeric' => ':attribute må være et tall.',
    'password' => 'Passordet er feil.',
    'present' => ':attribute-feltet må være til stede.',
    'prohibited' => ':attribute-feltet er forbudt.',
    'prohibited_if' => ':attribute-feltet er forbudt når :other er :value.',
    'prohibited_unless' => ':attribute-feltet er forbudt med mindre :other er i :values.',
    'prohibits' => ':attribute-feltet forbyr :other fra å være til stede.',
    'regex' => ':attribute-formatet er ugyldig.',
    'required' => ':attribute-feltet er påkrevd.',
    'required_array_keys' => ':attribute-feltet må inneholde oppføringer for: :values.',
    'required_if' => ':attribute-feltet er påkrevd når :other er :value.',
    'required_unless' => ':attribute-feltet er påkrevd med mindre :other er i :values.',
    'required_with' => ':attribute-feltet er påkrevd når :values er til stede.',
    'required_with_all' => ':attribute-feltet er påkrevd når :values er til stede.',
    'required_without' => ':attribute-feltet er påkrevd når :values ikke er til stede.',
    'required_without_all' => ':attribute-feltet er påkrevd når ingen av :values er til stede.',
    'same' => ':attribute og :other må samsvare.',
    'size' => [
        'numeric' => ':attribute må være :size.',
        'file' => ':attribute må være :size kilobytes.',
        'string' => ':attribute må ha :size tegn.',
        'array' => ':attribute må inneholde :size elementer.',
    ],
    'starts_with' => ':attribute må starte med en av følgende: :values.',
    'string' => ':attribute må være en streng.',
    'timezone' => ':attribute må være en gyldig tidssone.',
    'unique' => ':attribute er allerede tatt.',
    'uploaded' => 'Opplasting av :attribute mislyktes.',
    'url' => ':attribute må være en gyldig URL.',
    'uuid' => ':attribute må være en gyldig UUID.',
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
        'name' => 'nimi',
        'username' => 'käyttäjänimi',
        'email' => 'sähköpostiosoite',
        'password' => 'salasana',
        'role' => 'rooli',
    ],


];
