<?php

namespace NiuGengYun\EasyTBK\SuNing;

class RequestCheckUtil
{
    /**
     * 校验字段fieldName的值$value非空
     */
    public static function checkNotNull($value, $fieldName)
    {
        if (self::checkEmpty($value)) {
            throw new Exception("client-check-error:Missing Required Arguments:{$fieldName}", 40);
        }
    }

    /**
     * 校验数组fieldName的值非空
     */
    public static function checkNotNullInItemList($ItemList, $fieldName)
    {
        if (!is_array($ItemList) || empty($ItemList)) {
            return;
        }

        foreach ($ItemList as $v) {
            if (self::checkEmpty($v)) {
                throw new Exception("client-check-error:Missing Required Arguments:{$fieldName}.", 40);
            }
        }
    }

    /**
     * 检验字段fieldName的值value的长度
     */
    public static function checkMaxLength($value, $maxLength, $fieldName)
    {
        if (!self::checkEmpty($value) && mb_strlen($value, "UTF-8") > $maxLength) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 41);
        }
    }

    /**
     * 检验字段fieldName的值value的最大列表长度
     */
    public static function checkMaxListSize($value, $maxSize, $fieldName)
    {

        if (self::checkEmpty($value)) {
            return;
        }

        $list = preg_split("/,/", $value);
        if (count($list) > $maxSize) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 41);
        }
    }

    /**
     * 检验字段fieldName的值value 的最大值
     */
    public static function checkMaxValue($value, $maxValue, $fieldName)
    {

        if (self::checkEmpty($value)) {
            return;
        }

        self::checkNumeric($value, $fieldName);

        if ($value > $maxValue) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 41);
        }
    }

    /**
     * 检验字段fieldName的值value 的最小值
     */
    public static function checkMinValue($value, $minValue, $fieldName)
    {

        if (self::checkEmpty($value)) {
            return;
        }

        self::checkNumeric($value, $fieldName);

        if ($value < $minValue) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 41);
        }
    }

    /**
     * 检验字段fieldName的值value 的值是否手机号
     */
    public static function checkPhoneValue($value, $fieldName)
    {
        if (!preg_match("/1[3458]{1}\d{9}$/", $value)) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 41);
        }
    }

    /**
     * 检验字段fieldName的值value 的值是否在itemList中
     */
    public static function checkValueInItemList($value, $itemList, $fieldName)
    {

        if (self::checkEmpty($value)) {
            return;
        }

        if (!in_array($value, $itemList)) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 41);
        }
    }

    /**
     * 检验字段fieldName的值value是否是number
     */
    public static function checkNumeric($value, $fieldName)
    {
        if (!is_numeric($value)) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 41);
        }
    }

    /**
     * 检验字段fieldName的值value是否是金额类型的值(默认保留小数点后2位)
     */
    public static function checkFormatNumber($value, $fieldName, $len = 2)
    {
        if (!preg_match('/^\d+\.\d{' . $len . '}$/', $value)) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 41);
        }
    }

    /**
     * 检验字段fieldName的值value日期格式(默认$type=1即YYYY-MM-DD)
     */
    public static function checkDateValue($value, $fieldName, $type = 1, $compare = true)
    {
        if ($type == 1) {
            $pattern = '/^(\d{4})-(\d{2})-(\d{2})$/';
            $currDate = date('Y-m-d');
        } else if ($type == 2) {
            $pattern = '/^(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})$/';
            $currDate = date('Y-m-d H:i:s');
        }

        $result = preg_match($pattern, $value) ? true : false;
        return $result;
    }

    /**
     * 检验图片格式
     */
    public static function checkPicExt($type, $ext = array('jpg', 'gif', 'bmp', 'jpeg'))
    {
        if (!in_array($type, $ext)) {
            throw new Exception("client-check-error:Invalid Picture extension.", 41);
        }
    }

    /**
     * 检验字段fieldName的值value是否是邮编
     */
    public static function checkZipValue($value, $fieldName)
    {
        if (!preg_match('/^\d{6}$/', $value)) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 41);
        }
    }

    /**
     * 校验value是否非空
     *  if not set ,return true;
     *    if is null , return true;
     */
    public static function checkEmpty($value)
    {
        if (!isset($value)) {
            return true;
        }
        if ($value === null) {
            return true;
        }
        if (trim($value) === "") {
            return true;
        }
        return false;
    }

    /**
     * 校验是否为正整数
     * @param unknown $value
     * @param unknown $fieldName
     * @throws Exception
     */
    public static function checkPositiveInteger($value, $fieldName)
    {
        if (self::checkEmpty($value)) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 40);
        }
        if (!preg_match('/^-?\d+$/', $value) && $value > 0) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName}.", 41);
        }
    }

    /**
     * 开始结束日期校验
     * @param unknown $start
     * @param unknown $end
     * @throws Exception
     */
    public static function checkDateCompare($start, $end)
    {
        if (strtotime($end) < strtotime($start)) {
            throw new Exception("client-check-error:Invalid Arguments:date compare .", 41);
        }
    }

    /**
     * 开始结束日期差是否超出限制，天为单位
     * @param unknown $start
     * @param unknown $end
     * @throws Exception
     */
    public static function checkDateT($start, $end, $maxDate)
    {
        $date = strtotime($end) - strtotime($start);
        $max = 86400 * $maxDate;
        if ($date > $max) {
            throw new Exception("client-check-error:Invalid Arguments:DateT .", 41);
        }
    }

    /**
     * 检查日期格式 yyyy-MM-dd HH:mm：ss
     * @param unknown $value
     * @param unknown $fieldName
     * @throws Exception
     */
    public static function checkDate($value, $fieldName)
    {
        $pattern = '/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/s';
        if (!preg_match($pattern, $value) || !strtotime($value)) {
            throw new Exception("client-check-error:Invalid Arguments:{$fieldName} .", 41);
        }
    }

    /**
     * 判断数组中的数组必有一个不为空
     * @param unknown $array
     * @throws Exception
     */
    public static function checkArrayAllNull($array)
    {
        if (!is_array($array) || empty($array)) {
            throw new Exception("client-check-error:Invalid Arguments:All null .", 41);
        }
        $b = false;
        foreach ($array as $v) {
            if (is_array($v) && !empty($v)) {
                $b = true;
                break;
            }
        }
        if (!$b) {
            throw new Exception("client-check-error:Invalid Arguments:All null .", 41);
        }
    }
}

?>