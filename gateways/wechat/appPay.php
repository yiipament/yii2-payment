<?php
/**
 * transferPay.php.
 * Author: MYL <ixiaomu@qq.com>
 * Date: 2018/1/29 17:54
 * Desctiption:  企业付款  （提现）
 */

namespace ixiaomu\payment\gateways\wechat;


use ixiaomu\payment\exceptions\PayException;
use ixiaomu\payment\gateways\Wechat;

class appPay extends Wechat
{
    /**
     * 应用并返回数据
     * Author : MYL <ixiaomu@qq.com>
     * Updater：
     * @param array $options
     * @return mixed
     * @throws PayException
     */
    public function apply(array $options = []){

        $data = $this->preOrder($options);
        
        return $data;
    }
}