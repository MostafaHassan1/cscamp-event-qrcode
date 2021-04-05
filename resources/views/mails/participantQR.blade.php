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
            <td class="headline">Hello {{$participant->name}}!</td>
        </tr>
        <tr>
            <td style="padding: 2rem">
                Thank you for participating in CS Camp event. <br> Please Save this QR Code
                image and show it to the event organizer when you attend
            </td>
        </tr>
        <tr>
            <td>
                <div>
                    <!--[if mso]>
                        <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:50px;v-text-anchor:middle;width:200px;" arcsize="8%" stroke="f" fillcolor="#178f8f">
                          <w:anchorlock/>
                          <center>
                        <![endif]-->
                    <img src="{!!$message->embedData(QrCode::format('png')
                        ->generate(url("/participants/{$participant->id}/confirm/{$hash}")) , 'QrCode.png'
                        , 'image/png' )!!}">
                    <!--[if mso]>
                          </center>
                        </v:roundrect>
                      <![endif]-->
                </div>
            </td>
        </tr>
    </table>
</body>

</html>