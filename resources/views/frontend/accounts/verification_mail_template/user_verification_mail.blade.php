{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>You are welcome from DurbarIt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Subject: Email Verification.</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Dear,<br/>
                                    {{ $username }} Please hit the link and verify your email address.
</p>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{ route('user.auth.verification', $token) }}">Email Verify</a>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>
</body>

</html> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Email Template</title>

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/mail/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/mail/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/mail/css/animate.css')}}">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        ul,
        ol {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: white;
        }

        body {
            font-family: 'Rubik', sans-serif;
            overflow-x: hidden;

        }

        .email_table {
            width: 100%;
            min-width: 0 !important;
        }

        .content_section {
            max-width: 640px;
            Margin: 0 auto;
            text-align: center;
        }

        .email_start {
            margin-top: 25px;
        }

        .banner {
            background: url(../images/pexels-photo-941546.jpeg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 100px 0px;
            position: relative;
        }

        .banner:before {
            position: absolute;
            content: '';
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .welcome {
            background: url(../images/pexels-photo-941546.jpeg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 70px 0px;
            position: relative;
        }

        .welcome:before {
            position: absolute;
            content: '';
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .reservation {
            background: url(../images/pexels-photo-941546.jpeg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 20px 0px;
            position: relative;
        }

        .reservation:before {
            position: absolute;
            content: '';
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .content_icon td {

            text-align: center;
            vertical-align: middle;

        }

        .content_icon i {
            background-color: #5cb85c;
            border-radius: 50%;
            line-height: 60px;
            width: 60px;
            height: 60px;
            font-size: 22px;
            position: relative;
            z-index: 11;
            color: #fff;


        }

        .account a {
            text-decoration: none;
            color: #fff;
            background-color: #27ae60;
            text-transform: capitalize;
            font-size: 16px;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 4px;
            position: relative;
            z-index: 1111;
        }

        td.content-cell.py {
            padding: 0px 10px;
        }

        .content_table td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        td.content_tab.m-0 {
            padding: 10px 13px;
        }

        td.content_tab.m-0 {

            border-bottom: 1px dotted #bbbaba;
        }

        td.content_tab {
            padding: 10px 13px;
            border-bottom: 1px dotted #bbbaba;
        }

        .content_total {
            border-top: 1px dotted #bbbaba;
            padding: 10px 0px;
        }

        /*reciept*/
        .column_header {
            background-color: #27ae60;
            color: #fff;
        }

        td.content_order_head.text-center {
            padding: 10px 0px;
            border-bottom: 1px dotted #bbbaba;
        }

        /*download*/
        .download a {
            text-decoration: none;
            color: #fff;
            background-color: #27ae60;
            text-transform: capitalize;
            font-size: 16px;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 4px;

        }

        .content_cell_confirm {
            color: #000;
        }

        /*confirmation*/
        .view a {
            text-decoration: none;
            color: #fff;
            background-color: #27ae60;
            text-transform: capitalize;
            font-size: 16px;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 4px;
        }
    </style>
</head>


<body>
    <!-- header center-->
    <div class="template_header">
        <div class="template_body">
            <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="email_body email_start">
                            <table role="presentation" class="content_section" width="100%" border="0" cellspacing="0"
                                cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td class="content_cell">
                                            <table role="column_section" class="content_section" width="100%" border="0"
                                                cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="column_cell" style="padding:20px;">
                                                            <a href="#">
                                                                <img src="{{asset('public/mail/images/logo.png')}}"
                                                                    width="136px" height="32px" alt="Email Template"
                                                                    style="max-width: 140px;">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--banner section-->
            <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="email_body">
                            <table role="presentation" class="content_section" width="100%" border="0" cellspacing="0"
                                cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td class="content_cell banner">
                                            <table role="column_section" class="content_section" width="100%" border="0"
                                                cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="column_cell">
                                                            <table role="column_section" class="icon" width="80"
                                                                border="0" style="margin: 0px auto;" cellspacing="0"
                                                                cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="content_icon m-0">
                                                                            <i class="fa fa-exclamation-circle"
                                                                                aria-hidden="true"></i>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h1 class="ban_h"
                                                                style="color: #fff;font-size: 26px;margin-top:15px;position: relative;z-index: 111;text-transform: capitalize;font-weight: 600;">
                                                                Confirm your account</h1>
                                                            <p class="ban_p"
                                                                style="color: #fff;font-size: 16px;position: relative;z-index: 111;text-transform: capitalize;font-weight: 500;">
                                                                Lighted bought keenly lantern fittingly</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--space-->
            <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="email_body">
                            <table role="presentation" class="content_section" width="100%" border="0" cellspacing="0"
                                cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td class="content_cell" height="32">
                                            &nbsp;
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--content-->
            <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="email_body">
                            <table role="presentation" class="content_section" width="100%" border="0" cellspacing="0"
                                cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td class="content_cell">
                                            <table role="column_section" class="content_section" width="100%" border="0"
                                                cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="column_cell">
                                                            <p>Deal, {{ $username }} <br />
                                                                Thank you, for registration in our web site </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--button-->
            <!--content-->
            <table role="presentation" class="email_table mt-2" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="email_body">
                            <table role="presentation" class="content_section" width="100%" border="0" cellspacing="0"
                                cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td class="content_cell">
                                            <table role="column_section" class="content_section" width="100%" border="0"
                                                cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="column_cell account">
                                                            <a href="{{ route('user.auth.verification', $token) }}">confirm
                                                                account</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--space-->

            <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="email_body">
                            <table role="presentation" class="content_section" width="100%" border="0" cellspacing="0"
                                cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td class="content_cell" height="32">
                                            &nbsp;
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- footer -->
            <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0"
                style="padding: 0px 10px;">
                <tbody>
                    <tr>
                        <td class="email_body">
                            <table role="presentation" class="content_section" width="100%" border="0" cellspacing="0"
                                cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td class="content_cell">
                                        <td class="content_cell content_b brb tc" height="16">&nbsp; </td>
                        </td>
                    </tr>
                    <tr>
                        <td class="content_cell">
                        <td class="content_cell content_b brb tc" height="16">&nbsp; </td>
                        </td>
                    </tr>

                    <tr>
                        <td class="content_cell">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td class="content-cell py">
                            <div class="row">
                                <div class="col-8">
                                    <table role="presentation" class="column" width="100%" border="0" cellspacing="0"
                                        cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td class="email_body">
                                                    <table role="presentation" class="content_section" width="100%"
                                                        border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="content_cell text-left"
                                                                    style="font-size:14px;color: #8a8d8e;">
                                                                    <p>
                                                                        ©2017 Lil Commerce <br>

                                                                        <span class="tm">20464 Lynch Haven, Emardton, CT
                                                                            12471-4107, USA</span>
                                                                    </p>
                                                                    <p class="link">
                                                                        <a href="#"
                                                                            style="text-decoration: none;color: #0275d8;">About</a>&nbsp;&nbsp;
                                                                        <a href="#"
                                                                            style="text-decoration: none;color: #0275d8;">Product</a>&nbsp;&nbsp;
                                                                        <a href="#"
                                                                            style="text-decoration: none;color: #0275d8;">Help</a>&nbsp;&nbsp;
                                                                        <a href="#"
                                                                            style="text-decoration: none;color: #0275d8;">Unsubscribe</a>&nbsp;&nbsp;
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-4">
                                    <table role="presentation" class="content_section" width="100%" border="0"
                                        cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td class="content_cell text-left"
                                                    style="font-size:22px;color: #8a8d8e;">

                                                    <p class="sm_link">
                                                        <a href="#" style="text-decoration: none;color: #8a8d8e;"><i
                                                                class="fa fa-facebook-official"
                                                                aria-hidden="true"></i></a>&nbsp;&nbsp;
                                                        <a href="#" style="text-decoration: none;color: #8a8d8e;"><i
                                                                class="fa fa-twitter-square"
                                                                aria-hidden="true"></i></a>&nbsp;&nbsp;
                                                        <a href="#" style="text-decoration: none;color: #8a8d8e;"><i
                                                                class="fa fa-instagram"
                                                                aria-hidden="true"></i></a>&nbsp;&nbsp;

                                                        <a href="#" style="text-decoration: none;color: #8a8d8e;"><i
                                                                class="fa fa-pinterest-square"
                                                                aria-hidden="true"></i></a>&nbsp;&nbsp;

                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>


</body>

</html>
