<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class EstimateMonocularImageDepthAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EstimateMonocularImageDepthAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        return $model;
    }
}
