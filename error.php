<html>
    <head>
        <title>Error :  Access denied</title>
        <style>
                body{
                        background:red;
                        color:white;
                    }
                .er-message{
                    color:;
                    font-size:50pt;
                    text-align:center;
                }
                table{
                    font-size:30px;
                    margin-top:-40px;
                    z-index:;
                }
                caption{
                    background-color:white;
                    border:3px solid white;
                    color:red;
                    font-size:30px;
                    padding:15px;
                    z-index:10000;
                }

                .img-cont{
                    margin-bottom:0px;
                    height:150px;
                    overflow:auto;
                    background:white;
                    z-index:;
                }
                .img-br{
                    width:;
                }
        </style>
    </head>
    <body>
        <?php
            $ip = $_SERVER["REMOTE_ADDR"];
            $useragent = $_SERVER["HTTP_USER_AGENT"];
        ?>
        <h1 class="er-message">Error : Access Denied!!!</h1>

        <div class="img-cont" align="center">

                <img src="images.jpeg" class="img-br" alt="error page image">

        </div>

        <table border="1px" cellpadding="10px" cellspacing="0px" width="100%">
            <caption>Logged information</caption>
            <tr>
                <th>IP Address</th>
                <td><?php echo $ip;?></td>
            </tr> 
            <tr>
                <th>User Agent</th>
                <td><?php echo $useragent;?></td>
            </tr>
        </table>
    </body>
</html>