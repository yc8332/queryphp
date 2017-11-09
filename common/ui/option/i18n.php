<?php
// ©2017 http://your.domain.com All rights reserved.

/**
 * 国际化默认配置文件
 *
 * @author Name Your <your@mail.com>
 * @package $$
 * @since 2016.11.19
 * @version 1.0
 */
return [ 
        
        /**
         * ---------------------------------------------------------------
         * 是否开启语言包
         * ---------------------------------------------------------------
         *
         * 如果你的项目需要多语言请设置为 true，否则设置为 false
         */
        'on' => true,
        
        /**
         * ---------------------------------------------------------------
         * 语言切换 cookie key 是否包含 app_name
         * ---------------------------------------------------------------
         *
         * 如果你需要不同的 app 实现不同的语言切换，可以设置为 true
         * 否则所有的 app 的语言切换都采用相同的 key
         */
        'cookie_app' => false,
        
        /**
         * ---------------------------------------------------------------
         * 是否允许切换语言包
         * ---------------------------------------------------------------
         *
         * 基于 cookie 实现语言切换
         */
        'switch' => true,
        
        /**
         * ---------------------------------------------------------------
         * 当前语言环境
         * ---------------------------------------------------------------
         *
         * 根据面向的客户设置当前的软件的语言
         */
        'default' => 'zh-cn',
        
        /**
         * ---------------------------------------------------------------
         * 当前开发语言环境
         * ---------------------------------------------------------------
         *
         * 如果为当前开发语言则不载入语言包直接返回
         */
        'develop' => 'zh-cn',
        
        /**
         * ---------------------------------------------------------------
         * 自动侦测语言
         * ---------------------------------------------------------------
         *
         * 系统会根据当前运行上下文自动分析需要的语言
         */
        'auto_accept' => true,
        
        /**
         * ---------------------------------------------------------------
         * 语言包扩展
         * ---------------------------------------------------------------
         *
         * 扩展语言包对应的目录，string or array
         * see mvc\application::getI18nDir
         */
        'extend' => [ ] 
]; 