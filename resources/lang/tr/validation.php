<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Doğrulama
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki öğeler doğrulama(validation) işlemleri sırasında kullanılan varsayılan hata
    | mesajlarını içermektedir. `size` gibi bazı kuralların birden çok çeşidi
    | bulunmaktadır. Her biri ayrı ayrı düzenlenebilir.
    |
    */

    'accepted' => ':Attribute kabul edilmelidir.',
    'accepted_if' => ':Attribute, :other :value olduğunda kabul edilmelidir.',
    'active_url' => ':Attribute geçerli bir URL olmalıdır.',
    'after' => ':Attribute değeri :date tarihinden sonra olmalıdır.',
    'after_or_equal' => ':Attribute değeri :date tarihinden sonra veya eşit olmalıdır.',
    'alpha' => ':Attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':Attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.',
    'alpha_num' => ':Attribute sadece harfler ve rakamlar içermelidir.',
    'array' => ':Attribute dizi olmalıdır.',
    'before' => ':Attribute değeri :date tarihinden önce olmalıdır.',
    'before_or_equal' => ':Attribute değeri :date tarihinden önce veya eşit olmalıdır.',
    'between' => [
        'numeric' => ':Attribute :min - :max arasında olmalıdır.',
        'file' => ':Attribute :min - :max arasındaki kilobayt değeri olmalıdır.',
        'string' => ':Attribute :min - :max arasında karakterden oluşmalıdır.',
        'array' => ':Attribute :min - :max arasında nesneye sahip olmalıdır.',
    ],
    'boolean' => ':Attribute sadece doğru veya yanlış olmalıdır.',
    'confirmed' => ':Attribute tekrarı eşleşmiyor.',
    'current_password' => 'Parola hatalı.',
    'date' => ':Attribute geçerli bir tarih olmalıdır.',
    'date_equals' => ':Attribute ile :date aynı tarihler olmalıdır.',
    'date_format' => ':Attribute :format biçimi ile eşleşmiyor.',
    'declined' => ':Attribute kabul edilmemelidir.',
    'declined_if' => ':Attribute, :other :value olduğunda kabul edilmemelidir.',
    'different' => ':Attribute ile :other birbirinden farklı olmalıdır.',
    'digits' => ':Attribute :digits haneden oluşmalıdır.',
    'digits_between' => ':Attribute :min ile :max arasında haneden oluşmalıdır.',
    'dimensions' => ':Attribute görsel ölçüleri geçersiz.',
    'distinct' => ':Attribute alanı yinelenen bir değere sahip.',
    'email' => ':Attribute alanına girilen e-posta adresi geçersiz.',
    'ends_with' => ':Attribute, şunlardan biriyle bitmelidir :values',
    'enum' => 'Seçili :Attribute geçersiz.',
    'exists' => 'Seçili :Attribute geçersiz.',
    'file' => ':Attribute dosya olmalıdır.',
    'filled' => ':Attribute alanının doldurulması zorunludur.',
    'gt' => [
        'numeric' => ':Attribute, :value değerinden büyük olmalı.',
        'file' => ':Attribute, :value kilobayt boyutundan büyük olmalı.',
        'string' => ':Attribute, :value karakterden uzun olmalı.',
        'array' => ':Attribute, :value taneden fazla olmalı.',
    ],
    'gte' => [
        'numeric' => ':Attribute, :value kadar veya daha fazla olmalı.',
        'file' => ':Attribute, :value kilobayt boyutu kadar veya daha büyük olmalı.',
        'string' => ':Attribute, :value karakter kadar veya daha uzun olmalı.',
        'array' => ':Attribute, :value tane veya daha fazla olmalı.',
    ],
    'image' => ':Attribute alanı resim dosyası olmalıdır.',
    'in' => ':Attribute değeri geçersiz.',
    'in_array' => ':Attribute alanı :other içinde mevcut değil.',
    'integer' => ':Attribute tamsayı olmalıdır.',
    'ip' => ':Attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':Attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':Attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':Attribute geçerli bir JSON değişkeni olmalıdır.',
    'lt' => [
        'numeric' => ':Attribute, :value değerinden küçük olmalı.',
        'file' => ':Attribute, :value kilobayt boyutundan küçük olmalı.',
        'string' => ':Attribute, :value karakterden kısa olmalı.',
        'array' => ':Attribute, :value taneden az olmalı.',
    ],
    'lte' => [
        'numeric' => ':Attribute, :value kadar veya daha küçük olmalı.',
        'file' => ':Attribute, :value kilobayt boyutu kadar veya daha küçük olmalı.',
        'string' => ':Attribute, :value karakter kadar veya daha kısa olmalı.',
        'array' => ':Attribute, :value tane veya daha az olmalı.',
    ],
    'mac_address' => ':Attribute geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'numeric' => ':Attribute değeri en çok :max olmalıdır.',
        'file' => ':Attribute boyutu en çok :max kilobayt olmalıdır.',
        'string' => ':Attribute uzunluğu en çok :max karakter olmalıdır.',
        'array' => ':Attribute en çok :max nesneye sahip olmalıdır.',
    ],
    'mimes' => ':Attribute dosya biçimi :values olmalıdır.',
    'mimetypes' => ':Attribute dosya biçimi :values olmalıdır.',
    'min' => [
        'numeric' => ':Attribute değeri en az :min olmalıdır.',
        'file' => ':Attribute boyutu en az :min kilobayt olmalıdır.',
        'string' => ':Attribute uzunluğu en az :min karakter olmalıdır.',
        'array' => ':Attribute en az :min nesneye sahip olmalıdır.',
    ],
    'multiple_of' => ':Attribute, :value değerinin katları olmalıdır.',
    'not_in' => 'Seçili :Attribute geçersiz.',
    'not_regex' => ':Attribute biçimi geçersiz.',
    'numeric' => ':Attribute sayı olmalıdır.',
    'password' => 'Parola geçersiz.',
    'present' => ':Attribute alanı mevcut olmalıdır.',
    'prohibited' => ':Attribute alanını gönderemezsiniz.',
    'prohibited_if' => ':Other değeri :value olduğunda :Attribute alanını gönderemezsiniz.',
    'prohibited_unless' => 'Değerler\'de :other olmadığı sürece :Attribute alanını gönderemezsiniz.',
    'prohibits' => ':Attribute alanı ile :other alanını birlikte gönderemezsiniz.',
    'regex' => ':Attribute biçimi geçersiz.',
    'required' => ':Attribute alanı gereklidir.',
    'required_array_keys' => ':Attribute alanı, :değerler için girişler içermelidir.',
    'required_if' => ':Attribute alanı, :other :value değerine sahip olduğunda zorunludur.',
    'required_unless' => ':Attribute alanı, :other alanı :value değerlerinden birine sahip olmadığında zorunludur.',
    'required_with' => ':Attribute alanı :values varken zorunludur.',
    'required_with_all' => ':Attribute alanı herhangi bir :values değeri varken zorunludur.',
    'required_without' => ':Attribute alanı :values yokken zorunludur.',
    'required_without_all' => ':Attribute alanı :values değerlerinden herhangi biri yokken zorunludur.',
    'same' => ':Attribute ile :other eşleşmelidir.',
    'size' => [
        'numeric' => ':Attribute :size olmalıdır.',
        'file' => ':Attribute :size kilobyte olmalıdır.',
        'string' => ':Attribute :size karakter olmalıdır.',
        'array' => ':Attribute :size nesneye sahip olmalıdır.',
    ],
    'starts_with' => ':Attribute şunlardan biri ile başlamalıdır: :values',
    'string' => ':Attribute dizge olmalıdır.',
    'timezone' => ':Attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':Attribute daha önceden kayıt edilmiş.',
    'uploaded' => ':Attribute yüklemesi başarısız.',
    'url' => ':Attribute biçimi geçersiz.',
    'uuid' => ':Attribute bir UUID formatına uygun olmalı.',

    /*
    |--------------------------------------------------------------------------
    | Özelleştirilmiş doğrulama mesajları
    |--------------------------------------------------------------------------
    |
    | Bu alanda her niteleyici (attribute) ve kural (rule) ikilisine özel hata
    | mesajları tanımlayabilirsiniz. Bu özellik, son kullanıcıya daha gerçekçi
    | metinler göstermeniz için oldukça faydalıdır.
    |
    | Örnek:
    | 'invalid_extension'     => 'Dosyanın uzantısı geçersiz.',
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Özelleşmiş Mesaj',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Özelleştirilmiş niteleyici isimleri
    |--------------------------------------------------------------------------
    |
    | Bu alandaki bilgiler "email" gibi niteleyici isimlerini "E-Posta adres"
    | gibi daha okunabilir metinlere çevirmek için kullanılır. Bu bilgiler
    | hata mesajlarının daha temiz olmasını sağlar.
    |
    | Örnek:
    |
    | 'email' => 'E-Posta adresi',
    | 'password' => 'Şifre',
    |
    */

    'attributes' => [],

];
