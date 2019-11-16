<?php 

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;
use Illuminate\Http\Request;


class AgencyFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function phone($phone)
    {
    	return $this->where('phone', 'Like',"$phone%");
    }

    public function name($name)
    {
    	return $this->where('name','Like',"$name%");
    }

   /* public function setup()
    {
        $this->get();
    }*/
}
