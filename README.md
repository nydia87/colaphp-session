# colaphp-session

## 概述

session 库

## 使用

```php
//配置文件。type驱动 支持Redis|Memcache对应添加host、port即可
$config =  [
    'id'             => '',
    'var_session_id' => '',
    'prefix'         => 'ColaPHP',
    'type'           => '',
    'auto_start'     => true,
];

//使用助手函数
session($config);

session('name','hello');

$value = session('name');
```

## 更新说明

|    版本   |    更新日期   |    说明              |
|:---------|:------------:|:---------------------|
| v1.1.0   |  2026.06.20  | 格式化代码            |
| v1.0.0   |  2021.08.20  | 基本功能              |