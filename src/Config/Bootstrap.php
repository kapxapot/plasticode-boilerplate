<?php

namespace App\Config;

use Plasticode\Config\Bootstrap as BootstrapBase;

class Bootstrap extends BootstrapBase
{
    /**
     * Get mappings for DI container.
     *
     * @return array
     */
    public function getMappings() : array
    {
        $mappings = parent::getMappings();
        
        return array_merge(
            $mappings,
            [
                // $c == $container
                
                // handlers
                
                'notFoundHandler' => function ($c) {
                    return new \App\Handlers\NotFoundHandler($c);
                },
            ]
        );
    }
}
