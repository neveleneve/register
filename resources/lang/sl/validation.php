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

    'accepted' => 'Polje :attribute mora biti sprejeto.',
    'accepted_if' => 'Polje :attribute mora biti sprejeto, kadar je :other :value.',
    'active_url' => 'Polje :attribute ni veljavna URL povezava.',
    'after' => 'Polje :attribute mora biti datum po :date.',
    'after_or_equal' => 'Polje :attribute mora biti datum po ali enak :date.',
    'alpha' => 'Polje :attribute lahko vsebuje samo črke.',
    'alpha_dash' => 'Polje :attribute lahko vsebuje samo črke, številke, pomišljaje in podčrtaje.',
    'alpha_num' => 'Polje :attribute lahko vsebuje samo črke in številke.',
    'array' => 'Polje :attribute mora biti seznam.',
    'before' => 'Polje :attribute mora biti datum pred :date.',
    'before_or_equal' => 'Polje :attribute mora biti datum pred ali enak :date.',
    'between' => [
        'numeric' => 'Polje :attribute mora biti med :min in :max.',
        'file' => 'Polje :attribute mora biti med :min in :max kilobajti.',
        'string' => 'Polje :attribute mora biti med :min in :max znaki.',
        'array' => 'Polje :attribute mora imeti med :min in :max elementi.',
    ],
    'boolean' => 'Polje :attribute mora biti resnično ali napačno.',
    'confirmed' => 'Polje :attribute se ne ujema.',
    'current_password' => 'Geslo ni pravilno.',
    'date' => 'Polje :attribute ni veljaven datum.',
    'date_equals' => 'Polje :attribute mora biti enako :date.',
    'date_format' => 'Polje :attribute se ne ujema s formatom :format.',
    'declined' => 'Polje :attribute mora biti zavrnjeno.',
    'declined_if' => 'Polje :attribute mora biti zavrnjeno, ko je :other :value.',
    'different' => 'Polja :attribute in :other morata biti različna.',
    'digits' => 'Polje :attribute mora imeti :digits števk.',
    'digits_between' => 'Polje :attribute mora biti med :min in :max števkami.',
    'dimensions' => 'Polje :attribute ima neveljavne dimenzije.',
    'distinct' => 'Polje :attribute ima podvojeno vrednost.',
    'email' => 'Polje :attribute mora biti veljavna e-poštna naslov.',
    'ends_with' => 'Polje :attribute se mora končati z eno od: :values.',
    'enum' => 'Izbrana vrednost ni veljavna za polje :attribute.',
    'exists' => 'Izbrana vrednost ni veljavna za polje :attribute.',
    'file' => 'Polje :attribute mora biti datoteka.',
    'filled' => 'Polje :attribute mora imeti vrednost.',
    'gt' => [
        'numeric' => 'Polje :attribute mora biti večje od :value.',
        'file' => 'Polje :attribute mora biti večje od :value kilobajtov.',
        'string' => 'Polje :attribute mora imeti več kot :value znakov.',
        'array' => 'Polje :attribute mora imeti več kot :value elementov.',
    ],
    'gte' => [
        'numeric' => 'Polje :attribute mora biti večje ali enako :value.',
        'file' => 'Polje :attribute mora biti večje ali enako :value kilobajtov.',
        'string' => 'Polje :attribute mora imeti vsaj :value znakov.',
        'array' => 'Polje :attribute mora imeti :value elementov ali več.',
    ],
    'image' => 'Polje :attribute mora biti slika.',
    'in' => 'Izbrana vrednost ni veljavna za polje :attribute.',
    'in_array' => 'Polje :attribute ne obstaja v :other.',
    'integer' => 'Polje :attribute mora biti celo število.',
    'ip' => 'Polje :attribute mora biti veljavna IP naslov.',
    'ipv4' => 'Polje :attribute mora biti veljavna IPv4 naslov.',
    'ipv6' => 'Polje :attribute mora biti veljavna IPv6 naslov.',
    'json' => 'Polje :attribute mora biti veljavna JSON vrstica.',
    'lt' => [
        'numeric' => 'Polje :attribute mora biti manjše od :value.',
        'file' => 'Polje :attribute mora biti manjše od :value kilobajtov.',
        'string' => 'Polje :attribute mora imeti manj kot :value znakov.',
        'array' => 'Polje :attribute mora imeti manj kot :value elementov.',
    ],
    'lte' => [
        'numeric' => 'Polje :attribute mora biti manjše ali enako :value.',
        'file' => 'Polje :attribute mora biti manjše ali enako :value kilobajtov.',
        'string' => 'Polje :attribute ne sme imeti več kot :value znakov.',
        'array' => 'Polje :attribute ne sme imeti več kot :value elementov.',
    ],
    'mac_address' => 'Polje :attribute mora biti veljavna MAC naslov.',
    'max' => [
        'numeric' => 'Polje :attribute ne sme biti večje od :max.',
        'file' => 'Polje :attribute ne sme biti večje od :max kilobajtov.',
        'string' => 'Polje :attribute ne sme imeti več kot :max znakov.',
        'array' => 'Polje :attribute ne sme imeti več kot :max elementov.',
    ],
    'mimes' => 'Polje :attribute mora biti datoteka tipa: :values.',
    'mimetypes' => 'Polje :attribute mora biti datoteka tipa: :values.',
    'min' => [
        'numeric' => 'Polje :attribute mora biti vsaj :min.',
        'file' => 'Polje :attribute mora imeti vsaj :min kilobajtov.',
        'string' => 'Polje :attribute mora imeti vsaj :min znakov.',
        'array' => 'Polje :attribute mora imeti vsaj :min elementov.',
    ],
    'multiple_of' => 'Polje :attribute mora biti večkratnik :value.',
    'not_in' => 'Izbrana vrednost ni veljavna za polje :attribute.',
    'not_regex' => 'Format polja :attribute ni veljaven.',
    'numeric' => 'Polje :attribute mora biti številka.',
    'password' => 'Geslo je napačno.',
    'present' => 'Polje :attribute mora biti prisotno.',
    'prohibited' => 'Polje :attribute je prepovedano.',
    'prohibited_if' => 'Polje :attribute je prepovedano, če je :other :value.',
    'prohibited_unless' => 'Polje :attribute je prepovedano, razen če je :other :values.',
    'regex' => 'Format polja :attribute ni veljaven.',
    'required' => 'Polje :attribute je obvezno.',
    'required_array_keys' => 'Polje :attribute mora vsebovati ključe: :values.',
    'required_if' => 'Polje :attribute je obvezno, če je :other :value.',
    'required_if_accepted' => 'Polje :attribute je obvezno, če je :other sprejeto.',
    'required_with' => 'Polje :attribute je obvezno, če je :values prisotno.',
    'required_with_all' => 'Polje :attribute je obvezno, če so prisotni :values.',
    'required_without' => 'Polje :attribute je obvezno, če :values ni prisotno.',
    'required_without_all' => 'Polje :attribute je obvezno, če nobena od :values ni prisotna.',
    'same' => 'Polja :attribute in :other se morata ujemati.',
    'size' => [
        'numeric' => 'Polje :attribute mora biti :size.',
        'file' => 'Polje :attribute mora biti :size kilobajtov.',
        'string' => 'Polje :attribute mora imeti :size znakov.',
        'array' => 'Polje :attribute mora vsebovati :size elementov.',
    ],
    'starts_with' => 'Polje :attribute se mora začeti z enim od: :values.',
    'string' => 'Polje :attribute mora biti niz.',
    'timezone' => 'Polje :attribute mora biti veljavna časovna cona.',
    'unique' => 'Polje :attribute že obstaja.',
    'uploaded' => 'Polje :attribute ni uspelo naložiti.',
    'url' => 'Format polja :attribute ni veljaven.',
    'uuid' => 'Polje :attribute mora biti veljaven UUID.',

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
        'name' => 'ime',
        'username' => 'uporabniško ime',
        'email' => 'elektronski naslov',
        'password' => 'geslo',
        'role' => 'vloga',
    ],


];
