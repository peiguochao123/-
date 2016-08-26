<?php
return array(
	/* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'jnhs',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => '',          // 密码
    'DB_PORT'               => '3306',        // 端口
    'DB_PREFIX'             => '',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    => false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       => false,        // 启用字段缓存
    'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        => false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         => 1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           => '', // 指定从服务器序号
    'DB_SQL_BUILD_CACHE'    => false, // 数据库查询的SQL创建缓存
    'DB_SQL_BUILD_QUEUE'    => 'file',   // SQL缓存队列的缓存方式 支持 file xcache和apc
    'DB_SQL_BUILD_LENGTH'   => 20, // SQL缓存的队列长度
    'DB_SQL_LOG'            => false, // SQL执行日志记录
	'DB_DEBUG'              =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	/* 错误设置 */
	'ERROR_MESSAGE'         =>  '页面错误！请稍后再试～',//错误显示信息,非调试模式有效
	'ERROR_PAGE'            =>  '',	// 错误定向页面
	'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息
	'TRACE_MAX_RECORD'      =>  100,    // 每个级别的错误信息 最大记录数
	
	/* 模板引擎设置 */
	'TMPL_CONTENT_TYPE'     =>  'text/html', // 默认模板输出类型
	'TMPL_ACTION_ERROR'     =>  'Public:success', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS'   =>  'Public:success', // 默认成功跳转对应的模板文件
	'TMPL_EXCEPTION_FILE'   =>  THINK_PATH.'Tpl/think_exception.tpl',// 异常页面的模板文件
	'TMPL_DETECT_THEME'     =>  false,       // 自动侦测模板主题
	'TMPL_TEMPLATE_SUFFIX'  =>  '.html',     // 默认模板文件后缀
	'TMPL_FILE_DEPR'        =>  '/', //模板文件CONTROLLER_NAME与ACTION_NAME之间的分割符
	
	'SHOW_PAGE_TRACE'      =>true,
);
?>