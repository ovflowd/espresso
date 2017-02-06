    <!-- TOP TABS -->
    <div class="tabwrap-main">
        <div class="tabon-main"><img src="images/dashboard.png" style="vertical-align:middle" /> <a href="#">Dashboard</a></div>
        <div class="taboff-main"><img src="images/system.png" style="vertical-align:middle" /> <a href="#">Server</a></div>
        <div class="taboff-main"><img src="images/tools.png" style="vertical-align:middle" /> <a href="#">Site & Content</a></div>
        <div class="taboff-main"><img src="images/components.png" style="vertical-align:middle" /> <a href="#">HoloCMS</a></div>
        <div class="taboff-main"><img src="images/admin.png" style="vertical-align:middle" /> <a href="#">Users & Moderation</a></div>
        <div class="taboff-main"><img src="images/help.png" style="vertical-align:middle" /> <a href="#">Help</a></div>

        <div class="logoright"><br />&nbsp;&nbsp;&nbsp;</div>
    </div>
    <!-- / TOP TABS -->

    <div class="sub-tab-strip">
        <div class="global-memberbar">
            Welcome <strong>{{ Auth::user()->username }}</strong> [
            <a href="#" target="_blank">Return to site</a> &middot;
            <a href="/logout">Log Out</a>
            ]
        </div>
        <div class="navwrap"><a href="index.php?p=dashboard">Espreso Housekeeping</a></div>
    </div>