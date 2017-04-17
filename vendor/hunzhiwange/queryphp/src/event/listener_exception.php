<?php
/*
 * [$QueryPHP] A PHP Framework Since 2010.10.03. <Query Yet Simple>
 * ©2010-2017 http://queryphp.com All rights reserved.
 * 
 * ##########################################################
 * #   ____                          ______  _   _ ______   #
 * #  /     \       ___  _ __  _   _ | ___ \| | | || ___ \  # 
 * # |   (  ||(_)| / _ \| '__|| | | || |_/ /| |_| || |_/ /  #
 * #  \____/ |___||  __/| |   | |_| ||  __/ |  _  ||  __/   #
 * #       \__   | \___ |_|    \__  || |    | | | || |      #
 * #     Query Yet Simple      __/  |\_|    |_| |_|\_|      #
 * #                          |___ /  Since 2010.10.03      #
 * ##########################################################
 * 
 * @author Xiangmin Liu<635750556@qq.com>
 * @version $$
 * @date 2017.04.17
 * @since 4.0
 */
namespace Q\event;

/**
 * 事件监听器异常捕获
 *
 * @author Xiangmin Liu
 */
class listener_exception extends \Q\exception\exception {
    
    /**
     * 构造函数
     *
     * @param string $sMessage            
     * @param number $nCode            
     * @return void
     */
    public function __construct($sMessage, $nCode = 0) {
        parent::__construct ( $sMessage, $nCode );
    }
}
