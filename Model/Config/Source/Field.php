<?php

namespace AV\FeedGenerator2\Model\Config\Source;

class Field implements \Magento\Framework\Option\ArrayInterface
{
    /*
    *   Add field(s) to csv feed with configuration
    */

    public function toOptionArray()
    {
        return [
            ['value' => 'link', 'label' => __('Product URL')],
            ['value' => 'title', 'label' => __('Product Title')],
            ['value' => 'description', 'label' => __('Product Description')],
            ['value' => 'price', 'label' => __('Price inkl. Tax')],
            ['value' => 'id', 'label' => __('SKU')],
            ['value' => 'image_link', 'label' => __('Product Image')],
            ['value' => 'product_category', 'label' => __('Product Category')],
            ['value' => 'delivery_cost', 'label' => __('Delivery Cost')],
            ['value' => 'brand', 'label' => __('Brand')],
            ['value' => 'availability', 'label' => __('In Stock')],
            ['value' => 'condition', 'label' => __('Condition')]
        ];
    }
}
