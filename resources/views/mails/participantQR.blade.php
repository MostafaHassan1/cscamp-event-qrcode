<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CS-Camp</title>
    <!-- Designed by https://github.com/kaytcat -->
    <!-- Robot header image designed by Freepik.com -->

    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Droid+Sans);

        /* Take care of image borders and formatting */

        img {
            max-width: 600px;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        a {
            text-decoration: none;
            border: 0;
            outline: none;
            color: #bbbbbb;
        }

        a img {
            border: none;
        }

        /* General styling */

        td,
        h1,
        h2,
        h3 {
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 400;
        }

        td {
            text-align: center;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100%;
            height: 100vh;
            color: #37302d;
            background: #ffffff;
            font-size: 16px;
        }

        table {
            border-collapse: collapse !important;
        }

        .headline {
            color: #ffffff;
            font-size: 36px;
            padding: 1rem;
        }

        .force-full-width {
            width: 100% !important;
        }
    </style>

    <style type="text/css" media="screen">
        @media screen {

            /*Thanks Outlook 2013! http://goo.gl/XLxpyl*/
            td,
            h1,
            h2,
            h3 {
                font-family: "Droid Sans", "Helvetica Neue", "Arial", "sans-serif" !important;
            }
        }
    </style>

    <style type="text/css" media="only screen and (max-width: 480px)">
        /* Mobile styles */
        @media only screen and (max-width: 480px) {
            table[class="w320"] {
                width: 100% !important;
            }
        }
    </style>
</head>

<body class="body" style="
      padding: 0;
      margin: 0;
      display: block;
      background: #2D2C3E;
      -webkit-text-size-adjust: none;
      color: #ffffff;
      font-size: 20px;
    ">
    <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td>
                <br />
                <img src="{{asset('images/cs2.jpg')}}" width="216" height="189" style="border-radius: 50%"
                    alt="robot picture" />
            </td>
        </tr>
        <tr>
            <td class="headline"> Dear contestant,</td>
        </tr>
        <tr>
            <td>
                Thank you for your interest in joining CS Camp Problem Solving Contest.
                <p>
                    Date: Thursday, April 8th. <br>
                    Contest time: 2 hours. <br>
                    Place: (معمل خيرت)
                </p>
                <p class="headline">
                    Contest Schedule <br>
                    <p>

                        1) You must attend at 10:45 am (sharp) for Registration.
                    </p>
                    <p>

                        2) The contest will start at 11:15 am (sharp) and end at 1:35 am
                        then, at 1:45 we will have the certificate awarding ceremony and rewards.
                    </p>

                </p>

                -This is your QR Code for registration: <br> <br>

                <div>
                    <!--[if mso]>
                        <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:50px;v-text-anchor:middle;width:200px;" arcsize="8%" stroke="f" fillcolor="#178f8f">
                          <w:anchorlock/>
                          <center>
                        <![endif]-->
                    <img src="{!!$message->embedData(QrCode::size(250)->format('png')
                        ->generate(url("/participants/{$participant->id}/confirm/{$hash}")) , 'QrCode.png'
                        , 'image/png' )!!}">
                    <!--[if mso]>
                          </center>
                        </v:roundrect>
                      <![endif]-->
                </div>
                <p class="headline">

                    Please follow this instructions
                </p>
                <p>
                    1) You can't enter the contest without your QR Code.

                </p>
                <p>

                    2) You must wear a mask that covers your nose and mouth and not remove it at any time inside the
                    laboratory.
                </p>
                <p>

                    3) It is allowed to use paper and pen and bring a hard copy (anything
                    that is not soft is allowed, such as a dictionary, written paper, books ... etc.)
                </p>
                <p>

                    4) It is not allowed to use soft copy (flash, mobile, calculator ... etc.)
                </p>
                <p>
                    5) It is not allowed to open anything on the computer during the Countest except <br> <br>
                    a) vjudge <br> b) online c ++ compiler <br>
                    c) visual studio <br> d) The calculator installed in the computer
                </p>
                <p>
                    6) Whatever goes against this instruction will be disqualified
                </p>

                Best of luck,
                CS Camp Team.
            </td>
        </tr>
    </table>
</body>

</html>