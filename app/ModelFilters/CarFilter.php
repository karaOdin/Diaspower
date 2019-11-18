<?php 

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;
use Illuminate\Http\Request;

class CarFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function city($id)
    {
    	return $this->related('agency','city_id','=',$id);
    }

    public function modele($modele)
    {
    	return $this->where('modele', 'Like',"$modele%");
    }

     public function agency($id)
    {
        return $this->where('agency_id', $id);
    }
}
