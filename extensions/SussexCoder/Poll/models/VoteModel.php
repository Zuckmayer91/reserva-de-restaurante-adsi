<?php

namespace SussexCoder\Poll\Models;

use Model;

/**
 * Vote_Model Model
 */
class VoteModel extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'sussexcoder_poll_vote__models';

    /**
     * @var array fillable fields
     */
    protected $fillable = [];

    public $timestamps = TRUE;

    /**
     * @var array Relations
     */
    public $relation = [
        'hasOne' => [],
        'hasMany' => [],
        'belongsTo' => [],
        'belongsToMany' => [],
        'morphTo' => [],
        'morphOne' => [],
        'morphMany' => [],
    ];
}
