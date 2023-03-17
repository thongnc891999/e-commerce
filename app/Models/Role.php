<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

// class Role extends Model
// {
//     use HasFactory;
//     use SoftDeletes;

//     const ROLE_ADMIN = 1;
//     const ROLE_EDITOR = 2;
//     const ROLE_SHIPPER = 3;
//     const ROLE_USER = 4;

//     protected $table = 'roles';

//     protected $fillable = [
//         'name',
//     ];
//     public function admins()
//     {
//         return $this->hasMany(User::class);
//     }
// }
