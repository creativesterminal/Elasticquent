<?php

namespace Elasticquent;

class ElasticquentSupport
{
    use ElasticquentClientTrait;

    public static function isLaravel5()
    {
        return true;
    }
}
