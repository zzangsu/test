<?php
 
        session_start();
 
        $connect = mysqli_connect("localhost", "root", "", "20201125") or die("fail");
 
        //입력 받은 id와 password
        $studentID=$_GET['studentID'];
        $name=$_GET['name'];
        $phone=$_GET['phone'];
 
        //아이디가 있는지 검사
        $query = "select * from member where studentID='$studentID'";
        $result = $connect->query($query);
 
 
        //아이디가 있다면 비밀번호 검사
        if(mysqli_num_rows($result)==1) {
 
                $row=mysqli_fetch_assoc($result);
 
                //비밀번호가 맞다면 세션 생성
                if($row['name']==$name && $row['phone']==$phone){


                        $_SESSION['userid']=$studentID;
                        if(isset($_SESSION['userid'])){
                        ?>      <script>
                                        alert("로그인 되었습니다.");
                                        location.replace("./home.php");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                        history.back();
                </script>
<?php
        }
 
 
?>
 
