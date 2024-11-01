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

    'accepted' => 'Þú verður að samþykkja :attribute.',
    'accepted_if' => 'Þú verður að samþykkja :attribute þegar :other er :value.',
    'active_url' => ':attribute er ekki gildur vefslóð.',
    'after' => ':attribute verður að vera dagsetning eftir :date.',
    'after_or_equal' => ':attribute verður að vera dagsetning eftir eða jafnt og :date.',
    'alpha' => ':attribute má aðeins innihalda bókstafi.',
    'alpha_dash' => ':attribute má aðeins innihalda bókstafi, tölur, bandstrik og undirstrik.',
    'alpha_num' => ':attribute má aðeins innihalda bókstafi og tölur.',
    'array' => ':attribute verður að vera fylki.',
    'before' => ':attribute verður að vera dagsetning fyrir :date.',
    'before_or_equal' => ':attribute verður að vera dagsetning fyrir eða jafnt og :date.',
    'between' => [
        'numeric' => ':attribute verður að vera á milli :min og :max.',
        'file' => ':attribute verður að vera á milli :min og :max kílóbæta.',
        'string' => ':attribute verður að vera á milli :min og :max stafa.',
        'array' => ':attribute verður að hafa á milli :min og :max hlutir.',
    ],
    'boolean' => 'Fyrirspurnin :attribute verður að vera sönn eða ósönn.',
    'confirmed' => 'Staðfesting á :attribute passar ekki.',
    'current_password' => 'Lykilorðið er rangt.',
    'date' => ':attribute er ekki gild dagsetning.',
    'date_equals' => ':attribute verður að vera dagsetning sem jafnast á við :date.',
    'date_format' => ':attribute passar ekki við formatið :format.',
    'declined' => ':attribute verður að vera hafnað.',
    'declined_if' => ':attribute verður að vera hafnað þegar :other er :value.',
    'different' => ':attribute og :other verða að vera mismunandi.',
    'digits' => ':attribute verður að vera :digits tölustafir.',
    'digits_between' => ':attribute verður að vera á milli :min og :max tölustafa.',
    'dimensions' => ':attribute hefur ógilda myndarstærð.',
    'distinct' => ':attribute hefur tvítekningu.',
    'email' => ':attribute verður að vera gilt tölvupóstfang.',
    'ends_with' => ':attribute verður að enda með einum af eftirfarandi: :values.',
    'enum' => 'Valið :attribute er ógilt.',
    'exists' => 'Valið :attribute er ógilt.',
    'file' => ':attribute verður að vera skrá.',
    'filled' => 'Fyrirspurnin :attribute verður að hafa gildi.',
    'gt' => [
        'numeric' => ':attribute verður að vera meira en :value.',
        'file' => ':attribute verður að vera meira en :value kílóbæt.',
        'string' => ':attribute verður að vera meira en :value stafir.',
        'array' => ':attribute verður að hafa fleiri en :value hlutir.',
    ],
    'gte' => [
        'numeric' => ':attribute verður að vera meira en eða jafnt og :value.',
        'file' => ':attribute verður að vera meira en eða jafnt og :value kílóbæt.',
        'string' => ':attribute verður að vera meira en eða jafnt og :value stafir.',
        'array' => ':attribute verður að hafa :value hluti eða fleiri.',
    ],
    'image' => ':attribute verður að vera mynd.',
    'in' => 'Valið :attribute er ógilt.',
    'in_array' => 'Fyrirspurnin :attribute er ekki til staðar í :other.',
    'integer' => ':attribute verður að vera heiltala.',
    'ip' => ':attribute verður að vera gild IP-tala.',
    'ipv4' => ':attribute verður að vera gild IPv4-tala.',
    'ipv6' => ':attribute verður að vera gild IPv6-tala.',
    'json' => ':attribute verður að vera gild JSON strengur.',
    'lt' => [
        'numeric' => ':attribute verður að vera minna en :value.',
        'file' => ':attribute verður að vera minna en :value kílóbæt.',
        'string' => ':attribute verður að vera minna en :value stafir.',
        'array' => ':attribute verður að hafa færri en :value hlutir.',
    ],
    'lte' => [
        'numeric' => ':attribute verður að vera minna en eða jafnt og :value.',
        'file' => ':attribute verður að vera minna en eða jafnt og :value kílóbæt.',
        'string' => ':attribute verður að vera minna en eða jafnt og :value stafir.',
        'array' => ':attribute má ekki hafa fleiri en :value hlutir.',
    ],
    'mac_address' => ':attribute verður að vera gild MAC-tala.',
    'max' => [
        'numeric' => ':attribute má ekki vera meira en :max.',
        'file' => ':attribute má ekki vera meira en :max kílóbæt.',
        'string' => ':attribute má ekki vera meira en :max stafir.',
        'array' => ':attribute má ekki hafa fleiri en :max hlutir.',
    ],
    'mimes' => ':attribute verður að vera skrá af gerð: :values.',
    'mimetypes' => ':attribute verður að vera skrá af gerð: :values.',
    'min' => [
        'numeric' => ':attribute verður að vera að minnsta kosti :min.',
        'file' => ':attribute verður að vera að minnsta kosti :min kílóbæt.',
        'string' => ':attribute verður að vera að minnsta kosti :min stafir.',
        'array' => ':attribute verður að hafa að minnsta kosti :min hlutir.',
    ],
    'multiple_of' => ':attribute verður að vera margfeldi af :value.',
    'not_in' => 'Valið :attribute er ógilt.',
    'not_regex' => 'Formið á :attribute er ógilt.',
    'numeric' => ':attribute verður að vera tala.',
    'password' => 'Lykilorðið er rangt.',
    'present' => 'Fyrirspurnin :attribute verður að vera til staðar.',
    'prohibited' => 'Fyrirspurnin :attribute er bönnuð.',
    'prohibited_if' => 'Fyrirspurnin :attribute er bönnuð þegar :other er :value.',
    'prohibited_unless' => 'Fyrirspurnin :attribute er bönnuð nema :other sé í :values.',
    'prohibits' => 'Fyrirspurnin :attribute bannar :other frá því að vera til staðar.',
    'regex' => 'Formið á :attribute er ógilt.',
    'required' => 'Fyrirspurnin :attribute er nauðsynleg.',
    'required_array_keys' => 'Fyrirspurnin :attribute verður að innihalda færslur fyrir: :values.',
    'required_if' => 'Fyrirspurnin :attribute er nauðsynleg þegar :other er :value.',
    'required_unless' => 'Fyrirspurnin :attribute er nauðsynleg nema :other sé í :values.',
    'required_with' => 'Fyrirspurnin :attribute er nauðsynleg þegar :values er til staðar.',
    'required_with_all' => 'Fyrirspurnin :attribute er nauðsynleg þegar :values eru til staðar.',
    'required_without' => 'Fyrirspurnin :attribute er nauðsynleg þegar :values er ekki til staðar.',
    'required_without_all' => 'Fyrirspurnin :attribute er nauðsynleg þegar engin :values eru til staðar.',
    'same' => ':attribute og :other verða að passa.',
    'size' => [
        'numeric' => ':attribute verður að vera :size.',
        'file' => ':attribute verður að vera :size kílóbæt.',
        'string' => ':attribute verður að vera :size stafir.',
        'array' => ':attribute verður að innihalda :size hlutir.',
    ],
    'starts_with' => ':attribute verður að byrja á einum af eftirfarandi: :values.',
    'string' => ':attribute verður að vera strengur.',
    'timezone' => ':attribute verður að vera gild svæðisvísir.',
    'unique' => ':attribute hefur þegar verið tekið.',
    'uploaded' => ':attribute tókst ekki að hlaða upp.',
    'url' => 'Formið á :attribute er ógilt.',
    'uuid' => ':attribute verður að vera gildur UUID.',


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
        'name' => 'nafn',
        'username' => 'notandanafn',
        'email' => 'netfang',
        'password' => 'lykilorð',
        'role' => 'hlutverk',
    ],


];
