<?php
// ======================================================================
//             Designed by:    Eyasu Girma [Kiya]
//                 Mobile:     +251-913-078-029
//                 Email:      sendtokiya@gmail.com
//                 Facebook:   https://facebook.com/JoshKiyakoo
//                 LinkedIn:   https://linkedin.com/in/JoshKiyakoo
//                 Twitter:    https://twitter.com/JoshKiyakoo
//                 Telegram:   https://t.me/JoshKiyakoo
// ======================================================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscribersDataModel extends Model {
    use HasFactory;

    protected $table = 'sfgbc_subscriber';

    /** The attributes that are mass assignable.
     * @var array */
    protected $fillable = [
        'subscriberEmail',
        'subscriberStatus',
        'subscribeDate',
    ];
    /** The attributes that should be cast to native types.@var array */
    protected $casts = [
        'subscribeDate' => 'date',
    ];
}
