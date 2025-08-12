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

    'accepted'             => ':attribute باید پذیرفته شده باشد.',
    'active_url'           => 'آدرس :attribute معتبر نیست',
    'after'                => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal'       => ':attribute باید تاریخی بعد از :date، یا مطابق با آن باشد.',
    'alpha'                => ':attribute باید فقط حروف الفبا باشد.',
    'alpha_dash'           => ':attribute باید فقط حروف الفبا، عدد و خط تیره(-) باشد.',
    'alpha_num'            => ':attribute باید فقط حروف الفبا و عدد باشد.',
    'array'                => ':attribute باید آرایه باشد.',
    'before'               => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal'      => ':attribute باید تاریخی قبل از :date، یا مطابق با آن باشد.',
    'between'              => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file'    => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string'  => ':attribute باید بین :min و :max کاراکتر باشد.',
        'array'   => ':attribute باید بین :min و :max آیتم باشد.',
    ],
    'boolean'              => 'فیلد :attribute فقط می‌تواند صفر و یا یک باشد',
    'confirmed'            => ':attribute با فیلد تکرار مطابقت ندارد.',
    'date'                 => ':attribute یک تاریخ معتبر نیست.',
    'date_format'          => ':attribute با الگوی :format مطاقبت ندارد.',
    'different'            => ':attribute و :other باید متفاوت باشند.',
    'digits'               => ':attribute باید :digits رقم باشد.',
    'digits_between'       => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions'           => 'ابعاد تصویر :attribute قابل قبول نیست.',
    'distinct'             => 'فیلد :attribute تکراری است.',
    'email'                => ':attribute باید یک ایمیل معتبر باشد',
    'exists'               => ':attribute انتخاب شده، معتبر نیست.',
    'file'                 => ':attribute باید یک فایل باشد',
    'filled'               => 'فیلد :attribute الزامی است',
    'image'                => ':attribute باید تصویر باشد.',
    'in'                   => ':attribute انتخاب شده، معتبر نیست.',
    'in_array'             => 'فیلد :attribute در :other وجود ندارد.',
    'integer'              => ':attribute باید عدد صحیح باشد.',
    'ip'                   => ':attribute باید IP معتبر باشد.',
    'ipv4'                 => ':attribute باید یک آدرس معتبر از نوع IPv4 باشد.',
    'ipv6'                 => ':attribute باید یک آدرس معتبر از نوع IPv6 باشد.',
    'json'                 => 'فیلد :attribute باید یک رشته از نوع JSON باشد.',
    'max'                  => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'file'    => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string'  => ':attribute نباید بیشتر از :max کاراکتر باشد.',
        'array'   => ':attribute نباید بیشتر از :max آیتم باشد.',
    ],
    'mimes'                => ':attribute باید یکی از فرمت های :values باشد.',
    'mimetypes'            => ':attribute باید یکی از فرمت های :values باشد.',
    'min'                  => [
        'numeric' => ':attribute نباید کوچکتر از :min باشد.',
        'file'    => ':attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'string'  => ':attribute نباید کمتر از :min کاراکتر باشد.',
        'array'   => ':attribute نباید کمتر از :min آیتم باشد.',
    ],
    'not_in'               => ':attribute انتخاب شده، معتبر نیست.',
    'numeric'              => ':attribute باید عدد باشد.',
    'present'              => 'فیلد :attribute باید در پارامترهای ارسالی وجود داشته باشد.',
    'regex'                => 'فرمت :attribute معتبر نیست.',
    'required'             => 'فیلد :attribute الزامی است.',
    'required_if'          => 'هنگامی که :other برابر با :value است، فیلد :attribute الزامی است.',
    'required_unless'      => 'فیلد :attribute ضروری است، مگر آنکه :other در :values موجود باشد.',
    'required_with'        => 'در صورت وجود فیلد :values، فیلد :attribute الزامی است.',
    'required_with_all'    => 'در صورت وجود فیلدهای :values، فیلد :attribute الزامی است.',
    'required_without'     => 'در صورت عدم وجود فیلد :values، فیلد :attribute الزامی است.',
    'required_without_all' => 'در صورت عدم وجود هر یک از فیلدهای :values، فیلد :attribute الزامی است.',
    'same'                 => ':attribute و :other باید مانند هم باشند.',
    'size'                 => [
        'numeric' => ':attribute باید برابر با :size باشد.',
        'file'    => ':attribute باید برابر با :size کیلوبایت باشد.',
        'string'  => ':attribute باید برابر با :size کاراکتر باشد.',
        'array'   => ':attribute باسد شامل :size آیتم باشد.',
    ],
    'string'               => 'فیلد :attribute باید متن باشد.',
    'timezone'             => 'فیلد :attribute باید یک منطقه زمانی قابل قبول باشد.',
    'unique'               => ':attribute قبلا انتخاب شده است.',
    'uploaded'             => 'آپلود فایل :attribute موفقیت آمیز نبود.',
    'url'                  => 'فرمت آدرس :attribute اشتباه است.',

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

