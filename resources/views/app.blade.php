<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional/DTD">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-1.11.2.min.js"></script>
    <title>{{$title}}</title>
</head>
<body>
<script type='text/javascript'>//<![CDATA[
    $(window).load(function(){
        $(function(){
            // Check the initial Poistion of the Sticky Header
            var stickyHeaderTop = $('#stickyheader').offset().top;

            $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                    $('#stickyheader').css({position: 'fixed', top: '0px'});
                    $('#stickyalias').css('display', 'block');
                } else {
                    $('#stickyheader').css({position: 'static', top: '0px'});
                    $('#stickyalias').css('display', 'none');
                }
            });
        });
    });//]]>

</script>
<div class="container-fluid" style="padding-right: 0; padding-left: 0;">

        <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li>

            </li>
        </ul>
        <nav class="navbar navbar-default" role="navigation"   id="stickyheader" >
            <script type="text/javascript">
                function open_win() {
                    window.open("http://www.ecampaignstats.com/cp/index.php/lprd2/reports/single_offers");
                    window.open("http://www.ecampaignstats.com/cp/index.php/lprd2/reports/campaign_links_below_percentage");
                    window.open("http://www.ecampaignstats.com/cp/index.php/lprd2/reports/missing_traffic");
                    window.open("http://www.ecampaignstats.com/cp/index.php/lprd2/reports/missing_campaigns");
                }
            </script>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Menu
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/stats">Stats</a></li>
                            <li><a onclick="open_win()">Reports</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/about">About</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

        <div class="page-header clearfix" style="margin:0px;margin-bottom: 20px;height: 15px;padding-bottom: 0px;border-bottom-width: 0px;">

            <div class="panel panel-primary" style="padding:0; margin: 15px;">

                <div class="panel panel-primary panel-heading" style="padding: 30px;margin-bottom: 10px;">
                    <div class="panel-title pull-left"><p>{{$title}}</p></div><div class="pull-right" style="margin-top: -9px;"><a href="{{$url}}" style="float: right;"><button  class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-refresh" style="padding:2px;font-size:larger"></span>Reset</button></a></div>
                </div>
                <div class="panel-body" style="padding-right: 0px; padding-left: 0px;">
                    <div class="panel">
                        @yield('content')
                    </div>

                </div>
                <br />
                <br />

            </div>
        </div>

            <div class="panel-footer col-sm-16" style="position: fixed; bottom: 0; left: 0; width: 100%; text-align: center;">
                <p>Copyright 2017, Jonathan Green</p>
            </div>
</div>

</body>
</html>
