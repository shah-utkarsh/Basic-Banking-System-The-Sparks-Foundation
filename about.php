<?php
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #contact {
            margin-top: 75px;
            height: 650px;
            width: 100%;
            /* border: 2px solid red; */
        }

        #contact::before {
            content: "";
            background: url("./images/background.jpg") no-repeat center center/cover;
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 761px;
            opacity: 0.4;
            z-index: -1;
        }

        #contact h1 {
            padding: 23px;
            font-size: 3.5rem;
        }
        table td img{
            padding: 23px;
            height: 50px;
            width: 50px;
        }
        table td{
            padding:23px;
        }
    </style>
</head>

<body>
    <div id="contact">
        <h1 class="center">About Me</h1>
        <table  class="centertable">
            <tr>
                <td>
                    <h2>Name:</h2>
                </td>
                <td>
                    <h2>Shah Utkarsh</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Email Id:</h2>
                </td>
                <td>
                    <h2>shahutkarshm@gmail.com</h2>
                </td>
            </tr>
            <tr>
                <td><h2>Contact Number:</h2></td>
                <td><h2>9428202881</h2></td>
            </tr>
            <tr>
                <td><h2>Social Media:</h2></td>
                <td style="display: flex;" align="center">
                    <a href="https://twitter.com/shahutkarsh9"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.vEDGlKQ4BkH0W_KGYtXVowAAAA%26pid%3DApi%26h%3D160&f=1" alt=""></a>
                    <a href="https://www.linkedin.com/in/utkarsh-shah-97a545170/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Linkedin.svg/1200px-Linkedin.svg.png" alt=""></a>
                    <a href="https://github.com/shah-utkarsh"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fyt3.ggpht.com%2F-3BKTe8YFlbA%2FAAAAAAAAAAI%2FAAAAAAAAAAA%2Fad0jqQ4IkGE%2Fs900-c-k-no-mo-rj-c0xffffff%2Fphoto.jpg&f=1&nofb=1" alt=""></a>
                    <a href="https://www.instagram.com/utkarsh_267/"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.IlGKmdIf57zv4csoOtWWOgHaHa%26pid%3DApi&f=1" alt=""></a>

                </td>
            </tr>

        </table>
    </div>

</body>

</html>

















<?php
include "footer.php";
?>