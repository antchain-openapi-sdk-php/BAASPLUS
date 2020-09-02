<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\BAASPLUS\Models;

use AlibabaCloud\Tea\Model;

class QueryBaasPlusBaicorpInternalevaluationasyncResponse extends Model {
    protected $_name = [
        'reqMsgId' => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'customId' => 'custom_id',
        'riskResult' => 'risk_result',
        'riskResultDesc' => 'risk_result_desc',
        'taskId' => 'task_id',
    ];
    public function validate() {}
    public function toMap() {
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
        if (null !== $this->customId) {
            $res['custom_id'] = $this->customId;
        }
        if (null !== $this->riskResult) {
            $res['risk_result'] = $this->riskResult;
        }
        if (null !== $this->riskResultDesc) {
            $res['risk_result_desc'] = $this->riskResultDesc;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryBaasPlusBaicorpInternalevaluationasyncResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['req_msg_id'])){
            $model->reqMsgId = $map['req_msg_id'];
        }
        if(isset($map['result_code'])){
            $model->resultCode = $map['result_code'];
        }
        if(isset($map['result_msg'])){
            $model->resultMsg = $map['result_msg'];
        }
        if(isset($map['custom_id'])){
            $model->customId = $map['custom_id'];
        }
        if(isset($map['risk_result'])){
            $model->riskResult = $map['risk_result'];
        }
        if(isset($map['risk_result_desc'])){
            $model->riskResultDesc = $map['risk_result_desc'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $reqMsgId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMsg;

    // 业务自定义id
    /**
     * @var string
     */
    public $customId;

    // 风险识别结果
    /**
     * @var string
     */
    public $riskResult;

    // 风险识别结果描述
    /**
     * @var string
     */
    public $riskResultDesc;

    // 监测任务ID
    /**
     * @var string
     */
    public $taskId;

}
