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

    'accepted' => 'Dapat mong tanggapin ang :attribute.',
    'accepted_if' => 'Dapat mong tanggapin ang :attribute kapag ang :other ay :value.',
    'active_url' => 'Ang :attribute ay hindi isang wastong URL.',
    'after' => 'Ang :attribute ay dapat isang petsa pagkatapos ng :date.',
    'after_or_equal' => 'Ang :attribute ay dapat isang petsa pagkatapos o katumbas ng :date.',
    'alpha' => 'Ang :attribute ay dapat naglalaman lamang ng mga titik.',
    'alpha_dash' => 'Ang :attribute ay dapat naglalaman lamang ng mga titik, numero, gitling, at underscore.',
    'alpha_num' => 'Ang :attribute ay dapat naglalaman lamang ng mga titik at numero.',
    'array' => 'Ang :attribute ay dapat isang array.',
    'before' => 'Ang :attribute ay dapat isang petsa bago ang :date.',
    'before_or_equal' => 'Ang :attribute ay dapat isang petsa bago o katumbas ng :date.',
    'between' => [
        'numeric' => 'Ang :attribute ay dapat nasa pagitan ng :min at :max.',
        'file' => 'Ang :attribute ay dapat nasa pagitan ng :min at :max kilobytes.',
        'string' => 'Ang :attribute ay dapat nasa pagitan ng :min at :max na mga karakter.',
        'array' => 'Ang :attribute ay dapat magkaroon ng :min hanggang :max na mga item.',
    ],
    'boolean' => 'Ang larangan ng :attribute ay dapat totoo o mali.',
    'confirmed' => 'Ang pagkumpirma ng :attribute ay hindi tumutugma.',
    'current_password' => 'Ang password ay hindi tama.',
    'date' => 'Ang :attribute ay hindi isang wastong petsa.',
    'date_equals' => 'Ang :attribute ay dapat isang petsa na katumbas ng :date.',
    'date_format' => 'Ang :attribute ay hindi tumutugma sa format na :format.',
    'declined' => 'Dapat tanggihan ang :attribute.',
    'declined_if' => 'Dapat tanggihan ang :attribute kapag ang :other ay :value.',
    'different' => 'Ang :attribute at :other ay dapat magkaiba.',
    'digits' => 'Ang :attribute ay dapat :digits na mga digit.',
    'digits_between' => 'Ang :attribute ay dapat nasa pagitan ng :min at :max na mga digit.',
    'dimensions' => 'Ang :attribute ay may hindi wastong sukat ng larawan.',
    'distinct' => 'Ang :attribute ay may duplicate na halaga.',
    'email' => 'Ang :attribute ay dapat isang wastong email address.',
    'ends_with' => 'Ang :attribute ay dapat nagtatapos sa isa sa mga sumusunod: :values.',
    'enum' => 'Ang napiling halaga para sa :attribute ay hindi wastong.',
    'exists' => 'Ang napiling halaga para sa :attribute ay hindi wastong.',
    'file' => 'Ang :attribute ay dapat isang file.',
    'filled' => 'Ang larangan ng :attribute ay dapat may halaga.',
    'gt' => [
        'numeric' => 'Ang :attribute ay dapat mas malaki sa :value.',
        'file' => 'Ang :attribute ay dapat mas malaki sa :value kilobytes.',
        'string' => 'Ang :attribute ay dapat mas malaki sa :value na mga karakter.',
        'array' => 'Ang :attribute ay dapat magkaroon ng higit sa :value na mga item.',
    ],
    'gte' => [
        'numeric' => 'Ang :attribute ay dapat mas malaki o katumbas ng :value.',
        'file' => 'Ang :attribute ay dapat mas malaki o katumbas ng :value kilobytes.',
        'string' => 'Ang :attribute ay dapat mas malaki o katumbas ng :value na mga karakter.',
        'array' => 'Ang :attribute ay dapat magkaroon ng :value na mga item o higit pa.',
    ],
    'image' => 'Ang :attribute ay dapat isang larawan.',
    'in' => 'Ang napiling halaga para sa :attribute ay hindi wastong.',
    'in_array' => 'Ang larangan ng :attribute ay hindi umiiral sa :other.',
    'integer' => 'Ang :attribute ay dapat isang buumbilang.',
    'ip' => 'Ang :attribute ay dapat isang wastong IP address.',
    'ipv4' => 'Ang :attribute ay dapat isang wastong IPv4 address.',
    'ipv6' => 'Ang :attribute ay dapat isang wastong IPv6 address.',
    'json' => 'Ang :attribute ay dapat isang wastong JSON string.',
    'lt' => [
        'numeric' => 'Ang :attribute ay dapat mas mababa sa :value.',
        'file' => 'Ang :attribute ay dapat mas mababa sa :value kilobytes.',
        'string' => 'Ang :attribute ay dapat mas mababa sa :value na mga karakter.',
        'array' => 'Ang :attribute ay dapat magkaroon ng mas kaunti sa :value na mga item.',
    ],
    'lte' => [
        'numeric' => 'Ang :attribute ay dapat mas mababa o katumbas ng :value.',
        'file' => 'Ang :attribute ay dapat mas mababa o katumbas ng :value kilobytes.',
        'string' => 'Ang :attribute ay dapat mas mababa o katumbas ng :value na mga karakter.',
        'array' => 'Ang :attribute ay hindi dapat magkaroon ng higit sa :value na mga item.',
    ],
    'mac_address' => 'Ang :attribute ay dapat isang wastong MAC address.',
    'max' => [
        'numeric' => 'Ang :attribute ay hindi dapat mas malaki sa :max.',
        'file' => 'Ang :attribute ay hindi dapat mas malaki sa :max kilobytes.',
        'string' => 'Ang :attribute ay hindi dapat mas malaki sa :max na mga karakter.',
        'array' => 'Ang :attribute ay hindi dapat magkaroon ng higit sa :max na mga item.',
    ],
    'mimes' => 'Ang :attribute ay dapat isang file na may uri: :values.',
    'mimetypes' => 'Ang :attribute ay dapat isang file na may uri: :values.',
    'min' => [
        'numeric' => 'Ang :attribute ay dapat hindi bababa sa :min.',
        'file' => 'Ang :attribute ay dapat hindi bababa sa :min kilobytes.',
        'string' => 'Ang :attribute ay dapat hindi bababa sa :min na mga karakter.',
        'array' => 'Ang :attribute ay dapat magkaroon ng hindi bababa sa :min na mga item.',
    ],
    'multiple_of' => 'Ang :attribute ay dapat isang multiple ng :value.',
    'not_in' => 'Ang napiling halaga para sa :attribute ay hindi wastong.',
    'not_regex' => 'Ang format ng :attribute ay hindi wastong.',
    'numeric' => 'Ang :attribute ay dapat isang numero.',
    'password' => 'Ang password ay hindi tama.',
    'present' => 'Ang larangan ng :attribute ay dapat umiiral.',
    'prohibited' => 'Ang larangan ng :attribute ay ipinagbabawal.',
    'prohibited_if' => 'Ang larangan ng :attribute ay ipinagbabawal kapag ang :other ay :value.',
    'prohibited_unless' => 'Ang larangan ng :attribute ay ipinagbabawal maliban kung ang :other ay nasa :values.',
    'prohibits' => 'Ang larangan ng :attribute ay nagbabawal sa :other na hindi umiiral.',
    'regex' => 'Ang format ng :attribute ay hindi wastong.',
    'required' => 'Ang larangan ng :attribute ay kinakailangan.',
    'required_array_keys' => 'Ang larangan ng :attribute ay dapat naglalaman ng mga item para sa: :values.',
    'required_if' => 'Ang larangan ng :attribute ay kinakailangan kapag ang :other ay :value.',
    'required_unless' => 'Ang larangan ng :attribute ay kinakailangan maliban kung ang :other ay nasa :values.',
    'required_with' => 'Ang larangan ng :attribute ay kinakailangan kapag ang :values ay umiiral.',
    'required_with_all' => 'Ang larangan ng :attribute ay kinakailangan kapag ang :values ay umiiral.',
    'required_without' => 'Ang larangan ng :attribute ay kinakailangan kapag ang :values ay hindi umiiral.',
    'required_without_all' => 'Ang larangan ng :attribute ay kinakailangan kapag walang umiiral na :values.',
    'same' => 'Ang :attribute at :other ay dapat magtugma.',
    'size' => [
        'numeric' => 'Ang :attribute ay dapat :size.',
        'file' => 'Ang :attribute ay dapat :size kilobytes.',
        'string' => 'Ang :attribute ay dapat :size na mga karakter.',
        'array' => 'Ang :attribute ay dapat naglalaman ng :size na mga item.',
    ],
    'starts_with' => 'Ang :attribute ay dapat magsimula sa isa sa mga sumusunod: :values.',
    'string' => 'Ang :attribute ay dapat isang string.',
    'timezone' => 'Ang :attribute ay dapat isang wastong time zone.',
    'unique' => 'Ang :attribute ay na-gamit na.',
    'uploaded' => 'Nabigo ang pag-upload ng :attribute.',
    'url' => 'Ang format ng :attribute ay hindi wastong.',
    'uuid' => 'Ang :attribute ay dapat isang wastong UUID.',


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
        'name' => 'pangalan',
        'username' => 'pangalan ng gumagamit',
        'email' => 'address ng email',
        'password' => 'password',
        'role' => 'gampanin',
    ],


];
