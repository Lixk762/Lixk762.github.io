<head>
    <meta charset="UTF-8">
    <title>读取文件夹文件</title>
</head>
<body>
    <h1>文件夹中的文件</h1>
    <ul>
        <?php
            // 设置文件夹路径，这里应该是服务器上的路径
            $directory = './files/';
            // 打开目录
            if (is_dir($directory)) {
                if ($handle = opendir($directory)) {
                    /* 遍历文件夹 */
                    while (false !== ($file = readdir($handle))) {
                        // 忽略目录中的 '.' 和 '..' 条目
                        if ($file != "." && $file != "..") {
                            echo "<li>$file</li>";
                        }
                    }
                    // 关闭目录
                    closedir($handle);
                }
            }
        ?>
    </ul>
</body>
</html>