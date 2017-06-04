<?php

namespace KestutisK\Instagento\Model\Config\Source;

class ImageResolution implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return
            [
                ['value'=>'thumbnail', 'label'=>'Thumbnail 150x150'],
                ['value'=>'low_resolution', 'label'=>'Low resolution 306x306'],
                ['value'=>'standard_resolution', 'label'=>'Standard resolution 612x612']
            ];
    }
}

?>