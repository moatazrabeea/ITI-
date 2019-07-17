@extends('layouts.app')
<style>
    h1, h2, h3 {
        margin: 0;
        font-weight: normal;
        color: #1b1e21;
    }

    h1 {
        font-size: 197%;
    }

    h2 {
        font-size: 167%;
    }

    h3 {
        font-size: 100%;
        font-weight: bold;
    }

    p, ol, ul {
        line-height: 170%;
    }

    p {
    }

    ol {
        margin-left: 0;
        padding-left: 0;
        list-style-position: inside;
    }

    ul {
        margin-left: 0;
        padding-left: 0;
        list-style: none;
    }

    ul li {
        padding-left: 15px;
        background: url(images/img07.gif) no-repeat 0px 7px;
    }

    blockquote {
        margin: 0;
        padding-left: 20px;
        font-style: italic;
    }

    blockquote * {
        line-height: normal;
    }

    a {
        color: #E6F6FF;
    }

    a:hover {
        text-decoration: none;
        color: #FFFFFF;
    }

    img {
        border: 5px solid #1777B1;
    }

    img.left {
        float: left;
        margin: 3px 15px 0 0;
    }

    img.right {
        float: right;
        margin: 3px 0 0 15px;
    }

    hr {
        display: none;
    }

    /* Menu */

    #menu {
        width: 760px;
        height: 80px;
        margin: 0 auto;
        padding: 0 5px 5px 5px;
        background: #1777B1;
    }

    #menu ul {
        margin: 0;
        padding: 0;
        list-style: none;
        line-height: normal;
    }

    #menu li {
        display: inline;
        margin: 0;
        padding: 0;
    }

    #menu a {
        display: block;
        float: left;
        width: 125px;
        height: 53px;
        padding: 27px 0 0 0;
        background: #A8D7F8 url({{asset("images/book2.jpg")}}) no-repeat;
        border-left: 4px solid #1b1e21;
        text-decoration: none;
        text-align: center;
        font-size: 136%;
        color: #1b1e21;
    }

    #menu a:hover {
        background: #FF9009 url({{asset("images/book2.jpg")}}) no-repeat;
        color: #005826;
    }

    #menu .active a {
        background: #A8DC35 url({{asset("images/book2.jpg")}}) no-repeat;
        border: none;
        color: #E80732;
    }

    /* Header */

    #header {
        width: 760px;
        height: 220px;
        margin: 0 auto;
        padding: 0 5px 5px 5px;
        background: #1777B1 url({{asset("images/book1.jpg")}}) no-repeat 5px 0px;
    }

    /* Logo */

    #logo {
        float: right;
        width: 345px;
        height: 220px;
        background: #3FD9EC url({{asset("images/book1.jpg")}}) no-repeat;
    }

    #logo h1, #logo h2 {
        text-align: center;
    }

    #logo h1 {
        padding-top: 77px;
        font-size: 240%;
    }

    #logo h2 {
        font-size: 150%;
    }

    #logo a {
        text-decoration: none;
        color: #144B6B;
    }

    /* Page */

    #page {
        width: 730px;
        margin: 0 auto;
        padding: 30px 0;
    }

    /* Content */

    #content {
        float: left;
        width: 375px;
        padding-top: 8px;
        height: 2000px;
    }

    .twocols {
    }

    .twocols .title {
        padding-bottom: 10px;
        border-bottom: 1px solid #4AF4FE;
    }

    .twocols .col1, .twocols .col2 {
        width: 175px;
    }

    .twocols .col1 {
        float: left;
    }

    .twocols .col2 {
        float: right;
    }

    .twocols ul {
    }

    .twocols ul li {
        padding-left: 0;
    }

    /* Sidebar */

    #sidebar {
        float: right;
        width: 310px;
    }

    .boxed {
    }

    .boxed .title {
        height: 33px;
        margin: 0;
        padding: 12px 0 0 20px;
        background: #3FD9EC url(images/img06.jpg) no-repeat;
        text-transform: uppercase;
        font-size: 136%;
        color: #144B6B;
    }

    .boxed .content {
        padding: 20px;
    }

    .boxed h3 {
        margin: 0;
    }

    .boxed p, .boxed ul, .boxed ol {
        margin: 0;
        padding: 0;
        list-style: none;
        line-height: normal;
    }

    .boxed ul {
    }

    .boxed ul li {
        padding: 10px 15px;
        border-top: 1px solid #1b1e21;
    }

    .boxed ul li.first {
        border: none;
    }

    /* Search */

    #search {
    }

    #search form {
        margin: 0;
        padding: 0;
    }

    #search fieldset {
        margin: 0;
        padding: 0;
        border: none;
    }

    #search p {
        margin: 0;
        font-size: 85%;
    }

    #searchinput {
        width: 180px;
    }

    #searchsubmit {
    }

    /* Footer */

    #footer {
        width: 740px;
        margin: 0 auto;
        height: 30px;
        padding: 10px;
        background: #1777B1;
    }

    #footer p {
        margin: 0;
        line-height: normal;
        font-size: 85%;
    }

    #footer a {
    }

    #legal {
        float: left;
    }

    #links {
        float: right;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="container" >
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading"style="font-size: xx-large">book fair</div>

                                <div class="panel-body"style="height: 1000px;background-color: #faebcc">

                                    <div id="content" style="width: 800px;background-color: #95999c" >
                                        <div style="margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid #4AF4FE;">
                                            <h1 class="title">Welcome to Our Website!</h1>
                                            <p><img src="{{asset("images/book1.jpg")}}" alt="" class="left" height="160" width="200"></p>
                                            <p><strong>book fair</strong> One web page for every book ever published. It's a lofty but achievable goal.

                                                To build Open Library, we need hundreds of millions of book records, a wiki interface, and lots of people who are willing to contribute their time and effort to building the site.</p>
                                            <h2>read more</h2>
                                            <p>To date, we have gathered over 20 million records from a variety of large catalogs as well as single contributions, with more on the way.

                                                Open Library is an open project: the software is open, the data are open, the documentation is open, and we welcome your contribution</p>
                                            <blockquote>
                                                <p>“Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget.”</p>
                                            </blockquote>
                                        </div>
                                        <div>&nbsp;</div>
                                        <div class="twocols" style="height: 500px">
                                            <div class="col1">
                                                <h3 class="title">Top 12 websites to download free books online</h3>

                                                <li>Open Library. ...</li>
                                                <li>Project Gutenberg. ...</li>
                                                <li>ManyBooks. ...</li>
                                                <li>Bookboon. ...</li>
                                                <li>Feedbooks. ...</li>
                                                <li>Free-eBooks. ...</li>
                                                <li>LibriVox. ...</li>
                                                <li>Smashwords.</li>

                                            </div>
                                            <div class="col2">
                                                <h3 class="title">the quation which the people asked </h3>
                                                <ul class="list">
                                                    <ol>How do I borrow books from the library online?</ol>
                                                    <ol>Where can I read books online for free?</ol>
                                                    <ol>Are there any free online libraries?</ol>
                                                    <ol>Does my library use OverDrive?</ol>
                                                    <ol>Is Open Library free?</ol>
                                                    <ol>Where can I download free best seller books?</ol>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end content -->
                                    <!-- end sidebar -->
                                    <div style="clear: both;">&nbsp;</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<footer id="ttr_footer" style="background-color: black">
    <div class="ttr_footerHome_html_row0 row">
        <div class="post_column col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <div class="ttr_footerHome_html_column00">
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                <div class="html_content"><p>&nbsp;</p></div>
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
            </div>
        </div>
        <div class="post_column col-lg-2 col-md-3 col-sm-3 col-xs-11">
            <div class="ttr_footerHome_html_column01">
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                <div class="html_content"><p style="margin:0em 0em 1.43em 0em;"><br style="font-family:'Museo 700','Verdana';font-weight:600;font-size:2.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0em 0em 1.43em 0em;"><span style="font-family:'Museo 700','Verdana';font-weight:600;font-size:1.571em;color:rgba(255,255,255,1);">Contact Us:-</span></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Verdana';color:rgba(255,255,255,1);">550 haram Street</span></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Verdana';color:rgba(255,255,255,1);">Egypt, KS 67214 </span></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><a HREF="#" class="tt_link" target="_self"><span style="font-family:'Verdana';font-weight:700;font-size:1.143em;color:rgba(255,255,255,1);">+316 962 2000 </span></a></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Verdana';color:rgba(255,255,255,1);">ragabmostafa611@gmail</span></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><br style="font-family:'Verdana';color:rgba(255,255,255,1);" /></p></div>
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
            </div>
        </div>
        <div class="clearfix visible-xs-block">
        </div>
        <div class="post_column col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <div class="ttr_footerHome_html_column02">
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                <div class="html_content"><p>&nbsp;</p></div>
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
            </div>
        </div>
        <div class="post_column col-lg-3 col-md-3 col-sm-3 col-xs-11">
            <div class="ttr_footerHome_html_column03">
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                <div class="html_content"><p><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:4.29em 0em 0em 0em;"><span><img class="ttr_uniform" src="{{asset("images/book1.jpg")}}" style="max-width:218px;max-height:48px;" /></span></span><br style="font-family:'Verdana';color:rgba(255,255,255,1);" /></p><p style="line-height:1.76056338028169;"><span style="font-family:'Verdana';color:rgba(255,255,255,1);">We are four web developer ragab mostafa&fifty&mohamed emary&motaz</span></p><p style="margin:0.36em 0em 0.36em 1.43em;line-height:1.76056338028169;"><br style="font-family:'Verdana';color:rgba(255,255,255,1);" /></p></div>
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
            </div>
        </div>
        <div class="clearfix visible-xs-block">
        </div>
        <div class="post_column col-lg-2 col-md-1 col-sm-1 col-xs-1">
            <div class="ttr_footerHome_html_column04">
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                <div class="html_content"><p>&nbsp;</p></div>
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
            </div>
        </div>
        <div class="post_column col-lg-2 col-md-3 col-sm-3 col-xs-11">
            <div class="ttr_footerHome_html_column05">
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                <div class="html_content"><p style="margin:0em 0em 1.43em 0em;"><br style="font-family:'Museo 700','Verdana';font-weight:600;font-size:2.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0em 0em 1.43em 0em;"><span style="font-family:'Museo 700','Verdana';font-weight:600;font-size:1.571em;color:rgba(255,255,255,1);">Follow Us:-</span></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><a HREF="http://www.facebook.com" class="tt_link" target="_self"><span style="font-family:'Verdana';font-weight:700;color:rgba(255,255,255,1);">Facebook</span></a></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><a HREF="http://www.linkedIn.com" class="tt_link" target="_self"><span style="font-family:'Verdana';font-weight:700;color:rgba(255,255,255,1);">LinkedIn</span></a></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><a HREF="http://www.twitter.com" class="tt_link" target="_self"><span style="font-family:'Verdana';font-weight:700;color:rgba(255,255,255,1);">Twitter</span></a></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><a HREF="http://www.youtube.com" class="tt_link" target="_self"><span style="font-family:'Verdana';font-weight:700;color:rgba(255,255,255,1);">YouTube</span></a></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><a HREF="http://www.plus.google.com" class="tt_link" target="_self"><span style="font-family:'Verdana';font-weight:700;color:rgba(255,255,255,1);">Google+</span></a></p><p style="margin:0em 0em 0em 0em;">&nbsp;</p></div>
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
            </div>
        </div>
        <div class="clearfix visible-sm-block visible-md-block visible-xs-block">
        </div>
    </div>
    <div class="ttr_footer_bottom_footer">
        <div class="ttr_footer_bottom_footer_inner">
            <div id="ttr_copyright">
                <a href="#">
                    Copyright@ragab.com
                </a>
            </div>
        </div>
    </div>
</footer>

@endsection
