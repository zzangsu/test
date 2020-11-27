<!DOCTYPE>
 
<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
    body{background:#5774BA;margin:-120px;}
.form{width:700px;height:620px;background:#e6e6e6;border-radius:8px;box-shadow:0 0 40px -10px #000;margin:calc(50vh - 220px) auto;padding:20px 30px;max-width:calc(100vw - 40px);box-sizing:border-box;font-family:'Montserrat',sans-serif;position:relative}
h2{margin:10px 0;padding-bottom:10px;width:180px;color:#78788c;border-bottom:3px solid #78788c}
input{width:100%;padding:10px;box-sizing:border-box;background:none;outline:none;resize:none;border:0;font-family:'Montserrat',sans-serif;transition:all .3s;border-bottom:2px solid #bebed2}
input:focus{border-bottom:2px solid #78788c}
p:before{content:attr(type);display:block;margin:28px 0 0;font-size:14px;color:#5a5a5a}
button{z-index:10;padding:8px 12px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:2px solid #78788c;background:white;border-radius: 20px;margin:-130px; color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#78788c;color:#fff}

span{margin:0 5px 0 15px}
 
</style>

<body>
<form class="form" method = "get" action = "comment_write_action.php">
<h2>답변 작성하기</h2>
<p type=" Name:">
    <input type=text name=name placeholder="Write your name here...">
    </input>
</p>
<p type=" Title:">
    <input type=text name=title placeholder="Write title here...">
    </input>
</p>
<p type=" content:"><br>
    <textarea name=content cols=85 rows=11 placeholder="   Write content here..."></textarea>
    </input>
</p>
<input type = "submit" value="작성">


</form>


<div class="view_btn"  align="center">
                <button  class="view_btn1" onclick="history.back()"> 이전으로 </button>
                
                
        </div>

<!--


        <form method = "get" action = "comment_write_action.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 답변쓰기</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>작성자</td>
                        <td><input type = text name = name size=20> </td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = title size=60></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name = content cols=85 rows=15></textarea></td>
                        </tr>
 
                        <center>
                        <input type = "submit" value="작성">
                        </center>
                </td>
                </tr>
        </table>
        </form>-->
</body>
</html>
 