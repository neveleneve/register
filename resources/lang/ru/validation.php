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

    'accepted' => 'Поле :attribute должно быть принято.',
    'accepted_if' => 'Поле :attribute должно быть принято, когда :other равно :value.',
    'active_url' => 'Поле :attribute содержит недействительный URL.',
    'after' => 'Поле :attribute должно содержать дату после :date.',
    'after_or_equal' => 'Поле :attribute должно содержать дату после или равную :date.',
    'alpha' => 'Поле :attribute может содержать только буквы.',
    'alpha_dash' => 'Поле :attribute может содержать только буквы, цифры, дефисы и подчеркивания.',
    'alpha_num' => 'Поле :attribute может содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно быть массивом.',
    'before' => 'Поле :attribute должно содержать дату до :date.',
    'before_or_equal' => 'Поле :attribute должно содержать дату до или равную :date.',
    'between' => [
        'numeric' => 'Значение поля :attribute должно быть между :min и :max.',
        'file' => 'Размер файла в поле :attribute должен быть между :min и :max килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть от :min до :max символов.',
        'array' => 'Поле :attribute должно содержать от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно иметь значение true или false.',
    'confirmed' => 'Подтверждение для поля :attribute не совпадает.',
    'current_password' => 'Неверный пароль.',
    'date' => 'Поле :attribute не является действительной датой.',
    'date_equals' => 'Поле :attribute должно содержать дату, равную :date.',
    'date_format' => 'Поле :attribute не соответствует формату :format.',
    'declined' => 'Поле :attribute должно быть отклонено.',
    'declined_if' => 'Поле :attribute должно быть отклонено, когда :other равно :value.',
    'different' => 'Поля :attribute и :other должны отличаться.',
    'digits' => 'Поле :attribute должно содержать :digits цифр.',
    'digits_between' => 'Поле :attribute должно содержать от :min до :max цифр.',
    'dimensions' => 'Поле :attribute содержит недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute содержит повторяющееся значение.',
    'email' => 'Поле :attribute должно быть действительным адресом электронной почты.',
    'ends_with' => 'Поле :attribute должно заканчиваться одним из следующих значений: :values.',
    'enum' => 'Выбранное значение для поля :attribute некорректно.',
    'exists' => 'Выбранное значение для поля :attribute некорректно.',
    'file' => 'Поле :attribute должно содержать файл.',
    'filled' => 'Поле :attribute обязательно для заполнения.',
    'gt' => [
        'numeric' => 'Значение поля :attribute должно быть больше :value.',
        'file' => 'Размер файла в поле :attribute должен быть больше :value килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть больше :value символов.',
        'array' => 'Поле :attribute должно содержать больше чем :value элементов.',
    ],
    'gte' => [
        'numeric' => 'Значение поля :attribute должно быть больше или равно :value.',
        'file' => 'Размер файла в поле :attribute должен быть больше или равен :value килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть не меньше :value символов.',
        'array' => 'Поле :attribute должно содержать :value или больше элементов.',
    ],
    'image' => 'Поле :attribute должно содержать изображение.',
    'in' => 'Выбранное значение для поля :attribute некорректно.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'Поле :attribute должно содержать целое число.',
    'ip' => 'Поле :attribute должно содержать действительный IP-адрес.',
    'ipv4' => 'Поле :attribute должно содержать действительный IPv4-адрес.',
    'ipv6' => 'Поле :attribute должно содержать действительный IPv6-адрес.',
    'json' => 'Поле :attribute должно содержать действительную JSON-строку.',
    'lt' => [
        'numeric' => 'Значение поля :attribute должно быть меньше :value.',
        'file' => 'Размер файла в поле :attribute должен быть меньше :value килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть меньше :value символов.',
        'array' => 'Поле :attribute должно содержать меньше :value элементов.',
    ],
    'lte' => [
        'numeric' => 'Значение поля :attribute должно быть меньше или равно :value.',
        'file' => 'Размер файла в поле :attribute должен быть меньше или равен :value килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть не больше :value символов.',
        'array' => 'Поле :attribute не должно содержать больше :value элементов.',
    ],
    'mac_address' => 'Поле :attribute должно содержать действительный MAC-адрес.',
    'max' => [
        'numeric' => 'Значение поля :attribute не может быть больше :max.',
        'file' => 'Размер файла в поле :attribute не может быть больше :max килобайт.',
        'string' => 'Длина текста в поле :attribute не может превышать :max символов.',
        'array' => 'Поле :attribute не может содержать больше :max элементов.',
    ],
    'mimes' => 'Поле :attribute должно содержать файл одного из следующих типов: :values.',
    'mimetypes' => 'Поле :attribute должно содержать файл одного из следующих типов: :values.',
    'min' => [
        'numeric' => 'Значение поля :attribute должно быть не меньше :min.',
        'file' => 'Размер файла в поле :attribute должен быть не меньше :min килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть не меньше :min символов.',
        'array' => 'Поле :attribute должно содержать не меньше :min элементов.',
    ],
    'multiple_of' => 'Значение поля :attribute должно быть кратно :value.',
    'not_in' => 'Выбранное значение для поля :attribute некорректно.',
    'not_regex' => 'Неверный формат поля :attribute.',
    'numeric' => 'Поле :attribute должно содержать число.',
    'password' => 'Пароль неверный.',
    'present' => 'Поле :attribute должно быть присутствовать.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено, когда :other равно :value.',
    'prohibited_unless' => 'Поле :attribute запрещено, если :other не входит в :values.',
    'prohibits' => 'Поле :attribute запрещает наличие поля :other.',
    'regex' => 'Неверный формат поля :attribute.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_unless' => 'Поле :attribute обязательно для заполнения, если :other не входит в :values.',
    'required_with' => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_with_all' => 'Поле :attribute обязательно для заполнения, когда указаны :values.',
    'required_without' => 'Поле :attribute обязательно для заполнения, когда :values не указано.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'same' => 'Поля :attribute и :other должны совпадать.',
    'size' => [
        'numeric' => 'Значение поля :attribute должно быть :size.',
        'file' => 'Размер файла в поле :attribute должен быть :size килобайт.',
        'string' => 'Длина текста в поле :attribute должна составлять :size символов.',
        'array' => 'Поле :attribute должно содержать :size элементов.',
    ],
    'starts_with' => 'Поле :attribute должно начинаться с одного из следующих значений: :values.',
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно содержать корректную зону.',
    'unique' => 'Такое значение поля :attribute уже существует.',
    'uploaded' => 'Загрузка поля :attribute не удалась.',
    'url' => 'Поле :attribute должно содержать корректный URL.',
    'uuid' => 'Поле :attribute должно содержать корректный UUID.',






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
        'name' => 'имя',
        'username' => 'имя пользователя',
        'email' => 'адрес электронной почты',
        'password' => 'пароль',
        'role' => 'роль',
    ],


];
