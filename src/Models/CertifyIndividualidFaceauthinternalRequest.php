<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASPLUS\Models;

use AlibabaCloud\Tea\Model;

class CertifyIndividualidFaceauthinternalRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 回调通知地址
    /**
     * @var string
     */
    public $callbackUrl;

    // 认证的唯一性id
    //
    /**
     * @var string
     */
    public $certifyId;

    // 认证完成后回跳地址
    /**
     * @var string
     */
    public $redirectUrl;

    // 内部字段
    /**
     * @var BizInfo
     */
    public $bizInfo;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'callbackUrl'       => 'callback_url',
        'certifyId'         => 'certify_id',
        'redirectUrl'       => 'redirect_url',
        'bizInfo'           => 'biz_info',
    ];

    public function validate()
    {
        Model::validateRequired('certifyId', $this->certifyId, true);
        Model::validateRequired('bizInfo', $this->bizInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->callbackUrl) {
            $res['callback_url'] = $this->callbackUrl;
        }
        if (null !== $this->certifyId) {
            $res['certify_id'] = $this->certifyId;
        }
        if (null !== $this->redirectUrl) {
            $res['redirect_url'] = $this->redirectUrl;
        }
        if (null !== $this->bizInfo) {
            $res['biz_info'] = null !== $this->bizInfo ? $this->bizInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertifyIndividualidFaceauthinternalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['callback_url'])) {
            $model->callbackUrl = $map['callback_url'];
        }
        if (isset($map['certify_id'])) {
            $model->certifyId = $map['certify_id'];
        }
        if (isset($map['redirect_url'])) {
            $model->redirectUrl = $map['redirect_url'];
        }
        if (isset($map['biz_info'])) {
            $model->bizInfo = BizInfo::fromMap($map['biz_info']);
        }

        return $model;
    }
}
