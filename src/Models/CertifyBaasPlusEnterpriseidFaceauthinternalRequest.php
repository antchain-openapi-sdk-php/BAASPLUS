<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\BAASPLUS\Models;

use AlibabaCloud\Tea\Model;

use AntChain\BAASPLUS\Models\BizInfo;

class CertifyBaasPlusEnterpriseidFaceauthinternalRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'regionName' => 'region_name',
        'bizInfo' => 'biz_info',
        'bizNo' => 'biz_no',
        'callbackUrl' => 'callback_url',
        'redirectUrl' => 'redirect_url',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->regionName) {
            $res['region_name'] = $this->regionName;
        }
        if (null !== $this->bizInfo) {
            $res['biz_info'] = null !== $this->bizInfo ? $this->bizInfo->toMap() : null;
        }
        if (null !== $this->bizNo) {
            $res['biz_no'] = $this->bizNo;
        }
        if (null !== $this->callbackUrl) {
            $res['callback_url'] = $this->callbackUrl;
        }
        if (null !== $this->redirectUrl) {
            $res['redirect_url'] = $this->redirectUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CertifyBaasPlusEnterpriseidFaceauthinternalRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['product_instance_id'])){
            $model->productInstanceId = $map['product_instance_id'];
        }
        if(isset($map['region_name'])){
            $model->regionName = $map['region_name'];
        }
        if(isset($map['biz_info'])){
            $model->bizInfo = BizInfo::fromMap($map['biz_info']);
        }
        if(isset($map['biz_no'])){
            $model->bizNo = $map['biz_no'];
        }
        if(isset($map['callback_url'])){
            $model->callbackUrl = $map['callback_url'];
        }
        if(isset($map['redirect_url'])){
            $model->redirectUrl = $map['redirect_url'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    /**
     * @var string
     */
    public $regionName;

    // 内部字段
    /**
     * @var BizInfo
     */
    public $bizInfo;

    // 认证的唯一性标示
    /**
     * @var string
     */
    public $bizNo;

    // 回调通知地址
    // 
    /**
     * @var string
     */
    public $callbackUrl;

    // https://www.example.com/redircet
    /**
     * @var string
     */
    public $redirectUrl;

}
