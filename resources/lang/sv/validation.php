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

    'accepted' => ':attribute måste accepteras.',
    'accepted_if' => ':attribute måste accepteras när :other är :value.',
    'active_url' => ':attribute är inte en giltig URL.',
    'after' => ':attribute måste vara ett datum efter :date.',
    'after_or_equal' => ':attribute måste vara ett datum efter eller lika med :date.',
    'alpha' => ':attribute får endast innehålla bokstäver.',
    'alpha_dash' => ':attribute får endast innehålla bokstäver, siffror, streck och understreck.',
    'alpha_num' => ':attribute får endast innehålla bokstäver och siffror.',
    'array' => ':attribute måste vara en array.',
    'before' => ':attribute måste vara ett datum före :date.',
    'before_or_equal' => ':attribute måste vara ett datum före eller lika med :date.',
    'between' => [
        'numeric' => ':attribute måste vara mellan :min och :max.',
        'file' => ':attribute måste vara mellan :min och :max kilobytes.',
        'string' => ':attribute måste vara mellan :min och :max tecken.',
        'array' => ':attribute måste innehålla mellan :min och :max objekt.',
    ],
    'boolean' => ':attribute-fältet måste vara sant eller falskt.',
    'confirmed' => 'Bekräftelsen av :attribute stämmer inte.',
    'current_password' => 'Lösenordet är felaktigt.',
    'date' => ':attribute är inte ett giltigt datum.',
    'date_equals' => ':attribute måste vara ett datum som är lika med :date.',
    'date_format' => ':attribute stämmer inte överens med formatet :format.',
    'declined' => ':attribute måste avvisas.',
    'declined_if' => ':attribute måste avvisas när :other är :value.',
    'different' => ':attribute och :other måste vara olika.',
    'digits' => ':attribute måste vara :digits siffror.',
    'digits_between' => ':attribute måste vara mellan :min och :max siffror.',
    'dimensions' => ':attribute har ogiltiga bilddimensioner.',
    'distinct' => ':attribute-fältet har ett duplicerat värde.',
    'email' => ':attribute måste vara en giltig e-postadress.',
    'ends_with' => ':attribute måste sluta med något av följande: :values.',
    'enum' => 'Det valda :attribute är ogiltigt.',
    'exists' => 'Det valda :attribute är ogiltigt.',
    'file' => ':attribute måste vara en fil.',
    'filled' => ':attribute-fältet måste ha ett värde.',
    'gt' => [
        'numeric' => ':attribute måste vara större än :value.',
        'file' => ':attribute måste vara större än :value kilobytes.',
        'string' => ':attribute måste vara längre än :value tecken.',
        'array' => ':attribute måste innehålla fler än :value objekt.',
    ],
    'gte' => [
        'numeric' => ':attribute måste vara större än eller lika med :value.',
        'file' => ':attribute måste vara större än eller lika med :value kilobytes.',
        'string' => ':attribute måste vara lika med eller större än :value tecken.',
        'array' => ':attribute måste innehålla :value objekt eller fler.',
    ],
    'image' => ':attribute måste vara en bild.',
    'in' => 'Det valda :attribute är ogiltigt.',
    'in_array' => ':attribute-fältet finns inte i :other.',
    'integer' => ':attribute måste vara ett heltal.',
    'ip' => ':attribute måste vara en giltig IP-adress.',
    'ipv4' => ':attribute måste vara en giltig IPv4-adress.',
    'ipv6' => ':attribute måste vara en giltig IPv6-adress.',
    'json' => ':attribute måste vara en giltig JSON-sträng.',
    'lt' => [
        'numeric' => ':attribute måste vara mindre än :value.',
        'file' => ':attribute måste vara mindre än :value kilobytes.',
        'string' => ':attribute måste vara kortare än :value tecken.',
        'array' => ':attribute måste innehålla färre än :value objekt.',
    ],
    'lte' => [
        'numeric' => ':attribute måste vara mindre än eller lika med :value.',
        'file' => ':attribute måste vara mindre än eller lika med :value kilobytes.',
        'string' => ':attribute måste vara lika med eller kortare än :value tecken.',
        'array' => ':attribute får inte innehålla fler än :value objekt.',
    ],
    'mac_address' => ':attribute måste vara en giltig MAC-adress.',
    'max' => [
        'numeric' => ':attribute får inte vara större än :max.',
        'file' => ':attribute får inte vara större än :max kilobytes.',
        'string' => ':attribute får inte vara längre än :max tecken.',
        'array' => ':attribute får inte innehålla fler än :max objekt.',
    ],
    'mimes' => ':attribute måste vara en fil av typen: :values.',
    'mimetypes' => ':attribute måste vara en fil av typen: :values.',
    'min' => [
        'numeric' => ':attribute måste vara minst :min.',
        'file' => ':attribute måste vara minst :min kilobytes.',
        'string' => ':attribute måste vara minst :min tecken.',
        'array' => ':attribute måste innehålla minst :min objekt.',
    ],
    'multiple_of' => ':attribute måste vara en multipel av :value.',
    'not_in' => 'Det valda :attribute är ogiltigt.',
    'not_regex' => ':attribute-formatet är ogiltigt.',
    'numeric' => ':attribute måste vara ett nummer.',
    'password' => 'Lösenordet är felaktigt.',
    'present' => ':attribute-fältet måste vara närvarande.',
    'prohibited' => ':attribute-fältet är förbjudet.',
    'prohibited_if' => ':attribute-fältet är förbjudet när :other är :value.',
    'prohibited_unless' => ':attribute-fältet är förbjudet om inte :other är i :values.',
    'prohibits' => ':attribute-fältet förbjuder närvaron av :other.',
    'regex' => ':attribute-formatet är ogiltigt.',
    'required' => ':attribute-fältet är obligatoriskt.',
    'required_array_keys' => ':attribute-fältet måste innehålla poster för: :values.',
    'required_if' => ':attribute-fältet är obligatoriskt när :other är :value.',
    'required_unless' => ':attribute-fältet är obligatoriskt om inte :other är i :values.',
    'required_with' => ':attribute-fältet är obligatoriskt när :values finns.',
    'required_with_all' => ':attribute-fältet är obligatoriskt när :values finns.',
    'required_without' => ':attribute-fältet är obligatoriskt när :values inte finns.',
    'required_without_all' => ':attribute-fältet är obligatoriskt när ingen av :values finns.',
    'same' => ':attribute och :other måste stämma överens.',
    'size' => [
        'numeric' => ':attribute måste vara :size.',
        'file' => ':attribute måste vara :size kilobytes.',
        'string' => ':attribute måste vara :size tecken.',
        'array' => ':attribute måste innehålla :size objekt.',
    ],
    'starts_with' => ':attribute måste börja med något av följande: :values.',
    'string' => ':attribute måste vara en sträng.',
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
        'name' => 'namn',
        'username' => 'användarnamn',
        'email' => 'e-postadress',
        'password' => 'lösenord',
        'role' => 'roll',
    ],


];
