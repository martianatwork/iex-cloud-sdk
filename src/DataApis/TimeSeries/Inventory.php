<?php

namespace Digitonic\IexCloudSdk\DataApis\TimeSeries;

use Digitonic\IexCloudSdk\Contracts\IEXCloud;
use Digitonic\IexCloudSdk\Requests\BaseGet;

class Inventory extends BaseGet
{
    const ENDPOINT = 'time-series';

    /**
     * Create constructor.
     *
     * @param  IEXCloud  $api
     */
    public function __construct(IEXCloud $api)
    {
        parent::__construct($api);
    }
}
