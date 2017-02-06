@extends("layouts.header")

@section("content")
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div align="center">
            <div style="width:500px">
                <div class="outerdiv" id="global-outerdiv"><!-- OUTERDIV -->
                    <table cellpadding="0" cellspacing="8" width="100%" id="tablewrap">
                        <tr>
                            <td id="rightblock">
                                <div>
                                    <form id="loginform" action="/" method="POST">
                                        <input type="hidden" name="qstring" value="" />
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td width="200" class="tablerow1" valign="top" style="border:0px;width:200px">
                                                    <div style="text-align:center;padding-top:20px">
                                                        <img src="/images/acp-login-lock.gif" alt="Housekeeping" border="0" />
                                                    </div>
                                                    <br />
                                                    <div class="desctext" style="font-size:10px">
                                                        <div align="center"><strong>Welcome to Housekeeping</strong></div>
                                                        <br />
                                                        <div style="font-size:9px;color:gray">Please login with your valid moderator/administrator credentials. This service is monitored 24/7.<br /><br />If you have forgot your password, please use the <a href="../forgot.php">recovery tool</a> or contact your system administrator.</div>
                                                    </div>
                                                </td>
                                                <td width="300" style="width:300px" valign="top">
                                                    <table width="100%" cellpadding="5" cellspacing="0" border="0">
                                                        <tr>
                                                            <td colspan="2" align="center">
                                                                <br />
                                                                <img src="/images/espreso-logo.gif" alt="Espreso">
                                                                <div style="font-weight:bold;color:red">
                                                                    @if(Session::has('error'))
                                                                        {{ session('error') }}
                                                                    @endif
                                                                </div><br />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">
                                                                <strong>Username</strong>
                                                            </td>
                                                            <td>
                                                                <input style="border:1px solid #AAA" type="text" size="20" name="username" id="namefield" value="" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">
                                                                <strong>Password</strong>
                                                            </td>
                                                            <td>
                                                                <input style="border:1px solid #AAA" type="password" size="20" name="password" value="" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" align="center">
                                                                <input type="submit" style="border:1px solid #AAA" value="Sign in" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <br />
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        {{ csrf_field() }}
                                    </form>

                                </div>
                            </td>
                        </tr>
                    </table>
                </div><!-- / OUTERDIV -->

            </div>
        </div>
@stop