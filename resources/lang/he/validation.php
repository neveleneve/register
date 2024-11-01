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

    'accepted' => 'עליך לקבל את :attribute.',
    'accepted_if' => ':attribute חייב להיות התקבל כאשר :other הוא :value.',
    'active_url' => ':attribute אינו URL תקף.',
    'after' => ':attribute חייב להיות תאריך לאחר :date.',
    'after_or_equal' => ':attribute חייב להיות תאריך לאחר או שווה ל- :date.',
    'alpha' => ':attribute יכול לכלול אותיות בלבד.',
    'alpha_dash' => ':attribute יכול לכלול אותיות, מספרים, מקפים וקווים תחתונים בלבד.',
    'alpha_num' => ':attribute יכול לכלול אותיות ומספרים בלבד.',
    'array' => ':attribute חייב להיות מערך.',
    'before' => ':attribute חייב להיות תאריך לפני :date.',
    'before_or_equal' => ':attribute חייב להיות תאריך לפני או שווה ל- :date.',
    'between' => [
        'numeric' => ':attribute חייב להיות בין :min ל- :max.',
        'file' => ':attribute חייב להיות בין :min ל- :max קילובייט.',
        'string' => ':attribute חייב להיות בין :min ל- :max תווים.',
        'array' => ':attribute חייב להיות בין :min ל- :max פריטים.',
    ],
    'boolean' => 'שדה :attribute חייב להיות true או false.',
    'confirmed' => ':attribute לא תואם.',
    'current_password' => 'הסיסמה שגויה.',
    'date' => ':attribute אינו תאריך תקף.',
    'date_equals' => ':attribute חייב להיות תאריך השווה ל- :date.',
    'date_format' => ':attribute אינו תואם לפורמט :format.',
    'declined' => 'עליך לדחות את :attribute.',
    'declined_if' => ':attribute חייב להיות דחוי כאשר :other הוא :value.',
    'different' => ':attribute ו- :other חייבים להיות שונים.',
    'digits' => ':attribute חייב להיות מספר בן :digits ספרות.',
    'digits_between' => ':attribute חייב להיות בין :min ל- :max ספרות.',
    'dimensions' => 'ממדי התמונה של :attribute אינם תקפים.',
    'distinct' => 'שדה :attribute מכיל ערך כפול.',
    'email' => ':attribute חייב להיות כתובת דוא"ל תקפה.',
    'ends_with' => ':attribute חייב להסתיים באחד מהבאים: :values.',
    'enum' => 'הערך שנבחר עבור :attribute אינו תקף.',
    'exists' => 'הערך שנבחר עבור :attribute אינו תקף.',
    'file' => ':attribute חייב להיות קובץ.',
    'filled' => 'שדה :attribute חייב להכיל ערך.',
    'gt' => [
        'numeric' => ':attribute חייב להיות גדול מ- :value.',
        'file' => ':attribute חייב להיות גדול מ- :value קילובייט.',
        'string' => ':attribute חייב להיות ארוך מ- :value תווים.',
        'array' => ':attribute חייב להיות בעל יותר מ- :value פריטים.',
    ],
    'gte' => [
        'numeric' => ':attribute חייב להיות גדול או שווה ל- :value.',
        'file' => ':attribute חייב להיות גדול או שווה ל- :value קילובייט.',
        'string' => ':attribute חייב להיות ארוך או שווה ל- :value תווים.',
        'array' => ':attribute חייב להיות בעל :value פריטים או יותר.',
    ],
    'image' => ':attribute חייב להיות תמונה.',
    'in' => 'הערך שנבחר עבור :attribute אינו תקף.',
    'in_array' => 'שדה :attribute אינו קיים ב- :other.',
    'integer' => ':attribute חייב להיות מספר שלם.',
    'ip' => ':attribute חייב להיות כתובת IP תקפה.',
    'ipv4' => ':attribute חייב להיות כתובת IPv4 תקפה.',
    'ipv6' => ':attribute חייב להיות כתובת IPv6 תקפה.',
    'json' => ':attribute חייב להיות מיתר JSON תקף.',
    'lt' => [
        'numeric' => ':attribute חייב להיות קטן מ- :value.',
        'file' => ':attribute חייב להיות קטן מ- :value קילובייט.',
        'string' => ':attribute חייב להיות קצר מ- :value תווים.',
        'array' => ':attribute חייב להיות בעל פחות מ- :value פריטים.',
    ],
    'lte' => [
        'numeric' => ':attribute חייב להיות קטן או שווה ל- :value.',
        'file' => ':attribute חייב להיות קטן או שווה ל- :value קילובייט.',
        'string' => ':attribute חייב להיות קצר או שווה ל- :value תווים.',
        'array' => ':attribute לא יכול להכיל יותר מ- :value פריטים.',
    ],
    'mac_address' => ':attribute חייב להיות כתובת MAC תקפה.',
    'max' => [
        'numeric' => ':attribute לא יכול להיות גדול מ- :max.',
        'file' => ':attribute לא יכול להיות גדול מ- :max קילובייט.',
        'string' => ':attribute לא יכול להיות גדול מ- :max תווים.',
        'array' => ':attribute לא יכול להיות בעל יותר מ- :max פריטים.',
    ],
    'mimes' => ':attribute חייב להיות קובץ מסוג: :values.',
    'mimetypes' => ':attribute חייב להיות קובץ מסוג: :values.',
    'min' => [
        'numeric' => ':attribute חייב להיות לפחות :min.',
        'file' => ':attribute חייב להיות לפחות :min קילובייט.',
        'string' => ':attribute חייב להיות לפחות :min תווים.',
        'array' => ':attribute חייב להיות בעל לפחות :min פריטים.',
    ],
    'multiple_of' => ':attribute חייב להיות כפולה של :value.',
    'not_in' => 'הערך שנבחר עבור :attribute אינו תקף.',
    'not_regex' => 'פורמט :attribute אינו תקף.',
    'numeric' => ':attribute חייב להיות מספר.',
    'password' => 'הסיסמה שגויה.',
    'present' => 'שדה :attribute חייב להיות קיים.',
    'prohibited' => 'שדה :attribute אסור.',
    'prohibited_if' => 'שדה :attribute אסור כאשר :other הוא :value.',
    'prohibited_unless' => 'שדה :attribute אסור כאשר :other אינו אחד מ- :values.',
    'prohibits' => 'שדה :attribute אוסר על קיום של :other.',
    'regex' => 'פורמט :attribute אינו תקף.',
    'required' => 'שדה :attribute חובה.',
    'required_array_keys' => 'שדה :attribute חייב לכלול פריטים עבור: :values.',
    'required_if' => 'שדה :attribute חובה כאשר :other הוא :value.',
    'required_unless' => 'שדה :attribute חובה כאשר :other אינו אחד מ- :values.',
    'required_with' => 'שדה :attribute חובה כאשר :values קיימים.',
    'required_with_all' => 'שדה :attribute חובה כאשר כל אחד מ- :values קיימים.',
    'required_without' => 'שדה :attribute חובה כאשר :values אינם קיימים.',
    'required_without_all' => 'שדה :attribute חובה כאשר אף אחד מ- :values אינו קיים.',
    'same' => ':attribute ו- :other חייבים להתאים.',
    'size' => [
        'numeric' => ':attribute חייב להיות :size.',
        'file' => ':attribute חייב להיות :size קילובייט.',
        'string' => ':attribute חייב להיות :size תווים.',
        'array' => ':attribute חייב לכלול :size פריטים.',
    ],
    'starts_with' => ':attribute חייב להתחיל באחד מהבאים: :values.',
    'string' => ':attribute חייב להיות מיתר.',
    'timezone' => ':attribute חייב להיות אזור זמן תקף.',
    'unique' => ':attribute כבר בשימוש.',
    'uploaded' => 'העלאת :attribute נכשלה.',
    'url' => 'הפורמט של :attribute אינו תקף.',
    'uuid' => ':attribute חייב להיות UUID תקף.',



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
        'name' => 'שם',
        'username' => 'שם משתמש',
        'email' => 'כתובת דוא"ל',
        'password' => 'סיסמה',
        'role' => 'תפקיד',
    ],


];
