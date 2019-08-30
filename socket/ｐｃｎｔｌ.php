1.pcntl_fork函数使用
    if(true){
        $pid = pcntl_fork();
        if($pid < 0){
            die('fork error.');
        } elseif ($pid == 0){
            //子进程
            echo "我是子进程".PHP_EOL;
            exit();
        } else {
            //父进程
            echo "我是父进程".PHP_EOL;
            exit();
        }
    }
    
２．进程间数据隔离
    if(ｔｒｕｅ) {
        $num = 1;
        $pid = pcntl_fork();
        if($pid < 0){
            die('fork failed.');
        } elseif ($pid == 0){
            //子进程
            $num += 3;
            echo "son-num:".$num.PHP_EOL;
        } else {
            //父进程
            $num += 1;
            echo "father-num:".$num.PHP_EOL;
        }
    }
    
３．获取进程信息
    if(true){
        $pid = pcntl_fork();
        if($pid < 0){
            die('fork failed.');
        } elseif ($pid == 0){
            //子进程
            echo "子进程pid:".posix_getpid().PHP_EOL;
        } else {
            echo "父进程pid:".getmypid().PHP_EOL;
        }
    }
    
４．设置进程名称
    if(true){
        $pid = pcntl_fork();
        if($pid < 0){
            die('fork failed.');
        } elseif ($pid == 0){
            cli_set_process_title('son-process');
            echo 'son-process:'.cli_get_process_title();
            sleep(30);
        } else {
            cli_set_process_title('father-process');
            echo 'father-process:'.cli_get_process_title();
            sleep(30);
        }
    }

５．错误的ｆｏｒｋ行为
  父进程和子进程将继续执行fork之后的程序代码(包含pcntl_fork函数)。
    if(true){
    for( $i = 1; $i <= 3 ; $i++ ){
        $pid = pcntl_fork();
        if( $pid > 0 ){
            // do nothing ...
        } else if( 0 == $pid ){
            echo "儿子".PHP_EOL;
            //exit();这个函数一定不能丢
        }
    }
}
        
６．孤儿进程的产生（父进程很快执行完成后退出，子进程还在运行，子进程会变成孤儿进程）
     if(ｔｒｕｅ){
        $pid = pcntl_fork();
        if($pid < 0){
            die('fork failed.');
        } elseif ($pid == 0){
            echo '子进程在执行';
            $i = 0;
            while ($i < 9){
                echo 'father-pid:'.posix_getppid().PHP_EOL;
                sleep(1);
                $i++;
            }
            die;
        } else{
            sleep(3);
            die;
        }
    }
