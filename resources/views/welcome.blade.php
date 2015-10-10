@include('layout.master')
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                height: 100%;
                width: 100%;
                display: table-cell;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .content{
                position: relative;
                -webkit-animation-name: example; 
                -webkit-animation-duration: 4s; 
                -webkit-animation-iteration-count: infinite; 
                animation-name: example;
                animation-duration: 4s;
                animation-iteration-count: infinite;
            }

            @-webkit-keyframes example {
                0%   {color:red; left:5px; top:5px;}
                25%  {color:black; left:45%; top:0px;}
                50%  {color:blue; left:45%; top:65%;}
                75%  {color:green; left:5px; top:65%;}
                100% {color:red; left:5px; top:5px;}
            }

            @keyframes example {
                0%   {color:red; left:5px; top:5px;}
                25%  {color:black; left:45%; top:5px;}
                50%  {color:blue; left:45%; top:65%;}
                75%  {color:green; left:5px; top:65%;}
                100% {color:red; left:5px; top:5px;}
            }
            .title{
                
                -webkit-animation:spin 4s linear infinite;
                -moz-animation:spin 4s linear infinite;
                animation:spin 4s linear infinite;
            }
            @-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
            @-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
            @keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">We change the world !</div>
            </div>
        </div>
    </body>
</html>
