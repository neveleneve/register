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

    'failed' => 'Ці облікові дані не відповідають нашим записам.',
    'password' => 'Введений пароль неправильний.',
    'throttle' => 'Забагато спроб входу. Спробуйте ще раз через :seconds секунд.',

    'login' => 'Увійти',
    'username' => 'Ім\'я користувача',
    'password' => 'Пароль',
    'remember_me' => 'Запам\'ятати мене',
    'register' => 'Створити обліковий запис',
    'name' => 'Ім\'я',
    'email' => 'Електронна пошта',
    'confirm_password' => 'Підтвердіть пароль',
    'dashboard' => 'Приладна панель',

    'previous' => '&laquo; Попередній',
    'next' => 'Наступний &raquo;',

    'reset' => 'Ваш пароль скинуто!',
    'sent' => 'Посилання для скидання пароля надіслано!',
    'throttled' => 'Будь ласка, зачекайте, перш ніж спробувати ще раз.',
    'token' => 'Токен скидання пароля недійсний.',
    'user' => 'Ми не змогли знайти користувача з цією електронною адресою.',

    'accepted' => ':attribute має бути прийнятий.',
    'accepted_if' => ':attribute має бути прийнятий, коли :other - :value.',
    'active_url' => ':attribute не є дійсним URL.',
    'after' => ':attribute має бути датою після :date.',
    'after_or_equal' => ':attribute має бути датою після або рівною :date.',
    'alpha' => ':attribute може містити лише літери.',
    'alpha_dash' => ':attribute може містити лише літери, цифри та дефіси.',
    'alpha_num' => ':attribute може містити лише літери та цифри.',
    'array' => ':attribute має бути масивом.',
    'before' => ':attribute має бути датою перед :date.',
    'before_or_equal' => ':attribute має бути датою перед або рівною :date.',
    'between' => [
        'numeric' => ':attribute має бути між :min і :max.',
        'file' => ':attribute має бути між :min і :max кілобайтами.',
        'string' => ':attribute має бути між :min і :max символами.',
        'array' => ':attribute має містити від :min до :max елементів.',
    ],
    'boolean' => 'Поле :attribute має бути істинним або хибним.',
    'confirmed' => 'Підтвердження :attribute не збігається.',
    'current_password' => 'Пароль неправильний.',
    'date' => ':attribute не є дійсною датою.',
    'date_equals' => ':attribute має бути датою, рівною :date.',
    'date_format' => ':attribute не відповідає формату :format.',
    'declined' => ':attribute має бути відхилено.',
    'declined_if' => ':attribute має бути відхилено, коли :other - :value.',
    'different' => ':attribute і :other повинні бути різними.',
    'digits' => ':attribute має бути :digits цифрами.',
    'digits_between' => ':attribute має бути між :min і :max цифрами.',
    'dimensions' => ':attribute має недійсні розміри зображення.',
    'distinct' => 'Поле :attribute має повторюване значення.',
    'email' => ':attribute має бути дійсною електронною адресою.',
    'ends_with' => ':attribute має закінчуватися одним із значень: :values.',
    'enum' => 'Вибране значення :attribute недійсне.',
    'exists' => 'Вибране значення :attribute недійсне.',
    'file' => ':attribute має бути файлом.',
    'filled' => 'Поле :attribute має мати значення.',
    'gt' => [
        'numeric' => ':attribute має бути більшим за :value.',
        'file' => ':attribute має бути більшим за :value кілобайт.',
        'string' => ':attribute має бути більшим за :value символів.',
        'array' => ':attribute має містити більше ніж :value елементів.',
    ],
    'gte' => [
        'numeric' => ':attribute має бути більшим за або рівним :value.',
        'file' => ':attribute має бути більшим за або рівним :value кілобайт.',
        'string' => ':attribute має бути більшим за або рівним :value символів.',
        'array' => ':attribute має містити :value або більше елементів.',
    ],
    'image' => ':attribute має бути зображенням.',
    'in' => 'Вибране значення :attribute недійсне.',
    'in_array' => 'Поле :attribute не існує в :other.',
    'integer' => ':attribute має бути цілим числом.',
    'ip' => ':attribute має бути дійсною IP-адресою.',
    'ipv4' => ':attribute має бути дійсною адресою IPv4.',
    'ipv6' => ':attribute має бути дійсною адресою IPv6.',
    'json' => ':attribute має бути дійсним JSON-рядком.',
    'lt' => [
        'numeric' => ':attribute має бути меншим за :value.',
        'file' => ':attribute має бути меншим за :value кілобайт.',
        'string' => ':attribute має бути меншим за :value символів.',
        'array' => ':attribute має містити менше ніж :value елементів.',
    ],
    'lte' => [
        'numeric' => ':attribute має бути меншим або рівним :value.',
        'file' => ':attribute має бути меншим або рівним :value кілобайт.',
        'string' => ':attribute має бути меншим або рівним :value символів.',
        'array' => ':attribute не може містити більше ніж :value елементів.',
    ],
    'mac_address' => ':attribute має бути дійсною MAC-адресою.',
    'max' => [
        'numeric' => ':attribute не може бути більшим за :max.',
        'file' => ':attribute не може бути більшим за :max кілобайт.',
        'string' => ':attribute не може бути більшим за :max символів.',
        'array' => ':attribute не може містити більше ніж :max елементів.',
    ],
    'mimes' => ':attribute має бути файлом типу: :values.',
    'mimetypes' => ':attribute має бути файлом типу: :values.',
    'min' => [
        'numeric' => ':attribute має бути щонайменше :min.',
        'file' => ':attribute має бути щонайменше :min кілобайт.',
        'string' => ':attribute має бути щонайменше :min символів.',
        'array' => ':attribute має містити принаймні :min елементів.',
    ],
    'multiple_of' => ':attribute має бути кратним :value.',
    'not_in' => 'Вибране значення :attribute недійсне.',
    'not_regex' => 'Формат :attribute недійсний.',
    'numeric' => ':attribute має бути числом.',
    'password' => 'Пароль неправильний.',
    'present' => 'Поле :attribute має бути присутнім.',
    'prohibited' => 'Поле :attribute заборонено.',
    'prohibited_if' => 'Поле :attribute заборонено, коли :other - :value.',
    'prohibited_unless' => 'Поле :attribute заборонено, якщо :other не в :values.',
    'prohibits' => 'Поле :attribute забороняє присутність :other.',
    'regex' => 'Формат :attribute недійсний.',
    'required' => 'Поле :attribute обов\'язкове.',
    'required_if' => 'Поле :attribute обов\'язкове, коли :other - :value.',
    'required_unless' => 'Поле :attribute обов\'язкове, якщо :other не в :values.',
    'required_with' => 'Поле :attribute обов\'язкове, коли є :values.',
    'required_with_all' => 'Поле :attribute обов\'язкове, коли присутні :values.',
    'required_without' => 'Поле :attribute обов\'язкове, коли немає :values.',
    'required_without_all' => 'Поле :attribute обов\'язкове, коли немає жодного з :values.',
    'same' => ':attribute і :other повинні збігатися.',
    'size' => [
        'numeric' => ':attribute має бути :size.',
        'file' => ':attribute має бути :size кілобайт.',
        'string' => ':attribute має бути :size символів.',
        'array' => ':attribute має містити :size елементів.',
    ],
    'starts_with' => ':attribute має починатися з одного з таких значень: :values.',
    'string' => ':attribute має бути рядком.',
    'timezone' => ':attribute має бути дійсною зоною часу.',
    'unique' => ':attribute вже використовується.',
    'uploaded' => 'Не вдалося завантажити :attribute.',
    'url' => ':attribute має бути дійсним URL.',
    'uuid' => ':attribute має бути дійсним UUID.',

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
        'name' => 'ім’я',
        'username' => 'ім’я користувача',
        'email' => 'електронна адреса',
        'password' => 'пароль',
        'role' => 'роль',
    ],


];
