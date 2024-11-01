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


    'reset' => 'A jelszó sikeresen visszaállítva!',
    'sent' => 'A jelszó-visszaállító hivatkozás elküldve az e-mail címére!',
    'throttled' => 'Kérjük, várjon a következő próbálkozás előtt',
    'token' => 'A jelszó-visszaállító token érvénytelen.',
    'user' => 'Nem található felhasználó ezzel az e-mail címmel.',

    'accepted' => 'A :attribute elfogadása kötelező.',
    'accepted_if' => 'A :attribute el kell, hogy legyen fogadva, amikor a :other :value.',
    'active_url' => 'A :attribute nem érvényes URL.',
    'after' => 'A :attribute dátumnak a :date utáni dátumnak kell lennie.',
    'after_or_equal' => 'A :attribute dátumnak a :date utáni vagy a :date-nak kell lennie.',
    'alpha' => 'A :attribute csak betűket tartalmazhat.',
    'alpha_dash' => 'A :attribute csak betűket, számokat, kötőjeleket és aláhúzásokat tartalmazhat.',
    'alpha_num' => 'A :attribute csak betűket és számokat tartalmazhat.',
    'array' => 'A :attribute tömbnek kell lennie.',
    'before' => 'A :attribute dátumnak a :date előtti dátumnak kell lennie.',
    'before_or_equal' => 'A :attribute dátumnak a :date előtti vagy a :date-nak kell lennie.',
    'between' => [
        'numeric' => 'A :attribute értékének :min és :max között kell lennie.',
        'file' => 'A :attribute méretének :min és :max kilobájt között kell lennie.',
        'string' => 'A :attribute hossza :min és :max karakter között kell lennie.',
        'array' => 'A :attribute elemének :min és :max között kell lennie.',
    ],
    'boolean' => 'A :attribute mezőnek igaznak vagy hamisnak kell lennie.',
    'confirmed' => 'A :attribute nem egyezik.',
    'current_password' => 'A jelszó helytelen.',
    'date' => 'A :attribute nem érvényes dátum.',
    'date_equals' => 'A :attribute-nak a :date-nek kell lennie.',
    'date_format' => 'A :attribute nem egyezik a :format formátummal.',
    'declined' => 'A :attribute-t el kell utasítani.',
    'declined_if' => 'A :attribute-t el kell utasítani, amikor a :other :value.',
    'different' => 'A :attribute-nak és a :other-nak eltérőnek kell lennie.',
    'digits' => 'A :attribute :digits számjegyből kell állnia.',
    'digits_between' => 'A :attribute hossza :min és :max számjegy között kell lennie.',
    'dimensions' => 'A :attribute kép méretei érvénytelenek.',
    'distinct' => 'A :attribute mező értéke duplikált.',
    'email' => 'A :attribute érvényes e-mail címnek kell lennie.',
    'ends_with' => 'A :attribute a következőkkel kell végződnie: :values.',
    'enum' => 'A kiválasztott érték érvénytelen a :attribute számára.',
    'exists' => 'A kiválasztott érték érvénytelen a :attribute számára.',
    'file' => 'A :attribute fájlnak kell lennie.',
    'filled' => 'A :attribute mezőnek értéket kell tartalmaznia.',
    'gt' => [
        'numeric' => 'A :attribute-nak nagyobbnak kell lennie, mint :value.',
        'file' => 'A :attribute méretének nagyobbnak kell lennie, mint :value kilobájt.',
        'string' => 'A :attribute hossza nagyobb kell, hogy legyen, mint :value karakter.',
        'array' => 'A :attribute-nak több, mint :value elemet kell tartalmaznia.',
    ],
    'gte' => [
        'numeric' => 'A :attribute-nak nagyobbnak vagy egyenlőnek kell lennie, mint :value.',
        'file' => 'A :attribute méretének nagyobbnak vagy egyenlőnek kell lennie, mint :value kilobájt.',
        'string' => 'A :attribute hossza nagyobb vagy egyenlő kell, hogy legyen, mint :value karakter.',
        'array' => 'A :attribute-nak :value vagy annál több elemet kell tartalmaznia.',
    ],
    'image' => 'A :attribute képnek kell lennie.',
    'in' => 'A kiválasztott érték érvénytelen a :attribute számára.',
    'in_array' => 'A :attribute mező nem található a(z) :other-ban.',
    'integer' => 'A :attribute számnak kell lennie.',
    'ip' => 'A :attribute-nak érvényes IP címnek kell lennie.',
    'ipv4' => 'A :attribute-nak érvényes IPv4 címnek kell lennie.',
    'ipv6' => 'A :attribute-nak érvényes IPv6 címnek kell lennie.',
    'json' => 'A :attribute-nak érvényes JSON stringnek kell lennie.',
    'lt' => [
        'numeric' => 'A :attribute-nak kisebbnek kell lennie, mint :value.',
        'file' => 'A :attribute méretének kisebbnek kell lennie, mint :value kilobájt.',
        'string' => 'A :attribute hossza kisebb kell, hogy legyen, mint :value karakter.',
        'array' => 'A :attribute-nak kevesebb, mint :value elemet kell tartalmaznia.',
    ],
    'lte' => [
        'numeric' => 'A :attribute-nak kisebbnek vagy egyenlőnek kell lennie, mint :value.',
        'file' => 'A :attribute méretének kisebbnek vagy egyenlőnek kell lennie, mint :value kilobájt.',
        'string' => 'A :attribute hossza kisebb vagy egyenlő kell, hogy legyen, mint :value karakter.',
        'array' => 'A :attribute-nak nem lehet több, mint :value eleme.',
    ],
    'mac_address' => 'A :attribute-nak érvényes MAC címnek kell lennie.',
    'max' => [
        'numeric' => 'A :attribute nem lehet nagyobb, mint :max.',
        'file' => 'A :attribute nem lehet nagyobb, mint :max kilobájt.',
        'string' => 'A :attribute hossza nem lehet nagyobb, mint :max karakter.',
        'array' => 'A :attribute-nak nem lehet több, mint :max eleme.',
    ],
    'mimes' => 'A :attribute-nak a következő fájl típusoknak kell lennie: :values.',
    'mimetypes' => 'A :attribute-nak a következő fájl típusoknak kell lennie: :values.',
    'min' => [
        'numeric' => 'A :attribute-nak legalább :min-nek kell lennie.',
        'file' => 'A :attribute-nak legalább :min kilobájt méretűnek kell lennie.',
        'string' => 'A :attribute hossza legalább :min karakter hosszú kell legyen.',
        'array' => 'A :attribute-nak legalább :min elemet kell tartalmaznia.',
    ],
    'multiple_of' => 'A :attribute-nak :value többszöröse kell legyen.',
    'not_in' => 'A kiválasztott érték érvénytelen a :attribute számára.',
    'not_regex' => 'A :attribute formátuma érvénytelen.',
    'numeric' => 'A :attribute-nak számnak kell lennie.',
    'password' => 'A jelszó helytelen.',
    'present' => 'A :attribute mezőnek jelen kell lennie.',
    'prohibited' => 'A :attribute mező tilos.',
    'prohibited_if' => 'A :attribute mező tilos, amikor a :other :value.',
    'prohibited_unless' => 'A :attribute mező tilos, hacsak a :other nem :values.',
    'regex' => 'A :attribute formátuma érvénytelen.',
    'required' => 'A :attribute mező kitöltése kötelező.',
    'required_if' => 'A :attribute mező kitöltése kötelező, ha a(z) :other :value.',
    'required_unless' => 'A :attribute mező kitöltése kötelező, hacsak a(z) :other nem :values.',
    'required_with' => 'A :attribute mező kitöltése kötelező, ha a(z) :values jelen van.',
    'required_with_all' => 'A :attribute mező kitöltése kötelező, ha a(z) :values jelen van.',
    'required_without' => 'A :attribute mező kitöltése kötelező, ha a(z) :values nem jelen van.',
    'required_without_all' => 'A :attribute mező kitöltése kötelező, ha a(z) :values egyik sem jelen van.',
    'same' => 'A :attribute-nak és a :other-nak egyeznie kell.',
    'size' => [
        'numeric' => 'A :attribute-nak :size-nek kell lennie.',
        'file' => 'A :attribute méretének :size kilobájt méretűnek kell lennie.',
        'string' => 'A :attribute hossza :size karakter hosszú kell legyen.',
        'array' => 'A :attribute-nak :size elemet kell tartalmaznia.',
    ],
    'starts_with' => 'A :attribute a következőkkel kell kezdődnie: :values.',
    'string' => 'A :attribute-nak szövegnek kell lennie.',
    'timezone' => 'A :attribute érvényes időzónának kell lennie.',
    'unique' => 'A :attribute már használatban van.',
    'uploaded' => ':attribute feltöltése sikertelen.',
    'url' => 'A :attribute formátuma érvénytelen.',
    'uuid' => 'A :attribute-nak érvényes UUID-nek kell lennie.',
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
        'name' => 'név',
        'username' => 'felhasználónév',
        'email' => 'e-mail cím',
        'password' => 'jelszó',
        'role' => 'szerep',
    ],



];
