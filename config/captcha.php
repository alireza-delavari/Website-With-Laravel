<?php if (!class_exists('CaptchaConfiguration')) { return; }

// BotDetect PHP Captcha configuration options
// more details here: https://captcha.com/doc/php/captcha-options.html
// ----------------------------------------------------------------------------

return [
    /*
    |--------------------------------------------------------------------------
    | Captcha configuration for example page
    |--------------------------------------------------------------------------
    */
    'ExampleCaptcha' => [
        'UserInputID' => 'CaptchaCode',
        'CodeLength' => 5,
        'ImageWidth' => 170,
        'ImageHeight' => 50,
        'SoundEnabled' => false,
//        'ReloadEnabled' => false,
        'UseSmallIcons' => true,
//        'UseHorizontalIcons' => true,
//        'ReloadIconUrl' => '/img/Logo.png',
//        'SoundIconUrl' => '../../images/custom-sound-icon.gif'
//        'HelpLinkEnabled' => false,
//        'AdditionalInlineCss' => 'border: 24px solid #fff',
],

    /*
    |--------------------------------------------------------------------------
    | Captcha configuration for contact page
    |--------------------------------------------------------------------------
    */
    'ContactCaptcha' => [
        'UserInputID' => 'CaptchaCode',
        'CodeLength' => CaptchaRandomization::GetRandomCodeLength(4, 6),
        'ImageStyle' => ImageStyle::AncientMosaic,
    ],

    /*
    |--------------------------------------------------------------------------
    | Captcha configuration for login page
    |--------------------------------------------------------------------------
    */
    'LoginCaptcha' => [
        'UserInputID' => 'CaptchaCode',
        'CodeLength' => 3,
        'ImageStyle' => [
            ImageStyle::Radar,
            ImageStyle::Collage,
            ImageStyle::Fingerprints,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Captcha configuration for register page
    |--------------------------------------------------------------------------
    */
    'RegisterCaptcha' => [
        'UserInputID' => 'CaptchaCode',
        'CodeLength' => CaptchaRandomization::GetRandomCodeLength(3, 4),
        'CodeStyle' => CodeStyle::Alpha,
    ],

    /*
    |--------------------------------------------------------------------------
    | Captcha configuration for reset password page
    |--------------------------------------------------------------------------
    */
    'ResetPasswordCaptcha' => [
        'UserInputID' => 'CaptchaCode',
        'CodeLength' => 2,
        'CustomLightColor' => '#9966FF',
    ],

    // Add more your Captcha configuration here...
];
