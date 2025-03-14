# 简介
## 开发中。。。。
一个简单,好用的友盟open-api的包...
封装了友盟官方open-api的sdk, 官方sdk版本1.1.4
基于：[roiwk/UmengOpenAPI](https://github.com/roiwk/UmengOpenAPI) 改动，处理PHP7.4兼容性问题，感谢原作者~

> [umeng官方文档](https://developer.umeng.com/open-api/state)

## 安装

```shell
composer require wcracker/umeng-open-api
```

## 快速使用

例子: 获取应用的累计用户数
[此示例的umeng文档](https://developer.umeng.com/open-api/docs/com.umeng.umini/umeng.umini.getTotalUser/1)

```php

require_once 'path/to/autoload.php';

use Wcracker\UmengOpenAPI\Factory;

$app = Factory::umini([
    'api_key'       => 'your key',
    'api_secret'    => 'your secret',
    'app_key'       => 'your APPKEY',
    // 指定 API 调用返回结果的类型：json(default)/array/object/raw(resultObject)
    'response_type' => 'json',
]);

// 参数1:api名 (com.umeng.umini:umeng.umini.getTotalUser-1, 传"getTotalUser" 即可)
// 参数2: 请求参数数组
$app->get('getTotalUser', [
    'fromDate'  => '2020-11-01',
    'toDate'    => '2020-11-01',
    'pageIndex' => 1,
    'pageSize'  => 10,
]);
```

## 项目缘由

友盟官方的sdk, 在已有的composer项目中,用起来很不方便, 所以封装一个用.

## 贡献

欢迎提交PR

## 开源许可协议

 [MIT LICENSE](./LICENSE)
