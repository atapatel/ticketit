<?php

namespace Kordy\Ticketit\Models;

use Auth;
use Jenssegers\Mongodb\Model;

class Priority extends Model
{
    protected $collection = 'ticketit_priorities';

    protected $fillable = ['name', 'color'];

    /**
     * Indicates that this model should not be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get related tickets
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'priority_id');
    }
}
