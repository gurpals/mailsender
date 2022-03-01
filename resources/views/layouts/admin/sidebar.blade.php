    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
               <!-- 
                <li><a href="{{url('/home')}}"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Contacts">Contacts</span></a>
                </li> -->
                <li><a href="{{ url('getCampaingn')}}"><i class="feather icon-lock"></i><span class="menu-title" data-i18n="Account Setting">Campaigns</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>
