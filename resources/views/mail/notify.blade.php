<style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&family=Raleway:wght@300&display=swap');
</style>
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#f9f9f9" id="bodyTable">
    <tbody>
    <tr>
        <td style="padding-right:10px;padding-left:10px;" align="center" valign="top" id="bodyCell">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperWebview" style="max-width:600px">
                <tbody>
                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                            <tr>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
                <tbody>
                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
                            <tbody>
                            <tr>
                                <td style="background-color:#EF4F59;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="padding-top: 60px; padding-bottom: 20px;" align="center" valign="middle" class="emailLogo">
                                    <a href="#" style="text-decoration:none" target="_blank">
                                        <img alt="" border="0" src="{{(asset($setting->logo)) ?? ''}}" style="width:100%;max-width:150px;height:auto;display:block" width="150">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 20px;" align="center" valign="top" class="imgHero">
                                    <a href="#" style="text-decoration:none" target="_blank">
                                        <img alt="" border="0" src="https://ebharbook.com/public/mess.gif" style="width:100%;max-width:150px;height:auto;display:block;border-radius: 50%" width="150">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="mainTitle">
                                    <h2 class="text" style="color:#000;font-family:'Cairo',sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">لديك اشعار جديد</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 30px;padding-top: 20px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="subTitle">
                                    <h4 class="text" style="color:#999;font-family:'Cairo',Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:24px;text-transform:none;text-align:center;padding:0;margin:0">مرحبا يا {{$data->name}}
                                        @if($data->status == 'accepted')
                                            لقد تم قبول طلبك المستجل برقم #{{$data->id}} لخدمة {{$data->service->title}}
                                        @elseif($data->status == 'refused')
                                            نأسف لاخبارك بانه تم رفض طلبك المستجل برقم #{{$data->id}} لخدمة {{$data->service->title}}
                                        @elseif($data->status == 'ended')
                                            نحن سعداء لخدمتك ونتمني ان نحظي برضاك دائما <i class="fa fa-heart text-danger"></i>
                                        @endif
                                    </h4>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
                                        <tbody>
                                        <tr>
                                            <td style="padding-bottom: 20px;" align="center" valign="top" class="description">
                                                <p class="text" style="color:#666;font-family:'Cairo',Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0">
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableButton" style="">
                                        <tbody>
                                        <tr>
                                            <td style="padding-top:20px;padding-bottom:20px" align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:1px;line-height:1px" height="20">&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="center" valign="middle" style="padding-bottom: 40px;" class="emailRegards">
                                    <!-- Image and Link // -->

                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="space">
                            <tbody>
                            <tr>
                                <td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
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
