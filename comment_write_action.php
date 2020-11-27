<?php
                $connect = mysqli_connect("localhost", "root", "", "20201125") or die("fail");
                session_start();
                $parentn = $_SESSION['parentn'];
                $id = $_GET['name'];                      //Writer
                $title = $_GET['title'];                  //Title
                $content = $_GET['content'];              //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                $URL = './comment.php';                   //return URL
 
 
                $query = "insert into comment (number,title, content, date, id, parent_number) 
                        values(null,'$title', '$content', '$date', '$id','$parentn')";
 
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>