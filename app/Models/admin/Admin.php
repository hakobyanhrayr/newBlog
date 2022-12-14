<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use HasFactory;

    use Notifiable;

    public $timestamps = true;

    public $table = 'admins';

    protected $fillable = [
        'name',
        'email',
        'password',
        'status'
    ];

    /**
     * @return BelongsToMany
     */
    public function role(): BelongsToMany
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
}
