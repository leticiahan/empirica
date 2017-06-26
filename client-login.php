<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Empirica Advisors | Clients</title>
    <meta name="description" content="Empirica Advisors offers real estate appraisal reviews and evaluation services for banks. Contact now for more information.">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://use.fontawesome.com/17bf4badc0.js"></script>
    <!--[if lt IE 9]>
       <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>

<body>
    <header>
        <div class="container">
            <div class="center">
                <a href="#">
                    <img src="img/logo.png" alt="logo">
                </a>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="clients.html" class="active">Returning Clients</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <!--Password Protected
        <SCRIPT>
        function passWord() {
            var testV = 1;
            var pass1 = prompt('Please Enter Your Password',' ');
            while (testV < 3) {
                if (!pass1)
                history.go(-1);
                if (pass1.toLowerCase() == "empirica1") {
                    alert('Welcome');
                    window.open('clients.html');
                    break;
                }
                testV+=1;
                var pass1 =
                prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
            }
            if (pass1.toLowerCase()!="password" & testV ==3)
            history.go(-1);
            return " ";
        }
        </SCRIPT>
        <CENTER>
            <FORM>
                <input type="button" value="Enter Protected Area" onClick="passWord()">
            </FORM>
        </CENTER>-->


<!-- need to fix this part -->
        <?php
        //define variables and set empty values
        $Password = "";

        //check password submitted
        if(isset($_POST['Submit'])) {
            /* define passwords */
            $logins = array('123456', 'empirica');
            /* check and assign submitted pw */
            $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
            /* check password existence in defined array */
            if(isset($logins[$Password]) && $logins[$Password] == $Password) {
                /* successful login */
                $_SESSION['UserData']=$logins[$Password];
                /* redirect to protected page */
                header("location:client.php");
                exit;
            } else {
                /* Unsuccessful attempt */
                $msg="<span style='color:red'>Try again</span>";
            }
        }
        ?>

        <form method="post" action="client.php">
            <i class="fa fa-lock" aria-hidden="true"></i> <input type="password" name="Password">
            <input type="submit" name="Submit" value="Enter">
        </form>


    </main>
    <footer>
        <div class="footer-container">
            <div class="text-box">
                <p>For more information:</p>
                <button class="button">Contact us</button>
            </div>
            <div class="social-media">
                <div class="center">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook-square fa-stack-1x fa-inverse"></i
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright-box">
            <div class="copyright">
                <p>&copy; 2016 Empirica Advisors<br> Site by <a href="http://leticiahan.com">Leticia Han</a></p>
            </div>
        </div>
    </footer>

</body>

</html>
