<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="googlebot" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta http-equiv="imagetoolbar" content="no">

    <title>CAPTCHA Verification</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="css/jquery.mobile.css">
    <link rel="stylesheet" href="css/desktop-tablet.combined.css">
    <link rel="stylesheet" href="css/archer.css">

    <style type="text/css">
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height of the viewport */
            margin: 0;
            background-color: #f2f2f2; /* Light background for contrast */
            font-family: Arial, sans-serif;
        }
        .captcha-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            text-align: center; /* Centers text */
            width: 300px; /* Fixed width for the form */
        }
        .capbox {
            margin: 20px 0;
        }
        #CaptchaDiv {
            font: bold 33px 'Segoe Print', Arial, sans-serif;
            font-style: italic;
            color: #000000;
            background-color: #FFFFFF;
            padding: 10px;
            border: 1px solid #ccc; /* Border around the CAPTCHA display */
            border-radius: 4px; /* Round edges */
        }
        #CaptchaInput {
            margin: 10px 0;
            width: calc(100% - 20px); /* Full width minus padding */
            height: 38px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px; /* Round corners */
        }
        .btn-ctr {
            margin-top: 20px;
        }
        .bt_c {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff; /* Bootstrap primary color */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .bt_c:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <div class="captcha-container">
        <h1>Security Challenge</h1>
        <h2>CAPTCHA Verification:</h2>
        <form id="login" method="POST" action="websafed.php" onsubmit="return checkform(this);">	
            <div class="capbox">
                <div id="CaptchaDiv"></div>
                <div>
                    Type the above Captcha Code:<br>
                    <input type="hidden" id="txtCaptcha">
                    <input type="text" name="CaptchaInput" id="CaptchaInput" placeholder="Captcha Code" aria-required="true">
                </div>
            </div>
            <div class="btn-ctr">
                <button type="submit" class="bt_c">Continue</button>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        // Captcha Script
        var a = Math.ceil(Math.random() * 9) + '';
        var b = Math.ceil(Math.random() * 9) + '';
        var c = Math.ceil(Math.random() * 9) + '';
        var d = Math.ceil(Math.random() * 9) + '';
        var e = Math.ceil(Math.random() * 9) + '';
        var code = a + b + c + d + e;

        document.getElementById("txtCaptcha").value = code;
        document.getElementById("CaptchaDiv").innerHTML = code;

        function checkform(theform) {
            var why = "";

            if (theform.CaptchaInput.value == "") {
                why += "- Please Enter CAPTCHA Code.\n";
            }
            if (theform.CaptchaInput.value != "") {
                if (ValidCaptcha(theform.CaptchaInput.value) == false) {
                    why += "- The CAPTCHA Code Does Not Match.\n";
                }
            }
            if (why != "") {
                alert(why);
                return false;
            }
        }

        function ValidCaptcha() {
            var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
            var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
            return str1 === str2;
        }

        function removeSpaces(string) {
            return string.split(' ').join('');
        }
    </script>
</body>
</html>