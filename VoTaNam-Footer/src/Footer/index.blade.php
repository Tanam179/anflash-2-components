<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,600;0,900;1,200&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="/main.css">
<div class="c15abc9d74c664ae0a61ecc0c8b3178e3" id="c2f0000d7793249e5a66c048bc77d164c">
    <!-- Write your code here -->
    <!-- <h1>{{ $greetings }}</h1> -->
    
    <!-- <div>phonenumber: {{$phonenumber}}</div>
    <div>email: {{$email}}</div>
    <div>address: {{$address}}</div>
    <div>facebook: {{$facebook}}</div>
    <div>youtube: {{$youtube}}</div> -->
    <!-- Write your code here -->
    <div class="footer">
        <div class="container">
            <div class="footer-flex">
                <div class="logo">
                    <img src="https://anflash.com/images/logo.svg" alt="" width ="70px" height ="70px"> 
                </div>
                <div class="info">
                    <div class="info-category">
                        <ul>
                            @foreach ($categories as $category)
                                <li>{{$category->title}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="info-about">
                        <p>Công ty TNHH Công Nghệ ANFLASH</p>
                        <p>Điện thoại: {{$phonenumber}}</p>
                        <p>Email: {{$email}}</p>
                        <p>Văn phòng: {{$address}}</p>
                    </div>
                    <div class="copyright">
                        <p>&copy 2019 ANFLASH. All rights reserved.</p>
                        <a href={{$facebook}}><i class="fab fa-facebook-square"></i></a>
                        <a href={{$youtube}}><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="advise">
                    <p>Yêu cầu tư vấn</p>
                    <div class="user-name-phone">
                        <input type="text" placeholder="Họ tên">
                        <input type="text" placeholder="Số điện thoại">
                    </div>
                    <div class="email">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="text-area">
                        <textarea placeholder="Nội dung"></textarea>
                    </div>
                    <div class="submit">
                        <a href="#" class="submit">Submit</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
</div>
<script src="/main.js"></script>
