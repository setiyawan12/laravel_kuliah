<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="{{asset('assets/css/card.css')}}"> -->
    <!-- <link rel="stylesheet" href="{('css/card.css')}"> -->
    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap');
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
body
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: pink;
    box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
}
.card
{
    position: relative;
    width: 300px;
    height: 400px;
    background: white;
    transform-style: preserve-3d;
    transform: perspective(1000px);
    box-shadow: 10px 20px 40px rgba(0,0,0,0.25);
    transition: 1s;
}
.card:hover
{
    transform: translateX(50%);
}
.card .imgBox
{
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 1;
    transform-origin: left;
    transform-style: preserve-3d;
    background: black;
    transition: 1s;
    box-shadow: 10px 20px 40px rgba(0,0,0,0.25);

}
.card:hover .imgBox
{
    transform: rotateY(-180deg);
}

.card .imgBox img
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform-style: preserve-3d;
    backface-visibility: hidden;
}
.card .imgBox img:nth-child(2)
{
    transform: rotateY(180deg);
}
.card .details
{
    position: absolute;
    top: 0;
    left:0;
    width: 100%;
    height: 100%;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.card .details .content
{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.card .details .content h2
{
    text-align: center;
    font-weight: 700;
    line-height: 1em;
}
.card .details .content h2 span
{
    color: red;
    font-size: 0.8em;
}
.card .details .content .social-icons 
{
    position: relative;
    display: flex;
    margin-top: 10px;
}
.card .details .content .social-icons a
{
    display: inline-block;
    width:  35px;
    height: 35px;
    background: #333;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration:none;
    margin: 5px;
    font-size: 18px;
    transition: 0.2s;
}
.card .details .content .social-icons a:hover
{
    background: red;
}
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="card">
        <div class="imgBox">
            <img src="{{asset('assets/img/setiyawan.jpeg')}}">
            <img src="{{asset('assets/img/setiyawan1.jpeg')}}">
        </div>
            <div class="details">
                <div class="content">
                    <h2>Yayang Setiyawan<br><span>18090045</span></h2>
                    <div class="social-icons">
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://github.com/setiyawan12"><i class="fa fa-github" aria-hidden="true"></i></i></a>
                        <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>

                    </div>
                </div>
            </div>
        </div>
</body>
</html>