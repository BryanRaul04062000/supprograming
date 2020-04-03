<!--image gradient hover effect -->

<style type="text/css">
    .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .img-content {
            position: relative;
        }

        img {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-image: linear-gradient( to right,
            hsl(344, 100%, 50%),
            hsl(31, 100%, 40%));
            transition: opacity .3s ease-in 0s,transform .3s ease-in 0s,-webkit-transform .3s ease-in 0s;
            opacity: 0;
            overflow: hidden;
        }

        .img-content:hover .overlay {
            opacity: 1;
        }

        .img-content:hover .overlay .text {
            -moz-transform: translateX(0);
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
        }

        .text {
            -moz-transform: translateX(-100%);
            -webkit-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            transform: translateX(-100%);
            transition: opacity .3s ease-out .1s, -webkit-transform .3s ease-out .1s;
        }

</style>
<!--image gradient hover effect -->
<!--image gradient hover effect -->



<!--A simple footer design -->
<!--A simple footer design -->
<style type="text/css">
 a:hover{
    text-decoration:none;
}
.section-padding {
    padding: 60px 0;
}
.bottom {
    background-color: #0a1c2e;
}
.bottom .copyright {
    color: #e5e5e5;
    font-weight: 600;
}
.copyright a {
    color: #f2ff49;
    margin-left: 3px;
    padding-right: 3px;
}
.bottom p {
    margin-bottom: 0;
    line-height: 50px;
    font-size: 16px;
    font-weight: 400;
}
.copyright p span {
    color: #d1caca;
}
.bottom .copyright p, .bottom .copyright a:hover{
    color: #6c6d83;
}
</style>
<!--A simple footer design -->
<!--A simple footer design -->


<!-- Bootstrap images with text-->
<style type="text/css">
    .section .row{
    margin-top: 7%;
    margin-bottom: 10%;
}
.section .row .col-md-10{
    background: #f5f5f5;
    margin-right: -6%;
    padding: 2%;

}
.section h3{
    color: #004085;
}
.section p{
    margin-top: 10%;
    color: #545b62;
}

</style>
<!-- Bootstrap images with text-->



<!--Bootstrap Images to Left and Right with Text and Heading-->
<style type="text/css">
    .how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 40%;
}
</style>
<!--Bootstrap Images to Left and Right with Text and Heading-->