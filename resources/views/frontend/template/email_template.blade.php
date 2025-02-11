<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <title>Contact us response - {{$data['site_name']}}</title>
    <style>
        @media only screen and (max-width: 600px) {
            .main {
                width: 320px !important;
            }

            .top-image {
                width: 100% !important;
            }
            .inside-footer {
                width: 320px !important;
            }
            table[class="contenttable"] {
                width: 320px !important;
                text-align: left !important;
            }
            td[class="force-col"] {
                display: block !important;
            }
            td[class="rm-col"] {
                display: none !important;
            }
            .mt {
                margin-top: 15px !important;
            }
            *[class].width300 {width: 255px !important;}
            *[class].block {display:block !important;}
            *[class].blockcol {display:none !important;}
            .emailButton{
                width: 100% !important;
            }

            .emailButton a {
                display:block !important;
                font-size:18px !important;
            }

        }
    </style>
</head>
<body link="#00a5b5" vlink="#00a5b5" alink="#00a5b5">
<table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
    <tr>
        <td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                <tr>
                    <td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff;border-bottom: 4px solid #2f358b">
                        <a href="https://aurum.com.np/"><img class="top-image" src="{{'https://aurum.com.np/images/uploads/settings/'.@$data['logo']}}" style="line-height: 1;max-width: 100%;height: auto;padding-bottom: 10px;" alt="aurum"></a>
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
                        <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                            <tr>
                                <td class="head-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 28px;line-height: 34px;font-weight: bold; text-align: center;">
                                    <div class="mktEditable" id="main_title">
                                        {{$data['site_name']}}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="sub-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;padding-top:5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 18px;line-height: 29px;font-weight: bold;text-align: center;">
                                    <div class="mktEditable" id="intro_title">
                                        Contact form's message
                                    </div></td>
                            </tr>
                            <tr>
                                <td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"></td>
                            </tr>
                            <tr>
                                <td class="grey-block" style="border-collapse: collapse;border: 0;margin: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff; text-align:center;">
                                    <div class="mktEditable" id="cta">
                                        <strong>Message from:</strong>{{ $data['fullname'] }} , {{ $data['email'] }}<br>
                                        <strong>Inquiry about: </strong> {{ $data['subject'] }} <br><br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 15px 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 21px;">
                                    <hr size="1" color="#eeeff0">
                                </td>
                            </tr>
                            <tr>
                                <td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                    <div class="mktEditable" id="main_text">
                                        Additional Message:<br><br>
                                        {{ $data['message'] }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
                                    &nbsp;<br>
                                </td>
                            </tr>
                          

                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:10px; font-family: Arial, sans-serif; -webkit-text-size-adjust: none;" align="center">
                        <br/><span style="font-size:15px; font-family: Arial, sans-serif; -webkit-text-size-adjust: none;" >
												You can reach out to {{ $data['fullname'] }} via provided email ({{ $data['email'] }}) . Visit dashboard for other actions.
											</span>
                    </td>
                </tr>

                <tr bgcolor="#fff" style="border-top: 4px solid #2f358b;">
                    <td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
                        <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                            <tr>
                                <td class="inside-footer" align="center" valign="middle" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 16px;vertical-align: middle;text-align: center;width: 580px;">
                                    <div id="address" class="mktEditable">
                                        <b>{{$data['site_name']}}</b><br>
                                        {{$data['address']}}<br>
                                        {{$data['site_email']}}, {{$data['phone']}}<br>
                                        <a style="color: #2f358b;" href="https://aurum.com.np/contact-us">Contact Us</a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>

