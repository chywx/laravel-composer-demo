### 学习php的框架laravel
> 下载的laravel包，并未使用composer
>
> 环境 windows，工具包phpstudy，开发工具PHPstorm
>
> php版本7.3.4 mysql8.0 laravel5.8
>



### artisan操作

```
// 生成控制类
php artisan make:controller StudentController
```



### 遇到的问题 
> laravel访问路由出现404，解决办法
> 
> https://blog.csdn.net/zmzwll1314/article/details/79708327
> 
> localhost / 中添加try_files $uri $uri/ /index.php?$query_string;即可
