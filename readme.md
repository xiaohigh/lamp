# GitHub 工作流程

## 创建仓库
1. A 在本地创建仓库, 初始化. 提交仓库到远程
2. 将 B 开发者邀请进入仓库的合作者中.
3. B 克隆代码. `git clone .....`
4. B 提交代码 `git add .` `git commit` `git push` 
5. A B 第二天拉取代码. `git pull`. 

## PHP 不报错.
修改配置文件 php.ini (phpinfo 中的选项  `Loaded configuration file`)
`display_errors = On`


## PHP 扩展文件的后缀
1. windows  `.dll`
2. linux    `.so`

## PHP 多字节处理方案
```
http://php.net/mb_string
```

## PHP 扩展的安装命令
```
phpize
```

## laravel的安装命令
```
composer create-project laravel/laravel app --prefer-dist "5.5.*"
```
5.5 LTS  Long Term Support

## 7.0 安装 laravel 会报错. 选择  > 7.1.*

## localhost 是一个域名, 指向的ip地址是 127.0.0.1

## SEO Search Engine Optimization 搜索引擎优化

## 网址相关搜索
```
http://seo.chinaz.com
```

## 友链
```
https://www.51link.com/link-sell/
```

## index.php 不能省略的问题
1. 修改httpd.conf 配置.  allowOverride
2. `.htaccess`

## 模板引擎. 就是为了将 HTML(页面) 代码和 PHP(数据) 代码分离而产生的.
```
<?php
//
    $data = new PDO();
    $stat = $data->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php foreach() { ?> 
        <li>xxxx</li>
    <?php  } ?>
</body>
</html>
```


## eval 是一个函数
能将字符串内容进行代码解析,并运行

## 正则比较消耗资源. 

## webpack
是一个打包工具, 是一个软件. `https://www.webpackjs.com/`


## laravel 中模板文件的文件名后缀是 `.blade.php`

## 公益 404 页面
```
https://yibo.iyiyun.com/Home/Index/web404
```

## apache 区分不同的域名是通过 HTTP 请求中 Host 请求头.
laravel.learn  => laravel/public
lamp207.net    => thinkphp5\public

laravel.learn/app.css 

## 中文文档
```
https://laravel-china.org/docs/laravel/5.5
```


## 关于命名(文件,文件夹,变量,函数)
1. 尽量不要使用中文.
2. 尽量不要使用空格.

## laravel LTS 版本
5.1
5.5

## 修改 host 文件进行 IP 和域名的对应设置
在域名服务商的后台设置, 称之为 `域名解析`.

## 上线网站的基本流程
1. 域名解析 (lamp207.com  =>  10.20.30.40)
2. 指定IP的服务器下配置环境(安装 lamp)
3. 配置虚拟主机 (lamp207.com)

## 关于域名 (jd.com)  (t.tt)  (mi.com) 
com 
cn
net
com.cn
org
jp
net
我爱你
top
vip
中国

是否可以通过域名来识别出, 网站是用什么语言做的.  答案是``No`
```
www.a.com/index.asp
Route::get('/index.asp', function(){
    return 'asp ??????';
});
```

顶级域名    lamp207.com  baidu.com
二级域名    www.lamp207.com   y.qq.com  v.qq.com  mail.qq.com   www.baidu.com  
三级域名    a.b.lamp207.com  

## ngrok
是一个软件, 做内网映射.
```
https://ngrok.com/
```

使用流程
```
https://dashboard.ngrok.com/get-started
```

> 如果想在任意的文件夹下都能运行 ngrok 命令, 配置 PATH 环境变量

## Kernel 核心

## php artisan make:middleware LoginMiddleware
artisan 就是一个 PHP 文件. (think 跟他一样也是一个 PHP 文件)

## 关于命名
类名    LoveYou
方法名  loveYou

## 关于视频剪辑
1. AE  
2. Sony Vagas

## laravel POST 表单中必填的一个内容
```
// 就是一个函数. 作用是生产一个具有随机值的隐藏域
{{csrf_field()}}
```

## 路由别名 就好比是 小名

## 资源控制器


### 操作
1. 创建资源控制器
```
php artisan make:controller TieziController --resource
```

2. 创建路由规则
```
//web.php
Route::resource('Tiezi','TieziController');
```

3. 路由规律
```
GET         /tiezi                 index      tiezi.index
GET         /tiezi/create          create     tiezi.create
POST        /tiezi                 store      tiezi.store
GET         /tiezi/{id}            show       tiezi.show
GET         /tiezi/{id}/edit       edit       tiezi.edit
PUT/PATCH   /tiezi/{id}            update     tiezi.update
DELETE      /tiezi/{id}            destroy    tiezi.destroy
```

## ln 命令创建链接

## 文件上传
修改文件上传的目录
1. 编辑 `config/filesystems.php`
```
'local' => [
    'driver' => 'local',
    'root' => public_path(),
],
```


## 命名空间
```
\Cookie  代表的是根空间
```

## PHP 原生设置 cookie 的方式
```
setcookie('name','guanhui', time() + 3600, '/');
```
> 时间单位是 秒钟


## Laravel 框架中 cookie 的设置
```
\Cookie::queue('name-2','zhifeng', 10);
```
> 时间单位是 分钟


## laravel return back();
回退到上一个页面

## 闪存应用场景
1. 信息提醒(操作成功或者失败)
2. 关于表单数据的保存.

## 操作
```php
//写入
\Session::flash('name','value');

//跳转写入
return redirect('/home')->with('name','value');
return back()->with('name','value');

//表单数据的写入
return back()->withInput();

//读取
\Session::get('name');

//检测
\Session::has('name');

```

## 关于 json
1. ajax 请求返回
2. app 接口

## 解析 JSON
JS
```js
JSON.parse('{"name":"xiaohigh","age":32}');
$.parseJSON('{"name":"xiaohigh","age":32}');
```

PHP
```php
$arr = json_decode('{"name":"xiaohigh","age":32}', true);
```

## 事务
检测表的类型, 查看是否支持事务, 一般选择 `innodb`

## 可以使用  try catch 来接收异常信息.

## ThinkPHP 和 Laravel 参数对比
ThinkPHP
```
DB::table('users')->field('id,username,password')->select();
```

Laravel
```
DB::table('users')->select('id','username','password')->get();
```

## 关于 join 语句
```sql
//原始表名
select goods.*, cates.name from goods join cates on goods.cate_id = cates.id limit 10

//as 别名设置
select a.*, b.name from goods as a join cates as b on a.cate_id = b.id limit 10

//省略 as
select a.*, b.name from goods  a join cates  b on a.cate_id = b.id limit 10

// left join
select a.*, b.name from goods  a left join cates  b on a.cate_id = b.id order by a.id limit 10
```

## 关于 sublime 解析 markdown 语法, 高亮显示
```
MarkdownEditing
```

## 如果网站无法打开
1. 检测域名解析是否正常 
```
ping  domain.com
```
2. 检测服务器的服务


## 修改数据库的字符集
```
alter database lamp207 CHARACTER set utf8;
```

## 第一次运行数据库迁移命令时的保存
```
 SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was t
  oo long; max key length is 1000 bytes (SQL: alter table `users` add unique
  `users_email_unique`(`email`))
```

`AppServiceProvider` 文件中的 boot 方法中添加代码
```php
use Illuminate\Support\Facades\Schema;
.
.
.
public function boot()
{
    //
    Schema::defaultStringLength(191);
}
.
```


