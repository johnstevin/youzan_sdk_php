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

    /** order status for trade **/
    const ORDER_STATUS_TRADE_NO_CREATE_PAY          = 'TRADE_NO_CREATE_PAY';

    const ORDER_STATUS_WAIT_BUYER_PAY               = 'WAIT_BUYER_PAY';

    const ORDER_STATUS_WAIT_PAY_RETURN              = 'WAIT_PAY_RETURN';

    const ORDER_STATUS_WAIT_GROUP                   = 'WAIT_GROUP';

    const ORDER_STATUS_WAIT_SELLER_SEND_GOODS       = 'WAIT_SELLER_SEND_GOODS';

    const ORDER_STATUS_WAIT_BUYER_CONFIRM_GOODS     = 'WAIT_BUYER_CONFIRM_GOODS';

    const ORDER_STATUS_TRADE_BUYER_SIGNED           = 'TRADE_BUYER_SIGNED';

    const ORDER_STATUS_TRADE_CLOSED                 = 'TRADE_CLOSED';

    const ORDER_STATUS_TRADE_PAID                   = 'TRADE_PAID';

    /** refund for trade **/
    const PUSH_TYPE_TRADE_REFUND_SELLER_AGREE          = 'trade_refund_RefundSellerAgree';

    const PUSH_TYPE_TRADE_REFUND_BUYER_CREATED         = 'trade_refund_BuyerCreated';

    const PUSH_TYPE_TRADE_REFUND_SUCCESS               = 'trade_refund_RefundSuccess'; // 经测试确实为此，官方文档trade_TradeMemoModified有误

    /** push for trade **/
    const PUSH_TYPE_TRADE_CREATE                    = 'trade_TradeCreate';

    const PUSH_TYPE_TEADE_CLOSE                     = 'trade_TradeClose';

    const PUSH_TYPE_TRADE_SUCCESS                   = 'trade_TradeSuccess';

    const PUSH_TYPE_TRADE_PARTLYSELLERSHIP          = 'trade_TradePartlySellerShip';

    const PUSH_TYPE_TRADE_SELLERSHIP                = 'trade_TradeSellerShip';

    const PUSH_TYPE_TRADE_BUYERPAY                  = 'trade_TradePaid';

    const PUSH_TYPE_TRADE_MEMOMODIFIED              = 'trade_TradeMemoModified';

    /** PAY TYPE **/
    const ORDER_PAY_TYPE_DEFAULT                    = 0;

    const ORDER_PAY_TYPE_WEIXIN_ZIYOU           = 0;

    const ORDER_PAY_TYPE_ALIPAY_WAP           = 0;

    // todo ...

        /*
         * 支付类型
         * 0:默认值,未支付; 1:微信自有支付; 2:支付宝wap; 3:支付宝wap; 5:财付通; 7:代付; 8:联动优势; 9:货到付款; 10:大账号代销;
         * 11:受理模式; 12:百付宝; 13:sdk支付; 14:合并付货款; 15:赠品; 16:优惠兑换; 17:自动付货款; 18:爱学贷; 19:微信wap; 20:微信红包支付;
         * 21:返利; 22:ump红包; 24:易宝支付; 25:储值卡; 27:qq支付; 28:有赞E卡支付; 29:微信条码; 30:支付宝条码;
         * 33:礼品卡支付; 35:会员余额; 72:微信扫码二维码支付; 100:代收账户;
         * 300:储值账户; 400:保证金账户; 101:收款码; 102:微信; 103:支付宝; 104:刷卡; 105:二维码台卡; 106:储值卡; 107:有赞E卡; 110:标记收款-自有微信支付;
         * 111:标记收款-自有支付宝; 112:标记收款-自有POS刷卡; 113:通联刷卡支付; 200:记账账户; 201:现金
         * */

    /**
     * @var array
     */
    public static $pushTypeMap = [
        self::PUSH_TYPE_TRADE_CREATE        => '交易创建',
        self::PUSH_TYPE_TEADE_CLOSE         => '交易关闭',
        self::PUSH_TYPE_TRADE_SUCCESS       => '交易成功',
        self::PUSH_TYPE_TRADE_PARTLYSELLERSHIP  => '卖家部分发货',
        self::PUSH_TYPE_TRADE_SELLERSHIP        => '卖家发货',
        self::PUSH_TYPE_TRADE_BUYERPAY          => '买家付款',
        self::PUSH_TYPE_TRADE_MEMOMODIFIED      => '卖家修改交易备注',
    ];

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
        self::ORDER_STATUS_TRADE_PAID                   => '买家已支付',
    ];

    public static $refundStatusMap = [
        self::PUSH_TYPE_TRADE_REFUND_SELLER_AGREE              => '卖家同意退款（终态）',
        self::PUSH_TYPE_TRADE_REFUND_BUYER_CREATED             => '买家发起退款',
        self::PUSH_TYPE_TRADE_REFUND_SUCCESS                   => '买家退货成功（终态）',
    ];

    public static $payTypeMap = [
        0   =>'未支付',
        1   =>'微信自有支付',
        2   =>'支付宝wap',
        3   =>'支付宝wap',
        5   =>'财付通',
        7   =>'代付',
        8   =>'联动优势',
        9   =>'货到付款',
        10  =>'大账号代销',
        11  =>'受理模式',
        12  =>'百付宝',
        13  =>'sdk支付',
        14  =>'合并付货款',
        15  =>'赠品',
        16  =>'优惠兑换',
        17  =>'自动付货款',
        18  =>'爱学贷',
        19  =>'微信wap',
        20  =>'微信红包支付',
        21  =>'返利',
        22  =>'ump红包',
        24  =>'易宝支付',
        25  =>'储值卡',
        27  =>'qq支付',
        28  =>'有赞E卡支付',
        29  =>'微信条码',
        30  =>'支付宝条码',
        33  =>'礼品卡支付',
        35  =>'会员余额',
        72  =>'微信扫码二维码支付',
        100 =>'代收账户',
        300 =>'储值账户',
        400 =>'保证金账户',
        101 =>'收款码',
        102 =>'微信',
        103 =>'支付宝',
        104 =>'刷卡',
        105 =>'二维码台卡',
        106 =>'储值卡',
        107 =>'有赞E卡',
        110 =>'标记收款-自有微信支付',
        111 =>'标记收款-自有支付宝',
        112 =>'标记收款-自有POS刷卡',
        113 =>'通联刷卡支付',
        200 =>'记账账户',
        201 =>'现金',
    ];

}