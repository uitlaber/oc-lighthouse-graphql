<?php namespace Uit\Lighthouse\Models;

use Model;

/**
 * Model
 */
class Schema extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'uit_lighthouse_schemes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function scopePublished($query){
        return $query->where('published', true);
    }

    public function afterSave(){

        $schemesBody = '';
        $schemes = Schema::published()->get();
        foreach ($schemes as $schema) {
            $schemesBody .= $schema->schema;
        }


        $result = \File::put(plugins_path('uit/lighthouse/graphql/schema.graphql'), $schemesBody);


    }
}
