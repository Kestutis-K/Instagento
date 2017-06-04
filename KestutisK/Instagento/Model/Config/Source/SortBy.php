<?php

namespace KestutisK\Instagento\Model\Config\Source;

class SortBy implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value'=>'none', 'label'=>'Default as Instagram provides'],
            ['value'=>'most-recent', 'label'=>'Newest to oldest'],
            ['value'=>'least-recent', 'label'=>'Oldest to newest'],
            ['value'=>'most-liked', 'label'=>'Highest # of likes to lowest'],
            ['value'=>'least-liked', 'label'=>'Lowest # likes to highest'],
            ['value'=>'most-commented', 'label'=>'Highest # of comments to lowest'],
            ['value'=>'least-commented', 'label'=>'Lowest # of comments to highest'],
            ['value'=>'random', 'label'=>'Random order'],
        ];
    }
}

?>