//        'attribute_ids.*'      =>'همه ویژگی ها باید پر شوند',
//        'variation_values.price.*' => 'فیلد قیمت برای متغیر نمیتواند خالی باشد',
//        'variation_values.quantity.*' => 'فیلد موجودی برای متغیر نمیتواند خالی باشد',
//        'variation_values'   =>'فیلد نام برای متغیر نمیتواند خالی باشد'

    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [
        'name'                  => 'نام',
        'username'              => 'نام کاربری',
        'email'                 => 'ایمیل',
        'first_name'            => 'نام',
        'last_name'             => 'نام خانوادگی',
        'password'              => 'رمز عبور',
        'password_confirmation' => 'تکرار رمز عبور',
        'city'                  => 'شهر',
        'country'               => 'کشور',
        'address'               => 'آدرس پستی',
        'phone'                 => 'شماره ثابت',
        'cellphone'             => 'شماره همراه',
        'age'                   => 'سن',
        'sex'                   => 'جنسیت',
        'gender'                => 'جنسیت',
        'day'                   => 'روز',
        'month'                 => 'ماه',
        'year'                  => 'سال',
        'hour'                  => 'ساعت',
        'minute'                => 'دقیقه',
        'second'                => 'ثانیه',
        'title'                 => 'عنوان',
        'text'                  => 'متن',
        'content'               => 'محتوا',
        'description'           => 'توضیحات',
        'excerpt'               => 'گزیده مطلب',
        'date'                  => 'تاریخ',
        'time'                  => 'زمان',
        'available'             => 'موجود',
        'size'                  => 'اندازه',
        'terms'                 => 'شرایط',
        'price'                 => 'قیمت',
        'code'                  => 'کد',
        'score'                 => 'تعداد امتیاز',
        'display_name'          => 'نام نمایشی',
        'resource'              => 'نام ریسورس',
        'old_password'          => 'رمز عبور فعلی',
        'newpassword'           => 'رمز عبور جدید',
        'newpassword_confirmation' => 'تکرار رمز عبور جدید',
        'longitude'             => 'طول جغرافیایی',
        'latitude'              => 'عرض جغرافیایی',
        'slug'                  =>'نام انگلیسی',
        'attribute_ids'         =>'ویژگی',
        'attribute_is_filter_ids'=>'انتخاب ویژگی های قابل فیلتر',
        'variation_id'           =>'انتخاب ویژگی متغیر',
        'brand_id'               =>'برند',
        'tag_ids'                =>'برچسب',
        'keyword_ids'                =>'کلمات کلیدی',
        'primary_image'          =>'انتخاب تصویر اصلی',
        'images'                =>'انتخاب تصاویر',
        'category_id'           =>'دسته بندی',
        'variation_values'     =>'متغیر',
        'delivery_amount'       =>'هزینه ارسال',
        'delivery_amount_per_product'=>' هزینه ارسال به ازای محصول اضافی ',
        'variation_values.price.0'=>'قیمت',
        'variation_values.quantity.0'=>'تعداد',
        'image'=>'انتخاب تصویر',
        'priority'=>'اولویت',
        'type'=>'نوع ',
        'amount'=>'مبلغ',
        'expired_at'=>'تاریخ انقضا',
        'city_id'=>'شهر',
        'subject'=>'موضوع پیام',
        'section_title.*'=>'عنوان فصل',
        'section_bold_title.*'=>'َشماره فصل',
        'episode_title.*'=>'عنوان قسمت',
        'episode_duration.*'=>'زمان قسمت',
        'episode_video_url.*'=>'آدرس ویدیو',
        'postal_code'=>'کدپستی',
        'g-recaptcha-response'=>'رکپچا ضروری است',
        'read_time'=>'مدت زمان',
        'summary'=>'توضیح مختصر',
        'status'=>'وضعیت',
        'parent_id'=>'والد',
        'body'=>'متن خبر',
        'color'=>'رنگ',
        'c_password'=>'تکرار رمز عبور',
        'current_password'=>'رمز عبور فعلی',
        'new_password'=>'رمز عبور جدید',
        'duration'=>'مدت زمان',
        'section_number.*'=>'شماره فصل',
        'episode_file_url.*'=>'آدرس فایل',
        'sections.*.section_title'=>'عنوان فصل',
        'sections.*.section_number'=>'شماره فصل',
        'sections.*.episodes.*.episode_title'=>'عنوان قسمت',
        'sections.*.episodes.*.episode_duration'=>'مدت زمان قسمت',
        'sale_price'=>'قیمت تخفیف',
        'sale_start_date'=>'تاریخ شروع تخفیف',
        'sale_end_date'=>'تاریخ پایان تخفیف',
        'sections'=>'فصل',
        'sections.*.episodes'=>'قسمت',
        'section_number'=>'شماره فصل',
        'order'=>'ترتیب',
        'video_url'=>'ویدیو',
        'file_url'=>'فایل',
        'is_free'=>'رایگان/نقدی',
        'categoryable_id'=>'آیدی مربوطه',
        'bio'=>'درباره من',
        'avatar'=>'تصویر پروفایل',
        'website'=>'وبسایت',
        'github'=>'گیتهاب',
        'linkedin'=>'لینکدین',
        'telegram'=>'تلگرام',
        'comment_body'=>'متن نظر',
        'courseId'=>'شناسه درس',
        'coupon_code'=>'کد تخفیف',
        'verification_code'=>'کد تایید',
        'login_user'=>'ایمیل یا شماره همراه',
        'otp'=>'رمز یکبار مصرف',
        'intro'=>'معرفی'
    ],

];
