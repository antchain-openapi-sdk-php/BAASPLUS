<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASPLUS\Models;

use AlibabaCloud\Tea\Model;

class QueryEverifyFourmetaResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 0:核验成功
    // 1:企业信息有误
    // 2:企业非正常营业
    /**
     * @var string
     */
    public $code;

    // 企业经营状态
    /**
     * @var string
     */
    public $enterpriseStatus;

    // 营业期限
    /**
     * @var string
     */
    public $openTime;

    // 认证是否通过
    /**
     * @var bool
     */
    public $passed;

    // resultCode=0，核验一致
    // resultCode=1，核验不一致（人企核验不一致）
    // resultCode=2，库无（人在库中不存在，无法校验）
    // resultCode=3，企业二要素核验不通过
    // resultCode=4，查无企业，无法校验（此场景属于三要素核验）
    /**
     * @var string
     */
    public $returnCode;

    // 核验不一致的原因编码
    /**
     * @var string
     */
    public $reasonCode;

    // 法人姓名：1，2，3
    /**
     * @var string
     */
    public $legalName;

    // 法人姓名：1.一致 2.不一致 3.无法验证
    /**
     * @var string
     */
    public $legalNameMsg;

    // 1.一致 2.不一致 3.无法验证
    /**
     * @var string
     */
    public $legalIdNo;

    // 法人身份证号：1.一致 2.不一致 3.无法核验
    /**
     * @var string
     */
    public $legalIdNoMsg;

    // 企业名称 1.一致 2.不一致 3.无法验证
    /**
     * @var string
     */
    public $entName;

    // 企业名称 1.一致 2.不一致 3.无法验证
    /**
     * @var string
     */
    public $entNameMsg;

    // 社会统一信用代码/注册号： 1.一致 2.不一致 3.无法验证
    /**
     * @var string
     */
    public $regNo;

    // 社会统一信用代码/注册号： 1.一致 2.不一致 3.无法验证
    /**
     * @var string
     */
    public $regNoMsg;
    protected $_name = [
        'reqMsgId'         => 'req_msg_id',
        'resultCode'       => 'result_code',
        'resultMsg'        => 'result_msg',
        'code'             => 'code',
        'enterpriseStatus' => 'enterprise_status',
        'openTime'         => 'open_time',
        'passed'           => 'passed',
        'returnCode'       => 'return_code',
        'reasonCode'       => 'reason_code',
        'legalName'        => 'legal_name',
        'legalNameMsg'     => 'legal_name_msg',
        'legalIdNo'        => 'legal_id_no',
        'legalIdNoMsg'     => 'legal_id_no_msg',
        'entName'          => 'ent_name',
        'entNameMsg'       => 'ent_name_msg',
        'regNo'            => 'reg_no',
        'regNoMsg'         => 'reg_no_msg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->enterpriseStatus) {
            $res['enterprise_status'] = $this->enterpriseStatus;
        }
        if (null !== $this->openTime) {
            $res['open_time'] = $this->openTime;
        }
        if (null !== $this->passed) {
            $res['passed'] = $this->passed;
        }
        if (null !== $this->returnCode) {
            $res['return_code'] = $this->returnCode;
        }
        if (null !== $this->reasonCode) {
            $res['reason_code'] = $this->reasonCode;
        }
        if (null !== $this->legalName) {
            $res['legal_name'] = $this->legalName;
        }
        if (null !== $this->legalNameMsg) {
            $res['legal_name_msg'] = $this->legalNameMsg;
        }
        if (null !== $this->legalIdNo) {
            $res['legal_id_no'] = $this->legalIdNo;
        }
        if (null !== $this->legalIdNoMsg) {
            $res['legal_id_no_msg'] = $this->legalIdNoMsg;
        }
        if (null !== $this->entName) {
            $res['ent_name'] = $this->entName;
        }
        if (null !== $this->entNameMsg) {
            $res['ent_name_msg'] = $this->entNameMsg;
        }
        if (null !== $this->regNo) {
            $res['reg_no'] = $this->regNo;
        }
        if (null !== $this->regNoMsg) {
            $res['reg_no_msg'] = $this->regNoMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEverifyFourmetaResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['enterprise_status'])) {
            $model->enterpriseStatus = $map['enterprise_status'];
        }
        if (isset($map['open_time'])) {
            $model->openTime = $map['open_time'];
        }
        if (isset($map['passed'])) {
            $model->passed = $map['passed'];
        }
        if (isset($map['return_code'])) {
            $model->returnCode = $map['return_code'];
        }
        if (isset($map['reason_code'])) {
            $model->reasonCode = $map['reason_code'];
        }
        if (isset($map['legal_name'])) {
            $model->legalName = $map['legal_name'];
        }
        if (isset($map['legal_name_msg'])) {
            $model->legalNameMsg = $map['legal_name_msg'];
        }
        if (isset($map['legal_id_no'])) {
            $model->legalIdNo = $map['legal_id_no'];
        }
        if (isset($map['legal_id_no_msg'])) {
            $model->legalIdNoMsg = $map['legal_id_no_msg'];
        }
        if (isset($map['ent_name'])) {
            $model->entName = $map['ent_name'];
        }
        if (isset($map['ent_name_msg'])) {
            $model->entNameMsg = $map['ent_name_msg'];
        }
        if (isset($map['reg_no'])) {
            $model->regNo = $map['reg_no'];
        }
        if (isset($map['reg_no_msg'])) {
            $model->regNoMsg = $map['reg_no_msg'];
        }

        return $model;
    }
}
