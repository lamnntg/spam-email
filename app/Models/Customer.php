<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'company',
        'phone_number',
        'tax_code',
        'description',
        'status_current_mail',
    ];

    public static $urlFormMail = [
        1 => [
            1 => 'mails.forms.notification',
            2 => 'mails.forms.notification-other',
            3 => 'mails.forms.notification-other',
            4 => 'mails.forms.notification-other',
        ],

        2 => [
            1 => 'mails.forms.notification-old-version',
            2 => 'mails.forms.notification-old-version-other',
            3 => 'mails.forms.notification-old-version-other',
            4 => 'mails.forms.notification-old-version-other',
        ],

        3 => [
            1 => 'mails.forms.notification-van',
            2 => 'mails.forms.notification-van',
            3 => 'mails.forms.notification-van',
            4 => 'mails.forms.notification-van',
        ]
    ];
}
