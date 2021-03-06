<?php

namespace AffiliateProgram\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * AffiliateProgram\Referral
 *
 * @property integer $id
 * @property integer $referrer_id
 * @property integer $referral_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\AffiliateProgram\Models\Referral whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AffiliateProgram\Models\Referral whereReferrerId($value)
 * @method static \Illuminate\Database\Query\Builder|\AffiliateProgram\Models\Referral whereReferralId($value)
 * @method static \Illuminate\Database\Query\Builder|\AffiliateProgram\Models\Referral whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AffiliateProgram\Models\Referral whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Referral extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'referrals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'referrer_id', 'referral_id',
    ];

    /*public function user1()
    {
        return $this->belongsTo('AffiliateProgram\Models\User', 'referrer_id', 'id');
    }

    public function user2()
    {
        return $this->belongsTo('AffiliateProgram\Models\User', 'referral_id', 'id');
    }*/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /*public function referrer()
    {
        return $this->belongsTo('AffiliateProgram\Models\User', 'referral_id', 'id');
    }


    public function referral()
    {
        return $this->belongsTo('AffiliateProgram\Models\User', 'referrer_id', 'id');
    }*/
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

   /* public function getReferrals()
    {
        return $this->belongsTo('AffiliateProgram\Models\User');
    }*/


}
