<?php
	require('connect.php');
    $num_rec_per_page=3;   // 每页显示数量
    if (isset($_GET["page"])) 
        { $page  = $_GET["page"]; } 
    else { $page=1; }; 
    $start_from = ($page-1) * $num_rec_per_page;   

	$sql = "SELECT * FROM book LIMIT $start_from, $num_rec_per_page";
	$mysql_result = $db -> query($sql);
    $rows = [];
    while($row = $mysql_result->fetch_array(MYSQLI_ASSOC)){
        $rows[] = $row;
    }
    $sql = 'SELECT * FROM book';
    $rs_result = $db -> query($sql); //查询数据
            $total_records = mysqli_num_rows($rs_result);  // 统计总共的记录条数
            $total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>首页</title>
<meta name="description" content="">
<meta name="keywords" content="">
</head>
<body>
    <div class="main">
    <form action="" method="post">
    	<table border="1">
    		<thead>
    			<tr>
                    <td><input id="all" type="checkbox" name="yon" onclick="chk()">全选</td>
    				<td>书名</td>
    				<td>价格</td>
    				<td>时间</td>
                    <td>种类</td>
                    <td>操作</td>
    			</tr>
    		</thead>
    		<tbody>
                <?php
                    foreach ($rows as $row) {
                ?>
    			<tr>
                    <td><?php echo "<input type='checkbox' name='mychk'>";?></td>
    				<td><?php echo $row['bname'];?></td>
    				<td><?php echo $row['bprice'];?></td>
                    <td><?php echo $row['btime'];?></td>
                    <td><?php echo $row['btype'];?></td>
                    <td><a href="<?php echo 'update.php?id='.$row['id'];?>'">编辑</a>
                        <a href='<?php echo 'delete.php?id='.$row['id'];?>' onclick="return confirm('是否确认删除该条数据?')">/删除</a></td>
    			</tr>
                <?php
                    }
                ?>
                <tr>
                    <td> </td>
                    <td>
                    <a href="add.php">添加新的项目</a>
                    </td>
                    <td>
                    <a href="">删除选中项目</a>
                    </td>
                    <td>
                        总页数:<?php echo "$total_pages"; ?>
                    </td>
                </tr>
    		</tbody>
    	</table>
    </form>
    <nav>               
    <?php
        echo'<a href="index.php?page=1">首页</a>';
    ?>
    <a href="?page=<?php echo $page==1?1:($page-1)?>">上一页</a>
    <?php
        for ($i=1; $i<=$total_pages; $i++) { 
                echo "<a href='index.php?page=".$i."'>".$i."</a>&nbsp;"; 
                }; 
    ?>
    <a href="?page=<?php echo $page==$total_pages?$total_pages:($page+1)?>">下一页</a>
    
    <?php
        echo "<a href='index.php?page=$total_pages'>尾页</a>";
    ?>

        </nav>
    </div>
    <script type="text/javascript">
      function chk(){
            var all = document.getElementById("all");
            var mychk = document.getElementsByName("mychk");
            if(all.checked==true){
                if(mychk.length){
                    for(var i=0;i<mychk.length;i++){
                        mychk[i].checked = true;
                    }
                
                }
                mychk.chcked=true;
            }else{
                if(mychk.length){
                    for(var i=0;i<mychk.length;i++){
                        mychk[i].checked = false;
                    }
                
                }
            }
            
        }   
    </script>
</body>
</html>