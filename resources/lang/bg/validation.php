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

    'accepted' => 'Полето :attribute трябва да бъде прието.',
    'accepted_if' => 'Полето :attribute трябва да бъде прието, когато :other е :value.',
    'active_url' => 'Полето :attribute не е валиден URL адрес.',
    'after' => 'Полето :attribute трябва да е дата след :date.',
    'after_or_equal' => 'Полето :attribute трябва да е дата след или равна на :date.',
    'alpha' => 'Полето :attribute може да съдържа само букви.',
    'alpha_dash' => 'Полето :attribute може да съдържа само букви, цифри, тирета и долни черти.',
    'alpha_num' => 'Полето :attribute може да съдържа само букви и цифри.',
    'array' => 'Полето :attribute трябва да бъде масив.',
    'before' => 'Полето :attribute трябва да е дата преди :date.',
    'before_or_equal' => 'Полето :attribute трябва да е дата преди или равна на :date.',
    'between' => [
        'numeric' => 'Полето :attribute трябва да бъде между :min и :max.',
        'file' => 'Полето :attribute трябва да е между :min и :max килобайта.',
        'string' => 'Полето :attribute трябва да бъде между :min и :max символа.',
        'array' => 'Полето :attribute трябва да има между :min и :max елемента.',
    ],
    'boolean' => 'Полето :attribute трябва да бъде вярно или лъжа.',
    'confirmed' => 'Полето :attribute не съвпада.',
    'current_password' => 'Паролата е невалидна.',
    'date' => 'Полето :attribute не е валидна дата.',
    'date_equals' => 'Полето :attribute трябва да е равно на :date.',
    'date_format' => 'Полето :attribute не съвпада с формата :format.',
    'declined' => 'Полето :attribute трябва да бъде отхвърлено.',
    'declined_if' => 'Полето :attribute трябва да бъде отхвърлено, когато :other е :value.',
    'different' => 'Полето :attribute и :other трябва да бъдат различни.',
    'digits' => 'Полето :attribute трябва да съдържа :digits цифри.',
    'digits_between' => 'Полето :attribute трябва да бъде между :min и :max цифри.',
    'dimensions' => 'Размерите на изображението :attribute са невалидни.',
    'distinct' => 'Полето :attribute има дублирана стойност.',
    'email' => 'Полето :attribute трябва да е валиден имейл адрес.',
    'ends_with' => 'Полето :attribute трябва да завършва с един от: :values.',
    'enum' => 'Избраната стойност е невалидна за :attribute.',
    'exists' => 'Избраната стойност е невалидна за :attribute.',
    'file' => 'Полето :attribute трябва да бъде файл.',
    'filled' => 'Полето :attribute трябва да има стойност.',
    'gt' => [
        'numeric' => 'Полето :attribute трябва да бъде по-голямо от :value.',
        'file' => 'Полето :attribute трябва да бъде по-голямо от :value килобайта.',
        'string' => 'Полето :attribute трябва да има повече от :value символа.',
        'array' => 'Полето :attribute трябва да има повече от :value елемента.',
    ],
    'gte' => [
        'numeric' => 'Полето :attribute трябва да бъде по-голямо или равно на :value.',
        'file' => 'Полето :attribute трябва да бъде по-голямо или равно на :value килобайта.',
        'string' => 'Полето :attribute трябва да има поне :value символа.',
        'array' => 'Полето :attribute трябва да има :value елемента или повече.',
    ],
    'image' => 'Полето :attribute трябва да бъде изображение.',
    'in' => 'Избраната стойност е невалидна за :attribute.',
    'in_array' => 'Полето :attribute не съществува в :other.',
    'integer' => 'Полето :attribute трябва да бъде цяло число.',
    'ip' => 'Полето :attribute трябва да бъде валиден IP адрес.',
    'ipv4' => 'Полето :attribute трябва да бъде валиден IPv4 адрес.',
    'ipv6' => 'Полето :attribute трябва да бъде валиден IPv6 адрес.',
    'json' => 'Полето :attribute трябва да бъде валиден JSON низ.',
    'lt' => [
        'numeric' => 'Полето :attribute трябва да бъде по-малко от :value.',
        'file' => 'Полето :attribute трябва да бъде по-малко от :value килобайта.',
        'string' => 'Полето :attribute трябва да има по-малко от :value символа.',
        'array' => 'Полето :attribute трябва да има по-малко от :value елемента.',
    ],
    'lte' => [
        'numeric' => 'Полето :attribute трябва да бъде по-малко или равно на :value.',
        'file' => 'Полето :attribute трябва да бъде по-малко или равно на :value килобайта.',
        'string' => 'Полето :attribute трябва да има максимум :value символа.',
        'array' => 'Полето :attribute не може да има повече от :value елемента.',
    ],
    'mac_address' => 'Полето :attribute трябва да бъде валиден MAC адрес.',
    'max' => [
        'numeric' => 'Полето :attribute не може да бъде по-голямо от :max.',
        'file' => 'Полето :attribute не може да бъде по-голямо от :max килобайта.',
        'string' => 'Полето :attribute не може да има повече от :max символа.',
        'array' => 'Полето :attribute не може да има повече от :max елемента.',
    ],
    'mimes' => 'Полето :attribute трябва да бъде файл от тип: :values.',
    'mimetypes' => 'Полето :attribute трябва да бъде файл от тип: :values.',
    'min' => [
        'numeric' => 'Полето :attribute трябва да бъде поне :min.',
        'file' => 'Полето :attribute трябва да има поне :min килобайта.',
        'string' => 'Полето :attribute трябва да има поне :min символа.',
        'array' => 'Полето :attribute трябва да има поне :min елемента.',
    ],
    'multiple_of' => 'Полето :attribute трябва да бъде кратно на :value.',
    'not_in' => 'Избраната стойност е невалидна за :attribute.',
    'not_regex' => 'Форматът на :attribute е невалиден.',
    'numeric' => 'Полето :attribute трябва да бъде число.',
    'password' => 'Паролата е невалидна.',
    'present' => 'Полето :attribute трябва да бъде налично.',
    'prohibited' => 'Полето :attribute е забранено.',
    'prohibited_if' => 'Полето :attribute е забранено, когато :other е :value.',
    'prohibited_unless' => 'Полето :attribute е забранено, освен ако :other не е :values.',
    'regex' => 'Форматът на :attribute е невалиден.',
    'required' => 'Полето :attribute е задължително.',
    'required_if' => 'Полето :attribute е задължително, когато :other е :value.',
    'required_unless' => 'Полето :attribute е задължително, освен ако :other не е :values.',
    'required_with' => 'Полето :attribute е задължително, когато :values е налично.',
    'required_with_all' => 'Полето :attribute е задължително, когато :values са налични.',
    'required_without' => 'Полето :attribute е задължително, когато :values не е налично.',
    'required_without_all' => 'Полето :attribute е задължително, когато нито едно от :values не е налично.',
    'same' => 'Полето :attribute и :other трябва да съвпадат.',
    'size' => [
        'numeric' => 'Полето :attribute трябва да бъде :size.',
        'file' => 'Полето :attribute трябва да бъде :size килобайта.',
        'string' => 'Полето :attribute трябва да бъде :size символа.',
        'array' => 'Полето :attribute трябва да съдържа :size елемента.',
    ],
    'starts_with' => 'Полето :attribute трябва да започва с едно от: :values.',
    'string' => 'Полето :attribute трябва да бъде низ.',
    'timezone' => 'Полето :attribute трябва да бъде валидна часова зона.',
    'unique' => 'Полето :attribute вече е заето.',
    'uploaded' => 'Качването на :attribute не успя.',
    'url' => 'Форматът на :attribute е невалиден.',
    'uuid' => 'Полето :attribute трябва да бъде валиден UUID.',
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
        'name' => 'име',
        'username' => 'потребителско име',
        'email' => 'имейл адрес',
        'password' => 'парола',
        'role' => 'роля',
    ],


];
