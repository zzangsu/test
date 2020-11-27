<!DOCTYPE html>
 
<html>
<head>
        <meta charset = 'utf-8'>
        <link rel="stylesheet" href="./board_example.css">
</head>
<style>
        h1 {
        margin: 0px;
        border: 0px solid #dddddd;
      
        padding: 0px;
      }
        table.view_table{
                border: 1px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border: 1px solid #444444;
                padding: 10px;
        }
        td{
                border: 1px solid #444444;
                padding: 10px;
        }
</style>
<body>
         <div class="background">
  <div class="container">
    <div class="panel pricing-table">
      <div class="pricing-plan">
        <?php
                $connect = mysqli_connect('localhost', 'root', '', '20201125');
                $number = $_GET['number'];
                $query = "select title, content, id from comment where number =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title" align=center><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id" width = "100">작성자</td>
                <td class="view_id2" width = "400"><?php echo $rows['id']?></td>
        </tr>
 
        <tr>
                <td colspan="4" class="view_content" valign="top" height= "400">
                <?php echo $rows['content']?></td>
        </tr>
        </table><br>

        <!-- MODIFY & DELETE -->
        <div class="view_btn" align = right>
                <button class="view_btn1"  onclick="location.href='./comment.php'">답변 목록으로</button>
                <style>
        button{z-index:10;padding:8px 12px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:0px solid #78788c;background:white;border-radius: 20px; color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#2B5982;color:#fff}
       </style>
        </div>
</div></div></div></div>
</body>
</html>