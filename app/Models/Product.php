<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Product extends Base
{
    use HasFactory;

    public function options()
    {
        return $this->belongsToMany(Option::class, 'product_option', 'product_id', 'option_id');
    }
	/*
    public $title = "Sản phẩm";
    public function configs()
    {
        $defaultListingConfigs = parent::defaultListingConfigs();

        $listingConfigs = array(
           
            array(
                'field' => 'name',
                'name' => 'Tên sản phẩm',
                'type' => 'text',
                'filter' => 'like',
                'listing' => true,
                'editing' => true,
                'validate' => 'required|max:100'
            ),
            
            array(
                'field' => 'image',
                'name' => 'Ảnh sản phẩm',
                'type' => 'image',
                'listing' => true,
                'editing' => true
            ),

            array(
                'field' => 'quantity',
                'name' => 'Số lượng sản phẩm',
                'type' => 'number',
                'filter' => 'equal',
                'listing' => true,
                'editing' => true,
                'validate' => 'required|Numeric'
            ),
            array(
                'field' => 'price',
                'name' => 'Giá sản phẩm',
                'type' => 'number',
                'filter' => 'between',
                'listing' => true,
                'editing' => true,
                'validate' => 'required|Numeric'
            ),
            // array(
            //     'field' => "count_buy",
            //     'name' => "count buy",
            //     'type' => 'text',
            //     'listing' => false,
            //     'editing' => false
            // ),
            // array(
            //     'field' => "content",
            //     'name' => "content",
            //     'type' => 'text',
            //     'listing' => true,
            //     'editing' => true
            // )


        );





        return array_merge($listingConfigs, $defaultListingConfigs);

    }
    */
}
