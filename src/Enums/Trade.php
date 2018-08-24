<?php
/**
 * Created by PhpStorm.
 * User: stevin
 * Date: 2018/8/24
 * Time: 上午10:41
 */
namespace Youzan\SDK\Enums;

/**
 *
 *
 * Class      Trade
 *
 * @license   MIT
 * @resource  Trade
 * @package   Youzan\SDK\Enums
 * @author    Stevin.john
 * @email     stevin.john@qq.com
 */
class Trade
{
    const ORDER_STATUS_TRADE_NO_CREATE_PAY          = 'TRADE_NO_CREATE_PAY';

    const ORDER_STATUS_WAIT_BUYER_PAY               = 'WAIT_BUYER_PAY';

    const ORDER_STATUS_WAIT_PAY_RETURN              = 'WAIT_PAY_RETURN';

    const ORDER_STATUS_WAIT_GROUP                   = 'WAIT_GROUP';

    const ORDER_STATUS_WAIT_SELLER_SEND_GOODS       = 'WAIT_SELLER_SEND_GOODS';

    const ORDER_STATUS_WAIT_BUYER_CONFIRM_GOODS     = 'WAIT_BUYER_CONFIRM_GOODS';

    const ORDER_STATUS_TRADE_BUYER_SIGNED           = 'TRADE_BUYER_SIGNED';

    const ORDER_STATUS_TRADE_CLOSED                 = 'TRADE_CLOSED';

    /**
     * @var array
     */
    public static $orderStatusMap = [
        self::ORDER_STATUS_TRADE_NO_CREATE_PAY          => '没有创建支付交易',
        self::ORDER_STATUS_WAIT_BUYER_PAY               => '等待买家付款',
        self::ORDER_STATUS_WAIT_PAY_RETURN              => '等待支付确认',
        self::ORDER_STATUS_WAIT_GROUP                   => '等待成团，即:买家已付款，等待成团',
        self::ORDER_STATUS_WAIT_SELLER_SEND_GOODS       => '等待卖家发货，即:买家已付款',
        self::ORDER_STATUS_WAIT_BUYER_CONFIRM_GOODS     => '等待买家确认收货，即:卖家已发货',
        self::ORDER_STATUS_TRADE_BUYER_SIGNED           => '买家已签收',
        self::ORDER_STATUS_TRADE_CLOSED                 => '付款以后用户退款成功，交易自动关',
    ];

}