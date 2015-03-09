<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    protected $perPage = 6;

	protected $fillable = [
        'content',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
