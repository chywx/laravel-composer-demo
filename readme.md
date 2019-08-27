## 学习php的框架laravel
> 构建laravel
> 
> composer create-project --prefer-dist laravel/laravel laravel-composer-demo
>
> 环境 windows，工具包phpstudy，开发工具PHPstorm
>
> php版本7.3.4 mysql8.0 laravel5.8
>



## artisan基本操作




```
// 查看laravel版本
php artisan --version
```

#### 生成控制类

```$xslt
php artisan make:controller StudentController
```


#### event
> 参考 https://www.cnblogs.com/sgm4231/p/9820794.html

```$xslt
// 在EventServiceProvider.php中添加
protected $listen = [
    Registered::class => [
        SendEmailVerificationNotification::class,
    ],
    'App\Events\InviteUserEvent' => [
        'App\Listeners\InviteUserListener'
    ],
];

// artisan自动生成
// 该命令完成后，会分别自动在 app/Events和app/Listensers目录下生成对应的文件
php artisan event:generate

// 使用方式，直接调用
event(new InviteUserEvent(1, "dahai"));
```



## 遇到的问题 
> laravel访问路由出现404，解决办法
> 
> https://blog.csdn.net/zmzwll1314/article/details/79708327
> 
> localhost / 中添加try_files $uri $uri/ /index.php?$query_string;即可
