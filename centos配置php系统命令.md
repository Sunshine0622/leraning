1.首先去linux中找到集成环境的php文件所在位置
1
2
3
4
5
6
7
8	[root@iz8vbhc4d7zoazstpw7gw8z /]# cd phpstudy/server/php/
[root@iz8vbhc4d7zoazstpw7gw8z php]# ls
bin  do_not_delete  etc  include  lib  php  sbin  var
[root@iz8vbhc4d7zoazstpw7gw8z php]# cd bin/
[root@iz8vbhc4d7zoazstpw7gw8z bin]# ls
phar  phar.phar  php  php-cgi  php-config  phpize
[root@iz8vbhc4d7zoazstpw7gw8z bin]# pwd
/phpstudy/server/php/bin

如上  获取到php的bin目录的位置，我linux用的是phpstudy集成环境
然后需要去linux系统的环境变量文件去设置php环境变量，和windows中类似。文件在根目录/下的etc
1
2	[root@iz8vbhc4d7zoazstpw7gw8z ~]# cd /
[root@iz8vbhc4d7zoazstpw7gw8z /]# vim etc/profile
 然后就开始编辑环境变量的配置文件
 

将找到的php的bin目录的路径放在这里  添加这两行代码；
如需添加其他环境变量  只需找到执行文件所在目录，在后边追加冒号（“:”）再加上目录就好了，然后保存并退出
执行更新环境变量命令：
1	[root@iz8vbhc4d7zoazstpw7gw8z /]# source /etc/profile

然后再输入php -v 就OK了
1
2
3
4
5	[root@iz8vbhc4d7zoazstpw7gw8z /]# php -v
PHP 5.4.26 (cli) (built: Sep  7 2017 12:52:40)
Copyright (c) 1997-2014 The PHP Group
Zend Engine v2.4.0, Copyright (c) 1998-2014 Zend Technologies
    with Zend Guard Loader v3.3, Copyright (c) 1998-2013, by Zend Technologies
