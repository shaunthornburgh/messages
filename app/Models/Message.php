<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Message extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return HasOne
     */
    public function fromContact(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'from');
    }

    /**
     * @return HasOne
     */
    public function toContact(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'to');
    }
}
