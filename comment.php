<!DOCTYPE html>
 
<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table{
                border-top: 1px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        }
        td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        table .even{
                background: #efefef;
        }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
        .text:hover{
                text-decoration: underline;
        }
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}
</style>
<body>
<?php
                $connect = mysqli_connect('localhost', 'root', '', '20201125');
                session_start();
                $parentn=$_SESSION['parentn'];
                $query = "select * from comment order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
        ?>
<!--where parent_number =$parentn-->
        <h2 align=center>답변</h2>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
        <td width = "100" align = "center">작성자</td>
        <td width = "200" align = "center">날짜</td>
        </tr>
        </thead>
 
        <tbody> <!--mysqli_fetch_assoc($result)-->
        <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                    if( $rows['parent_number']== $_SESSION['parentn']){                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
                <td width = "50" align = "center"><?php echo $total?></td>
                <td width = "500" align = "center">
                <a href = "comment_view.php?number=<?php echo $rows['number']?>">
                <?php echo $rows['title']?></td>
                  <td width = "100" align = "center"><?php echo $rows['id']?></td>
                <td width = "200" align = "center"><?php echo $rows['date']?></td>
                </tr>
        <?php
                $total--;
                }
            }
        ?>
        </tbody>
        </table>
 
        <div style="padding-left:750px">
            <button onclick="location.href='./comment_write.php'">답변쓰기</button>
       
        </div>
 
        <div style="padding-left:750px">
                <button onclick="location.href='./view.php?number=<?php echo $parentn?>'">질문보기</button>
                <style>
        button{z-index:10;padding:8px 12px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:0px solid #78788c;background:white;border-radius: 20px; color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#2B5982;color:#fff}
       </style>
        </div>
        <div style="padding-left:700px">
            <button onclick="location.href='./index.php'">질문게시판으로 돌아가기</button>
       
        </div>
 
</body>
</html>