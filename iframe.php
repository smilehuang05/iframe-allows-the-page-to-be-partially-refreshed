<?php
$uname = $_POST['username'];
$pw = $_POST['password'];

if($uname == 'admin' && $pw == '123' ){?>
    <script>
        parent.document.getElementById('info').innerHTML='登录成功';
    </script>
    
<?php
 } else { ?>
    <script>
    parent.document.getElementById('info').innerHTML='登录失败';
</script>
 <?php
}
 ?>