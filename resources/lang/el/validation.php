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

    'accepted' => 'Το πεδίο :attribute πρέπει να γίνει αποδεκτό.',
    'accepted_if' => 'Το πεδίο :attribute πρέπει να γίνει αποδεκτό όταν το :other είναι :value.',
    'active_url' => 'Το :attribute δεν είναι έγκυρη διεύθυνση URL.',
    'after' => 'Το :attribute πρέπει να είναι μια ημερομηνία μετά την :date.',
    'after_or_equal' => 'Το :attribute πρέπει να είναι μια ημερομηνία ίση ή μετά την :date.',
    'alpha' => 'Το :attribute μπορεί να περιέχει μόνο γράμματα.',
    'alpha_dash' => 'Το :attribute μπορεί να περιέχει μόνο γράμματα, αριθμούς, παύλες και κάτω παύλες.',
    'alpha_num' => 'Το :attribute μπορεί να περιέχει μόνο γράμματα και αριθμούς.',
    'array' => 'Το :attribute πρέπει να είναι ένας πίνακας.',
    'before' => 'Το :attribute πρέπει να είναι μια ημερομηνία πριν από την :date.',
    'before_or_equal' => 'Το :attribute πρέπει να είναι μια ημερομηνία ίση ή πριν από την :date.',
    'between' => [
        'numeric' => 'Το :attribute πρέπει να είναι μεταξύ :min και :max.',
        'file' => 'Το :attribute πρέπει να είναι μεταξύ :min και :max κιλομπάιτ.',
        'string' => 'Το :attribute πρέπει να έχει μεταξύ :min και :max χαρακτήρες.',
        'array' => 'Το :attribute πρέπει να έχει μεταξύ :min και :max αντικείμενα.',
    ],
    'boolean' => 'Το πεδίο :attribute πρέπει να είναι αληθές ή ψευδές.',
    'confirmed' => 'Η επιβεβαίωση για το :attribute δεν ταιριάζει.',
    'current_password' => 'Ο κωδικός πρόσβασης είναι λανθασμένος.',
    'date' => 'Το :attribute δεν είναι έγκυρη ημερομηνία.',
    'date_equals' => 'Το :attribute πρέπει να είναι μια ημερομηνία ίση με την :date.',
    'date_format' => 'Το :attribute δεν ταιριάζει με τη μορφή :format.',
    'declined' => 'Το :attribute πρέπει να απορριφθεί.',
    'declined_if' => 'Το :attribute πρέπει να απορριφθεί όταν το :other είναι :value.',
    'different' => 'Το :attribute και το :other πρέπει να είναι διαφορετικά.',
    'digits' => 'Το :attribute πρέπει να είναι :digits ψηφία.',
    'digits_between' => 'Το :attribute πρέπει να έχει μεταξύ :min και :max ψηφία.',
    'dimensions' => 'Το :attribute έχει μη έγκυρες διαστάσεις εικόνας.',
    'distinct' => 'Το πεδίο :attribute έχει διπλή τιμή.',
    'email' => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση email.',
    'ends_with' => 'Το :attribute πρέπει να τελειώνει με ένα από τα εξής: :values.',
    'enum' => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'exists' => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'file' => 'Το :attribute πρέπει να είναι ένα αρχείο.',
    'filled' => 'Το πεδίο :attribute πρέπει να έχει τιμή.',
    'gt' => [
        'numeric' => 'Το :attribute πρέπει να είναι μεγαλύτερο από :value.',
        'file' => 'Το :attribute πρέπει να είναι μεγαλύτερο από :value κιλομπάιτ.',
        'string' => 'Το :attribute πρέπει να έχει περισσότερους από :value χαρακτήρες.',
        'array' => 'Το :attribute πρέπει να έχει περισσότερα από :value αντικείμενα.',
    ],
    'gte' => [
        'numeric' => 'Το :attribute πρέπει να είναι μεγαλύτερο ή ίσο με :value.',
        'file' => 'Το :attribute πρέπει να είναι μεγαλύτερο ή ίσο με :value κιλομπάιτ.',
        'string' => 'Το :attribute πρέπει να έχει :value χαρακτήρες ή περισσότερους.',
        'array' => 'Το :attribute πρέπει να έχει :value αντικείμενα ή περισσότερα.',
    ],
    'image' => 'Το :attribute πρέπει να είναι εικόνα.',
    'in' => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'in_array' => 'Το πεδίο :attribute δεν υπάρχει στο :other.',
    'integer' => 'Το :attribute πρέπει να είναι ακέραιος αριθμός.',
    'ip' => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση IP.',
    'ipv4' => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση IPv4.',
    'ipv6' => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση IPv6.',
    'json' => 'Το :attribute πρέπει να είναι έγκυρη συμβολοσειρά JSON.',
    'lt' => [
        'numeric' => 'Το :attribute πρέπει να είναι μικρότερο από :value.',
        'file' => 'Το :attribute πρέπει να είναι μικρότερο από :value κιλομπάιτ.',
        'string' => 'Το :attribute πρέπει να έχει λιγότερους από :value χαρακτήρες.',
        'array' => 'Το :attribute πρέπει να έχει λιγότερα από :value αντικείμενα.',
    ],
    'lte' => [
        'numeric' => 'Το :attribute πρέπει να είναι μικρότερο ή ίσο με :value.',
        'file' => 'Το :attribute πρέπει να είναι μικρότερο ή ίσο με :value κιλομπάιτ.',
        'string' => 'Το :attribute πρέπει να έχει :value χαρακτήρες ή λιγότερους.',
        'array' => 'Το :attribute δεν πρέπει να έχει περισσότερα από :value αντικείμενα.',
    ],
    'mac_address' => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση MAC.',
    'max' => [
        'numeric' => 'Το :attribute δεν μπορεί να είναι μεγαλύτερο από :max.',
        'file' => 'Το :attribute δεν μπορεί να είναι μεγαλύτερο από :max κιλομπάιτ.',
        'string' => 'Το :attribute δεν μπορεί να έχει περισσότερους από :max χαρακτήρες.',
        'array' => 'Το :attribute δεν μπορεί να έχει περισσότερα από :max αντικείμενα.',
    ],
    'mimes' => 'Το :attribute πρέπει να είναι ένα αρχείο τύπου: :values.',
    'mimetypes' => 'Το :attribute πρέπει να είναι ένα αρχείο τύπου: :values.',
    'min' => [
        'numeric' => 'Το :attribute πρέπει να είναι τουλάχιστον :min.',
        'file' => 'Το :attribute πρέπει να είναι τουλάχιστον :min κιλομπάιτ.',
        'string' => 'Το :attribute πρέπει να έχει τουλάχιστον :min χαρακτήρες.',
        'array' => 'Το :attribute πρέπει να έχει τουλάχιστον :min αντικείμενα.',
    ],
    'multiple_of' => 'Το :attribute πρέπει να είναι πολλαπλάσιο του :value.',
    'not_in' => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'not_regex' => 'Η μορφή του :attribute δεν είναι έγκυρη.',
    'numeric' => 'Το :attribute πρέπει να είναι αριθμός.',
    'password' => 'Ο κωδικός πρόσβασης δεν είναι σωστός.',
    'present' => 'Το πεδίο :attribute πρέπει να είναι παρόν.',
    'prohibited' => 'Το πεδίο :attribute απαγορεύεται.',
    'prohibited_if' => 'Το πεδίο :attribute απαγορεύεται όταν το :other είναι :value.',
    'prohibited_unless' => 'Το πεδίο :attribute απαγορεύεται εκτός εάν το :other είναι μέσα σε :values.',
    'prohibits' => 'Το πεδίο :attribute απαγορεύει την ύπαρξη του :other.',
    'regex' => 'Η μορφή του :attribute δεν είναι έγκυρη.',
    'required' => 'Το πεδίο :attribute είναι υποχρεωτικό.',
    'required_if' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν το :other είναι :value.',
    'required_unless' => 'Το πεδίο :attribute είναι υποχρεωτικό εκτός εάν το :other είναι μέσα σε :values.',
    'required_with' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν υπάρχει :values.',
    'required_with_all' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν υπάρχουν :values.',
    'required_without' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν δεν υπάρχει :values.',
    'required_without_all' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν κανένα από τα :values δεν είναι παρόν.',
    'same' => 'Τα :attribute και :other πρέπει να ταιριάζουν.',
    'size' => [
        'numeric' => 'Το :attribute πρέπει να είναι :size.',
        'file' => 'Το :attribute πρέπει να είναι :size κιλομπάιτ.',
        'string' => 'Το :attribute πρέπει να έχει :size χαρακτήρες.',
        'array' => 'Το :attribute πρέπει να περιέχει :size αντικείμενα.',
    ],
    'starts_with' => 'Το :attribute πρέπει να ξεκινά με ένα από τα εξής: :values.',
    'string' => 'Το :attribute πρέπει να είναι συμβολοσειρά.',
    'timezone' => 'Το :attribute πρέπει να είναι έγκυρη ζώνη ώρας.',
    'unique' => 'Το :attribute έχει ήδη χρησιμοποιηθεί.',
    'uploaded' => 'Η μεταφόρτωση του :attribute απέτυχε.',
    'url' => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση URL.',
    'uuid' => 'Το :attribute πρέπει να είναι έγκυρο UUID.',

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
        'name' => 'όνομα',
        'username' => 'όνομα χρήστη',
        'email' => 'διεύθυνση ηλεκτρονικού ταχυδρομείου',
        'password' => 'κωδικός πρόσβασης',
        'role' => 'ρόλος',
    ],


];
