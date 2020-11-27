

<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩d
  $db = new mysqli("localhost","root","","20201125"); 
  $db->set_charset("utf8");
  function mq($sql)
  {
    global $db;
    return $db->query($sql);//결과 객체 반환
  }
?>

<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
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
<div id="board_area">
<?php
  $catagory = $_GET['catgo'];
  $search_con = $_GET['search'];//검색 변수~!~!
?>

  <!--<h1><?php echo $catagory; ?>에서 '<?php echo $search_con; ?>'검색결과</h1>-->

  <br><br>
    <!--<table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>-->

<h2 align=center>검색 결과</h2>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
        <td width = "100" align = "center">과목</td>
        <td width = "100" align = "center">작성자</td>
         <td width = "200" align = "center">날짜</td>
        <td width = "50" align = "center">조회수</td>
        </tr>

        </thead>
        <?php
          $sql2 = mq("select * from board where $catagory like '%$search_con%' order by number desc");
          $var=0;
          while($board = $sql2->fetch_array()){
            $var++;
          $title=$board["title"];
            if(strlen($title)>30)
              { 
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
            $sql3 = mq("select * from reply where con_num='".$board['number']."'");
           // $rep_count = mysqli_num_rows($sql3);//데이터 개수
        ?>
      <tbody>
        <tr>
          <td width="70" align="center"><?php echo $board['number']; ?></td>
          <td width="500" align="center">
          <a href = "view.php?number=<?php echo $board['number']?>">
          <span><?php echo $title;?></span></a></td>
          <td width="120" align="center"><?php echo $board['subject'];?> </td>
          <td width="120" align="center"><?php echo $board['id'];?> </td>
          <td width="100" align="center"><?php echo $board['date'];?> </td>
          <td width="100" align="center"><?php echo $board['hit'];}?> </td>
        </tr>
      </tbody>
    </table>



<br>

<?php
if($var==0)
{
  ?>
  <h3 align=center> 검색 결과가 없습니다. </h3>
  <?php
}
?>



<br>
<div class = text align=center>
        <font style="cursor: hand"onclick="history.back()"> 이전으로 </font>
        </div>


</body>
</html>