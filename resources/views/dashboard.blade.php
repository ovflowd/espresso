@extends("layouts.header")

@section("content")
    @include("layouts.subheader")

    <div class="outerdiv" id="global-outerdiv">
        <table cellpadding="0" cellspacing="8" width="100%" id="tablewrap">
            <tr>	<td width="100%" valign="top" id="rightblock">
                    <div><!-- RIGHT CONTENT BLOCK -->


                        <div style="font-size:30px; padding-left:7px; letter-spacing:-2px; border-bottom:1px solid #EDEDED">
                            Espreso Housekeeping
                        </div>
                        <br />
                        <div id="ipb-get-members" style="border:1px solid #000; background:#FFF; padding:2px;position:absolute;width:120px;display:none;z-index:100"></div>
                        <!--in_dev_notes-->
                        <!--in_dev_check-->
                        <table border="0" width="100%" cellpadding="0" cellspacing="4">
                            <tr>
                                <td valign="top" width="75%">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                <div class="homepage_pane_border">
                                                    <div class="homepage_section">Tasks and Statistics</div>
                                                    <table width="100%" cellspacing="0" cellpadding="4">
                                                        <tr>
                                                            <td width="50%" valign="top">
                                                                <div class="homepage_border">
                                                                    <div class="homepage_sub_header">System Overview</div>
                                                                    <table width="100%" cellpadding="4" cellspacing="0">
                                                                        <tr>
                                                                            <td class="homepage_sub_row" width="60%"><strong>Espreso Version</strong> &nbsp;(<a href="#">History</a>)</td>
                                                                            <td class="homepage_sub_row" width="40%"><strong>v1.0.0</strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Members</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Rooms</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Furniture</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Groups</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Stafflog Entries</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Active Bans</strong></td>
                                                                            <td class="homepage_sub_row">
                                                                                <a href="index.php?p=banlist"></a>
                                                                            </td>
                                                                        </tr>

                                                                    </table>
                                                                </div>
                                                            </td>
                                                            <td width="50%" valign="top">
                                                                <div class="homepage_border">
                                                                    <div class="homepage_sub_header">Server Setup</div>
                                                                    <table width="100%" cellpadding="4" cellspacing="0">
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Game Port</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- MUS Port</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Maximum Game Connections</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Trading Enabled</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Recycler Enabled</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="homepage_sub_row"><strong>Wordfilter Enabled</strong></td>
                                                                            <td class="homepage_sub_row">

                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </td>		   </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="homepage_pane_border">
                                                    <div class="homepage_section">Communication</div>
                                                    <table width="100%" cellspacing="0" cellpadding="4">
                                                        <tr>
                                                            <td valign="top" width="50%">
                                                                <div class="homepage_border">
                                                                    <div class="homepage_sub_header">Housekeeping Notes</div>
                                                                    <br /><div align="center">
                                                                        <form action="index.php?p=dashboard&do=save" method="post">
                                                                            <textarea name="notes" style="background-color:#F9FFA2;border:1px solid #CCC;width:95%;font-family:verdana;font-size:10px" rows="8" cols="25"></textarea>
                                                                            <div><br /><input type="submit" value="Save Admin Notes" class="realbutton" /></div>
                                                                        </form>
                                                                    </div><br />
                                                                </div>
                                                            </td>
                                                            <td width="50%" valign="top">
                                                                <div class="homepage_border">
                                                                    <div class="homepage_sub_header">Espreso Administrators</div>
                                                                    <table width="100%" cellpadding="4" cellspacing="0">

                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                                <td valign="top" width="25%">
                                    <div id="acp-update-wrapper">
                                        <div class="homepage_pane_border" id="acp-update-normal">
                                            <div class="homepage_section">Espreso Updater</div>
                                            <div style="font-size:12px;padding:4px; text-align:center">
                                                <p>
                                                    We are preparing an updater.. maybe.. it's classified.
                                                </p>
                                            </div>
                                        </div>
                                        <br />
                                    </div>
                                    <div id="acp-update-wrapper">
                                        <div class="homepage_pane_border" id="acp-update-normal">
                                            <div class="homepage_section">Espreso Developers</div>
                                            <div style="font-size:12px;padding:4px;">
                                                <p>
                                                    <ul>
                                                        <li>Jérémy <b>Emetophobic</b> Castellano</li>
                                                        <li>Claudio <b>saamus</b> Santoro</li>
                                                        <li>John <b>Kylon</b> Winfield</li>
                                                        <li>Mike <b>CineXMike</b></li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                        <br />
                                    </div>
                                    <div id="acp-update-wrapper">
                                        <div class="homepage_pane_border" id="acp-update-normal">
                                            <div class="homepage_section">Need assistance?</div>
                                            <div style="font-size:12px;padding:4px; text-align:center">
                                                <p>
                                                    Assistance? Now? There's only 2 pages in there
                                                </p>
                                            </div>
                                        </div>
                                        <br />
                                    </div>
                    </div><!-- / RIGHT CONTENT BLOCK -->
                </td></tr>
        </table>
    </div>
@stop