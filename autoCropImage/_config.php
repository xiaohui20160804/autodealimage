<?php
/* 设置缩放图片目录 */
define('THUMB_DIR', ROOT_DIR . '/../thumb/%1$sx%2$s_mode%3$s/%5$s/%6$s'); // %1$s 宽, %2$s 高, %3$s 模式, %4$s 版本, %5$s 目录, %6$s 文件名

/* 默认模式
 * mode 1 : 固定大小缩略,图可能会有所变形
 * mode 2 : 等比例缩放
 * mode 3 : 缩放填充
 * mode 4 : 从左上角开始裁减指定宽高
 */
define('DEFAULT_MODE', 1);

/* 默认版本 */
define('DEFAULT_VERSIONS', 1);

/* 默认图片目录
 * 例如：
 * define('IMAGES_DIR', 'images/');
 * 设置后将可以：
 * 1. URL 减少使用路径 http://localhost/images/pic.jpg_50x100.jpg > http://localhost/pic.jpg_50x100.jpg
 * 2. URL 隐藏原大小图片路径
 */
define('IMAGES_DIR', 'images/');

/* header 缓存时长 */
define('HEADER_CACHE_TIME', '10 years');

