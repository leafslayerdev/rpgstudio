<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'owner_id',
        'sheet_template_id',
        'allow_section_order_edit',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'game_user')
            ->withPivot('game_role_id')
            ->withTimestamps();
    }

    public function sheetTemplate()
    {
        return $this->belongsTo(SheetTemplate::class);
    }

    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
