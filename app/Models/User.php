<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use WendellAdriel\Lift\Attributes\Cast;
use WendellAdriel\Lift\Attributes\Fillable;
use WendellAdriel\Lift\Attributes\Hidden;
use WendellAdriel\Lift\Attributes\PrimaryKey;
use WendellAdriel\Lift\Lift;

class User extends Authenticatable
{
    use Lift;

    use HasApiTokens, HasFactory, Notifiable;

    #[PrimaryKey]
    public int $id;

    #[Fillable]
    public string $name;

    #[Fillable]
    public string $email;

    #[Cast('datetime')]
    public ?Carbon $email_verified_at;

    #[Fillable]
    #[Hidden]
    #[Cast('hashed')]
    public string $password;

    #[Hidden]
    public string $remember_token;
}
