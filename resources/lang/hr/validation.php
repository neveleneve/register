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


    'accepted' => 'Polje :attribute mora biti prihvaćeno.',
    'accepted_if' => 'Polje :attribute mora biti prihvaćeno kada je :other :value.',
    'active_url' => 'Polje :attribute nije važeća URL adresa.',
    'after' => 'Polje :attribute mora biti datum nakon :date.',
    'after_or_equal' => 'Polje :attribute mora biti datum nakon ili jednak :date.',
    'alpha' => 'Polje :attribute može sadržavati samo slova.',
    'alpha_dash' => 'Polje :attribute može sadržavati samo slova, brojeve, crte i donje crte.',
    'alpha_num' => 'Polje :attribute može sadržavati samo slova i brojeve.',
    'array' => 'Polje :attribute mora biti niz.',
    'before' => 'Polje :attribute mora biti datum prije :date.',
    'before_or_equal' => 'Polje :attribute mora biti datum prije ili jednak :date.',
    'between' => [
        'numeric' => 'Polje :attribute mora biti između :min i :max.',
        'file' => 'Polje :attribute mora biti između :min i :max kilobajta.',
        'string' => 'Polje :attribute mora biti između :min i :max znakova.',
        'array' => 'Polje :attribute mora imati između :min i :max elemenata.',
    ],
    'boolean' => 'Polje :attribute mora biti istinito ili netačno.',
    'confirmed' => 'Polje :attribute se ne poklapa.',
    'current_password' => 'Lozinka nije točna.',
    'date' => 'Polje :attribute nije važeći datum.',
    'date_equals' => 'Polje :attribute mora biti jednako :date.',
    'date_format' => 'Polje :attribute se ne poklapa s formatom :format.',
    'declined' => 'Polje :attribute mora biti odbijeno.',
    'declined_if' => 'Polje :attribute mora biti odbijeno kada je :other :value.',
    'different' => 'Polja :attribute i :other moraju biti različita.',
    'digits' => 'Polje :attribute mora imati :digits znamenki.',
    'digits_between' => 'Polje :attribute mora biti između :min i :max znamenki.',
    'dimensions' => 'Polje :attribute ima neispravne dimenzije.',
    'distinct' => 'Polje :attribute ima duplu vrijednost.',
    'email' => 'Polje :attribute mora biti valjana e-mail adresa.',
    'ends_with' => 'Polje :attribute mora završavati s jednim od: :values.',
    'enum' => 'Odabrana vrijednost nije važeća za polje :attribute.',
    'exists' => 'Odabrana vrijednost nije važeća za polje :attribute.',
    'file' => 'Polje :attribute mora biti datoteka.',
    'filled' => 'Polje :attribute mora imati vrijednost.',
    'gt' => [
        'numeric' => 'Polje :attribute mora biti veće od :value.',
        'file' => 'Polje :attribute mora biti veće od :value kilobajta.',
        'string' => 'Polje :attribute mora imati više od :value znakova.',
        'array' => 'Polje :attribute mora imati više od :value elemenata.',
    ],
    'gte' => [
        'numeric' => 'Polje :attribute mora biti veće ili jednako :value.',
        'file' => 'Polje :attribute mora biti veće ili jednako :value kilobajta.',
        'string' => 'Polje :attribute mora imati najmanje :value znakova.',
        'array' => 'Polje :attribute mora imati :value elemenata ili više.',
    ],
    'image' => 'Polje :attribute mora biti slika.',
    'in' => 'Odabrana vrijednost nije važeća za polje :attribute.',
    'in_array' => 'Polje :attribute ne postoji u :other.',
    'integer' => 'Polje :attribute mora biti cijeli broj.',
    'ip' => 'Polje :attribute mora biti važeća IP adresa.',
    'ipv4' => 'Polje :attribute mora biti važeća IPv4 adresa.',
    'ipv6' => 'Polje :attribute mora biti važeća IPv6 adresa.',
    'json' => 'Polje :attribute mora biti valjani JSON niz.',
    'lt' => [
        'numeric' => 'Polje :attribute mora biti manje od :value.',
        'file' => 'Polje :attribute mora biti manje od :value kilobajta.',
        'string' => 'Polje :attribute mora imati manje od :value znakova.',
        'array' => 'Polje :attribute mora imati manje od :value elemenata.',
    ],
    'lte' => [
        'numeric' => 'Polje :attribute mora biti manje ili jednako :value.',
        'file' => 'Polje :attribute mora biti manje ili jednako :value kilobajta.',
        'string' => 'Polje :attribute ne smije sadržavati više od :value znakova.',
        'array' => 'Polje :attribute ne smije imati više od :value elemenata.',
    ],
    'mac_address' => 'Polje :attribute mora biti važeća MAC adresa.',
    'max' => [
        'numeric' => 'Polje :attribute ne smije biti veće od :max.',
        'file' => 'Polje :attribute ne smije biti veće od :max kilobajta.',
        'string' => 'Polje :attribute ne smije imati više od :max znakova.',
        'array' => 'Polje :attribute ne smije imati više od :max elemenata.',
    ],
    'mimes' => 'Polje :attribute mora biti datoteka tipa: :values.',
    'mimetypes' => 'Polje :attribute mora biti datoteka tipa: :values.',
    'min' => [
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'file' => 'Polje :attribute mora imati najmanje :min kilobajta.',
        'string' => 'Polje :attribute mora imati najmanje :min znakova.',
        'array' => 'Polje :attribute mora imati najmanje :min elemenata.',
    ],
    'multiple_of' => 'Polje :attribute mora biti višekratnik od :value.',
    'not_in' => 'Odabrana vrijednost nije važeća za polje :attribute.',
    'not_regex' => 'Format polja :attribute nije valjan.',
    'numeric' => 'Polje :attribute mora biti broj.',
    'password' => 'Lozinka je netočna.',
    'present' => 'Polje :attribute mora biti prisutno.',
    'prohibited' => 'Polje :attribute je zabranjeno.',
    'prohibited_if' => 'Polje :attribute je zabranjeno ako je :other :value.',
    'prohibited_unless' => 'Polje :attribute je zabranjeno osim ako :other nije :values.',
    'regex' => 'Format polja :attribute nije valjan.',
    'required' => 'Polje :attribute je obavezno.',
    'required_array_keys' => 'Polje :attribute mora sadržavati ključeve: :values.',
    'required_if' => 'Polje :attribute je obavezno ako je :other :value.',
    'required_if_accepted' => 'Polje :attribute je obavezno ako je :other prihvaćen.',
    'required_with' => 'Polje :attribute je obavezno ako je :values prisutno.',
    'required_with_all' => 'Polje :attribute je obavezno ako su prisutni :values.',
    'required_without' => 'Polje :attribute je obavezno ako :values nije prisutno.',
    'required_without_all' => 'Polje :attribute je obavezno ako nijedno od :values nije prisutno.',
    'same' => 'Polja :attribute i :other moraju se podudarati.',
    'size' => [
        'numeric' => 'Polje :attribute mora biti :size.',
        'file' => 'Polje :attribute mora imati :size kilobajta.',
        'string' => 'Polje :attribute mora imati :size znakova.',
        'array' => 'Polje :attribute mora sadržavati :size elemenata.',
    ],
    'starts_with' => 'Polje :attribute mora početi s jednim od: :values.',
    'string' => 'Polje :attribute mora biti niz.',
    'timezone' => 'Polje :attribute mora biti važeća vremenska zona.',
    'unique' => 'Polje :attribute već postoji.',
    'uploaded' => 'Polje :attribute nije uspjelo učitati.',
    'url' => 'Format polja :attribute nije valjan.',
    'uuid' => 'Polje :attribute mora biti važeći UUID.',
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
        'username' => 'korisničko ime',
        'email' => 'e-mail adresa',
        'password' => 'lozinka',
        'role' => 'uloga',
    ],


];
