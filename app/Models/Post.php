<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Post
 * @package App\Models
 * @version October 28, 2020, 6:53 am UTC
 *
 * @property integer $author_id
 * @property string $title
 * @property string $content
 */
class Post extends Model
{

    public $table = 'posts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'author_id',
        'title',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
        'title' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string'
    ];


}
