<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Responsive Testimonials Section | CodingNepal</title> -->
    <link rel="stylesheet" href="userstyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
   <?php
                $connect = mysqli_connect('localhost', 'root', '', '20201125') or die ("connect fail");
                $query ="select * from board order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
                
                session_start();
                if(isset($_SESSION['userid'])){
                    ?>
                    <div style="padding-left:1200px">
                    <button onclick="location.href='./logout.php'">로그아웃</button></div>
                     <style>
        button{z-index:10;padding:8px 12px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:0px solid #78788c;background:white;border-radius: 20px; color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#0E6251;color:#fff}
       </style>

                    <?php
                }


        ?>
        


  <div class = "intro">
    <h2>for you 소개</h2>
    <p>안녕하세요, for you 개발자입니다.<br>
      for you 웹사이트는 세종대학교 지능기전공학부 학생들의 학습활동에 도움을 주고자 만들어진 웹사이트입니다. 많은 학생분들께서 학과 관련 수업을 듣는 도중 생기는 질문들을 해결하는데 어려움을 겪습니다. 이를 해결하고자 학부 학생들이 서로 질문을 하고 답변을 할 수 있는 for you 웹사이트를 만들게 되었습니다.
    </p>
   </div>
  <div class="wrapper">
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>양가영<br> 
        지능기전공학부 2학년<br>
        for you 웹사이트 개발자<br>
        문의 : 010-XXXX-XXXX</p>
      <div class="content">
        <div class="info">
          <div class="name">Ga-Young Yang</div>
          <div class="job">무인이동체전공 | 19011749</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="image">
           <img src="양가영.jpg" alt=""> 
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>강민정<br> 
        지능기전공학부 2학년<br>
        for you 웹사이트 개발자<br>
        문의 : 010-XXXX-XXXX
      </p>
      <div class="content">
        <div class="info">
          <div class="name">Min-Jeong Kang</div>
          <div class="job">스마트기기전공 | 19011757</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="강민정.jpg" alt=""> 
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left  quote"></i>
      <p>장수빈<br> 
        지능기전공학부 2학년<br>
        for you 웹사이트 개발자<br>
        문의 : 010-XXXX-XXXX</p>
      <div class="content">
        <div class="info">
          <div class="name">Su-Bin Jang</div>
          <div class="job">무인이동체전공 | 19011753</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="image">
           <img src="./장수빈.jpg" alt="nodata"> 
        </div>
      </div>
    </div>
  </div>
 
<button onclick="location.href='./home.php'"> HOME </button>
       <style>
        button{z-index:10;padding:8px 12px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:0px solid #78788c;background:white;border-radius: 20px; color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#0E6251;color:#fff}
       </style>

</body>
</html>