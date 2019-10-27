<?php

namespace Src\Components;

class Widgets
{
    /**
     * Get Packs - Get quantity of packs according total
     * @param int $total  Number of widgets
     * @return string $output  Description of widget packs
     */
    public function getPacks($total)
    {
        if(!$total || $total < 0){
            return false;
        }
        
        $list = array();
        $widgetPacks = $this->getWidgetPacks();
        rsort($widgetPacks);

        $list = $this->countPacksByTotal($total, $widgetPacks);

        // Prepare string to show in the format NNNxN, NNNxN, NNNxN
        $output = implode(', ', array_map(
            function ($v, $k) { return sprintf("%sx%s", $k, $v); },
            $list,
            array_keys($list)
        ));

        return $output;
    }

    /**
     * Count packs by total - Responsible to share the widgets between packs
     * @param int $total  Number of widgets
     * @param array $widgetPacks  Pack sizes
     * @return array $list  
     */
    private function countPacksByTotal($total, $widgetPacks)
    {
        $list = array();
        for($i = $total; $i > 0 ; $i--) { 
            foreach($widgetPacks as $pack) {
                if($total >= $pack){
                    $list[$pack]++;
                    $total -= $pack;
                    break;
                }
            }    
        }

        // Check if have more itens. If true, increment in the smaller pack
        if($total > 0 && $total < end($widgetPacks)){
            $list[end($widgetPacks)]++;
        }

        return $list;
    }

    /**
     * Get Widget Packs - Pack sizes avaliable
     * @return array  All pack sizes avaliable.
     */
    private function getWidgetPacks()
    {
        return array(
            250,
            500,
            1000,
            2000,
            5000
        );
    }
}