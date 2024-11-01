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


    'accepted' => 'คุณต้องยอมรับ :attribute',
    'accepted_if' => ':attribute ต้องได้รับการยอมรับเมื่อ :other คือ :value',
    'active_url' => ':attribute ไม่ใช่ URL ที่ถูกต้อง',
    'after' => ':attribute ต้องเป็นวันที่หลังจาก :date',
    'after_or_equal' => ':attribute ต้องเป็นวันที่หลังหรือเท่ากับ :date',
    'alpha' => ':attribute สามารถมีเฉพาะตัวอักษรเท่านั้น',
    'alpha_dash' => ':attribute สามารถมีตัวอักษร ตัวเลข ขีดกลาง และขีดล่างเท่านั้น',
    'alpha_num' => ':attribute สามารถมีตัวอักษรและตัวเลขเท่านั้น',
    'array' => ':attribute ต้องเป็นอาร์เรย์',
    'before' => ':attribute ต้องเป็นวันที่ก่อน :date',
    'before_or_equal' => ':attribute ต้องเป็นวันที่ก่อนหรือเท่ากับ :date',
    'between' => [
        'numeric' => ':attribute ต้องอยู่ระหว่าง :min และ :max',
        'file' => ':attribute ต้องมีขนาดระหว่าง :min และ :max กิโลไบต์',
        'string' => ':attribute ต้องมีความยาวระหว่าง :min และ :max ตัวอักษร',
        'array' => ':attribute ต้องมีจำนวนไอเทมระหว่าง :min และ :max',
    ],
    'boolean' => 'ฟิลด์ :attribute ต้องเป็น true หรือ false',
    'confirmed' => ':attribute ไม่ตรงกัน',
    'current_password' => 'รหัสผ่านไม่ถูกต้อง',
    'date' => ':attribute ไม่ใช่วันที่ที่ถูกต้อง',
    'date_equals' => ':attribute ต้องเป็นวันที่ที่เท่ากับ :date',
    'date_format' => ':attribute ไม่ตรงกับรูปแบบ :format',
    'declined' => 'คุณต้องปฏิเสธ :attribute',
    'declined_if' => ':attribute ต้องถูกปฏิเสธเมื่อ :other คือ :value',
    'different' => ':attribute และ :other ต้องแตกต่างกัน',
    'digits' => ':attribute ต้องเป็นตัวเลข :digits หลัก',
    'digits_between' => ':attribute ต้องมีตัวเลขระหว่าง :min และ :max หลัก',
    'dimensions' => 'ขนาดภาพของ :attribute ไม่ถูกต้อง',
    'distinct' => 'ฟิลด์ :attribute มีค่าซ้ำ',
    'email' => ':attribute ต้องเป็นที่อยู่อีเมลที่ถูกต้อง',
    'ends_with' => ':attribute ต้องลงท้ายด้วยหนึ่งในค่าต่อไปนี้: :values',
    'enum' => 'ค่าที่เลือกสำหรับ :attribute ไม่ถูกต้อง',
    'exists' => 'ค่าที่เลือกสำหรับ :attribute ไม่ถูกต้อง',
    'file' => ':attribute ต้องเป็นไฟล์',
    'filled' => 'ฟิลด์ :attribute ต้องมีค่า',
    'gt' => [
        'numeric' => ':attribute ต้องมากกว่า :value',
        'file' => ':attribute ต้องมีขนาดมากกว่า :value กิโลไบต์',
        'string' => ':attribute ต้องยาวมากกว่า :value ตัวอักษร',
        'array' => ':attribute ต้องมีมากกว่า :value ไอเทม',
    ],
    'gte' => [
        'numeric' => ':attribute ต้องมากกว่าหรือเท่ากับ :value',
        'file' => ':attribute ต้องมีขนาดมากกว่าหรือเท่ากับ :value กิโลไบต์',
        'string' => ':attribute ต้องยาวมากกว่าหรือเท่ากับ :value ตัวอักษร',
        'array' => ':attribute ต้องมี :value ไอเทมหรือมากกว่า',
    ],
    'image' => ':attribute ต้องเป็นรูปภาพ',
    'in' => 'ค่าที่เลือกสำหรับ :attribute ไม่ถูกต้อง',
    'in_array' => 'ฟิลด์ :attribute ไม่ได้อยู่ใน :other',
    'integer' => ':attribute ต้องเป็นจำนวนเต็ม',
    'ip' => ':attribute ต้องเป็นที่อยู่ IP ที่ถูกต้อง',
    'ipv4' => ':attribute ต้องเป็นที่อยู่ IPv4 ที่ถูกต้อง',
    'ipv6' => ':attribute ต้องเป็นที่อยู่ IPv6 ที่ถูกต้อง',
    'json' => ':attribute ต้องเป็น JSON string ที่ถูกต้อง',
    'lt' => [
        'numeric' => ':attribute ต้องน้อยกว่า :value',
        'file' => ':attribute ต้องมีขนาดน้อยกว่า :value กิโลไบต์',
        'string' => ':attribute ต้องสั้นกว่าสำหรับ :value ตัวอักษร',
        'array' => ':attribute ต้องมีน้อยกว่า :value ไอเทม',
    ],
    'lte' => [
        'numeric' => ':attribute ต้องน้อยกว่าหรือเท่ากับ :value',
        'file' => ':attribute ต้องมีขนาดน้อยกว่าหรือเท่ากับ :value กิโลไบต์',
        'string' => ':attribute ต้องสั้นกว่าหรือเท่ากับ :value ตัวอักษร',
        'array' => ':attribute ไม่สามารถมีมากกว่า :value ไอเทม',
    ],
    'mac_address' => ':attribute ต้องเป็นที่อยู่ MAC ที่ถูกต้อง',
    'max' => [
        'numeric' => ':attribute ไม่สามารถมากกว่า :max',
        'file' => ':attribute ไม่สามารถมีขนาดมากกว่า :max กิโลไบต์',
        'string' => ':attribute ไม่สามารถมีความยาวมากกว่า :max ตัวอักษร',
        'array' => ':attribute ไม่สามารถมีจำนวนไอเทมมากกว่า :max',
    ],
    'mimes' => ':attribute ต้องเป็นไฟล์ประเภท: :values',
    'mimetypes' => ':attribute ต้องเป็นไฟล์ประเภท: :values',
    'min' => [
        'numeric' => ':attribute ต้องมีค่ามากที่สุดน้อยที่สุด :min',
        'file' => ':attribute ต้องมีขนาดอย่างน้อย :min กิโลไบต์',
        'string' => ':attribute ต้องมีความยาวอย่างน้อย :min ตัวอักษร',
        'array' => ':attribute ต้องมีอย่างน้อย :min ไอเทม',
    ],
    'multiple_of' => ':attribute ต้องเป็นผลคูณของ :value',
    'not_in' => 'ค่าที่เลือกสำหรับ :attribute ไม่ถูกต้อง',
    'not_regex' => 'รูปแบบของ :attribute ไม่ถูกต้อง',
    'numeric' => ':attribute ต้องเป็นตัวเลข',
    'password' => 'รหัสผ่านไม่ถูกต้อง',
    'present' => 'ฟิลด์ :attribute ต้องมีอยู่',
    'prohibited' => 'ฟิลด์ :attribute ถูกห้าม',
    'prohibited_if' => 'ฟิลด์ :attribute ถูกห้ามเมื่อ :other คือ :value',
    'prohibited_unless' => 'ฟิลด์ :attribute ถูกห้ามเมื่อ :other ไม่ใช่หนึ่งใน :values',
    'prohibits' => 'ฟิลด์ :attribute ห้ามมี :other',
    'regex' => 'รูปแบบของ :attribute ไม่ถูกต้อง',
    'required' => 'ฟิลด์ :attribute จำเป็นต้องกรอก',
    'required_array_keys' => 'ฟิลด์ :attribute ต้องมีไอเทมสำหรับ: :values',
    'required_if' => 'ฟิลด์ :attribute จำเป็นเมื่อ :other คือ :value',
    'required_unless' => 'ฟิลด์ :attribute จำเป็นเมื่อ :other ไม่ใช่หนึ่งใน :values',
    'required_with' => 'ฟิลด์ :attribute จำเป็นเมื่อ :values มีอยู่',
    'required_with_all' => 'ฟิลด์ :attribute จำเป็นเมื่อแต่ละค่าของ :values มีอยู่',
    'required_without' => 'ฟิลด์ :attribute จำเป็นเมื่อ :values ไม่มีอยู่',
    'required_without_all' => 'ฟิลด์ :attribute จำเป็นเมื่อไม่มีค่าของ :values',
    'same' => ':attribute และ :other ต้องตรงกัน',
    'size' => [
        'numeric' => ':attribute ต้องมีขนาด :size',
        'file' => ':attribute ต้องมีขนาด :size กิโลไบต์',
        'string' => ':attribute ต้องมีความยาว :size ตัวอักษร',
        'array' => ':attribute ต้องมี :size ไอเทม',
    ],
    'starts_with' => ':attribute ต้องเริ่มต้นด้วยหนึ่งในค่าต่อไปนี้: :values',
    'string' => ':attribute ต้องเป็นข้อความ',
    'timezone' => ':attribute ต้องเป็นโซนเวลาที่ถูกต้อง',
    'unique' => ':attribute ถูกใช้งานแล้ว',
    'uploaded' => 'การอัปโหลด :attribute ล้มเหลว',
    'url' => 'รูปแบบของ :attribute ไม่ถูกต้อง',
    'uuid' => ':attribute ต้องเป็น UUID ที่ถูกต้อง',
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
        'name' => 'ชื่อ',
        'username' => 'ชื่อผู้ใช้',
        'email' => 'ที่อยู่อีเมล',
        'password' => 'รหัสผ่าน',
        'role' => 'บทบาท',
    ],


];
