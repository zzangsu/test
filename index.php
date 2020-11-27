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
                border-top: 1px solid #444444;
                border-radius:10px 10px 10px 10px;
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
    <div class="background">
  <div class="container">
    <div class="panel pricing-table">
      <div class="pricing-plan">
     
<?php
                $connect = mysqli_connect('localhost', 'root', '', '20201125') or die ("connect fail");
                $query ="select * from board order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
                
                session_start();
                if(isset($_SESSION['userid'])){
                    ?>
                    <div style="padding-left: 700px">
                    <button onclick="location.href='./logout.php'">로그아웃</button>
                    </div>

                    <?php
                }
 





        ?>
        <h2 align=center>질문 게시판</h2>
        <table align = center>
        <thead align = "center">
            
        
<!--검색박스-->
 <div id="search_box" style="padding-left: 380px">
    <form action="search_result.php" method="get">
      <select name="catgo">
        <option value="subject">과목</option>
        <option value="id">작성자</option>
      </select>
      <input type="text" name="search" size="30" required="required" /> <button> 검색 </button> </form>     
       <button onclick="location.href='./write.php'"> 글쓰기 </button>
       <style>
        button{z-index:10;padding:8px 12px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:0px solid #78788c;background:white;border-radius: 20px; color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#2B5982;color:#fff}
       </style>
    
    </div>
    <br>

        <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
        <td width = "100" align = "center">과목</td>
        <td width = "80" align = "center">작성자</td>
        <td width = "200" align = "center">날짜</td>
        <td width = "50" align = "center">조회수</td>
        </tr>
        </thead>
 
        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
                <td width = "50" align = "center"><?php echo $total?></td>
                <td width = "500" align = "center">
                <a href = "view.php?number=<?php echo $rows['number']?>">
                <?php echo $rows['title']?></td>
                <td width = "100" align = "center"><?php echo $rows['subject']?></td>
                  <td width = "100" align = "center"><?php echo $rows['id']?></td>
                <td width = "200" align = "center"><?php echo $rows['date']?></td>
                <td width = "50" align = "center"><?php echo $rows['hit']?></td>
                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>
 
        
      

      
    

 
 
 </div></div></div></div>
</body>
</html>
 


