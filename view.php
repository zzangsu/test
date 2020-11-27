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
      table{
        
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
                session_start();
                $query = "select title,subject, content, date, hit, id from board where number =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);

                $hit = "update board set hit=hit+1 where number=$number";

                $connect->query($hit);
                $_SESSION['parentn']=$number;




        ?>
        <br><br>
        
        <table class="view_table">
        <tr>
                <td colspan="6" class="view_title" align=center><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id" width = "50">작성자</td>
                <td class="view_id2" width = "200"><?php echo $rows['id']?></td>
                <td class="view_subject" width = "50">과목</td>
                <td class="view_subject2" width ="200"><?php echo $rows['subject']?></td>
                <td class="view_date" width = "50">날짜</td>
                <td class="view_date2" width ="200"><?php echo $rows['date']?></td>
        </tr>
        
 
 
        <tr>
        
                <td colspan="6" class="view_content" valign="top" height= "400" width="100">
                 
                <?php echo $rows['content']?></td>
        </tr>
        </table><br>
 
 
        <!-- MODIFY & DELETE -->
        <div class="view_btn" align=center>
                <button class="view_btn1" onclick="location.href='./index.php'"> 질문 목록으로 </button><br>
                <button class="view_btn2" onclick="location.href='./comment.php'"> 답변 </button>
                <style>
        button{z-index:10;padding:8px 12px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:0px solid #78788c;background:white;border-radius: 20px; color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#2B5982;color:#fff}
       </style>
                
        </div>
</div></div></div></div>
</body>
</html>