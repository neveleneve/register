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

    'accepted' => ':attribute को स्वीकार किया जाना चाहिए।',
    'accepted_if' => ':attribute को तब स्वीकार किया जाना चाहिए जब :other :value हो।',
    'active_url' => ':attribute एक मान्य यूआरएल नहीं है।',
    'after' => ':attribute एक तारीख होनी चाहिए जो :date के बाद हो।',
    'after_or_equal' => ':attribute एक तारीख होनी चाहिए जो :date के बाद या बराबर हो।',
    'alpha' => ':attribute में केवल अक्षर होने चाहिए।',
    'alpha_dash' => ':attribute में केवल अक्षर, संख्या, डैश और अंडरस्कोर हो सकते हैं।',
    'alpha_num' => ':attribute में केवल अक्षर और संख्या होनी चाहिए।',
    'array' => ':attribute एक ऐरे होना चाहिए।',
    'before' => ':attribute एक तारीख होनी चाहिए जो :date के पहले हो।',
    'before_or_equal' => ':attribute एक तारीख होनी चाहिए जो :date के पहले या बराबर हो।',
    'between' => [
        'numeric' => ':attribute :min और :max के बीच होना चाहिए।',
        'file' => ':attribute :min और :max किलोबाइट्स के बीच होना चाहिए।',
        'string' => ':attribute :min और :max वर्णों के बीच होना चाहिए।',
        'array' => ':attribute में :min और :max आइटम के बीच होने चाहिए।',
    ],
    'boolean' => ':attribute फ़ील्ड को सत्य या असत्य होना चाहिए।',
    'confirmed' => ':attribute की पुष्टि मेल नहीं खाती।',
    'current_password' => 'पासवर्ड गलत है।',
    'date' => ':attribute एक मान्य तारीख नहीं है।',
    'date_equals' => ':attribute एक तारीख होनी चाहिए जो :date के बराबर हो।',
    'date_format' => ':attribute प्रारूप :format से मेल नहीं खाता।',
    'declined' => ':attribute को अस्वीकार किया जाना चाहिए।',
    'declined_if' => ':attribute को तब अस्वीकार किया जाना चाहिए जब :other :value हो।',
    'different' => ':attribute और :other अलग होना चाहिए।',
    'digits' => ':attribute :digits अंकों का होना चाहिए।',
    'digits_between' => ':attribute :min और :max अंकों के बीच होना चाहिए।',
    'dimensions' => ':attribute के चित्र के आयाम अमान्य हैं।',
    'distinct' => ':attribute फ़ील्ड में डुप्लिकेट मान है।',
    'email' => ':attribute एक मान्य ईमेल पता होना चाहिए।',
    'ends_with' => ':attribute में निम्नलिखित में से एक के साथ समाप्त होना चाहिए: :values.',
    'enum' => 'चुना हुआ :attribute अमान्य है।',
    'exists' => 'चुना हुआ :attribute अमान्य है।',
    'file' => ':attribute एक फ़ाइल होना चाहिए।',
    'filled' => ':attribute फ़ील्ड में एक मान होना चाहिए।',
    'gt' => [
        'numeric' => ':attribute को :value से बड़ा होना चाहिए।',
        'file' => ':attribute को :value किलोबाइट्स से बड़ा होना चाहिए।',
        'string' => ':attribute को :value वर्णों से बड़ा होना चाहिए।',
        'array' => ':attribute में :value से अधिक आइटम होना चाहिए।',
    ],
    'gte' => [
        'numeric' => ':attribute को :value से बड़ा या बराबर होना चाहिए।',
        'file' => ':attribute को :value किलोबाइट्स से बड़ा या बराबर होना चाहिए।',
        'string' => ':attribute को :value वर्णों से बड़ा या बराबर होना चाहिए।',
        'array' => ':attribute में :value या अधिक आइटम होना चाहिए।',
    ],
    'image' => ':attribute एक छवि होना चाहिए।',
    'in' => 'चुना हुआ :attribute अमान्य है।',
    'in_array' => ':attribute फ़ील्ड :other में मौजूद नहीं है।',
    'integer' => ':attribute एक पूर्णांक होना चाहिए।',
    'ip' => ':attribute एक मान्य आईपी पता होना चाहिए।',
    'ipv4' => ':attribute एक मान्य IPv4 पता होना चाहिए।',
    'ipv6' => ':attribute एक मान्य IPv6 पता होना चाहिए।',
    'json' => ':attribute एक मान्य JSON स्ट्रिंग होना चाहिए।',
    'lt' => [
        'numeric' => ':attribute को :value से कम होना चाहिए।',
        'file' => ':attribute को :value किलोबाइट्स से कम होना चाहिए।',
        'string' => ':attribute को :value वर्णों से कम होना चाहिए।',
        'array' => ':attribute में :value से कम आइटम होना चाहिए।',
    ],
    'lte' => [
        'numeric' => ':attribute को :value से कम या बराबर होना चाहिए।',
        'file' => ':attribute को :value किलोबाइट्स से कम या बराबर होना चाहिए।',
        'string' => ':attribute को :value वर्णों से कम या बराबर होना चाहिए।',
        'array' => ':attribute में :value आइटम से अधिक नहीं होना चाहिए।',
    ],
    'mac_address' => ':attribute एक मान्य MAC पता होना चाहिए।',
    'max' => [
        'numeric' => ':attribute :max से बड़ा नहीं होना चाहिए।',
        'file' => ':attribute :max किलोबाइट्स से बड़ा नहीं होना चाहिए।',
        'string' => ':attribute :max वर्णों से बड़ा नहीं होना चाहिए।',
        'array' => ':attribute में :max आइटम से अधिक नहीं होना चाहिए।',
    ],
    'mimes' => ':attribute को प्रकार: :values की फ़ाइल होना चाहिए।',
    'mimetypes' => ':attribute को प्रकार: :values की फ़ाइल होना चाहिए।',
    'min' => [
        'numeric' => ':attribute कम से कम :min होना चाहिए।',
        'file' => ':attribute कम से कम :min किलोबाइट्स होना चाहिए।',
        'string' => ':attribute कम से कम :min वर्णों का होना चाहिए।',
        'array' => ':attribute में कम से कम :min आइटम होना चाहिए।',
    ],
    'multiple_of' => ':attribute को :value का गुणांक होना चाहिए।',
    'not_in' => 'चुना हुआ :attribute अमान्य है।',
    'not_regex' => ':attribute प्रारूप अमान्य है।',
    'numeric' => ':attribute एक संख्या होना चाहिए।',
    'password' => 'पासवर्ड गलत है।',
    'present' => ':attribute फ़ील्ड उपस्थित होनी चाहिए।',
    'prohibited' => ':attribute फ़ील्ड प्रतिबंधित है।',
    'prohibited_if' => ':attribute फ़ील्ड तब प्रतिबंधित है जब :other :value हो।',
    'prohibited_unless' => ':attribute फ़ील्ड तब प्रतिबंधित है जब तक :other :values में न हो।',
    'prohibits' => ':attribute फ़ील्ड :other को उपस्थित होने से रोकता है।',
    'regex' => ':attribute प्रारूप अमान्य है।',
    'required' => ':attribute फ़ील्ड आवश्यक है।',
    'required_array_keys' => ':attribute फ़ील्ड में :values के लिए प्रविष्टियाँ होनी चाहिए।',
    'required_if' => ':attribute फ़ील्ड आवश्यक है जब :other :value हो।',
    'required_unless' => ':attribute फ़ील्ड आवश्यक है जब तक :other :values में न हो।',
    'required_with' => ':attribute फ़ील्ड आवश्यक है जब :values उपस्थित हो।',
    'required_with_all' => ':attribute फ़ील्ड आवश्यक है जब :values उपस्थित हो।',
    'required_without' => ':attribute फ़ील्ड आवश्यक है जब :values उपस्थित नहीं हो।',
    'required_without_all' => ':attribute फ़ील्ड आवश्यक है जब :values में से कोई भी उपस्थित नहीं हो।',
    'same' => ':attribute और :other मेल खाने चाहिए।',
    'size' => [
        'numeric' => ':attribute :size होना चाहिए।',
        'file' => ':attribute :size किलोबाइट्स होना चाहिए।',
        'string' => ':attribute :size वर्णों का होना चाहिए।',
        'array' => ':attribute में :size आइटम होना चाहिए।',
    ],
    'starts_with' => ':attribute में निम्नलिखित में से एक के साथ शुरू होना चाहिए: :values.',
    'string' => ':attribute एक स्ट्रिंग होना चाहिए।',
    'timezone' => ':attribute एक मान्य क्षेत्र है।',
    'unique' => ':attribute पहले ही लिया जा चुका है।',
    'uploaded' => ':attribute अपलोड करने में विफल रहा।',
    'url' => ':attribute प्रारूप अमान्य है।',
    'uuid' => ':attribute एक मान्य UUID होना चाहिए。',
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
        'name' => 'नाम',
        'username' => 'उपयोगकर्ता नाम',
        'email' => 'ईमेल पता',
        'password' => 'पासवर्ड',
        'role' => 'भूमिका',
    ],


];
