<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Tea\Model;

class GetSymUploadParamRequest extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileType;
    protected $_name = [
        'appVersion'   => 'appVersion',
        'dataSourceId' => 'dataSourceId',
        'fileName'     => 'fileName',
        'fileType'     => 'fileType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['appVersion'] = $this->appVersion;
        }
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSymUploadParamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appVersion'])) {
            $model->appVersion = $map['appVersion'];
        }
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        return $model;
    }
}
