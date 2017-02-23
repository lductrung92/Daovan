<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{ asset('/') }}">
    <title>Kiểm tra đạo văn</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/myStyle.css">
    <link rel="stylesheet" type="text/css" href="css/multi.platform.css">
</head>
<body>
    <header>
        <table id="header-content">
            <tr>
                <td class="left">
                    <a href="http://dtu.edu.vn" title="Đại học Duy Tân, Đà Nẵng, Việt Nam">
                        <img alt="Đại học Duy Tân, Đà Nẵng, Việt Nam" src="Image/logo-dtu.gif"/>
                    </a>
                </td>
                <td class="middle"><p class="title"><b>HỆ THỐNG KIỂM TRA TÀI LIỆU</b></p></td>
                <td class="right"></td>
            </tr>                
        </table>            
    </header>
    {{ dd($content) }}
    <div class='RowSpace'></div>
    <section>
        <form id="myForm">
            <div class="top">
                <div class='Categorys'>
                    <input id='txtCategory' list="categorys" name="browser" placeholder="Kiểm tra với chủ đề">
                    <datalist id="categorys">
                        <option value="Công Nghệ Thông Tin">
                        <option value="Chính Trị">
                        <option value="Du Lịch">
                        <option value="Hoá Học">
                        <option value="Hình Học">
                        <option value="Kinh Tế">
                        <option value="Khoa Học">
                        <option value="Lịch Sử">
                        <option value="Tin Học">
                        <option value="Toán Tin">
                        <option value="Vật Lý">
                        <option value="Văn Học">
                        <option value="Thế Giới">
                        <option value="Tiểu Thuyết">
                        <option value="Xã Hội">
                    </datalist>
                </div>
                <div class='ColSpace'>&nbsp;</div>
                <div class='Keywords'>
                    <input id="txtKeyword" type="text" name="keyworld" placeholder="Kiểm tra với từ khóa" spellcheck="false" value="">
                </div>                    
                <div class='ColSpace'>&nbsp;</div>
                <div class='Actions'>
                    <input id="btnSubmit" type="submit" name="submit" value="Kiểm tra">
                    <input id="btnContinue" type="button" name="continue" value="Tiếp tục" style="display: none;">
                </div>
            </div>
            <div class='RowSpace'></div>
            <div class="mid">
                <!--<span>Kiểm tra với:&nbsp;</span>-->
                <input id='cBox1' type="checkbox" name="DTU" value="DTU" disabled/>
                <span>DTU&nbsp;&nbsp;&nbsp;</span>
                <input id='cBox2' type="checkbox" name="Google" value="Google"/>
                <span>Google&nbsp;&nbsp;&nbsp;</span>
                <input id='cBox3' type="checkbox" name="Wikipedia" value="Wikipedia"/>
                <span>Wikipedia&nbsp;&nbsp;&nbsp;</span>
            </div>
            <div class='RowSpace'></div>
            <div class="bot">                    
                <div id="DivTxTArea" data-ph="Nội dung kiểm tra ... " spellcheck="false" contenteditable></div>                    
            </div>
        </form>
    </section>
    <div class='RowSpace'></div>
    <div class="Times">Times: 0.00s</div>
    <div class='RowSpace'></div>
    <footer>
        <div id="footer-content">
            <b>Copyright© 2017 <a id="myUrl" href="http://dtu.edu.vn" title="Đại học Duy Tân" target="_blank">Đại học Duy Tân</a></b>
        </div>
    </footer>

    <div id="contain-my-modal"></div>
    <div class="modal-loader"></div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>