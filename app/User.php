<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

/*  protected $fillable = ['name'];
    protected $guarded = ['price'];
定义了 name 字段可以写入/修改，而 price 字段不可以。

需要注意的是，fillable 与 guarded 只限制了 create 方法，而不会限制 save。

我觉得 Laravel 这样设计的原因是，create 通常是使用 request 中的所有请求参数来创建对象，
而 save 则是一个字段一个字段的手动赋值，
所以 create 有可能会恶意加入不应该插入的字段，
例如 is_admin。基于此，create 还是需要有 fillable, guarded 来过滤一层比较安全。
*/

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table= 'user';

    protected $primaryKey= 'id';

}
