# colaphp-session

版本^1.0

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