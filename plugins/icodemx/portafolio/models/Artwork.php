<?php namespace Icodemx\Portafolio\Models;

use Model;
use October\Rain\Database\Traits\NestedTree;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;

/**
 * Artwork Model
 */
class Artwork extends Model
{

    use Validation;
    use Sortable;
    use NestedTree;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'icodemx_portafolio_artworks';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'imgOriginal' => ['System\Models\File'],
        'imgRecovered' => ['System\Models\File'],
    ];
    public $attachMany = [];

    public $rules = [
        'title' => 'required',
        'date_start' => 'required|date',
        'date_finish' => 'required|date',
        'imgOriginal' => 'required',
        'imgRecovered' => 'required'
    ];

    public function scopeIsPublished($query)
    {
        return $query->where('published', true);
    }
}
