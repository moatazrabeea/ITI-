@extends('layouts.app')
<style>
    @font-face
    {
        font-family:'Jura';
        font-weight:400;
        font-style:Normal;
        src:url('Fonts/Jura/regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:400;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @media only screen
    and (max-width : 640px)
    {
        .Events form.form-horizontal
        {
            width:100%;
        }
    }
    label
    {
        font-weight:normal;}
    .Events .ttr_footer_bottom_footer_inner,.Events #ttr_footer_top_for_widgets
    {
        position:relative;
        margin:0 auto;
    }
    .Events .ttr_Events_html_row0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:#9D9D9D;
        background:rgba(157,157,157,1);
        background-clip:padding-box;padding-top:40px;
        padding-left:40px;
        padding-right:40px;
        padding-bottom:40px;
    }
    .Events .ttr_Events_html_column00
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        word-wrap:break-word;
    }
    .Events .ttr_Events_html_column00, .ttr_Events_html_column00 p, .ttr_Events_html_column00 .tt_link
    {
        font-size:14px !important;
    }
    .Events .ttr_Events_html_row1
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:20px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .Events .ttr_Events_html_column10
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:20px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Events .ttr_Events_html_column10, .ttr_Events_html_column10 p, .ttr_Events_html_column10 .tt_link
    {
        font-size:14px !important;
    }
    .Events .ttr_Events_html_column11
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:40px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Events .ttr_Events_html_column11, .ttr_Events_html_column11 p, .ttr_Events_html_column11 .tt_link
    {
        font-size:14px !important;
    }
    .Events .ttr_Events_html_column12
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:40px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Events .ttr_Events_html_column12, .ttr_Events_html_column12 p, .ttr_Events_html_column12 .tt_link
    {
        font-size:14px !important;
    }
    .Events .ttr_Events_html_column13
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:40px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Events .ttr_Events_html_column13, .ttr_Events_html_column13 p, .ttr_Events_html_column13 .tt_link
    {
        font-size:14px !important;
    }
    .Events .ttr_Events_html_column14
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:40px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Events .ttr_Events_html_column14, .ttr_Events_html_column14 p, .ttr_Events_html_column14 .tt_link
    {
        font-size:14px !important;
    }
    .Events .ttr_Events_html_column15
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Events .ttr_Events_html_column15, .ttr_Events_html_column15 p, .ttr_Events_html_column15 .tt_link
    {
        font-size:14px !important;
    }
    .Events .ttr_Events_html_column16
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Events .ttr_Events_html_column16, .ttr_Events_html_column16 p, .ttr_Events_html_column16 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_footerEvents_html_column00, .ttr_footerEvents_html_column01, .ttr_footerEvents_html_column02, .ttr_footerEvents_html_column03
    {
        font-size:14px !important;
    }
    .navbar-right .dropdown-menu
    {
        right : auto !important;
    }
    .ttr_menu_items .dropdown-menu
    {
        padding:0px;
    }
    .dropdown-menu
    {
    }
    .navbar-nav ul.dropdown-menu > li
    {
        position: relative;
    }
    .Events .ttr_menu_items.navbar-nav ul.dropdown-menu .sub-menu
    {
        left: 100% ;
        position: absolute;
        top: 0px;
        margin-top: -1px;
    }
    @media only screen
    and (min-width : 1025px)
    {
        .Events.ttr_menu_items .dropdown-menu li:hover > .dropdown-menu
        {
            display: block;
        }
        .Events .ttr_menu_items.navbar-nav ul.dropdown-menu .sub-menu
        {
            left: 100%;
            position: absolute;
            top: 0;
            visibility: hidden;
            margin-top: -1px;
        }
        ul.ttr_menu_items.nav li.dropdown:hover > ul.dropdown-menu
        {
            display:block;
        }
        .Events .ttr_menu_items .dropdown-menu li:hover .sub-menu
        {
            visibility: visible;
        }
        .Events .ttr_menu_items  li:hover ul.child li a
        {
            display:block;
        }
    }
    @media only screen
    and (min-width : 1025px)
    {
    }
    @media only screen
    and (min-width : 768px)

    {

    }
    .Events .nav-pills
    {
        padding:0;
        list-style:none;
        text-align:left;
        zoom:1;
    }
    .Events .nav.ttr_menu_items  li:hover  li:hover   li:hover a.subchild

    {
    }
    .Events .nav.ttr_menu_items  li:hover    li:hover  li a.subchild

    {
    }
    .Events #ttr_slideshow_inner ul
    {
        list-style: outside none none;

    }
    .Events #ttr_slideshow_inner
    {
        position:relative;
        overflow:hidden;
        width:100%;

    }
    .Events #ttr_slideshow_inner ul li > a
    {
        position:absolute;
        overflow:hidden;
        width:100%;

    }
    .Events #ttr_slideshow_inner > ul li
    {
        position:absolute;

    }
    .Events .ttr_slideshow_last div a,.Events .ttr_slideshow_last a
    {
        pointer-events:auto;

    }
    .Events #ttr_footer_designed_by_links #ttr_footer_designed_by
    {
        display:inline-block;
    }
    .Events #ttr_footer_designed_by_links a ,.Events #ttr_footer_designed_by_links a:link,.Events #ttr_footer_designed_by_links a:visited,.Events #ttr_footer_designed_by_links a:hover
    {
        display:inline-block;}
    .Events .ttr_block_content, .Events .ttr_block_content p
    {
        font-size:14px !important;
    }
    .Events .html_content a:hover, .html_content a:focus
    {
        text-decoration:none;}
    .Events #ttr_content_margin
    {
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        box-sizing:border-box;
    }
    .Events #ttr_content
    {
        float: left;
        width: 100%;
        clear: none;
    }
    .Events table
    {
        border-collapse: separate !important;
        border-spacing: 2px;
    }
    .left-button
    {
        transform:rotate(0deg);
        -moz-transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
        -o-transform:rotate(0deg);
        position:absolute;
        display:block;
        top: 255.5px;
        left:1.48%;
        margin:0;
    }
    .right-button
    {
        position:absolute;
        display:block;
        top: 255.5px;
        left:95.94%;
        margin:0;
    }
    #prev span
    {
        background-image:url(images/Leftbutton.png);
        display:block;
        height: 34px;
        width: 34px;
        text-indent:-999px;
        font-size:0px;
    }
    #next span
    {
        background-image:url(images/Rightbutton.png);
        display:block;
        height: 34px;
        width: 34px;
        text-indent:-999px;
        font-size:0px;
    }

    @media only screen
    and (min-width : 768px)
    and (max-width : 1024px)
    {
        @font-face
        {
            font-family:'Jura';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Jura/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @media only screen
        and (max-width : 640px)
        {
            .Events form.form-horizontal
            {
                width:100%;
            }
        }
        label
        {
            font-weight:normal;}
        .Events .totopshow {
            display: block;}
        .Events .container
        {
            width:100%;

        }
        .Events .ttr_footer_bottom_footer_inner,.Events #ttr_footer_top_for_widgets
        {
            position:relative;
            margin:0 auto;
        }
        .Events .ttr_Events_html_column00, .ttr_Events_html_column00 p, .ttr_Events_html_column00 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_row1
        {
            margin-top:40px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .Events .ttr_Events_html_column10, .ttr_Events_html_column10 p, .ttr_Events_html_column10 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column11, .ttr_Events_html_column11 p, .ttr_Events_html_column11 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column12, .ttr_Events_html_column12 p, .ttr_Events_html_column12 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column13, .ttr_Events_html_column13 p, .ttr_Events_html_column13 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column14, .ttr_Events_html_column14 p, .ttr_Events_html_column14 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column15, .ttr_Events_html_column15 p, .ttr_Events_html_column15 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column16, .ttr_Events_html_column16 p, .ttr_Events_html_column16 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_footerEvents_html_column00, .ttr_footerEvents_html_column01, .ttr_footerEvents_html_column02, .ttr_footerEvents_html_column03
        {
            font-size:14px !important;
        }
        .Events nav#ttr_menu
        {
            max-width:100%;

        }
        .Events .ttr_slideshow
        {
            display: none;
        }
        .Events .ttr_slideshow
        {
            width:100%;
        }
        .Events #ttr_slideshow_inner ul
        {
            list-style: outside none none;

        }
        .Events #ttr_slideshow_inner
        {
            position:relative;
            overflow:hidden;
            width:100%;

        }
        .Events #ttr_slideshow_inner ul li > a
        {
            position:absolute;
            overflow:hidden;
            width:100%;

        }
        .Events #ttr_slideshow_inner > ul li
        {
            position:absolute;

        }
        .Events .ttr_slideshow_last div a,.Events .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .Events #ttr_footer_designed_by_links #ttr_footer_designed_by
        {
            display:inline-block;
        }
        .Events #ttr_footer_designed_by_links a ,.Events #ttr_footer_designed_by_links a:link,.Events #ttr_footer_designed_by_links a:visited,.Events #ttr_footer_designed_by_links a:hover
        {
            display:inline-block;}
        .Events .ttr_block_content, .Events .ttr_block_content p
        {
            font-size:14px !important;
        }
        .Events #ttr_content
        {
            float: left;
            width: 100%;
            clear: none;
        }
        .Events table
        {
            border-collapse: separate !important;
            border-spacing: 2px;
        }
        .Events .postedon
        {
            display: none;
        }
        .Events #ttr_sidebar_left
        {
            width: 0%;
        }
        .Events #ttr_content
        {
            width: 100%;
        }
        .Events #ttr_sidebar_right
        {
            width: 0%;
        }
    }

    @media only screen
    and (max-width : 767px)
    {
        @font-face
        {
            font-family:'Jura';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Jura/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @media only screen
        and (max-width : 640px)
        {
            .Events form.form-horizontal
            {
                width:100%;
            }
        }
        label
        {
            font-weight:normal;}
        .Events .totopshow {
            display: block;}
        .Events .container
        {
            width:100%;

        }
        .Events .ttr_footer_bottom_footer_inner,.Events #ttr_footer_top_for_widgets
        {
            position:relative;
            margin:0 auto;
        }
        .Events #navigationmenu
        {
            width:auto;
            margin:0 auto;
        }
        .Events .ttr_Events_html_column00, .ttr_Events_html_column00 p, .ttr_Events_html_column00 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_row1
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:40px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:40px;
        }
        .Events .ttr_Events_html_column10
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Events .ttr_Events_html_column10, .ttr_Events_html_column10 p, .ttr_Events_html_column10 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column11, .ttr_Events_html_column11 p, .ttr_Events_html_column11 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column12, .ttr_Events_html_column12 p, .ttr_Events_html_column12 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column13, .ttr_Events_html_column13 p, .ttr_Events_html_column13 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column14, .ttr_Events_html_column14 p, .ttr_Events_html_column14 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column15, .ttr_Events_html_column15 p, .ttr_Events_html_column15 .tt_link
        {
            font-size:14px !important;
        }
        .Events .ttr_Events_html_column16, .ttr_Events_html_column16 p, .ttr_Events_html_column16 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_footerEvents_html_column00, .ttr_footerEvents_html_column01, .ttr_footerEvents_html_column02, .ttr_footerEvents_html_column03
        {
            font-size:14px !important;
        }
        .Events nav#ttr_menu
        {
            max-width:100%;

        }
        .Events .ttr_slideshow
        {
            display: none;
        }
        .Events .ttr_slideshow
        {
            width:100%;
        }
        .Events #ttr_slideshow_inner ul
        {
            list-style: outside none none;

        }
        .Events #ttr_slideshow_inner
        {
            position:relative;
            overflow:hidden;
            width:100%;

        }
        .Events #ttr_slideshow_inner ul li > a
        {
            position:absolute;
            overflow:hidden;
            width:100%;

        }
        .Events #ttr_slideshow_inner > ul li
        {
            position:absolute;

        }
        .Events .ttr_slideshow_last div a,.Events .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .Events #ttr_footer_designed_by_links #ttr_footer_designed_by
        {
            display:inline-block;
        }
        .Events #ttr_footer_designed_by_links a ,.Events #ttr_footer_designed_by_links a:link,.Events #ttr_footer_designed_by_links a:visited,.Events #ttr_footer_designed_by_links a:hover
        {
            display:inline-block;}
        .Events .ttr_block_content, .Events .ttr_block_content p
        {
            font-size:14px !important;
        }
        .Events #ttr_content
        {
            float: left;
            width: 100%;
            clear: none;
        }
        .Events table
        {
            border-collapse: separate !important;
            border-spacing: 2px;
        }
        .Events .postedon
        {
            display: none;
        }
        .Events .open > .child
        {
            display: block;

        }
        .Events .nav.navbar-nav li.ttr_menu_items_parent a
        {
            margin-bottom:0px;

        }
        .Events ul.ttr_menu_items
        {
            padding-top:0 !important;

        }
        .navbar-nav ul.dropdown-menu .sub-menu
        {
            left: 0px !important;
            position: static !important;
            top: 0px !important;
            float:none !important;
        }
        .Events .ttr_vmenu_items .open .child {float: none;
            position: static;
            list-style:none outside none;

        }
        .Events #ttr_menu .navbar-toggle
        {

        }
        .Events #ttr_menu .navbar-toggle
        {
            border-radius: 0;
            padding: 9px 7px;
            margin-right:3px;
            float:right;

        }
        .Events #ttr_menu .navbar-toggle:hover,.Events #ttr_menu .navbar-toggle:focus
        {
            margin-right:3px;
            float:right;

        }
        .Events #ttr_menu .navbar-toggle,.Events #ttr_menu .navbar-toggle:hover,.Events #ttr_menu .navbar-toggle:focus
        {

        }
        .Events #ttr_menu.navbar
        {
            height:auto !important;

        }
        .Events #ttr_menu .navbar-nav
        {
            margin:0;

        }
    }

    @font-face
    {
        font-family:'Jura';
        font-weight:400;
        font-style:Normal;
        src:url('Fonts/Jura/regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:400;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @media only screen
    and (max-width : 640px)
    {
        .Courses form.form-horizontal
        {
            width:100%;
        }
    }
    label
    {
        font-weight:normal;}
    .Courses .ttr_footer_bottom_footer_inner,.Courses #ttr_footer_top_for_widgets
    {
        position:relative;
        margin:0 auto;
    }
    .Courses .ttr_Courses_html_row0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:#9D9D9D;
        background:rgba(157,157,157,1);
        background-clip:padding-box;padding-top:40px;
        padding-left:40px;
        padding-right:40px;
        padding-bottom:40px;
    }
    .Courses .ttr_Courses_html_column00
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        word-wrap:break-word;
    }
    .Courses .ttr_Courses_html_column00, .ttr_Courses_html_column00 p, .ttr_Courses_html_column00 .tt_link
    {
        font-size:14px !important;
    }
    .Courses .ttr_Courses_html_row1
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:20px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .Courses .ttr_Courses_html_column10
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Courses .ttr_Courses_html_column10, .ttr_Courses_html_column10 p, .ttr_Courses_html_column10 .tt_link
    {
        font-size:14px !important;
    }
    .Courses .ttr_Courses_html_column11
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Courses .ttr_Courses_html_column11, .ttr_Courses_html_column11 p, .ttr_Courses_html_column11 .tt_link
    {
        font-size:14px !important;
    }
    .Courses .ttr_Courses_html_column12
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Courses .ttr_Courses_html_column12, .ttr_Courses_html_column12 p, .ttr_Courses_html_column12 .tt_link
    {
        font-size:14px !important;
    }
    .Courses .ttr_Courses_html_column13
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Courses .ttr_Courses_html_column13, .ttr_Courses_html_column13 p, .ttr_Courses_html_column13 .tt_link
    {
        font-size:14px !important;
    }
    .Courses .ttr_Courses_html_column14
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Courses .ttr_Courses_html_column14, .ttr_Courses_html_column14 p, .ttr_Courses_html_column14 .tt_link
    {
        font-size:14px !important;
    }
    .Courses .ttr_Courses_html_column15
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Courses .ttr_Courses_html_column15, .ttr_Courses_html_column15 p, .ttr_Courses_html_column15 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_footerCourses_html_column00, .ttr_footerCourses_html_column01, .ttr_footerCourses_html_column02, .ttr_footerCourses_html_column03
    {
        font-size:14px !important;
    }
    .navbar-right .dropdown-menu
    {
        right : auto !important;
    }
    .ttr_menu_items .dropdown-menu
    {
        padding:0px;
    }
    .dropdown-menu
    {
    }
    .navbar-nav ul.dropdown-menu > li
    {
        position: relative;
    }
    .Courses .ttr_menu_items.navbar-nav ul.dropdown-menu .sub-menu
    {
        left: 100% ;
        position: absolute;
        top: 0px;
        margin-top: -1px;
    }
    @media only screen
    and (min-width : 1025px)
    {
        .Courses.ttr_menu_items .dropdown-menu li:hover > .dropdown-menu
        {
            display: block;
        }
        .Courses .ttr_menu_items.navbar-nav ul.dropdown-menu .sub-menu
        {
            left: 100%;
            position: absolute;
            top: 0;
            visibility: hidden;
            margin-top: -1px;
        }
        ul.ttr_menu_items.nav li.dropdown:hover > ul.dropdown-menu
        {
            display:block;
        }
        .Courses .ttr_menu_items .dropdown-menu li:hover .sub-menu
        {
            visibility: visible;
        }
        .Courses .ttr_menu_items  li:hover ul.child li a
        {
            display:block;
        }
    }
    @media only screen
    and (min-width : 1025px)
    {
    }
    @media only screen
    and (min-width : 768px)

    {

    }
    .Courses .nav-pills
    {
        padding:0;
        list-style:none;
        text-align:left;
        zoom:1;
    }
    .Courses .nav.ttr_menu_items  li:hover  li:hover   li:hover a.subchild

    {
    }
    .Courses .nav.ttr_menu_items  li:hover    li:hover  li a.subchild

    {
    }
    .Courses #ttr_slideshow_inner ul
    {
        list-style: outside none none;

    }
    .Courses #ttr_slideshow_inner
    {
        position:relative;
        overflow:hidden;
        width:100%;

    }
    .Courses #ttr_slideshow_inner ul li > a
    {
        position:absolute;
        overflow:hidden;
        width:100%;

    }
    .Courses #ttr_slideshow_inner > ul li
    {
        position:absolute;

    }
    .Courses .ttr_slideshow_last div a,.Courses .ttr_slideshow_last a
    {
        pointer-events:auto;

    }
    .Courses #ttr_footer_designed_by_links #ttr_footer_designed_by
    {
        display:inline-block;
    }
    .Courses #ttr_footer_designed_by_links a ,.Courses #ttr_footer_designed_by_links a:link,.Courses #ttr_footer_designed_by_links a:visited,.Courses #ttr_footer_designed_by_links a:hover
    {
        display:inline-block;}
    .Courses .ttr_block_content, .Courses .ttr_block_content p
    {
        font-size:14px !important;
    }
    .Courses .html_content a:hover, .html_content a:focus
    {
        text-decoration:none;}
    .Courses #ttr_content_margin
    {
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        box-sizing:border-box;
    }
    .Courses #ttr_content
    {
        float: left;
        width: 100%;
        clear: none;
    }
    .Courses table
    {
        border-collapse: separate !important;
        border-spacing: 2px;
    }

    @media only screen
    and (min-width : 768px)
    and (max-width : 1024px)
    {
        @font-face
        {
            font-family:'Jura';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Jura/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @media only screen
        and (max-width : 640px)
        {
            .Courses form.form-horizontal
            {
                width:100%;
            }
        }
        label
        {
            font-weight:normal;}
        .Courses .totopshow {
            display: block;}
        .Courses .container
        {
            width:100%;

        }
        .Courses .ttr_footer_bottom_footer_inner,.Courses #ttr_footer_top_for_widgets
        {
            position:relative;
            margin:0 auto;
        }
        .Courses .ttr_Courses_html_row0
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:40px;
            padding-left:40px;
            padding-right:40px;
            padding-bottom:40px;
        }
        .Courses .ttr_Courses_html_column00, .ttr_Courses_html_column00 p, .ttr_Courses_html_column00 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_row1
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .Courses .ttr_Courses_html_column10
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Courses .ttr_Courses_html_column10, .ttr_Courses_html_column10 p, .ttr_Courses_html_column10 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_column11, .ttr_Courses_html_column11 p, .ttr_Courses_html_column11 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_column12
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:40px;
            word-wrap:break-word;
        }
        .Courses .ttr_Courses_html_column12, .ttr_Courses_html_column12 p, .ttr_Courses_html_column12 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_column13
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Courses .ttr_Courses_html_column13, .ttr_Courses_html_column13 p, .ttr_Courses_html_column13 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_column14
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Courses .ttr_Courses_html_column14, .ttr_Courses_html_column14 p, .ttr_Courses_html_column14 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_column15, .ttr_Courses_html_column15 p, .ttr_Courses_html_column15 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_footerCourses_html_column00, .ttr_footerCourses_html_column01, .ttr_footerCourses_html_column02, .ttr_footerCourses_html_column03
        {
            font-size:14px !important;
        }
        .Courses nav#ttr_menu
        {
            max-width:100%;

        }
        .Courses .ttr_slideshow
        {
            display: none;
        }
        .Courses .ttr_slideshow
        {
            width:100%;
        }
        .Courses #ttr_slideshow_inner ul
        {
            list-style: outside none none;

        }
        .Courses #ttr_slideshow_inner
        {
            position:relative;
            overflow:hidden;
            width:100%;

        }
        .Courses #ttr_slideshow_inner ul li > a
        {
            position:absolute;
            overflow:hidden;
            width:100%;

        }
        .Courses #ttr_slideshow_inner > ul li
        {
            position:absolute;

        }
        .Courses .ttr_slideshow_last div a,.Courses .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .Courses #ttr_footer_designed_by_links #ttr_footer_designed_by
        {
            display:inline-block;
        }
        .Courses #ttr_footer_designed_by_links a ,.Courses #ttr_footer_designed_by_links a:link,.Courses #ttr_footer_designed_by_links a:visited,.Courses #ttr_footer_designed_by_links a:hover
        {
            display:inline-block;}
        .Courses .ttr_block_content, .Courses .ttr_block_content p
        {
            font-size:14px !important;
        }
        .Courses #ttr_content
        {
            float: left;
            width: 100%;
            clear: none;
        }
        .Courses table
        {
            border-collapse: separate !important;
            border-spacing: 2px;
        }
        .Courses .postedon
        {
            display: none;
        }
        .Courses #ttr_sidebar_left
        {
            width: 0%;
        }
        .Courses #ttr_content
        {
            width: 100%;
        }
        .Courses #ttr_sidebar_right
        {
            width: 0%;
        }
    }

    @media only screen
    and (max-width : 767px)
    {
        @font-face
        {
            font-family:'Jura';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Jura/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @media only screen
        and (max-width : 640px)
        {
            .Courses form.form-horizontal
            {
                width:100%;
            }
        }
        label
        {
            font-weight:normal;}
        .Courses .totopshow {
            display: block;}
        .Courses .container
        {
            width:100%;

        }
        .Courses .ttr_footer_bottom_footer_inner,.Courses #ttr_footer_top_for_widgets
        {
            position:relative;
            margin:0 auto;
        }
        .Courses #navigationmenu
        {
            width:auto;
            margin:0 auto;
        }
        .Courses .ttr_Courses_html_row0
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .Courses .ttr_Courses_html_column00, .ttr_Courses_html_column00 p, .ttr_Courses_html_column00 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_row1
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:40px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:40px;
        }
        .Courses .ttr_Courses_html_column10
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Courses .ttr_Courses_html_column10, .ttr_Courses_html_column10 p, .ttr_Courses_html_column10 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_column11
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Courses .ttr_Courses_html_column11, .ttr_Courses_html_column11 p, .ttr_Courses_html_column11 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_column12
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Courses .ttr_Courses_html_column12, .ttr_Courses_html_column12 p, .ttr_Courses_html_column12 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_column13
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Courses .ttr_Courses_html_column13, .ttr_Courses_html_column13 p, .ttr_Courses_html_column13 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_column14
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Courses .ttr_Courses_html_column14, .ttr_Courses_html_column14 p, .ttr_Courses_html_column14 .tt_link
        {
            font-size:14px !important;
        }
        .Courses .ttr_Courses_html_column15, .ttr_Courses_html_column15 p, .ttr_Courses_html_column15 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_footerCourses_html_column00, .ttr_footerCourses_html_column01, .ttr_footerCourses_html_column02, .ttr_footerCourses_html_column03
        {
            font-size:14px !important;
        }
        .Courses nav#ttr_menu
        {
            max-width:100%;

        }
        .Courses .ttr_slideshow
        {
            display: none;
        }
        .Courses .ttr_slideshow
        {
            width:100%;
        }
        .Courses #ttr_slideshow_inner ul
        {
            list-style: outside none none;

        }
        .Courses #ttr_slideshow_inner
        {
            position:relative;
            overflow:hidden;
            width:100%;

        }
        .Courses #ttr_slideshow_inner ul li > a
        {
            position:absolute;
            overflow:hidden;
            width:100%;

        }
        .Courses #ttr_slideshow_inner > ul li
        {
            position:absolute;

        }
        .Courses .ttr_slideshow_last div a,.Courses .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .Courses #ttr_footer_designed_by_links #ttr_footer_designed_by
        {
            display:inline-block;
        }
        .Courses #ttr_footer_designed_by_links a ,.Courses #ttr_footer_designed_by_links a:link,.Courses #ttr_footer_designed_by_links a:visited,.Courses #ttr_footer_designed_by_links a:hover
        {
            display:inline-block;}
        .Courses .ttr_block_content, .Courses .ttr_block_content p
        {
            font-size:14px !important;
        }
        .Courses #ttr_content
        {
            float: left;
            width: 100%;
            clear: none;
        }
        .Courses table
        {
            border-collapse: separate !important;
            border-spacing: 2px;
        }
        .Courses .postedon
        {
            display: none;
        }
        .Courses .open > .child
        {
            display: block;

        }
        .Courses .nav.navbar-nav li.ttr_menu_items_parent a
        {
            margin-bottom:0px;

        }
        .Courses ul.ttr_menu_items
        {
            padding-top:0 !important;

        }
        .navbar-nav ul.dropdown-menu .sub-menu
        {
            left: 0px !important;
            position: static !important;
            top: 0px !important;
            float:none !important;
        }
        .Courses .ttr_vmenu_items .open .child {float: none;
            position: static;
            list-style:none outside none;

        }
        .Courses #ttr_menu .navbar-toggle
        {

        }
        .Courses #ttr_menu .navbar-toggle
        {
            border-radius: 0;
            padding: 9px 7px;
            margin-right:3px;
            float:right;

        }
        .Courses #ttr_menu .navbar-toggle:hover,.Courses #ttr_menu .navbar-toggle:focus
        {
            margin-right:3px;
            float:right;

        }
        .Courses #ttr_menu .navbar-toggle,.Courses #ttr_menu .navbar-toggle:hover,.Courses #ttr_menu .navbar-toggle:focus
        {

        }
        .Courses #ttr_menu.navbar
        {
            height:auto !important;

        }
        .Courses #ttr_menu .navbar-nav
        {
            margin:0;

        }
    }

    @font-face
    {
        font-family:'Jura';
        font-weight:400;
        font-style:Normal;
        src:url('Fonts/Jura/regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:400;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @media only screen
    and (max-width : 640px)
    {
        .Contact form.form-horizontal
        {
            width:100%;
        }
    }
    label
    {
        font-weight:normal;}
    .Contact .ttr_footer_bottom_footer_inner,.Contact #ttr_footer_top_for_widgets
    {
        position:relative;
        margin:0 auto;
    }
    .Contact .ttr_Contact_html_row0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:#9D9D9D;
        background:rgba(157,157,157,1);
        background-clip:padding-box;padding-top:40px;
        padding-left:40px;
        padding-right:40px;
        padding-bottom:40px;
    }
    .Contact .ttr_Contact_html_column00
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        word-wrap:break-word;
    }
    .Contact .ttr_Contact_html_column00, .ttr_Contact_html_column00 p, .ttr_Contact_html_column00 .tt_link
    {
        font-size:14px !important;
    }
    .Contact .ttr_Contact_html_row1
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .Contact .ttr_Contact_html_column10
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Contact .ttr_Contact_html_column10, .ttr_Contact_html_column10 p, .ttr_Contact_html_column10 .tt_link
    {
        font-size:14px !important;
    }
    .Contact .ttr_Contact_html_column11
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .Contact .ttr_Contact_html_column11, .ttr_Contact_html_column11 p, .ttr_Contact_html_column11 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_footerContact_html_column00, .ttr_footerContact_html_column01, .ttr_footerContact_html_column02, .ttr_footerContact_html_column03
    {
        font-size:14px !important;
    }
    .navbar-right .dropdown-menu
    {
        right : auto !important;
    }
    .ttr_menu_items .dropdown-menu
    {
        padding:0px;
    }
    .dropdown-menu
    {
    }
    .navbar-nav ul.dropdown-menu > li
    {
        position: relative;
    }
    .Contact .ttr_menu_items.navbar-nav ul.dropdown-menu .sub-menu
    {
        left: 100% ;
        position: absolute;
        top: 0px;
        margin-top: -1px;
    }
    @media only screen
    and (min-width : 1025px)
    {
        .Contact.ttr_menu_items .dropdown-menu li:hover > .dropdown-menu
        {
            display: block;
        }
        .Contact .ttr_menu_items.navbar-nav ul.dropdown-menu .sub-menu
        {
            left: 100%;
            position: absolute;
            top: 0;
            visibility: hidden;
            margin-top: -1px;
        }
        ul.ttr_menu_items.nav li.dropdown:hover > ul.dropdown-menu
        {
            display:block;
        }
        .Contact .ttr_menu_items .dropdown-menu li:hover .sub-menu
        {
            visibility: visible;
        }
        .Contact .ttr_menu_items  li:hover ul.child li a
        {
            display:block;
        }
    }
    @media only screen
    and (min-width : 1025px)
    {
    }
    @media only screen
    and (min-width : 768px)

    {

    }
    .Contact .nav-pills
    {
        padding:0;
        list-style:none;
        text-align:left;
        zoom:1;
    }
    .Contact .nav.ttr_menu_items  li:hover  li:hover   li:hover a.subchild

    {
    }
    .Contact .nav.ttr_menu_items  li:hover    li:hover  li a.subchild

    {
    }
    .Contact #ttr_slideshow_inner ul
    {
        list-style: outside none none;

    }
    .Contact #ttr_slideshow_inner
    {
        position:relative;
        overflow:hidden;
        width:100%;

    }
    .Contact #ttr_slideshow_inner ul li > a
    {
        position:absolute;
        overflow:hidden;
        width:100%;

    }
    .Contact #ttr_slideshow_inner > ul li
    {
        position:absolute;

    }
    .Contact .ttr_slideshow_last div a,.Contact .ttr_slideshow_last a
    {
        pointer-events:auto;

    }
    .Contact #ttr_footer_designed_by_links #ttr_footer_designed_by
    {
        display:inline-block;
    }
    .Contact #ttr_footer_designed_by_links a ,.Contact #ttr_footer_designed_by_links a:link,.Contact #ttr_footer_designed_by_links a:visited,.Contact #ttr_footer_designed_by_links a:hover
    {
        display:inline-block;}
    .Contact .ttr_block_content, .Contact .ttr_block_content p
    {
        font-size:14px !important;
    }
    .Contact .html_content a:hover, .html_content a:focus
    {
        text-decoration:none;}
    .Contact #ttr_content_margin
    {
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        box-sizing:border-box;
    }
    .Contact #ttr_content
    {
        float: left;
        width: 100%;
        clear: none;
    }
    .Contact table
    {
        border-collapse: separate !important;
        border-spacing: 2px;
    }
    .Contact .btn:hover
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
    }
    .Contact .btn-default
    {
        padding-top:10px;
        padding-left:15px;
        padding-right:15px;
        padding-bottom:10px;
        box-sizing:inherit;
        clear:none;
        width:auto;
        height:auto;
        overflow:visible;
    }
    .Contact .btn-default:hover,.Contact a.btn-default:hover
    {
        box-sizing:inherit;
        clear:none;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        width:auto;
        height:auto;
        overflow:visible;
    }
    .Contact .inputbutton
    {
        background: none repeat scroll 0 0 transparent;
        border: medium none;
        padding-top:10px;
        padding-left:15px;
        padding-right:15px;
        padding-bottom:10px;
        left: -15px;
    }

    @media only screen
    and (min-width : 768px)
    and (max-width : 1024px)
    {
        @font-face
        {
            font-family:'Jura';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Jura/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @media only screen
        and (max-width : 640px)
        {
            .Contact form.form-horizontal
            {
                width:100%;
            }
        }
        label
        {
            font-weight:normal;}
        .Contact .totopshow {
            display: block;}
        .Contact .container
        {
            width:100%;

        }
        .Contact .ttr_footer_bottom_footer_inner,.Contact #ttr_footer_top_for_widgets
        {
            position:relative;
            margin:0 auto;
        }
        .Contact .ttr_Contact_html_column00, .ttr_Contact_html_column00 p, .ttr_Contact_html_column00 .tt_link
        {
            font-size:14px !important;
        }
        .Contact .ttr_Contact_html_row1
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:40px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:40px;
        }
        .Contact .ttr_Contact_html_column10
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Contact .ttr_Contact_html_column10, .ttr_Contact_html_column10 p, .ttr_Contact_html_column10 .tt_link
        {
            font-size:14px !important;
        }
        .Contact .ttr_Contact_html_column11
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Contact .ttr_Contact_html_column11, .ttr_Contact_html_column11 p, .ttr_Contact_html_column11 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_footerContact_html_column00, .ttr_footerContact_html_column01, .ttr_footerContact_html_column02, .ttr_footerContact_html_column03
        {
            font-size:14px !important;
        }
        .Contact nav#ttr_menu
        {
            max-width:100%;

        }
        .Contact .ttr_slideshow
        {
            display: none;
        }
        .Contact .ttr_slideshow
        {
            width:100%;
        }
        .Contact #ttr_slideshow_inner ul
        {
            list-style: outside none none;

        }
        .Contact #ttr_slideshow_inner
        {
            position:relative;
            overflow:hidden;
            width:100%;

        }
        .Contact #ttr_slideshow_inner ul li > a
        {
            position:absolute;
            overflow:hidden;
            width:100%;

        }
        .Contact #ttr_slideshow_inner > ul li
        {
            position:absolute;

        }
        .Contact .ttr_slideshow_last div a,.Contact .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .Contact #ttr_footer_designed_by_links #ttr_footer_designed_by
        {
            display:inline-block;
        }
        .Contact #ttr_footer_designed_by_links a ,.Contact #ttr_footer_designed_by_links a:link,.Contact #ttr_footer_designed_by_links a:visited,.Contact #ttr_footer_designed_by_links a:hover
        {
            display:inline-block;}
        .Contact .ttr_block_content, .Contact .ttr_block_content p
        {
            font-size:14px !important;
        }
        .Contact #ttr_content
        {
            float: left;
            width: 100%;
            clear: none;
        }
        .Contact table
        {
            border-collapse: separate !important;
            border-spacing: 2px;
        }
        .Contact .postedon
        {
            display: none;
        }
        .Contact #ttr_sidebar_left
        {
            width: 0%;
        }
        .Contact #ttr_content
        {
            width: 100%;
        }
        .Contact #ttr_sidebar_right
        {
            width: 0%;
        }
    }

    @media only screen
    and (max-width : 767px)
    {
        @font-face
        {
            font-family:'Jura';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Jura/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @media only screen
        and (max-width : 640px)
        {
            .Contact form.form-horizontal
            {
                width:100%;
            }
        }
        label
        {
            font-weight:normal;}
        .Contact .totopshow {
            display: block;}
        .Contact .container
        {
            width:100%;

        }
        .Contact .ttr_footer_bottom_footer_inner,.Contact #ttr_footer_top_for_widgets
        {
            position:relative;
            margin:0 auto;
        }
        .Contact #navigationmenu
        {
            width:auto;
            margin:0 auto;
        }
        .Contact .ttr_Contact_html_row0
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .Contact .ttr_Contact_html_column00, .ttr_Contact_html_column00 p, .ttr_Contact_html_column00 .tt_link
        {
            font-size:14px !important;
        }
        .Contact .ttr_Contact_html_row1
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:40px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:40px;
        }
        .Contact .ttr_Contact_html_column10
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Contact .ttr_Contact_html_column10, .ttr_Contact_html_column10 p, .ttr_Contact_html_column10 .tt_link
        {
            font-size:14px !important;
        }
        .Contact .ttr_Contact_html_column11
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .Contact .ttr_Contact_html_column11, .ttr_Contact_html_column11 p, .ttr_Contact_html_column11 .tt_link
        {
            font-size:11.2px !important;
        }
        .ttr_footerContact_html_column00, .ttr_footerContact_html_column01, .ttr_footerContact_html_column02, .ttr_footerContact_html_column03
        {
            font-size:14px !important;
        }
        .Contact .navbar-nav
        {
            padding:0;
            list-style:none;
            position:relative;
            margin:0;
            z-index:499;
            border:0px !important;
            margin:0;
            padding-top:17.5px !important;
            text-align:left;
            zoom:1;
        }
        .Contact #ttr_page .ttr_menu_items  li ul.child
        {
            top:35px;
        }
        .Contact .nav.ttr_menu_items  li a.ttr_menu_items_parent_link,.Contact .nav.ttr_menu_items  li span.separator
        {
            display:block;
            line-height:50px;
            cursor:pointer;
            height:50px;
            box-sizing:border-box;
        }
        .Contact .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_arrow
        {
            display:block;
            line-height:50px;
            background-image: none;
            box-sizing:border-box;
            cursor:pointer;
            height:50px;
        }
        .Contact .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active_arrow
        {
            box-sizing:border-box;
            cursor: pointer;
            display: block;
            line-height:50px;
            height:50px;
        }
        .Contact .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active
        {
            display:block;
            cursor: pointer;
            box-sizing:border-box;
            height:50px;
            line-height:50px;
        }
        .Contact .ttr_menu_items .horiz_separator
        {
            float:right;
            height:35px;
        }
        .Contact nav#ttr_menu
        {
            max-width:100%;

        }
        .Contact .ttr_slideshow
        {
            display: none;
        }
        .Contact .ttr_slideshow
        {
            width:100%;
        }
        .Contact #ttr_slideshow_inner ul
        {
            list-style: outside none none;

        }
        .Contact #ttr_slideshow_inner
        {
            position:relative;
            overflow:hidden;
            width:100%;

        }
        .Contact #ttr_slideshow_inner ul li > a
        {
            position:absolute;
            overflow:hidden;
            width:100%;

        }
        .Contact #ttr_slideshow_inner > ul li
        {
            position:absolute;

        }
        .Contact .ttr_slideshow_last div a,.Contact .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .Contact #ttr_footer_designed_by_links #ttr_footer_designed_by
        {
            display:inline-block;
        }
        .Contact #ttr_footer_designed_by_links a ,.Contact #ttr_footer_designed_by_links a:link,.Contact #ttr_footer_designed_by_links a:visited,.Contact #ttr_footer_designed_by_links a:hover
        {
            display:inline-block;}
        .Contact .ttr_block_content, .Contact .ttr_block_content p
        {
            font-size:14px !important;
        }
        .Contact #ttr_content
        {
            float: left;
            width: 100%;
            clear: none;
        }
        .Contact table
        {
            border-collapse: separate !important;
            border-spacing: 2px;
        }
        .Contact .postedon
        {
            display: none;
        }
        .Contact .open > .child
        {
            display: block;

        }
        .Contact .nav.navbar-nav li.ttr_menu_items_parent a
        {
            margin-bottom:0px;

        }
        .Contact ul.ttr_menu_items
        {
            padding-top:0 !important;

        }
        .navbar-nav ul.dropdown-menu .sub-menu
        {
            left: 0px !important;
            position: static !important;
            top: 0px !important;
            float:none !important;
        }
        .Contact .ttr_vmenu_items .open .child {float: none;
            position: static;
            list-style:none outside none;

        }
        .Contact #ttr_menu .navbar-toggle
        {

        }
        .Contact #ttr_menu .navbar-toggle
        {
            border-radius: 0;
            padding: 9px 7px;
            margin-right:3px;
            float:right;

        }
        .Contact #ttr_menu .navbar-toggle:hover,.Contact #ttr_menu .navbar-toggle:focus
        {
            margin-right:3px;
            float:right;

        }
        .Contact #ttr_menu .navbar-toggle,.Contact #ttr_menu .navbar-toggle:hover,.Contact #ttr_menu .navbar-toggle:focus
        {

        }
        .Contact #ttr_menu.navbar
        {
            height:auto !important;

        }
        .Contact #ttr_menu .navbar-nav
        {
            margin:0;

        }
        .Contact .ttr_menu_items  li a.ttr_menu_items_parent_link
        {
            display:block;
            cursor:pointer;
            box-sizing:border-box;
            padding-top:0px;
            padding-bottom:0px;
        }
        .Contact .ttr_menu_items  li a.ttr_menu_items_parent_link_arrow
        {
            display:block;
            box-sizing:border-box;
            cursor:pointer;
            padding-top:0px;
            padding-bottom:0px;
        }
        .Contact .ttr_menu_items  li a.ttr_menu_items_parent_link_active_arrow
        {
            float: left;
            padding-left:15px;
            box-sizing:border-box;
            cursor: pointer;
            display: block;
            line-height:35px;
            padding-top:0px;
            padding-bottom:0px;
        }
        .Contact .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active
        {
            display:block;
            cursor: pointer;
            box-sizing:border-box;
            padding-top:0px;
            padding-bottom:0px;
        }
    }

    @font-face
    {
        font-family:'Jura';
        font-weight:400;
        font-style:Normal;
        src:url('Fonts/Jura/regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:400;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @media only screen
    and (max-width : 640px)
    {
        .About form.form-horizontal
        {
            width:100%;
        }
    }
    label
    {
        font-weight:normal;}
    .About .ttr_footer_bottom_footer_inner,.About #ttr_footer_top_for_widgets
    {
        position:relative;
        margin:0 auto;
    }
    .About .ttr_About_html_row0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:#9D9D9D;
        background:rgba(157,157,157,1);
        background-clip:padding-box;padding-top:40px;
        padding-left:40px;
        padding-right:40px;
        padding-bottom:40px;
    }
    .About .ttr_About_html_column00
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column00, .ttr_About_html_column00 p, .ttr_About_html_column00 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_row1
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .About .ttr_About_html_column10
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:20px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column10, .ttr_About_html_column10 p, .ttr_About_html_column10 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column11
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:40px;
        padding-top:20px;
        padding-left:10px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column11, .ttr_About_html_column11 p, .ttr_About_html_column11 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column12
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background:url(images/AboutDesktophtml_column12.jpg);
        background-color:#B3B3B3;
        background-repeat:no-repeat;
        background-size:cover;
        background-position:Center Center;
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:40px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column12, .ttr_About_html_column12 p, .ttr_About_html_column12 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column13
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column13, .ttr_About_html_column13 p, .ttr_About_html_column13 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column14
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column14, .ttr_About_html_column14 p, .ttr_About_html_column14 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_row2
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:#343434;
        background:rgba(52,52,52,1);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .About .ttr_About_html_column20
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:60px;
        padding-left:150px;
        padding-right:150px;
        padding-bottom:60px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column20, .ttr_About_html_column20 p, .ttr_About_html_column20 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_row3
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .About .ttr_About_html_column30
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:40px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:40px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column30, .ttr_About_html_column30 p, .ttr_About_html_column30 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column31
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:40px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:40px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column31, .ttr_About_html_column31 p, .ttr_About_html_column31 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column32
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:40px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:40px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column32, .ttr_About_html_column32 p, .ttr_About_html_column32 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column33
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:40px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:40px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column33, .ttr_About_html_column33 p, .ttr_About_html_column33 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_row4
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:40px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .About .ttr_About_html_column40
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:40px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column40, .ttr_About_html_column40 p, .ttr_About_html_column40 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column41
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:10px;
        margin-right:10px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column41, .ttr_About_html_column41 p, .ttr_About_html_column41 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column42
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:10px;
        margin-right:10px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column42, .ttr_About_html_column42 p, .ttr_About_html_column42 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column43
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:10px;
        margin-right:10px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column43, .ttr_About_html_column43 p, .ttr_About_html_column43 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column44
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:10px;
        margin-right:10px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column44, .ttr_About_html_column44 p, .ttr_About_html_column44 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_row5
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:20px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .About .ttr_About_html_column50
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:20px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column50, .ttr_About_html_column50 p, .ttr_About_html_column50 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column51
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column51, .ttr_About_html_column51 p, .ttr_About_html_column51 .tt_link
    {
        font-size:14px !important;
    }
    .About .ttr_About_html_column52
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .About .ttr_About_html_column52, .ttr_About_html_column52 p, .ttr_About_html_column52 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_footerAbout_html_column00, .ttr_footerAbout_html_column01, .ttr_footerAbout_html_column02, .ttr_footerAbout_html_column03
    {
        font-size:14px !important;
    }
    .navbar-right .dropdown-menu
    {
        right : auto !important;
    }
    .ttr_menu_items .dropdown-menu
    {
        padding:0px;
    }
    .dropdown-menu
    {
    }
    .navbar-nav ul.dropdown-menu > li
    {
        position: relative;
    }
    .About .ttr_menu_items.navbar-nav ul.dropdown-menu .sub-menu
    {
        left: 100% ;
        position: absolute;
        top: 0px;
        margin-top: -1px;
    }
    @media only screen
    and (min-width : 1025px)
    {
        .About.ttr_menu_items .dropdown-menu li:hover > .dropdown-menu
        {
            display: block;
        }
        .About .ttr_menu_items.navbar-nav ul.dropdown-menu .sub-menu
        {
            left: 100%;
            position: absolute;
            top: 0;
            visibility: hidden;
            margin-top: -1px;
        }
        ul.ttr_menu_items.nav li.dropdown:hover > ul.dropdown-menu
        {
            display:block;
        }
        .About .ttr_menu_items .dropdown-menu li:hover .sub-menu
        {
            visibility: visible;
        }
        .About .ttr_menu_items  li:hover ul.child li a
        {
            display:block;
        }
    }
    @media only screen
    and (min-width : 1025px)
    {
    }
    @media only screen
    and (min-width : 768px)

    {

    }
    .About .nav-pills
    {
        padding:0;
        list-style:none;
        text-align:left;
        zoom:1;
    }
    .About .nav.ttr_menu_items  li:hover  li:hover   li:hover a.subchild

    {
    }
    .About .nav.ttr_menu_items  li:hover    li:hover  li a.subchild

    {
    }
    .About #ttr_slideshow_inner ul
    {
        list-style: outside none none;

    }
    .About #ttr_slideshow_inner
    {
        position:relative;
        overflow:hidden;
        width:100%;

    }
    .About #ttr_slideshow_inner ul li > a
    {
        position:absolute;
        overflow:hidden;
        width:100%;

    }
    .About #ttr_slideshow_inner > ul li
    {
        position:absolute;

    }
    .About .ttr_slideshow_last div a,.About .ttr_slideshow_last a
    {
        pointer-events:auto;

    }
    .About #ttr_footer_designed_by_links #ttr_footer_designed_by
    {
        display:inline-block;
    }
    .About #ttr_footer_designed_by_links a ,.About #ttr_footer_designed_by_links a:link,.About #ttr_footer_designed_by_links a:visited,.About #ttr_footer_designed_by_links a:hover
    {
        display:inline-block;}
    .About .ttr_block_content, .About .ttr_block_content p
    {
        font-size:14px !important;
    }
    .About .html_content a:hover, .html_content a:focus
    {
        text-decoration:none;}
    .About #ttr_content_margin
    {
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        box-sizing:border-box;
    }
    .About #ttr_content
    {
        float: left;
        width: 100%;
        clear: none;
    }
    .About table
    {
        border-collapse: separate !important;
        border-spacing: 2px;
    }

    @media only screen
    and (min-width : 768px)
    and (max-width : 1024px)
    {
        @font-face
        {
            font-family:'Jura';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Jura/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @media only screen
        and (max-width : 640px)
        {
            .About form.form-horizontal
            {
                width:100%;
            }
        }
        label
        {
            font-weight:normal;}
        .About .totopshow {
            display: block;}
        .About .container
        {
            width:100%;

        }
        .About .ttr_footer_bottom_footer_inner,.About #ttr_footer_top_for_widgets
        {
            position:relative;
            margin:0 auto;
        }
        .About .ttr_About_html_row0
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:40px;
            padding-left:40px;
            padding-right:40px;
            padding-bottom:40px;
        }
        .About .ttr_About_html_column00, .ttr_About_html_column00 p, .ttr_About_html_column00 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_row1
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .About .ttr_About_html_column10
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column10, .ttr_About_html_column10 p, .ttr_About_html_column10 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column11
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column11, .ttr_About_html_column11 p, .ttr_About_html_column11 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column12
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:130px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:130px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column12, .ttr_About_html_column12 p, .ttr_About_html_column12 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column13
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column13, .ttr_About_html_column13 p, .ttr_About_html_column13 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column14
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column14, .ttr_About_html_column14 p, .ttr_About_html_column14 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column20
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:40px;
            padding-left:50px;
            padding-right:50px;
            padding-bottom:40px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column20, .ttr_About_html_column20 p, .ttr_About_html_column20 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_row3
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:40px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:40px;
        }
        .About .ttr_About_html_column30
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:40px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column30, .ttr_About_html_column30 p, .ttr_About_html_column30 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column31
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:40px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column31, .ttr_About_html_column31 p, .ttr_About_html_column31 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column32
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:40px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column32, .ttr_About_html_column32 p, .ttr_About_html_column32 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column33
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:40px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column33, .ttr_About_html_column33 p, .ttr_About_html_column33 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_row4
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .About .ttr_About_html_column40
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column40, .ttr_About_html_column40 p, .ttr_About_html_column40 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column41
        {
            margin-top:0px;
            margin-left:10px;
            margin-right:10px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column41, .ttr_About_html_column41 p, .ttr_About_html_column41 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column42
        {
            margin-top:0px;
            margin-left:10px;
            margin-right:10px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column42, .ttr_About_html_column42 p, .ttr_About_html_column42 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column43, .ttr_About_html_column43 p, .ttr_About_html_column43 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column44, .ttr_About_html_column44 p, .ttr_About_html_column44 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_row5
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .About .ttr_About_html_column50, .ttr_About_html_column50 p, .ttr_About_html_column50 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column51
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column51, .ttr_About_html_column51 p, .ttr_About_html_column51 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column52, .ttr_About_html_column52 p, .ttr_About_html_column52 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_footerAbout_html_column00, .ttr_footerAbout_html_column01, .ttr_footerAbout_html_column02, .ttr_footerAbout_html_column03
        {
            font-size:14px !important;
        }
        .About nav#ttr_menu
        {
            max-width:100%;

        }
        .About .ttr_slideshow
        {
            display: none;
        }
        .About .ttr_slideshow
        {
            width:100%;
        }
        .About #ttr_slideshow_inner ul
        {
            list-style: outside none none;

        }
        .About #ttr_slideshow_inner
        {
            position:relative;
            overflow:hidden;
            width:100%;

        }
        .About #ttr_slideshow_inner ul li > a
        {
            position:absolute;
            overflow:hidden;
            width:100%;

        }
        .About #ttr_slideshow_inner > ul li
        {
            position:absolute;

        }
        .About .ttr_slideshow_last div a,.About .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .About #ttr_footer_designed_by_links #ttr_footer_designed_by
        {
            display:inline-block;
        }
        .About #ttr_footer_designed_by_links a ,.About #ttr_footer_designed_by_links a:link,.About #ttr_footer_designed_by_links a:visited,.About #ttr_footer_designed_by_links a:hover
        {
            display:inline-block;}
        .About .ttr_block_content, .About .ttr_block_content p
        {
            font-size:14px !important;
        }
        .About #ttr_content
        {
            float: left;
            width: 100%;
            clear: none;
        }
        .About table
        {
            border-collapse: separate !important;
            border-spacing: 2px;
        }
        .About .postedon
        {
            display: none;
        }
        .About #ttr_sidebar_left
        {
            width: 0%;
        }
        .About #ttr_content
        {
            width: 100%;
        }
        .About #ttr_sidebar_right
        {
            width: 0%;
        }
    }

    @media only screen
    and (max-width : 767px)
    {
        @font-face
        {
            font-family:'Jura';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Jura/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @media only screen
        and (max-width : 640px)
        {
            .About form.form-horizontal
            {
                width:100%;
            }
        }
        label
        {
            font-weight:normal;}
        .About .totopshow {
            display: block;}
        .About .container
        {
            width:100%;

        }
        .About .ttr_footer_bottom_footer_inner,.About #ttr_footer_top_for_widgets
        {
            position:relative;
            margin:0 auto;
        }
        .About #navigationmenu
        {
            width:auto;
            margin:0 auto;
        }
        .About .ttr_About_html_row0
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .About .ttr_About_html_column00, .ttr_About_html_column00 p, .ttr_About_html_column00 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_row1
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:40px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:20px;
        }
        .About .ttr_About_html_column10
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:10px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:10px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column10, .ttr_About_html_column10 p, .ttr_About_html_column10 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column11
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column11, .ttr_About_html_column11 p, .ttr_About_html_column11 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column12
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:80px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:80px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column12, .ttr_About_html_column12 p, .ttr_About_html_column12 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column13
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column13, .ttr_About_html_column13 p, .ttr_About_html_column13 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column14
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column14, .ttr_About_html_column14 p, .ttr_About_html_column14 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column20
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:30px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:30px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column20, .ttr_About_html_column20 p, .ttr_About_html_column20 .tt_link
        {
            font-size:11.2px !important;
        }
        .About .ttr_About_html_row3
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:40px;
        }
        .About .ttr_About_html_column30
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:40px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column30, .ttr_About_html_column30 p, .ttr_About_html_column30 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column31
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:40px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column31, .ttr_About_html_column31 p, .ttr_About_html_column31 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column32
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:40px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column32, .ttr_About_html_column32 p, .ttr_About_html_column32 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column33
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:40px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column33, .ttr_About_html_column33 p, .ttr_About_html_column33 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_row4
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:40px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:40px;
        }
        .About .ttr_About_html_column40
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column40, .ttr_About_html_column40 p, .ttr_About_html_column40 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column41
        {
            margin-top:0px;
            margin-left:10px;
            margin-right:10px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column41, .ttr_About_html_column41 p, .ttr_About_html_column41 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column42
        {
            margin-top:0px;
            margin-left:10px;
            margin-right:10px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column42, .ttr_About_html_column42 p, .ttr_About_html_column42 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column43
        {
            margin-top:0px;
            margin-left:10px;
            margin-right:10px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column43, .ttr_About_html_column43 p, .ttr_About_html_column43 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column44, .ttr_About_html_column44 p, .ttr_About_html_column44 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_row5
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:40px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:40px;
        }
        .About .ttr_About_html_column50
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column50, .ttr_About_html_column50 p, .ttr_About_html_column50 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column51
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .About .ttr_About_html_column51, .ttr_About_html_column51 p, .ttr_About_html_column51 .tt_link
        {
            font-size:14px !important;
        }
        .About .ttr_About_html_column52, .ttr_About_html_column52 p, .ttr_About_html_column52 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_footerAbout_html_column00, .ttr_footerAbout_html_column01, .ttr_footerAbout_html_column02, .ttr_footerAbout_html_column03
        {
            font-size:14px !important;
        }
        .About .navbar-nav
        {
            padding:0;
            list-style:none;
            position:relative;
            margin:0;
            z-index:499;
            border:0px !important;
            margin:0;
            padding-top:17.5px !important;
            text-align:left;
            zoom:1;
        }
        .About #ttr_page .ttr_menu_items  li ul.child
        {
            top:35px;
        }
        .About .nav.ttr_menu_items  li a.ttr_menu_items_parent_link,.About .nav.ttr_menu_items  li span.separator
        {
            display:block;
            line-height:50px;
            cursor:pointer;
            height:50px;
            box-sizing:border-box;
        }
        .About .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_arrow
        {
            display:block;
            line-height:50px;
            background-image: none;
            box-sizing:border-box;
            cursor:pointer;
            height:50px;
        }
        .About .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active_arrow
        {
            box-sizing:border-box;
            cursor: pointer;
            display: block;
            line-height:50px;
            height:50px;
        }
        .About .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active
        {
            display:block;
            cursor: pointer;
            box-sizing:border-box;
            height:50px;
            line-height:50px;
        }
        .About .ttr_menu_items .horiz_separator
        {
            float:right;
            height:35px;
        }
        .About nav#ttr_menu
        {
            max-width:100%;

        }
        .About .ttr_slideshow
        {
            display: none;
        }
        .About .ttr_slideshow
        {
            width:100%;
        }
        .About #ttr_slideshow_inner ul
        {
            list-style: outside none none;

        }
        .About #ttr_slideshow_inner
        {
            position:relative;
            overflow:hidden;
            width:100%;

        }
        .About #ttr_slideshow_inner ul li > a
        {
            position:absolute;
            overflow:hidden;
            width:100%;

        }
        .About #ttr_slideshow_inner > ul li
        {
            position:absolute;

        }
        .About .ttr_slideshow_last div a,.About .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .About #ttr_footer_designed_by_links #ttr_footer_designed_by
        {
            display:inline-block;
        }
        .About #ttr_footer_designed_by_links a ,.About #ttr_footer_designed_by_links a:link,.About #ttr_footer_designed_by_links a:visited,.About #ttr_footer_designed_by_links a:hover
        {
            display:inline-block;}
        .About .ttr_block_content, .About .ttr_block_content p
        {
            font-size:14px !important;
        }
        .About #ttr_content
        {
            float: left;
            width: 100%;
            clear: none;
        }
        .About table
        {
            border-collapse: separate !important;
            border-spacing: 2px;
        }
        .About .postedon
        {
            display: none;
        }
        .About .open > .child
        {
            display: block;

        }
        .About .nav.navbar-nav li.ttr_menu_items_parent a
        {
            margin-bottom:0px;

        }
        .About ul.ttr_menu_items
        {
            padding-top:0 !important;

        }
        .navbar-nav ul.dropdown-menu .sub-menu
        {
            left: 0px !important;
            position: static !important;
            top: 0px !important;
            float:none !important;
        }
        .About .ttr_vmenu_items .open .child {float: none;
            position: static;
            list-style:none outside none;

        }
        .About #ttr_menu .navbar-toggle
        {

        }
        .About #ttr_menu .navbar-toggle
        {
            border-radius: 0;
            padding: 9px 7px;
            margin-right:3px;
            float:right;

        }
        .About #ttr_menu .navbar-toggle:hover,.About #ttr_menu .navbar-toggle:focus
        {
            margin-right:3px;
            float:right;

        }
        .About #ttr_menu .navbar-toggle,.About #ttr_menu .navbar-toggle:hover,.About #ttr_menu .navbar-toggle:focus
        {

        }
        .About #ttr_menu.navbar
        {
            height:auto !important;

        }
        .About #ttr_menu .navbar-nav
        {
            margin:0;

        }
        .About .ttr_menu_items  li a.ttr_menu_items_parent_link
        {
            display:block;
            cursor:pointer;
            box-sizing:border-box;
            padding-top:0px;
            padding-bottom:0px;
        }
        .About .ttr_menu_items  li a.ttr_menu_items_parent_link_arrow
        {
            display:block;
            box-sizing:border-box;
            cursor:pointer;
            padding-top:0px;
            padding-bottom:0px;
        }
        .About .ttr_menu_items  li a.ttr_menu_items_parent_link_active_arrow
        {
            float: left;
            padding-left:15px;
            box-sizing:border-box;
            cursor: pointer;
            display: block;
            line-height:35px;
            padding-top:0px;
            padding-bottom:0px;
        }
        .About .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active
        {
            display:block;
            cursor: pointer;
            box-sizing:border-box;
            padding-top:0px;
            padding-bottom:0px;
        }
    }

    @font-face
    {
        font-family:'Jura';
        font-weight:400;
        font-style:Normal;
        src:url('Fonts/Jura/regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:400;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Amaranth';
        font-weight:700;
        font-style:Normal;
        src:url('Fonts/Amaranth/regular.otf');
    }
    @font-face
    {
        font-family:'Museo 700';
        font-weight:600;
        font-style:Normal;
        src:url('Fonts/Museo 700/Museo700-Regular.otf');
    }
    img
    {
        vertical-align:bottom;
    }
    .ttr_verticalmenu_header img,.ttr_block img
    {
        vertical-align:middle;
    }
    *
    {
        margin:0;
        padding:0;
    }
    #ttr_page.container
    {
        padding-left:0;
        padding-right:0;
    }
    #ttr_menu .navbar-collapse
    {
        padding-left:0;
        padding-right:0;
    }
    hr
    {
        margin:inherit !important;
    }
    #ttr_content_and_sidebar_container
    {
        width:auto !important;
        margin:0 auto;
    }
    .ttr_block  .ttr_radio
    {
        float:left;
        margin-right:4px;
    }
    fieldset
    {
        border:0px;
        padding-bottom:5px;
    }
    .boxcolor,.form-text
    {
        width: 100%;
    }
    .login_head h1
    {
        text-align:center;
    }
    .ttr_comment_reply_edit
    {
        float:right;
    }
    .ttr_comment_reply_edit span
    {
        padding-right:5px;
    }
    .ttr_post .ttr_post_content_inner
    {
        overflow:hidden;
    }
    .ttr_comment form p input,.ttr_ comment form p textarea
    {
        overflow:hidden;
    }
    #ttr_content .ttr_comment p
    {
        margin-top:5px;
        margin-bottom:0;
        text-align:left;
        margin-left:0;
        margin-right:0;
        line-height:20px;
        background:none;
    }
    #ttr_content .ttr_comment .form-submit
    {
    }
    .ttr_article dl
    {
        margin:2px;
    }
    #ttr_content .pagination
    {
    }
    .back-to-top
    {
        position:fixed;
        bottom: 0;
        right: 2em;
        text-decoration: none;
        padding: 0.5em;
        display: none;
        z-index:99;
    }
    .form-item label
    {
        text-align:left;
    }
    #user-login-form ul li
    {
        background:none!important;
        text-align:left;
        padding-left:0px!important;
        margin-left:0px!important;
        margin-top:5px!important;
    }
    /*----------- */
    .menu-toggle
    {
        display:none;
    }
    .required:first-child:after
    {
        color:red;
        content: '*';
        display: inline;
    }
    .has-error
    {
        margin-top:4px;
    }
    form.form-horizontal
    {
        width:295px;
    }
    .ttr_image::after
    {
        clear: both;content: '.';display:inline;height: 0;visibility: hidden;}
    .ttr_image
    {
        max-width:100%;}
    .ttr_image img
    {
        margin:inherit;}
    .ttr_uniform
    {
        max-width:100% !important;height:auto !important;}
    .post_column .html_content ol, .post_column .html_content ul
    {
        margin-left: 25px;}
    .post_column .html_content ol li, .post_column .html_content ul li
    {
        padding-left: 5px !important;text-indent: 0 !important;}
    p
    {
        margin:0;
        padding:0;
    }
    .btn:hover
    {
        clear:none;
        margin:3px;
        height:auto;
    }
    .postedon img
    {
        vertical-align: middle;
        margin: 0 2px;
    }
    #ttr_sidebar_left table
    {
        width:100%;
    }
    #ttr_sidebar_right table
    {
        width:100%;
    }
    @media only screen
    and (min-width : 150px)
    and (max-width : 1024px)
    {
        footer, header#ttr_header
        {
            width: 100%;
        }
    }
    @media (min-width : 992px)

    {
        .container
        {
            max-width : 100%;
        }
    }
    label
    {
        font-weight:normal;}
    body
    {
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;margin:0;
        background-attachment:fixed;}
    #ttr_page
    {
        max-width:2000px;
        min-width:800px;
        margin-top:0px;
        margin-bottom:0px;
        border-radius:1px 1px 1px 1px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;box-sizing:border-box;
    }
    .navbar
    {
        height:70px;
    }
    .ttr_footer_bottom_footer_inner
    {
        height:100px;
    }
    .ttr_footer_bottom_footer_inner, #ttr_footer_top_for_widgets
    {
        position:relative;
        margin:0 auto;
    }
    #ttr_header_inner
    {
        height:100vh;
        position:relative;
        margin:0 auto;
    }
    #ttr_menu.navbar
    {
        height:70px;
        min-height:70px;
        border-radius:0px 0px 0px 0px;
        border:solid #E7E7E7;
        border:solid rgba(231,231,231,1);
        border-width:1px 0px 1px 0px;
        box-shadow:none;
    }
    #ttr_menu_inner_in
    {
        min-height: 72px;
        height:auto;
        text-align: right;
        position:relative;
        margin:0 auto;
    }
    input[type=checkbox]
    {
        visibility: hidden;
    }
    .ttr_checkbox
    {
        position: relative;
        width:13px;
        height:13px;
        display:inline;
        margin-top:5px;
        margin-right:5px;
    }
    .ttr_checkbox label
    {
        cursor: pointer;
        position: absolute;
        width: 15px;
        height: 15px;
        top: 0;
        left: 0;
        background-color:#FFFFFF;
        background:linear-gradient(180deg,rgba(255,255,255,0)0%,rgba(0,0,0,0.14)50%,rgba(255,255,255,0)100%);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #808080;
        border:solid rgba(128,128,128,1);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
    }
    .ttr_checkbox label:after
    {
        opacity: 0;
        content: '';
        position: absolute;
        width: 15px;
        height: 5px;
        top: 0px;
        left: 1px;
        border: 2px solid rgba(0,0,0,1);
        border-top: none;
        border-right: none;
        transform:rotate(-45deg);
        -moz-transform:rotate(-45deg);
        -webkit-transform:rotate(-45deg);
        -o-transform:rotate(-45deg);
    }
    .ttr_checkbox input[type=checkbox]:checked + label:after
    {
        opacity: 1;
    }
    .ttr_checkbox label
    {
        width: 13px;
        padding-left: 0;
    }
    input[type=radio]
    {
        visibility: hidden;
    }
    .ttr_radio
    {
        position: relative;
        width:13px;
        height:13px;
        margin-right:5px;
        margin-bottom:5px;
    }
    .ttr_radio label
    {
        cursor: pointer;
        position: absolute;
        width: 13px;
        height: 13px;
        top: 0;
        left: 0;
        border-radius:0px 0px 0px 0px;
        border:solid #808080;
        border:solid rgba(128,128,128,1);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
        border-radius:50%;
        background-color:#808080;
        background:rgba(128,128,128,1);
        background-clip:padding-box;box-sizing:content-box;
    }
    .ttr_radio label:after
    {
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;opacity: 0;
        content: '';
        position: absolute;
        width: 9px;
        height: 9px;
        top: 2px;
        left: 2px;
        border-radius:50%;
    }
    .ttr_radio input[type=radio]:checked + label:after
    {
        opacity: 1;
    }
    .ttr_radio label
    {
        width: 13px;
        padding-left: 0;
    }
    .radio input[type=radio], .radio-inline input[type=radio], .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox]{float: none !important;
        margin-left:0px !important;
        position: static;
    }
    .ttr_Home_html_row0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:40px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .ttr_Home_html_column00
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column00, .ttr_Home_html_column00 p, .ttr_Home_html_column00 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column01
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background:url(images/HomeDesktophtml_column01.jpg);
        background-color:#959595;
        background-repeat:no-repeat;
        background-size:cover;
        background-position:Center Center;
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column01, .ttr_Home_html_column01 p, .ttr_Home_html_column01 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column02
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column02, .ttr_Home_html_column02 p, .ttr_Home_html_column02 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_row1
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .ttr_Home_html_column10
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column10, .ttr_Home_html_column10 p, .ttr_Home_html_column10 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column11
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column11, .ttr_Home_html_column11 p, .ttr_Home_html_column11 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column12
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column12, .ttr_Home_html_column12 p, .ttr_Home_html_column12 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column13
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column13, .ttr_Home_html_column13 p, .ttr_Home_html_column13 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_row2
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background:url(images/HomeDesktophtml_row2.jpg);
        background-color:#343434;
        background-repeat:no-repeat;
        background-size:cover;
        background-position:Center Center;
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .ttr_Home_html_column20
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#2E43BA;
        background:rgba(46,67,186,0.6);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:100px;
        padding-left:150px;
        padding-right:150px;
        padding-bottom:100px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column20, .ttr_Home_html_column20 p, .ttr_Home_html_column20 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_row3
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .ttr_Home_html_column30
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:20px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column30, .ttr_Home_html_column30 p, .ttr_Home_html_column30 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column31
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column31, .ttr_Home_html_column31 p, .ttr_Home_html_column31 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column32
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column32, .ttr_Home_html_column32 p, .ttr_Home_html_column32 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column33
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column33, .ttr_Home_html_column33 p, .ttr_Home_html_column33 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column34
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column34, .ttr_Home_html_column34 p, .ttr_Home_html_column34 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_row4
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:60px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .ttr_Home_html_column40
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:20px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column40, .ttr_Home_html_column40 p, .ttr_Home_html_column40 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column41
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column41, .ttr_Home_html_column41 p, .ttr_Home_html_column41 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column42
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column42, .ttr_Home_html_column42 p, .ttr_Home_html_column42 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column43
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column43, .ttr_Home_html_column43 p, .ttr_Home_html_column43 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column44
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:20px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column44, .ttr_Home_html_column44 p, .ttr_Home_html_column44 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_row5
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:20px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:20px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:60px;
    }
    .ttr_Home_html_column50
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:20px;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column50, .ttr_Home_html_column50 p, .ttr_Home_html_column50 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column51
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#E1E1E1;
        background:rgba(225,225,225,1);
        background-clip:padding-box;margin-top:20px;
        margin-left:10px;
        margin-right:10px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column51, .ttr_Home_html_column51 p, .ttr_Home_html_column51 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column52
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#E1E1E1;
        background:rgba(225,225,225,1);
        background-clip:padding-box;margin-top:20px;
        margin-left:10px;
        margin-right:10px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column52, .ttr_Home_html_column52 p, .ttr_Home_html_column52 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column53
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#E1E1E1;
        background:rgba(225,225,225,1);
        background-clip:padding-box;margin-top:20px;
        margin-left:10px;
        margin-right:10px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column53, .ttr_Home_html_column53 p, .ttr_Home_html_column53 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_Home_html_column54
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#E1E1E1;
        background:rgba(225,225,225,1);
        background-clip:padding-box;margin-top:20px;
        margin-left:10px;
        margin-right:10px;
        margin-bottom:0px;
        padding-top:20px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:20px;
        word-wrap:break-word;
    }
    .ttr_Home_html_column54, .ttr_Home_html_column54 p, .ttr_Home_html_column54 .tt_link
    {
        font-size:14px !important;
    }
    .ttr_footerHomehtml_column00, .ttr_footerHomehtml_column01, .ttr_footerHomehtml_column02, .ttr_footerHomehtml_column03
    {
        background:transparent;
        word-wrap:break-word;
        font-size:14px !important;
    }
    .ttr_footerHome_html_column00, .ttr_footerHome_html_column01, .ttr_footerHome_html_column02, .ttr_footerHome_html_column03
    {
        font-size:14px !important;
    }
    .ttr_title_position
    {
        top:0px;
        position:absolute;
        left: 0%;
        right:auto;
        display:block;
        transform:rotate(0deg);
        -moz-transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
        -o-transform:rotate(0deg);
    }
    .ttr_title_position
    {
        display:none;}
    header .ttr_title_style, header .ttr_title_style a, header .ttr_title_style a:link, header .ttr_title_style a:visited, header .ttr_title_style a:hover
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#3F51B5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        margin:0;
        line-height:normal;
        padding:0;
        background:none;
    }
    .ttr_slogan_position
    {
        top:0px;
        position:absolute;
        left: 0%;
        right:auto;
        position:absolute;
        display:block;
        overflow:hidden;
        transform:rotate(0deg);
        -moz-transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
        -o-transform:rotate(0deg);
    }
    .ttr_slogan_position
    {
        display:none;}
    .ttr_slogan_style
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        margin:0;
        line-height:normal;
        padding:0;
        background:none;
    }
    .ttr_menu_logo
    {
        background-repeat: no-repeat;
        transform:rotate(0deg);
        -moz-transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
        -o-transform:rotate(0deg);
        top: 11px;
        bottom:auto;
        left:0%;
        margin:0;
        height:400px;
        width:400px;
        display:block;
        position:absolute;
        border:0 none;
        z-index:499;
    }
    .navbar-right .dropdown-menu
    {
        right : auto !important;
    }
    .ttr_menu_items .dropdown-menu
    {
        padding:0px;
    }
    .ttr_menu_items.nav .open .sub-menu > li > a
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(0,0,0,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        min-width:160px;
        line-height:30px;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:20px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .navbar-nav
    {
        padding:0;
        list-style:none;
        position:relative;
        margin:0;
        z-index:499;
        border:0px !important;
        margin:0;
        padding-top:14px !important;
        padding-right:0;
        text-align:left;
        zoom:1;
    }
    .navbar-default
    {
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #E7E7E7;
        border:solid rgba(231,231,231,1);
        border-width:1px 0px 1px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:60px;
        padding-right:60px;
        padding-bottom:0px;
        box-sizing:content-box}
    ul.navbar-nav .dropdown-menu, ul.navbar-nav .sub-menu, ul.navbar-nav .collapse li a
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        font-family:"Verdana";
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #C8CCCC;
        border:solid rgba(200,204,204,1);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
        margin:0;
        padding:0;
        list-style:none;
    }
    .navbar-nav .dropdown-menu > li > a
    {
        min-width:160px;
        line-height:30px;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:20px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .dropdown-menu
    {
        min-width:160px;
    }
    .navbar-nav ul.dropdown-menu > li
    {
        position: relative;
    }
    .ttr_menu_items.navbar-nav ul.dropdown-menu .sub-menu
    {
        left: 100% ;
        position: absolute;
        top: 0px;
        margin-top: -1px;
    }
    @media only screen
    and (min-width : 1025px)
    {
        .ttr_menu_items .dropdown-menu li:hover > .dropdown-menu
        {
            display: block;
        }
        .navbar-nav .dropdown-menu > li:hover > a
        {
            background-color:#EEEEEE;
            background:rgba(238,238,238,1);
            background-clip:padding-box;}
        .nav.ttr_menu_items  li:hover ul.child
        {
            left:12px;
            top:42px;
        }
        .ttr_menu_items.navbar-nav ul.dropdown-menu .sub-menu
        {
            left: 100%;
            position: absolute;
            top: 0;
            visibility: hidden;
            margin-top: -1px;
        }
        ul.ttr_menu_items.nav li.dropdown:hover > ul.dropdown-menu
        {
            display:block;
        }
        .ttr_menu_items .dropdown-menu li:hover .sub-menu
        {
            visibility: visible;
        }
        .ttr_menu_items  li:hover ul.child li a
        {
            display:block;
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
            min-width:160px;
            border-radius:0px 0px 0px 0px;
            border:solid transparent;
            border:solid rgba(0,0,0,0);
            border-width:0px 0px 0px 0px;
            box-shadow:none;
            line-height:30px;
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:0px;
            padding-left:20px;
            padding-right:0px;
            padding-bottom:0px;
            background-color:#FFFFFF;
            background:rgba(255,255,255,1);
            background-clip:padding-box;}
        .ttr_menu_items.nav  li:hover li:hover > a.subchild
        {
            background-color:#EEEEEE;
            background:rgba(238,238,238,1);
            background-clip:padding-box;border-radius:0px 0px 0px 0px;
            border:solid transparent;
            border:solid rgba(0,0,0,0);
            border-width:0px 0px 0px 0px;
            box-shadow:none;
            color:rgba(51,51,51,1);
        }
        .ttr_menu_items.nav  li:hover ul.child li a:hover
        {
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
            background-color:#EEEEEE;
            background:rgba(238,238,238,1);
            background-clip:padding-box;border-radius:0px 0px 0px 0px;
            border:solid transparent;
            border:solid rgba(0,0,0,0);
            border-width:0px 0px 0px 0px;
            box-shadow:none;
        }
        .ttr_menu_items  li:hover ul.child li a.subchild:hover
        {
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
            background-color:#EEEEEE;
            background:rgba(238,238,238,1);
            background-clip:padding-box;border-radius:0px 0px 0px 0px;
            border:solid transparent;
            border:solid rgba(0,0,0,0);
            border-width:0px 0px 0px 0px;
            box-shadow:none;
        }
    }
    @media only screen
    and (min-width : 1025px)
    {
        .ttr_menu_items  li:hover ul.child
        {
        }
    }
    @media only screen
    and (min-width : 768px)

    {
        .container
        {
            overflow: visible !important;
        }

    }
    .nav-pills
    {
        padding:0;
        list-style:none;
        text-align:left;
        zoom:1;
    }
    .nav.ttr_menu_items  li a.ttr_menu_items_parent_link, .nav.ttr_menu_items  li span.separator
    {
        display:block;
        padding-left:15px;
        padding-right:15px;
        float:left;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;line-height:42px;
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        margin-top:0px;
        margin-left:12px;
        margin-right:3px;
        margin-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        cursor:pointer;
        height:42px;
        box-sizing:border-box;
        padding-top:0px;
        padding-bottom:0px;
    }
    .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_arrow
    {
        display:block;
        padding-left:15px;
        padding-right:15px;
        line-height:42px;
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:12px;
        margin-right:3px;
        margin-bottom:0px;
        box-sizing:border-box;
        cursor:pointer;
        height:42px;
        float:left;
        padding-top:0px;
        padding-bottom:0px;
    }
    .ttr_menu_items  li:hover a.ttr_menu_items_parent_link, .nav.ttr_menu_items  li:hover span.separator
    {
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        background-color:#3F51B5;
        background:rgba(63,81,181,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .nav.ttr_menu_items  li:hover a.ttr_menu_items_parent_link_arrow
    {
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        background-color:#3F51B5;
        background:rgba(63,81,181,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_menu_items  li ul.child li a
    {
    }
    .navbar-default .nav.ttr_menu_items  li ul.child li a
    {
        display:block;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        min-width:160px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(0,0,0,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        line-height:30px;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;}
    .ttr_menu_items.nav   li ul.child li a.subchild
    {
        text-align:left;
        line-height:30px;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(0,0,0,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active_arrow
    {
        padding-left:15px;
        padding-right:15px;
        box-sizing:border-box;
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        cursor: pointer;
        display: block;
        line-height:42px;
        background-color:#4253B6;
        background:rgba(66,83,182,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:12px;
        margin-right:3px;
        margin-bottom:0px;
        height:42px;
        float:left;
        padding-top:0px;
        padding-bottom:0px;
    }
    .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active
    {
        display:block;
        cursor: pointer;
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        box-sizing:border-box;
        height:42px;
        line-height:42px;
        padding-left:15px;
        padding-right:15px;
        background-color:#4253B6;
        background:rgba(66,83,182,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:12px;
        margin-right:3px;
        margin-bottom:0px;
        float:left;
        padding-top:0px;
        padding-bottom:0px;
    }
    .nav.ttr_menu_items  li.active:hover a.ttr_menu_items_parent_link_active
    {
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        background-color:#3F51B5;
        background:rgba(63,81,181,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .nav.ttr_menu_items  li.active:hover a.ttr_menu_items_parent_link_active_arrow
    {
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        background-color:#3F51B5;
        background:rgba(63,81,181,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_menu_items ul
    {
    }
    .ttr_menu_items li:hover ul ul,
    .ttr_menu_items li:hover  li:hover ul ul

    {
        top:-9999px;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;}
    .nav.ttr_menu_items  li:hover  li:hover   li:hover a.subchild

    {
    }
    .nav.ttr_menu_items  li:hover    li:hover  li a.subchild

    {
    }
    .nav.ttr_menu_items  li  ul.child li .separator
    {
        border-width:0px 0px 0px 0px;
        border-style:solid;
        border-color:transparent;
        height:auto;
        margin:0 0px 0 0px;
        display:none;
    }
    .nav.ttr_menu_items  li ul.child ul li .separator, .nav.ttr_menu_items  li  li:hover ul li .separator, .nav.ttr_menu_items  li li:hover li:hover ul li .separator
    {
        border-width:0px 0px 0px 0px;
        border-style:solid;
        border-color:transparent;
        height:auto;
        margin:0 0px 0 0px;
        display:none;
    }
    .ttr_menu_items .horiz_separator
    {
        float:right;
        border-width:0px 0px 0px 0px;
        border-style:solid;
        border-color:transparent;
        height:42px;
        margin:0;
        display:none;
    }
    header#ttr_header
    {
        background:url(images/HomeDesktopheader.jpg);
        background-color:#4E4E4E;
        background-repeat:no-repeat;
        background-size:cover;
        background-position:Center Center;
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #E7E7E7;
        border:solid rgba(231,231,231,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        height:100vh;
        width: auto;
        box-sizing:content-box;

    }
    header#ttr_header
    {
        display:none;}
    nav#ttr_menu
    {
        width:auto;

    }
    #Slide0
    {
        background:url(images/HomeDesktopSlide0.jpg);
        background-color:#FFFFFF;
        background-repeat:no-repeat;
        background-size:cover;
        background-position:Center Center;
        background-clip:padding-box;
    }
    #Slide1
    {
        background:url(images/HomeDesktopSlide1.jpg);
        background-color:#4E4E4E;
        background-repeat:no-repeat;
        background-size:cover;
        background-position:Center Center;
        background-clip:padding-box;
    }
    #Slide2
    {
        background:url(images/HomeDesktopSlide2.jpg);
        background-color:#4E4E4E;
        background-repeat:no-repeat;
        background-size:cover;
        background-position:Center Center;
        background-clip:padding-box;
    }
    .ttr_slide
    {
        height:545px;
        width:100%;

    }
    #ttr_slideshow_inner ul
    {
        list-style: outside none none;

    }
    #ttr_slideshow_inner
    {
        height:545px;
        position:relative;
        overflow:hidden;
        width:100%;

    }
    #ttr_slideshow_inner ul li > a
    {
        height:545px;
        position:absolute;
        overflow:hidden;
        width:100%;

    }
    #ttr_slideshow_inner > ul li
    {
        position:absolute;

    }
    .ttr_slideshow_in
    {
        height:545px;
        position:absolute;
        width:100%;
        top:0;
        pointer-events:none;

    }
    .ttr_slideshow_in .ttr_slideshow_last div, .ttr_slideshow_in .ttr_slideshow_last a
    {
        pointer-events:auto;

    }
    .ttr_slideshow_last
    {
        margin:0 auto;
        position:relative;
        overflow:hidden;
        pointer-events:none;
        height:545px;

    }
    .ttr_slideshow_last div a, .ttr_slideshow_last a
    {
        pointer-events:auto;

    }
    .ttr_slideshow
    {
        box-sizing: content-box !important;
        position:relative;
        border-radius:0px 0px 0px 0px;
        border:solid #E7E7E7;
        border:solid rgba(231,231,231,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        height:545px;

    }
    .paginationLink a.pg
    {

    }
    .paginationLink a.pg:hover
    {

    }
    .paginationLink.current a.pg
    {

    }
    .paginationLink a.pg
    {
        font-size: 0;

    }
    .paginationLink a.pg:hover
    {
        font-size: 0;

    }
    .paginationLink.current a.pg
    {
        font-size: 0;

    }
    .paginationLink
    {
        display:inline-block;

    }
    #ttr_sidebar_left
    {
        float: right;
        clear: none;
        width: 14.76%;
    }
    #ttr_sidebar_left_margin
    {
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #C6C6C6;
        border:solid rgba(198,198,198,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        box-sizing:border-box;
        position:relative;
        z-index:2;
    }
    #ttr_sidebar_right
    {
        float: right;
        clear: none;
        width: 14.76%;
    }
    #ttr_sidebar_right_margin
    {
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid #C6C6C6;
        border:solid rgba(198,198,198,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        box-sizing:border-box;
        position:relative;
        z-index:2;
    }
    .ttr_verticalmenu
    {
        margin-top:3px;
        margin-left:6px;
        margin-right:6px;
        margin-bottom:3px;
        padding-top:5px;
        padding-left:5px;
        padding-right:5px;
        padding-bottom:5px;
        border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;text-align:center;
    }
    .ttr_verticalmenu_header
    {
        border-radius:0px 0px 0px 0px;
        border:solid #D3D3D3;
        border:solid rgba(211,211,211,1);
        border-width:0px 0px 1px 0px;
        box-shadow:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;margin-top:4px;
        margin-left:4px;
        margin-right:4px;
        margin-bottom:4px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        min-height:30px;
        box-sizing: content-box;
    }
    #ttr_page .ttr_verticalmenu_content
    {
        display:inline-block;
        width:90%;
    }
    @media only screen
    and (min-width : 1025px)
    {
        .ttr_vmenu_items.nav  li:hover li:hover > a.subchild
        {
            background-color:#FFFFFF;
            background:rgba(255,255,255,1);
            background-clip:padding-box;border-radius:0px 0px 0px 0px;
            border:solid transparent;
            border:solid rgba(0,0,0,0);
            border-width:1px 1px 1px 1px;
            box-shadow:none;
            color:rgba(51,51,51,1);
        }
        .ttr_vmenu_items.nav  li:hover ul.child li a:hover
        {
            background-color:#FFFFFF;
            background:rgba(255,255,255,1);
            background-clip:padding-box;border-radius:0px 0px 0px 0px;
            border:solid transparent;
            border:solid rgba(0,0,0,0);
            border-width:1px 1px 1px 1px;
            box-shadow:none;
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
        }
        .ttr_vmenu_items  li:hover ul.child li a.subchild:hover
        {
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
            background-color:#FFFFFF;
            background:rgba(255,255,255,1);
            background-clip:padding-box;border-radius:0px 0px 0px 0px;
            border:solid transparent;
            border:solid rgba(0,0,0,0);
            border-width:1px 1px 1px 1px;
            box-shadow:none;
        }
    }
    @media only screen
    and (min-width : 1025px)
    {
        .sub-menu
        {
            position:absolute;
            visibility:hidden;
        }
        .ttr_vmenu_items.nav li.dropdown:hover ul
        {
            display:inline-block;
        }
        .ttr_vmenu_items  li:hover ul.child
        {
            height:auto;
            width:100%;
            border-radius:0px 0px 0px 0px;
            border:solid #C8CCCC;
            border:solid rgba(200,204,204,1);
            border-width:1px 1px 1px 1px;
            box-shadow:none;
        }
    }
    @media only screen
    and (min-width : 768px)

    {
        ul.ttr_vmenu_items.nav li.dropdown ul.dropdown-menu
        {
            top:40px;
            margin-top:-40px;
            left:100%;
            list-style:none;
        }
        ul.ttr_vmenu_items.nav ul li.dropdown-submenu.open > ul
        {
            display: block;
            visibility: visible;
            list-style:none;
        }

    }
    .dropdown-backdrop
    {
        position:relative;
    }
    ul.ttr_vmenu_items.nav-pills .dropdown-menu, ul.navbar-nav .collapse li a
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        font-family:"Verdana";
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #C8CCCC;
        border:solid rgba(200,204,204,1);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
        list-style:none;
    }
    .ttr_vmenu_items.nav .dropdown-menu > li > a
    {
        min-width:160px;
    }
    ul.ttr_vmenu_items.nav-pills .dropdown-menu > li:hover > a
    {
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;}
    ul.ttr_vmenu_items.nav  .sub-menu > li > a
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(0,0,0,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        min-width:160px;
        line-height:20px;
        margin-top:5px;
        margin-left:5px;
        margin-right:5px;
        margin-bottom:5px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .nav-stacked > li + li
    {
        margin-top:0;
    }
    .ttr_vmenu_items .dropdown-menu
    {
        padding:0px;
    }
    .container
    {
        overflow:visible!important;
    }
    .ttr_vmenu_items.nav ul.collapse > li
    {
        position: relative;
    }
    .nav-pills li
    {
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        font-family:"Verdana";
    }
    .nav-pills li:hover
    {
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        font-family:"Verdana";
    }
    .ttr_vmenu_items .dropdown-menu > li > a
    {
        width:160px;
    }
    .ttr_vmenu_items .dropdown-menu > li:hover > a
    {
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;}
    ul.ttr_vmenu_items.nav li.dropdown:hover ul.dropdown-menu li.unstyled
    {
        min-height: 1px;
        list-style: none;
    }
    ul.ttr_vmenu_items.nav li.dropdown:hover ul.dropdown-menu li.unstyled ul
    {
        list-style: none;
    }
    .ttr_vmenu_items .collapse > li > a
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(0,0,0,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;}
    .ttr_vmenu_items .collapse > li:hover > a
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(0,0,0,0);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;}
    #ttr_page ttr_.nav
    {
        display:inline;
    }
    .ttr_vmenu_items ul#dropdown-menu li
    {
        display:block;
    }
    ul.ttr_vmenu_items.nav li.dropdown:hover ul.collapse li
    {
        list-style:none;
    }
    #ttr_sidebar_left .dropdown-menu > li
    {
        display: inline-block;
        font-weight: normal;
        position: relative;
        vertical-align: top;
    }
    .ttr_vmenu_items #dropdown-menu li:hover .sub-menu
    {
    }
    .nav-pills
    {
        padding:0;
        list-style:none;
        text-align:left;
        background:none;
        z-index:500;
        *display:inline;
        zoom:1;
    }
    .nav.ttr_vmenu_items  li a.ttr_vmenu_items_parent_link, .nav.ttr_vmenu_items  li span.separator
    {
        display:block;
        text-align:left;
        padding-left:4px;
        padding-right:4px;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;line-height:40px;
        border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        cursor:pointer;
        padding-top:0px;
        padding-bottom:0px;
    }
    .nav.ttr_vmenu_items  li a.ttr_vmenu_items_parent_link_arrow
    {
        display:block;
        text-align:left;
        padding-left:4px;
        padding-right:14px;
        line-height:40px;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        cursor:pointer;
        padding-top:0px;
        padding-bottom:0px;
    }
    .ttr_vmenu_items  li:hover a.ttr_vmenu_items_parent_link, .nav.ttr_vmenu_items  li:hover span.separator
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        line-height:40px;
    }
    .nav.ttr_vmenu_items  li:hover a.ttr_vmenu_items_parent_link_arrow
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        line-height:40px;
    }
    .ttr_vmenu_items  li ul.child li a
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(0,0,0,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        display:block;
        line-height:20px;
        text-indent:5px;
        margin-top:5px;
        margin-left:5px;
        margin-right:5px;
        margin-bottom:5px;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .navbar-default .nav.ttr_vmenu_items  li ul.child li a
    {
    }
    .ttr_vmenu_items.nav   li ul.child li a.subchild
    {
        text-align:left;
        line-height:20px;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;display:block;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(0,0,0,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:5px;
        margin-left:5px;
        margin-right:5px;
        margin-bottom:5px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .nav.ttr_vmenu_items ul.child
    {
    }
    .nav.ttr_vmenu_items  li a.ttr_vmenu_items_parent_link_active_arrow
    {
        text-align:left;
        padding-left:4px;
        padding-right:14px;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        cursor: pointer;
        display: block;
        line-height:40px;
        background-color:#E7E7E7;
        background:rgba(231,231,231,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-bottom:0px;
    }
    .nav.ttr_vmenu_items  li a.ttr_vmenu_items_parent_link_active
    {
        display:block;
        cursor: pointer;
        text-align:left;
        padding-left:4px;
        padding-right:4px;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        line-height:40px;
        background-color:#E7E7E7;
        background:rgba(231,231,231,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-bottom:0px;
    }
    .nav.ttr_vmenu_items  li.active:hover a.ttr_vmenu_items_parent_link_active
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .nav.ttr_vmenu_items  li.active:hover a.ttr_vmenu_items_parent_link_active_arrow
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_vmenu_items ul
    {
        width:100%;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #C8CCCC;
        border:solid rgba(200,204,204,1);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
    }
    .ttr_vmenu_items li:hover ul ul,
    .ttr_vmenu_items li:hover  li:hover ul ul

    {
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;}
    .nav.ttr_vmenu_items  li:hover  li:hover   li:hover a.subchild

    {
    }
    .nav.ttr_vmenu_items  li:hover    li:hover  li a.subchild

    {
    }
    .nav.ttr_vmenu_items  li  ul.child li .separator
    {
        border-width:0px 0px 0px 0px;
        border-style:solid;
        border-color:transparent;
        height:auto;
        margin:0 5px 0 5px;
        display:none;
    }
    .nav.ttr_vmenu_items  li ul.child ul li .separator, .nav.ttr_vmenu_items  li  li:hover ul li .separator, .nav.ttr_vmenu_items  li li:hover li:hover ul li .separator
    {
        border-width:0px 0px 0px 0px;
        border-style:solid;
        border-color:transparent;
        height:auto;
        margin:0 5px 0 5px;
        display:none;
    }
    .ttr_vmenu_items .horiz_separator
    {
        border-width:0px 0px 0px 0px;
        border-style:solid;
        border-color:transparent;
        height:auto;
        margin:0;
        display:none;
    }
    footer
    {
        position: relative;
        background-color:#343434;
        background:rgba(52,52,52,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #DCDCDC;
        border:solid rgba(220,220,220,1);
        border-width:1px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
    }
    .ttr_footer_bottom_footer
    {
        height:100px;
    }
    #ttr_copyright a, #ttr_copyright span
    {
        font-size:12px;
        font-family:"Museo 700","Verdana";font-weight:600;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    #ttr_copyright
    {
        top: 47.5px;
        position:absolute;
        left: 42.8%;
        right:auto;
        display:block;
        overflow:auto;
        transform:rotate(0deg);
        -moz-transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
        -o-transform:rotate(0deg);
    }
    #ttr_copyright a, #ttr_copyright span
    {
        display:inline;}
    #ttr_footer_designed_by_links
    {
        font-size:12px;
        font-family:"Museo 700","Verdana";font-weight:600;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        top: 16px;
        position:absolute;
        margin:auto;
        left: 0 ;
        right : 0 ;
        text-align:center;
        overflow:auto;
        transform:rotate(0deg);
        -moz-transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
        -o-transform:rotate(0deg);
    }
    #ttr_footer_designed_by_links
    {
        display:inline-block;
    }
    #ttr_footer_designed_by_links a, #ttr_footer_designed_by_links a:link, #ttr_footer_designed_by_links a:visited, #ttr_footer_designed_by_links a:hover
    {
        display:inline-block;font-size:12px;
        font-family:"Museo 700","Verdana";font-weight:600;
        font-style:normal;
        color:#3F51B5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .ttr_block
    {
        overflow:hidden;
        border-radius:0px 0px 0px 0px;
        border:solid #D3D3D3;
        border:solid rgba(211,211,211,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;margin-top:9px;
        margin-left:6px;
        margin-right:6px;
        margin-bottom:9px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .ttr_block_header
    {
        border-radius:0px 0px 0px 0px;
        border:solid #D3D3D3;
        border:solid rgba(211,211,211,1);
        border-width:0px 0px 1px 0px;
        box-shadow:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;min-height:30px;
        box-sizing: content-box;
        margin-top:4px;
        margin-left:4px;
        margin-right:4px;
        margin-bottom:4px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .ttr_block_content,  .ttr_block_content p
    {
        padding-top:2px;
        padding-left:2px;
        padding-right:2px;
        padding-bottom:2px;
        margin-top:3px;
        margin-left:3px;
        margin-right:3px;
        margin-bottom:3px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #D3D3D3;
        border:solid rgba(211,211,211,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        font-size:12px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .ttr_block_content,  .ttr_block_content p
    {
        font-size:14px !important;
    }
    .html_content p,.html_content span
    {
        font-family:Verdana;
        font-size:1em;
        line-height: normal;
        color:#000000;
        font-style:normal;
        font-weight:normal;
        text-align:left;
        margin:0;
    }
    input[type="text"], input[type="search"], input[type="password"], input[type="email"], input[type="url"], input[type="tel"], select
    {
        border-radius:4px 4px 4px 4px;
        border:solid #3F51B5;
        border:solid rgba(63,81,181,1);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
        font-size:14px;
        font-family:"Verdana";font-weight:400;
        font-style:normal;
        color:#4E4E4E;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;padding:6px;
        width:100%;
        height:34px !important;
    }
    input[type="text"]:focus, input[type="search"]:focus, input[type="password"]:focus, input[type="url"]:focus, input[type="email"]:focus, input[type="tel"]:focus
    {
        border-radius:4px 4px 4px 4px;
        border:solid #DDDDDD;
        border:solid rgba(221,221,221,1);
        border-width:1px 1px 1px 1px;
        box-shadow:1px 0px 10px rgba(191,222,246,1);
        font-size:14px;
        font-family:"Verdana";font-weight:400;
        font-style:normal;
        color:#4E4E4E;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;}
    textarea,  textarea.form-control
    {
        border-radius:4px 4px 4px 4px;
        border:solid #3F51B5;
        border:solid rgba(63,81,181,1);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
        font-size:14px;
        font-family:"Verdana";font-weight:400;
        font-style:normal;
        color:#4E4E4E;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;padding:6px;
        width:100%;
    }
    textarea:focus,  textarea.form-control:focus
    {
        border-radius:4px 4px 4px 4px;
        border:solid #DDDDDD;
        border:solid rgba(221,221,221,1);
        border-width:1px 1px 1px 1px;
        box-shadow:1px 0px 10px rgba(191,222,246,1);
        font-size:14px;
        font-family:"Verdana";font-weight:400;
        font-style:normal;
        color:#4E4E4E;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;}
    .form-horizontal .control-label
    {
        font-size:14px;
        font-family:"Museo 700","Times New Roman";font-weight:600;
        font-style:normal;
        color:#4E4E4E;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        padding-right:15px;
    }
    .ttr_banner_header_inner_above0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .headerabovecolumn1
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .headerabovecolumn2
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .headerabovecolumn3
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .headerabovecolumn4
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_banner_header_inner_below0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .headerbelowcolumn1
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .headerbelowcolumn2
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .headerbelowcolumn3
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .headerbelowcolumn4
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_banner_menu_inner_above0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .menuabovecolumn1
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .menuabovecolumn2
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .menuabovecolumn3
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .menuabovecolumn4
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_banner_menu_inner_below0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .menubelowcolumn1
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .menubelowcolumn2
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .menubelowcolumn3
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .menubelowcolumn4
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_banner_slideshow_inner_above0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .slideshowabovecolumn1
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .slideshowabovecolumn2
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .slideshowabovecolumn3
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .slideshowabovecolumn4
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_banner_slideshow_inner_below0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .slideshowbelowcolumn1
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .slideshowbelowcolumn2
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .slideshowbelowcolumn3
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .slideshowbelowcolumn4
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .contenttopcolumn0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .topcolumn1
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .topcolumn2
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .topcolumn3
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .topcolumn4
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .contentbottomcolumn0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .bottomcolumn1
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .bottomcolumn2
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .bottomcolumn3
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .bottomcolumn4
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_banner_header
    {
        margin: 0 auto;}
    .ttr_banner_menu
    {
    }
    .ttr_banner_slideshow
    {
    }
    .html_content a:hover, .html_content a:focus
    {
        text-decoration:none;}
    a:hover.separator, .login_link a
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#3F51B5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .login_link a:visited
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#8591D5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .login_link a:hover
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#252F69;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .ttr_footer-widget-area_inner_above0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .footerabovecolumn1
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .footerabovecolumn2
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .footerabovecolumn3
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .footerabovecolumn4
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_footer-widget-area_inner_below0
    {
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .footerbelowcolumn1
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .footerbelowcolumn2
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .footerbelowcolumn3
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .footerbelowcolumn4
    {
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    #ttr_content_margin
    {
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:40px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;box-sizing:border-box;
    }
    #ttr_content
    {
        float: left;
        width: 100%;
        clear: none;
    }
    .ttr_comments
    {
        background-color:#F3F3F3;
        background:rgba(243,243,243,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:10px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:20px;
        padding-right:20px;
        padding-bottom:0px;
        position: relative;
        display:table;
    }
    .ttr_comment_author
    {
        margin-right:12px;
        display:table-cell;
        float:left;
        vertical-align:middle;
    }
    .ttr_comment_author img
    {
        border-radius:45px 45px 45px 45px;
        border:solid #3F51B5;
        border:solid rgba(63,81,181,0.6);
        border-width:4px 4px 4px 4px;
        box-shadow:none;
    }
    .ttr_comment_text
    {
        overflow:hidden;
    }
    .ttr_comment_author_right
    {
        display:none;
    }
    #ttr_content .ttr_comment_text p
    {
        font-size:12px;
        font-family:"Verdana";font-weight:400;
        font-style:normal;
        color:#696969;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        line-height:normal;
        margin-left:5px;
    }
    #ttr_content .ttr_comments .ttr_author_name, #ttr_content .ttr_comments .ttr_author_name:hover, #ttr_content .ttr_comments .url
    {
        font-size:14px;
        font-family:"Museo 700","Verdana";font-weight:600;
        font-style:normal;
        color:#3F51B5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    #ttr_content .ttr_comments .ttr_comment_date, #ttr_content .ttr_comments .ttr_comment_date:hover
    {
        font-size:14px;
        font-family:"Museo 700","Verdana";font-weight:600;
        font-style:normal;
        color:#4E4E4E;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    #ttr_content .ttr_comment_reply_edit a, #ttr_content  .ttr_comment_reply_edit a:hover
    {
        font-size:14px;
        font-family:"Museo 700","Verdana";font-weight:600;
        font-style:normal;
        color:#4E4E4E;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .ttr_post_inner_box
    {
        border-radius:8px 8px 8px 8px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
    }
    .ttr_post
    {
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:5px;
        margin-left:5px;
        margin-right:5px;
        margin-bottom:5px;
        padding-top:5px;
        padding-left:5px;
        padding-right:5px;
        padding-bottom:5px;
    }
    .ttr_post_title
    {
        font-size:24px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        background-repeat: repeat;
        margin:0;
    }
    #ttr_content blockquote p
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#696969;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:0px;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    #ttr_content .postedon a
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#3F51B5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    #ttr_content .postedon a:hover
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#32408F;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .ttr_post_title a
    {
        font-size:24px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        background-color:transparent;
    }
    .ttr_post_title a:visited
    {
        font-size:24px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#3F51B5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        background-color:transparent;
    }
    .ttr_post_title a:hover
    {
        background-color:transparent;
        font-size:24px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#3F51B5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
    }
    .ttr_article
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#B53F51;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .postcontent, .postcontent p
    {
        margin-top:10px;
        margin-bottom:10px;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        line-height:25px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;}
    #ttr_content .postcontent
    {
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        margin-bottom:0px;
        padding-top:5px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom:10px;
    }
    table
    {
        border-collapse: separate !important;
        border-spacing: 2px;
    }
    .badge
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        border-radius:10px 10px 10px 10px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#808080;
        background:rgba(128,128,128,1);
        background-clip:padding-box;}
    .badge:hover
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    hr
    {
        border-width:2px 0px 0px 0px;
        border-color:#000000;
        border-style:Solid;
    }
    .label
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .label:hover
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .label-default
    {
        background-color:#252525;
        background:rgba(37,37,37,1);
        background-clip:padding-box;}
    .label-primary
    {
        background-color:#3F51B5;
        background:rgba(63,81,181,1);
        background-clip:padding-box;}
    .label-success
    {
        background-color:#7D7D7D;
        background:rgba(125,125,125,1);
        background-clip:padding-box;}
    .label-info
    {
        background-color:#B53F51;
        background:rgba(181,63,81,1);
        background-clip:padding-box;}
    .label-warning
    {
        background-color:#3F8CB5;
        background:rgba(63,140,181,1);
        background-clip:padding-box;}
    .label-danger
    {
        background-color:#B5A33F;
        background:rgba(181,163,63,1);
        background-clip:padding-box;}
    .label-default:hover
    {
        background-color:#252525;
        background:rgba(37,37,37,1);
        background-clip:padding-box;}
    .label-primary:hover
    {
        background-color:#3F51B5;
        background:rgba(63,81,181,1);
        background-clip:padding-box;}
    .label-success:hover
    {
        background-color:#7D7D7D;
        background:rgba(125,125,125,1);
        background-clip:padding-box;}
    .label-info:hover
    {
        background-color:#B53F51;
        background:rgba(181,63,81,1);
        background-clip:padding-box;}
    .label-warning:hover
    {
        background-color:#3F8CB5;
        background:rgba(63,140,181,1);
        background-clip:padding-box;}
    .label-danger:hover
    {
        background-color:#B5A33F;
        background:rgba(181,163,63,1);
        background-clip:padding-box;}
    .alert
    {
        padding-top:4px;
        padding-left:4px;
        padding-right:4px;
        padding-bottom:4px;
    }
    .alert-success
    {
        border-radius:2px 2px 2px 2px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#7D7D7D;
        background:rgba(125,125,125,1);
        background-clip:padding-box;}
    .alert-info
    {
        border-radius:2px 2px 2px 2px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#B53F51;
        background:rgba(181,63,81,1);
        background-clip:padding-box;}
    .alert-warning
    {
        border-radius:2px 2px 2px 2px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#3F8CB5;
        background:rgba(63,140,181,1);
        background-clip:padding-box;}
    .alert-danger
    {
        border-radius:2px 2px 2px 2px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#B5A33F;
        background:rgba(181,163,63,1);
        background-clip:padding-box;}
    #ttr_content .pagination li > a, #ttr_content .pagination li > span
    {
        border-radius:0px 0px 0px 0px;
        border:solid #DDDDDD;
        border:solid rgba(221,221,221,1);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
        font-size:12px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#3F51B5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;margin-top:1px;
        margin-left:1px;
        margin-right:1px;
        margin-bottom:1px;
        padding-top:6px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:6px;
        display:inline-block;}
    #ttr_content .pagination .active a, #ttr_content .pagination .active > span
    {
        border-radius:0px 0px 0px 0px;
        border:solid #3F51B5;
        border:solid rgba(63,81,181,1);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
        font-size:12px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        margin-top:1px;
        margin-left:1px;
        margin-right:1px;
        margin-bottom:1px;
        padding-top:6px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:6px;
        background-color:#3F51B5;
        background:rgba(63,81,181,1);
        background-clip:padding-box;display:inline-block;}
    #ttr_content .pagination a:hover, #ttr_content .pagination > span:hover
    {
        background-color:#EEEEEE;
        background:rgba(238,238,238,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #DDDDDD;
        border:solid rgba(221,221,221,1);
        border-width:1px 1px 1px 1px;
        box-shadow:none;
        font-size:12px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#2B387C;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    .breadcrumb
    {
        background-color:#F5F5F5;
        background:rgba(245,245,245,1);
        background-clip:padding-box;border-radius:4px 4px 4px 4px;
        border:solid transparent;
        border:solid rgba(255,255,255,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:1px;
        margin-left:1px;
        margin-right:1px;
        margin-bottom:1px;
        padding-top:3px;
        padding-left:5px;
        padding-right:5px;
        padding-bottom:3px;
        display:inline-block;
        color:#3F51B5;
    }
    .breadcrumb > li + li:before
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#3F51B5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    #ttr_content .breadcrumb a,.breadcrumb a
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#3F51B5;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    #ttr_content .breadcrumb a:hover, .breadcrumb a:hover
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    #ttr_content .breadcrumb span, .breadcrumb span
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#4E4E4E;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
    }
    #nav
    {
        transform:rotate(0deg);
        -moz-transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
        -o-transform:rotate(0deg);
        top:500px;
        position:absolute;
        left:94.98%;
        font-size:0;
        display:none;
    }
    .left-button
    {
        transform:rotate(0deg);
        -moz-transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
        -o-transform:rotate(0deg);
        box-shadow:none;
        border-radius:0px 0px 0px 0px;
        position:absolute;
        display:block;
        top: 255.5px;
        left:1.48%;
        margin:0;
        width: 30px;
    }
    .right-button
    {
        box-shadow:none;
        border-radius:0px 0px 0px 0px;
        position:absolute;
        display:block;
        top: 255.5px;
        left:95.94%;
        margin:0;
        width: 30px;
    }
    .btn
    {
        margin:3px;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#F3F3F3;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        border-radius:4px 4px 4px 4px;
        border:solid #CCCCCC;
        border:solid rgba(204,204,204,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .btn:hover
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#696969;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        border-radius:4px 4px 4px 4px;
        border:solid #ADADAD;
        border:solid rgba(173,173,173,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .btn-default
    {
        background-color:#6878D4;
        background:rgba(104,120,212,1);
        background-clip:padding-box;border-radius:4px 4px 4px 4px;
        border:solid #CCCCCC;
        border:solid rgba(204,204,204,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        padding-top:6px;
        padding-left:12px;
        padding-right:12px;
        padding-bottom:6px;
        box-sizing:inherit;
        clear:none;
        width:auto;
        height:auto;
        overflow:visible;
    }
    .btn-primary
    {
        background-color:#2E43BA;
        background:rgba(46,67,186,1);
        background-clip:padding-box;color:#FFFFFF;
        border-color:transparent;
    }
    .btn-success
    {
        background-color:#7D7D7D;
        background:rgba(125,125,125,1);
        background-clip:padding-box;color:#FFFFFF;
        border-color:#707070;
    }
    .btn-info
    {
        background-color:#B53F51;
        background:rgba(181,63,81,1);
        background-clip:padding-box;color:#FFFFFF;
        border-color:#A23849;
    }
    .btn-warning
    {
        background-color:#3F8CB5;
        background:rgba(63,140,181,1);
        background-clip:padding-box;color:#FFFFFF;
        border-color:#387DA2;
    }
    .btn-danger
    {
        background-color:#B5A33F;
        background:rgba(181,163,63,1);
        background-clip:padding-box;color:#FFFFFF;
        border-color:#A29238;
    }
    .btn-primary:hover
    {
        background-color:#6878D4;
        background:rgba(104,120,212,1);
        background-clip:padding-box;color:#000000;
        border-color:transparent;
    }
    .btn-success:hover
    {
        background-color:#EEEEEE;
        background:rgba(238,238,238,1);
        background-clip:padding-box;color:#333333;
        border-color:#ADADAD;
    }
    .btn-info:hover
    {
        background-color:#EEEEEE;
        background:rgba(238,238,238,1);
        background-clip:padding-box;color:#333333;
        border-color:#ADADAD;
    }
    .btn-warning:hover
    {
        background-color:#EEEEEE;
        background:rgba(238,238,238,1);
        background-clip:padding-box;color:#333333;
        border-color:#ADADAD;
    }
    .btn-danger:hover
    {
        background-color:#EEEEEE;
        background:rgba(238,238,238,1);
        background-clip:padding-box;color:#333333;
        border-color:#ADADAD;
    }
    .btn-lg, .btn-group-lg > .btn, .btn-lg:hover, .btn-group-lg > .btn:hover
    {
        border-radius:6px 6px 6px 6px;
        padding-top:10px;
        padding-left:16px;
        padding-right:16px;
        padding-bottom:10px;
        font-size:18px;
    }
    .btn-sm, .btn-group-sm > .btn, .btn-sm:hover, .btn-group-sm > .btn:hover
    {
        border-radius:3px 3px 3px 3px;
        padding-top:5px;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:5px;
        font-size:12px;
    }
    .btn-xs, .btn-group-xs > .btn, .btn-xs:hover, .btn-group-xs > .btn:hover
    {
        border-radius:3px 3px 3px 3px;
        padding-top:1px;
        padding-left:5px;
        padding-right:5px;
        padding-bottom:1px;
        font-size:12px;
    }
    .btn-default:hover, a.btn-default:hover
    {
        border-radius:4px 4px 4px 4px;
        border:solid #ADADAD;
        border:solid rgba(173,173,173,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        background-color:#EEEEEE;
        background:rgba(238,238,238,1);
        background-clip:padding-box;box-sizing:inherit;
        clear:none;
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#696969;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        width:auto;
        height:auto;
        overflow:visible;
    }
    .inputbutton
    {
        background: none repeat scroll 0 0 transparent;
        border: medium none;
        color:#F3F3F3;
        cursor: pointer;
        font-size:14px;
        padding-top:6px;
        padding-left:12px;
        padding-right:12px;
        padding-bottom:6px;
        left: -15px;
    }
    h1.ttr_verticalmenu_heading, h2.ttr_verticalmenu_heading,  h3.ttr_verticalmenu_heading, h4.ttr_verticalmenu_heading, h5.ttr_verticalmenu_heading, h6.ttr_verticalmenu_heading, p.ttr_verticalmenu_heading, span.ttr_verticalmenu_heading
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:center;
        text-decoration:none;
        line-height:30px;
        background:none;
        margin:0;
    }
    h1.ttr_block_heading, h2.ttr_block_heading,  h3.ttr_block_heading, h4.ttr_block_heading, h5.ttr_block_heading, h6.ttr_block_heading, p.ttr_block_heading, span.ttr_block_heading
    {
        font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:center;
        text-decoration:none;
        text-transform:none;
        line-height:30px;
        background:none;
        margin:0;
    }
    /*
{
TemplateToaster Version:6.0.0.10633
}
*/
    @media only screen
    and (max-width : 640px)
    {
        object, video
        {
            width:100% !important;
            height:auto !important;
        }
    }
    @media only screen
    and (max-width : 767px)
    {
        #ttr_menu.navbar
        {
            height:80px;
            border-radius:0px 0px 0px 0px;
            border:solid #E7E7E7;
            border:solid rgba(231,231,231,1);
            border-width:1px 0px 1px 0px;
            box-shadow:none;
        }
    }
    @media only screen
    and (max-width : 767px)
    {
        menu_inner_in
        {
            height: 72px;
        }
    }
    /* Smartphones (portrait and landscape) ----------- */
    @media only screen
    and (min-width : 150px)
    and (max-width : 767px)
    {
        #ttr_header_inner
        {
            width:auto !important;
            text-align:center !important;
        }
        #ttr_menu_inner_in .ttr_menu_items
        {
            display:inline-block;
        }
        #ttr_menu_inner_in
        {
            width:auto !important;
            height:auto !important;
            text-align:left !important;
        }
        .ttr_slideshow_last
        {
            width:auto;

        }
        #navigationmenu .navbar-header
        {
            position: relative;

        }
        .ttr_menu_items .horiz_separator
        {
            border-width:0px 0px 0px 0px;
            border-style:solid;
            border-color:transparent;
            width:auto !important;
            height:auto !important;
            float:none !important;
            margin:0;
            display:none;
        }
        #ttr_table
        {
            width:100%;
        }
        .logo
        {
            display:block;
            text-align:center;
        }
        #ttr_sidebar_left
        {
            float: none !important;
            width: auto !important;
            margin:0;
            border-radius:0;
            padding:0;}
        #ttr_sidebar_left_margin
        {
            height: auto !important;
        }
        #ttr_sidebar_right_margin
        {
            height: auto !important;
        }
        #ttr_sidebar_right
        {
            float: none !important;
            width: auto !important;
            margin:0;
            border:0;
            border-radius:0;
            padding:0;
        }
        #ttr_content
        {
            float: none !important;
            width: auto !important;
            margin:0;
            border:0;
            border-radius:0;
        }
        #ttr_content_single_sidebar_left,#ttr_content_single_sidebar_right,#ttr_content_zero_sidebar,#ttr_content_both_sidebar
        {
            float: none !important;
            width: auto !important;
        }
        #ttr_page
        {
            max-width:none !important;
            min-width:0 !important;
            padding-top:0;
        }
        .ttr_slogan_style
        {
            text-align:center;
        }
        #ttr_page .ttr_footer_bottom_footer_inner
        {
            width:auto !important;
            text-align:center;
        }
        .footer-widget-area
        {
            width:auto  !important;
            border:0;
            border-radius:0;
            padding:0;
            margin:0;
        }
        #ttr_page .ttr_slideshow_inner
        {
            height:100% !important;
        }
        ul.ttr_menu_items li
        {
            margin:0;}
        ul.ttr_menu_items li.ttr_menu_items_parent a, ul.ttr_menu_items li.ttr_menu_items_parent span.separator
        {
            float:none !important;
        }
        #ttr_menu .ttr_menu_items
        {
            display:block;
        }
        .ttr_vmenu_items ul.child li a
        {
            cursor:pointer;
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
            background-color:#FFFFFF;
            background:rgba(255,255,255,1);
            background-clip:padding-box;margin-top:5px;
            margin-left:5px;
            margin-right:5px;
            margin-bottom:5px;
            padding-top:0px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:0px;
            display:block;
        }
        .nav.ttr_vmenu_items ul.child li a:hover
        {
            cursor:pointer;
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
            background-color:#FFFFFF;
            background:rgba(255,255,255,1);
            background-clip:padding-box;margin-top:5px;
            margin-left:5px;
            margin-right:5px;
            margin-bottom:5px;
            padding-top:0px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:0px;
            display:block;
        }
        .nav-stacked > li + li
        {
            margin-top:0;
        }
        .nav.ttr_vmenu_items li a.ttr_vmenu_items_parent_link_arrow
        {
            background-color:#FFFFFF;
            background:rgba(255,255,255,1);
            background-clip:padding-box;display:block;
            text-align:left;
            padding-left:4px;
            padding-right:4px;
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
        }
        .nav.ttr_vmenu_items li:hover a.ttr_vmenu_items_parent_link_arrow,ttr_ .nav.ttr_vmenu_items li:hover a.ttr_vmenu_items_parent_link_active_arrow
        {
            background-color:#FFFFFF;
            background:rgba(255,255,255,1);
            background-clip:padding-box;display:block;
            text-align:left;
            padding-left:4px;
            padding-right:4px;
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
        }
        .nav.ttr_vmenu_items li:hover a.ttr_vmenu_items_parent_link,ttr_ .nav.ttr_vmenu_items li:hover a.ttr_vmenu_items_parent_link_active
        {
            background-color:#FFFFFF;
            background:rgba(255,255,255,1);
            background-clip:padding-box;display:block;
            text-align:left;
            padding-left:4px;
            padding-right:4px;
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
        }
        .menu-center
        {
            width:100%;
            z-index:99999;
        }
        .article_column
        {
            width:100% !important;float:none !important;padding-right:0 !important;}
    }
    .ttr_menu_items  li a.ttr_menu_items_parent_link
    {
        display:block;
        padding-left:15px;
        padding-right:15px;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:12px;
        margin-right:3px;
        margin-bottom:0px;
        cursor:pointer;
        box-sizing:border-box;
        padding-top:0px;
        padding-bottom:0px;
    }
    .ttr_menu_items  li a.ttr_menu_items_parent_link_arrow
    {
        display:block;
        padding-left:15px;
        padding-right:15px;
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#252525;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        background-color:transparent;
        background:rgba(255,255,255,0);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:12px;
        margin-right:3px;
        margin-bottom:0px;
        box-sizing:border-box;
        cursor:pointer;
        padding-top:0px;
        padding-bottom:0px;
    }
    .ttr_menu_items  li ul.child li a.subchild
    {
        text-align:left;
        line-height:30px;
        background-color:#FFFFFF;
        background:rgba(255,255,255,1);
        background-clip:padding-box;font-size:14px;
        font-family:"Verdana";
        font-weight:400;
        font-style:normal;
        color:#333333;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:none;
        border-radius:0px 0px 0px 0px;
        border:solid transparent;
        border:solid rgba(0,0,0,0);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
    }
    .ttr_menu_items  li a.ttr_menu_items_parent_link_active_arrow
    {
        float: left;
        padding-left:15px;
        padding-right:15px;
        box-sizing:border-box;
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        cursor: pointer;
        display: block;
        line-height:42px;
        background-color:#4253B6;
        background:rgba(66,83,182,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:12px;
        margin-right:3px;
        margin-bottom:0px;
        padding-top:0px;
        padding-bottom:0px;
    }
    .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active
    {
        display:block;
        cursor: pointer;
        font-size:16px;
        font-family:"Jura","Verdana";font-weight:400;
        font-style:normal;
        color:#FFFFFF;
        text-shadow:none;
        text-align:left;
        text-decoration:none;
        text-transform:uppercase;
        box-sizing:border-box;
        padding-left:15px;
        padding-right:15px;
        background-color:#4253B6;
        background:rgba(66,83,182,1);
        background-clip:padding-box;border-radius:0px 0px 0px 0px;
        border:solid #000000;
        border:solid rgba(0,0,0,1);
        border-width:0px 0px 0px 0px;
        box-shadow:none;
        margin-top:0px;
        margin-left:12px;
        margin-right:3px;
        margin-bottom:0px;
        padding-top:0px;
        padding-bottom:0px;
    }
    /* Small Tabs (portrait and landscape) ----------- */
    @media only screen
    and (min-width : 768px)
    and (max-width : 1024px)
    {
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        #ttr_header_inner
        {
            width: 100%  !important;
        }
        #ttr_menu_inner_in
        {
            width: auto !important;
        }
        .ttr_vmenu_items li a.ttr_vmenu_items_parent_link_active
        {
            background-color:#E7E7E7;
            background:rgba(231,231,231,1);
            background-clip:padding-box;display:block;
            text-align:left;
            padding-left:4px;
            padding-right:4px;
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
        }
        .nav.ttr_vmenu_items li:hover a.ttr_vmenu_items_parent_link,ttr_ .nav.ttr_vmenu_items li:hover a.ttr_vmenu_items_parent_link_active
        {
            background-color:#FFFFFF;
            background:rgba(255,255,255,1);
            background-clip:padding-box;display:block;
            text-align:left;
            padding-left:4px;
            padding-right:4px;
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            font-size:14px;
            font-family:"Verdana";
            font-weight:400;
            font-style:normal;
            color:#333333;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:none;
        }
        #ttr_table
        {
            width:100%;
        }
        body
        {
            margin:0;
        }
        .logo
        {
            display:block;
            text-align:center;
        }
        #ttr_page
        {
            max-width:none !important;
            min-width:0 !important;
            padding-top:0;
        }
        .article_column
        {
            width:100% !important;float:none !important;padding-right:0 !important;}
    }
    @media only screen
    and (min-width : 150px)
    and (max-width : 1024px)
    {
        .ttr_footer_bottom_footer_inner
        {
            width:100% !important;
            text-align:center;
        }
        img
        {
            max-width : 100% !important;}
    }
    /* iPads (portrait and landscape) ----------- */
    @media only screen
    and (min-width : 768px)
    and (max-width : 1024px)
    {
        .ttr_header_logo
        {
            background-size:100% 100%;
        }
        #ttr_header_inner
        {
            width: 100% !important;
        }
        .ttr_slideshow_last
        {
            width:auto;

        }
        #ttr_page .ttr_footer_bottom_footer_inner
        {
            width:auto !important;
        }
        #ttr_page
        {
            max-width:none !important;
            min-width:0 !important;
        }
        .ttr_banner_header
        {
            width:auto !important;
        }
        .ttr_banner_slideshow
        {
            width:auto !important;
        }
        .ttr_banner_menu
        {
            width:auto !important;
        }
        .footer-widget-area
        {
            width:auto !important;
        }
    }

    @media only screen
    and (min-width : 768px)
    and (max-width : 1024px)
    {
        @font-face
        {
            font-family:'Jura';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Jura/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @media only screen
        and (max-width : 640px)
        {
            form.form-horizontal
            {
                width:100%;
            }
        }
        label
        {
            font-weight:normal;}
        .totopshow {
            display: block;}
        .container
        {
            width:100%;

        }
        .ttr_footer_bottom_footer_inner, #ttr_footer_top_for_widgets
        {
            position:relative;
            margin:0 auto;
        }
        #ttr_menu.navbar
        {
            height:70px;
            min-height:70px;
        }
        #ttr_menu_inner_in
        {
            min-height: 72px;
            height:auto;
            position:relative;
            margin:0 auto;
        }
        .ttr_Home_html_row0
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .ttr_Home_html_column00
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:10px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:10px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column00, .ttr_Home_html_column00 p, .ttr_Home_html_column00 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column01
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:160px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:160px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column01, .ttr_Home_html_column01 p, .ttr_Home_html_column01 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column02
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:10px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:10px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column02, .ttr_Home_html_column02 p, .ttr_Home_html_column02 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_row1
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .ttr_Home_html_column10
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column10, .ttr_Home_html_column10 p, .ttr_Home_html_column10 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column11
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column11, .ttr_Home_html_column11 p, .ttr_Home_html_column11 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column12
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column12, .ttr_Home_html_column12 p, .ttr_Home_html_column12 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column13
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column13, .ttr_Home_html_column13 p, .ttr_Home_html_column13 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_row2
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:40px;
            padding-left:40px;
            padding-right:40px;
            padding-bottom:40px;
        }
        .ttr_Home_html_column20
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:60px;
            padding-left:60px;
            padding-right:60px;
            padding-bottom:60px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column20, .ttr_Home_html_column20 p, .ttr_Home_html_column20 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_row3
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:40px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .ttr_Home_html_column30, .ttr_Home_html_column30 p, .ttr_Home_html_column30 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column31, .ttr_Home_html_column31 p, .ttr_Home_html_column31 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column32, .ttr_Home_html_column32 p, .ttr_Home_html_column32 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column33, .ttr_Home_html_column33 p, .ttr_Home_html_column33 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column34, .ttr_Home_html_column34 p, .ttr_Home_html_column34 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_row4
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .ttr_Home_html_column40, .ttr_Home_html_column40 p, .ttr_Home_html_column40 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column41, .ttr_Home_html_column41 p, .ttr_Home_html_column41 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column42, .ttr_Home_html_column42 p, .ttr_Home_html_column42 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column43, .ttr_Home_html_column43 p, .ttr_Home_html_column43 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column44, .ttr_Home_html_column44 p, .ttr_Home_html_column44 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_row5
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
        }
        .ttr_Home_html_column50, .ttr_Home_html_column50 p, .ttr_Home_html_column50 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column51
        {
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column51, .ttr_Home_html_column51 p, .ttr_Home_html_column51 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column52
        {
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column52, .ttr_Home_html_column52 p, .ttr_Home_html_column52 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column53, .ttr_Home_html_column53 p, .ttr_Home_html_column53 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column54, .ttr_Home_html_column54 p, .ttr_Home_html_column54 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_footerHome_html_column00, .ttr_footerHome_html_column01, .ttr_footerHome_html_column02, .ttr_footerHome_html_column03
        {
            font-size:14px !important;
        }
        .ttr_menu_logo
        {
            background-repeat: no-repeat;
            transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -webkit-transform:rotate(0deg);
            -o-transform:rotate(0deg);
            top: 15px;
            bottom:auto;
            left:0%;
            margin:0;
            height:40px;
            width:200px;
            display:block;
            position:absolute;
            border:0 none;
            z-index:499;
        }
        .navbar-default
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:0px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:0px;
            box-sizing:content-box}
        .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_arrow
        {
            display:block;
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#252525;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            background-image: none;
            box-sizing:border-box;
            cursor:pointer;
        }
        .ttr_menu_items  li:hover a.ttr_menu_items_parent_link, .nav.ttr_menu_items  li:hover span.separator
        {
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
        }
        .nav.ttr_menu_items  li:hover a.ttr_menu_items_parent_link_arrow
        {
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            background-image: none;
        }
        .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active_arrow
        {
            box-sizing:border-box;
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            cursor: pointer;
            display: block;
        }
        .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active
        {
            display:block;
            cursor: pointer;
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            box-sizing:border-box;
        }
        .nav.ttr_menu_items  li.active:hover a.ttr_menu_items_parent_link_active
        {
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
        }
        .nav.ttr_menu_items  li.active:hover a.ttr_menu_items_parent_link_active_arrow
        {
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
        }
        nav#ttr_menu
        {
            max-width:100%;

        }
        .ttr_slideshow
        {
            display: block;
        }
        .ttr_slideshow
        {
            width:100%;
        }
        .ttr_slide
        {
            height:445px;
            width:100%;

        }
        #ttr_slideshow_inner ul
        {
            list-style: outside none none;

        }
        #ttr_slideshow_inner
        {
            height:445px;
            position:relative;
            overflow:hidden;
            width:100%;

        }
        #ttr_slideshow_inner ul li > a
        {
            height:445px;
            position:absolute;
            overflow:hidden;
            width:100%;

        }
        #ttr_slideshow_inner > ul li
        {
            position:absolute;

        }
        .ttr_slideshow_in
        {
            height:445px;
            position:absolute;
            width:100%;
            top:0;
            pointer-events:none;

        }
        .ttr_slideshow_in .ttr_slideshow_last div, .ttr_slideshow_in .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .ttr_slideshow_last
        {
            margin:0 auto;
            position:relative;
            overflow:hidden;
            pointer-events:none;
            height:445px;

        }
        .ttr_slideshow_last div a, .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .ttr_slideshow
        {
            box-sizing: content-box !important;
            position:relative;
            height:445px;

        }
        #ttr_copyright
        {
            top: 60px;
            position:absolute;
            margin:auto;
            left: 0 ;
            right : 0 ;
            text-align:center;
            display:block;
            overflow:auto;
            transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -webkit-transform:rotate(0deg);
            -o-transform:rotate(0deg);
        }
        #ttr_copyright a, #ttr_copyright span
        {
            display:inline;}
        #ttr_footer_designed_by_links
        {
            top: 26px;
            position:absolute;
            margin:auto;
            left: 0 ;
            right : 0 ;
            text-align:center;
            overflow:auto;
            transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -webkit-transform:rotate(0deg);
            -o-transform:rotate(0deg);
        }
        #ttr_footer_designed_by_links #ttr_footer_designed_by
        {
            display:inline-block;
        }
        #ttr_footer_designed_by_links a , #ttr_footer_designed_by_links a:link, #ttr_footer_designed_by_links a:visited, #ttr_footer_designed_by_links a:hover
        {
            display:inline-block;}
        .ttr_block_content,  .ttr_block_content p
        {
            font-size:14px !important;
        }
        #ttr_content
        {
            float: left;
            width: 100%;
            clear: none;
        }
        table
        {
            border-collapse: separate !important;
            border-spacing: 2px;
        }
        #nav
        {
            transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -webkit-transform:rotate(0deg);
            -o-transform:rotate(0deg);
            top:0px;
            position:absolute;
            left:0%;
        }
        .left-button
        {
            transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -webkit-transform:rotate(0deg);
            -o-transform:rotate(0deg);
            position:absolute;
            display:block;
            top: 205.5px;
            left:2.01%;
            margin:0;
        }
        .right-button
        {
            position:absolute;
            display:block;
            top: 205.5px;
            left:93.45%;
            margin:0;
        }
        .postedon
        {
            display: none;
        }
        .ttr_menu_items  li a.ttr_menu_items_parent_link
        {
            display:block;
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#252525;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            cursor:pointer;
            box-sizing:border-box;
            padding-top:0px;
            padding-bottom:0px;
        }
        .ttr_menu_items  li a.ttr_menu_items_parent_link_arrow
        {
            display:block;
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#252525;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            box-sizing:border-box;
            cursor:pointer;
            padding-top:0px;
            padding-bottom:0px;
        }
        .ttr_menu_items  li a.ttr_menu_items_parent_link_active_arrow
        {
            float: left;
            padding-left:15px;
            box-sizing:border-box;
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            cursor: pointer;
            display: block;
            padding-top:0px;
            padding-bottom:0px;
        }
        .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active
        {
            display:block;
            cursor: pointer;
            font-size:12px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            box-sizing:border-box;
            padding-top:0px;
            padding-bottom:0px;
        }
        #ttr_sidebar_left
        {
            width: 0%;
        }
        #ttr_content
        {
            width: 100%;
        }
        #ttr_sidebar_right
        {
            width: 0%;
        }
    }

    @media only screen
    and (max-width : 767px)
    {
        @font-face
        {
            font-family:'Jura';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Jura/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:400;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Amaranth';
            font-weight:700;
            font-style:Normal;
            src:url('Fonts/Amaranth/regular.otf');
        }
        @font-face
        {
            font-family:'Museo 700';
            font-weight:600;
            font-style:Normal;
            src:url('Fonts/Museo 700/Museo700-Regular.otf');
        }
        @media only screen
        and (max-width : 640px)
        {
            form.form-horizontal
            {
                width:100%;
            }
        }
        label
        {
            font-weight:normal;}
        .totopshow {
            display: block;}
        .container
        {
            width:100%;

        }
        .ttr_footer_bottom_footer_inner
        {
            height:80px;
        }
        .ttr_footer_bottom_footer_inner, #ttr_footer_top_for_widgets
        {
            position:relative;
            margin:0 auto;
        }
        #navigationmenu
        {
            width:auto;
            margin:0 auto;
        }
        #ttr_menu.navbar
        {
            height:70px;
            min-height:70px;
        }
        #ttr_menu_inner_in
        {
            min-height: 72px;
            height:auto;
            position:relative;
            margin:0 auto;
        }
        .ttr_Home_html_row0
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:5px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:5px;
        }
        .ttr_Home_html_column00
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column00, .ttr_Home_html_column00 p, .ttr_Home_html_column00 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column01
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:80px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:80px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column01, .ttr_Home_html_column01 p, .ttr_Home_html_column01 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column02
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column02, .ttr_Home_html_column02 p, .ttr_Home_html_column02 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_row1
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:5px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:5px;
        }
        .ttr_Home_html_column10, .ttr_Home_html_column10 p, .ttr_Home_html_column10 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column11, .ttr_Home_html_column11 p, .ttr_Home_html_column11 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column12, .ttr_Home_html_column12 p, .ttr_Home_html_column12 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column13
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column13, .ttr_Home_html_column13 p, .ttr_Home_html_column13 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_row2
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:10px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:10px;
        }
        .ttr_Home_html_column20
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:5px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:5px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column20, .ttr_Home_html_column20 p, .ttr_Home_html_column20 .tt_link
        {
            font-size:11.2px !important;
        }
        .ttr_Home_html_row3
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:40px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:40px;
        }
        .ttr_Home_html_column30
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:10px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:10px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column30, .ttr_Home_html_column30 p, .ttr_Home_html_column30 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column31
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column31, .ttr_Home_html_column31 p, .ttr_Home_html_column31 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column32
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column32, .ttr_Home_html_column32 p, .ttr_Home_html_column32 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column33
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column33, .ttr_Home_html_column33 p, .ttr_Home_html_column33 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column34
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column34, .ttr_Home_html_column34 p, .ttr_Home_html_column34 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_row4
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:40px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:40px;
        }
        .ttr_Home_html_column40
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:10px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:10px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column40, .ttr_Home_html_column40 p, .ttr_Home_html_column40 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column41
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column41, .ttr_Home_html_column41 p, .ttr_Home_html_column41 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column42
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column42, .ttr_Home_html_column42 p, .ttr_Home_html_column42 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column43
        {
            margin-top:20px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:40px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column43, .ttr_Home_html_column43 p, .ttr_Home_html_column43 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column44, .ttr_Home_html_column44 p, .ttr_Home_html_column44 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_row5
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:40px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:40px;
        }
        .ttr_Home_html_column50
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:20px;
            padding-top:10px;
            padding-left:0px;
            padding-right:0px;
            padding-bottom:10px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column50, .ttr_Home_html_column50 p, .ttr_Home_html_column50 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column51
        {
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column51, .ttr_Home_html_column51 p, .ttr_Home_html_column51 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column52
        {
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column52, .ttr_Home_html_column52 p, .ttr_Home_html_column52 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column53
        {
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;
            margin-bottom:20px;
            padding-top:20px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:20px;
            word-wrap:break-word;
        }
        .ttr_Home_html_column53, .ttr_Home_html_column53 p, .ttr_Home_html_column53 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_Home_html_column54, .ttr_Home_html_column54 p, .ttr_Home_html_column54 .tt_link
        {
            font-size:14px !important;
        }
        .ttr_footerHome_html_column00, .ttr_footerHome_html_column01, .ttr_footerHome_html_column02, .ttr_footerHome_html_column03
        {
            font-size:14px !important;
        }
        .ttr_menu_logo
        {
            background-repeat: no-repeat;
            transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -webkit-transform:rotate(0deg);
            -o-transform:rotate(0deg);
            top: 15px;
            bottom:auto;
            left:0%;
            margin:0;
            height:40px;
            width:205px;
            display:block;
            position:absolute;
            border:0 none;
            z-index:499;
        }
        .navbar-nav
        {
            padding:0;
            list-style:none;
            position:relative;
            margin:0;
            z-index:499;
            border:0px !important;
            margin:0;
            padding-top:17.5px !important;
            text-align:left;
            zoom:1;
        }
        .navbar-default
        {
            margin-top:0px;
            margin-left:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding-top:0px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:0px;
            box-sizing:content-box}
        #ttr_page .ttr_menu_items  li ul.child
        {
            top:35px;
        }
        .nav.ttr_menu_items  li a.ttr_menu_items_parent_link, .nav.ttr_menu_items  li span.separator
        {
            display:block;
            line-height:50px;
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#252525;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            cursor:pointer;
            height:50px;
            box-sizing:border-box;
        }
        .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_arrow
        {
            display:block;
            line-height:50px;
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#252525;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            background-image: none;
            box-sizing:border-box;
            cursor:pointer;
            height:50px;
        }
        .ttr_menu_items  li:hover a.ttr_menu_items_parent_link, .nav.ttr_menu_items  li:hover span.separator
        {
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
        }
        .nav.ttr_menu_items  li:hover a.ttr_menu_items_parent_link_arrow
        {
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            background-image: none;
        }
        .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active_arrow
        {
            box-sizing:border-box;
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            cursor: pointer;
            display: block;
            line-height:50px;
            height:50px;
        }
        .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active
        {
            display:block;
            cursor: pointer;
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            box-sizing:border-box;
            height:50px;
            line-height:50px;
        }
        .nav.ttr_menu_items  li.active:hover a.ttr_menu_items_parent_link_active
        {
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
        }
        .nav.ttr_menu_items  li.active:hover a.ttr_menu_items_parent_link_active_arrow
        {
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
        }
        .ttr_menu_items .horiz_separator
        {
            float:right;
            height:35px;
        }
        nav#ttr_menu
        {
            max-width:100%;

        }
        .ttr_slideshow
        {
            display: block;
        }
        .ttr_slideshow
        {
            width:100%;
        }
        .ttr_slide
        {
            height:345px;
            width:100%;

        }
        #ttr_slideshow_inner ul
        {
            list-style: outside none none;

        }
        #ttr_slideshow_inner
        {
            height:345px;
            position:relative;
            overflow:hidden;
            width:100%;

        }
        #ttr_slideshow_inner ul li > a
        {
            height:345px;
            position:absolute;
            overflow:hidden;
            width:100%;

        }
        #ttr_slideshow_inner > ul li
        {
            position:absolute;

        }
        .ttr_slideshow_in
        {
            height:345px;
            position:absolute;
            width:100%;
            top:0;
            pointer-events:none;

        }
        .ttr_slideshow_in .ttr_slideshow_last div, .ttr_slideshow_in .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .ttr_slideshow_last
        {
            margin:0 auto;
            position:relative;
            overflow:hidden;
            pointer-events:none;
            height:345px;

        }
        .ttr_slideshow_last div a, .ttr_slideshow_last a
        {
            pointer-events:auto;

        }
        .ttr_slideshow
        {
            box-sizing: content-box !important;
            position:relative;
            height:345px;

        }
        .ttr_footer_bottom_footer
        {
            height:80px;
        }
        #ttr_copyright a, #ttr_copyright span
        {
            font-size:11px;
            font-family:"Museo 700","Verdana";font-weight:600;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
        }
        #ttr_copyright
        {
            top: 40px;
            position:absolute;
            margin:auto;
            left: 0 ;
            right : 0 ;
            text-align:center;
            display:block;
            overflow:auto;
            transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -webkit-transform:rotate(0deg);
            -o-transform:rotate(0deg);
        }
        #ttr_copyright a, #ttr_copyright span
        {
            display:inline;}
        #ttr_footer_designed_by_links
        {
            font-size:11px;
            font-family:"Museo 700","Verdana";font-weight:600;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            top: 15.11px;
            position:absolute;
            margin:auto;
            left: 0 ;
            right : 0 ;
            text-align:center;
            overflow:auto;
            transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -webkit-transform:rotate(0deg);
            -o-transform:rotate(0deg);
        }
        #ttr_footer_designed_by_links
        {
            display:inline-block;
        }
        #ttr_footer_designed_by_links a, #ttr_footer_designed_by_links a:link, #ttr_footer_designed_by_links a:visited, #ttr_footer_designed_by_links a:hover
        {
            display:inline-block;font-size:11px;
            font-family:"Museo 700","Verdana";font-weight:600;
            font-style:normal;
            color:#3F51B5;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
        }
        .ttr_block_content,  .ttr_block_content p
        {
            font-size:14px !important;
        }
        #ttr_content
        {
            float: left;
            width: 100%;
            clear: none;
        }
        table
        {
            border-collapse: separate !important;
            border-spacing: 2px;
        }
        #nav
        {
            transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -webkit-transform:rotate(0deg);
            -o-transform:rotate(0deg);
            top:0px;
            position:absolute;
            left:0%;
        }
        .left-button
        {
            transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -webkit-transform:rotate(0deg);
            -o-transform:rotate(0deg);
            position:absolute;
            display:block;
            top: 155.5px;
            left:0%;
            margin:0;
        }
        .right-button
        {
            position:absolute;
            display:block;
            top: 155.5px;
            right:0;
            left:auto;
        }
        .postedon
        {
            display: none;
        }
        .open > .child
        {
            display: block;

        }
        .nav.navbar-nav li.ttr_menu_items_parent a
        {
            margin-bottom:0px;

        }
        ul.ttr_menu_items
        {
            padding-top:0 !important;

        }
        .ttr_vmenu_items .dropdown-submenu.open > ul
        {
            display: block !important;
            visibility: visible !important;
            position:static !important;
            float:none;
            list-style:none outside none;
        }
        .ttr_vmenu_items .dropdown-menu > li, .ttr_vmenu_items li ul.child li a
        {
            display: block !important;
        }
        ul.child ul
        {
            display:none;
        }
        .navbar-nav ul.dropdown-menu .sub-menu
        {
            left: 0px !important;
            position: static !important;
            top: 0px !important;
            float:none !important;
        }
        .ttr_vmenu_items .open .child {float: none;
            position: static;
            list-style:none outside none;

        }
        #ttr_menu .navbar-toggle
        {

        }
        #ttr_menu .navbar-toggle
        {
            border-radius: 0;
            padding: 9px 7px;
            margin-right:3px;
            float:right;

        }
        #ttr_menu .navbar-toggle:hover, #ttr_menu .navbar-toggle:focus
        {
            margin-right:3px;
            float:right;

        }
        #ttr_menu .navbar-toggle, #ttr_menu .navbar-toggle:hover, #ttr_menu .navbar-toggle:focus
        {

        }
        #ttr_menu .navbar-toggle
        {

        }
        nav#ttr_menu .icon-bar
        {
            background-color:#4253B6;
            background:rgba(66,83,182,1);
            background-clip:padding-box;
        }
        #ttr_menu .navbar-toggle:hover, #ttr_menu .navbar-toggle:focus
        {
            border-radius:0px 0px 0px 0px;
            border:solid #4253B5;
            border:solid rgba(66,83,181,1);
            border-width:1px 1px 1px 1px;
            box-shadow:none;

        }
        #ttr_menu.navbar
        {
            height:auto !important;

        }
        #ttr_menu .navbar-nav
        {
            margin:0;

        }
        .ttr_menu_items  li a.ttr_menu_items_parent_link
        {
            display:block;
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#252525;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            cursor:pointer;
            box-sizing:border-box;
            padding-top:0px;
            padding-bottom:0px;
        }
        .ttr_menu_items  li a.ttr_menu_items_parent_link_arrow
        {
            display:block;
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#252525;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            box-sizing:border-box;
            cursor:pointer;
            padding-top:0px;
            padding-bottom:0px;
        }
        .ttr_menu_items  li a.ttr_menu_items_parent_link_active_arrow
        {
            float: left;
            padding-left:15px;
            box-sizing:border-box;
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            cursor: pointer;
            display: block;
            line-height:35px;
            padding-top:0px;
            padding-bottom:0px;
        }
        .nav.ttr_menu_items  li a.ttr_menu_items_parent_link_active
        {
            display:block;
            cursor: pointer;
            font-size:14px;
            font-family:"Jura","Verdana";font-weight:400;
            font-style:normal;
            color:#FFFFFF;
            text-shadow:none;
            text-align:left;
            text-decoration:none;
            text-transform:uppercase;
            box-sizing:border-box;
            padding-top:0px;
            padding-bottom:0px;
        }
    }
    .ttr_Home_html_column10 .ttr_image span img ,.ttr_Home_html_column11 .ttr_image span img ,.ttr_Home_html_column12 .ttr_image span img ,.ttr_Home_html_column13 .ttr_image span img ,
    .ttr_About_html_column30 .ttr_image span img ,.ttr_About_html_column31 .ttr_image span img ,.ttr_About_html_column32 .ttr_image span img ,.ttr_About_html_column33 .ttr_image span img
    {
        border: 5px solid #f3f3f3;
        border-radius: 50%;
        padding: 10px;
        transition: all 0.5s ease-in-out;
    }

    .ttr_Home_html_column10 .ttr_image span img:hover ,.ttr_Home_html_column11 .ttr_image span img:hover  ,.ttr_Home_html_column12 .ttr_image span img:hover  ,.ttr_Home_html_column13 .ttr_image span img:hover ,
    .ttr_About_html_column30 .ttr_image span img:hover , .ttr_About_html_column31 .ttr_image span img:hover ,.ttr_About_html_column32 .ttr_image span img:hover ,.ttr_About_html_column33 .ttr_image span img:hover
    {
        border: 5px solid #3E50B5;
        transition: all 0.5s ease-in-out;
    }

    .ttr_Home_html_row2
    {
        background-attachment:fixed;
    }

    .ttr_Home_html_column31 .ttr_image span img ,.ttr_Home_html_column32 .ttr_image span img  ,.ttr_Home_html_column33 .ttr_image span img  ,.ttr_Home_html_column34 .ttr_image span img ,
    .ttr_About_html_column41 .ttr_image span img ,.ttr_About_html_column42 .ttr_image span img ,.ttr_About_html_column43 .ttr_image span img ,.ttr_About_html_column44 .ttr_image span img ,
    .ttr_Events_html_column11 .ttr_image span img ,.ttr_Events_html_column12 .ttr_image span img ,.ttr_Events_html_column13 .ttr_image span img ,.ttr_Events_html_column14 .ttr_image span img ,
    .ttr_Events_html_column15 .ttr_image span img ,.ttr_Events_html_column16 .ttr_image span img

    {
        transition:all 0.5s ease-in-out;
    }

    .ttr_Home_html_column31 .ttr_image span img:hover ,.ttr_Home_html_column32 .ttr_image span img:hover ,.ttr_Home_html_column33 .ttr_image span img:hover ,.ttr_Home_html_column34 .ttr_image span img:hover ,
    .ttr_About_html_column41 .ttr_image span img:hover ,.ttr_About_html_column42 .ttr_image span img:hover ,.ttr_About_html_column43 .ttr_image span img:hover ,.ttr_About_html_column44 .ttr_image span img:hover ,
    .ttr_Events_html_column11 .ttr_image span img:hover ,.ttr_Events_html_column12 .ttr_image span img:hover ,.ttr_Events_html_column13 .ttr_image span img:hover ,.ttr_Events_html_column14 .ttr_image span img:hover ,
    .ttr_Events_html_column15 .ttr_image span img:hover ,.ttr_Events_html_column16 .ttr_image span img:hover
    {
        transform:scale(1.1);
        transition:all 0.5s ease-in-out;
    }

    .ttr_Home_html_column41 p span:hover ,.ttr_Home_html_column42 p span:hover ,.ttr_Home_html_column43 p span:hover ,.ttr_Home_html_column44 p span:hover
    {
        color:#252525 !important;
    }

    .ttr_Home_html_column51:hover ,.ttr_Home_html_column52:hover ,.ttr_Home_html_column53:hover ,.ttr_Home_html_column54:hover
    {
        transition:all 0.5s ease-in-out;
        box-shadow:0px 0px 5px #a1a1a1;
    }

    #ttr_footer .html_content a.tt_link span:hover
    {
        color: #2e43ba !important;
    }
    .ttr_About_html_row5.row .post_column.col-lg-6.col-md-12.col-sm-12.col-xs-12:hover .ttr_uniform
    {
        transform:rotateY(180deg);
        transition:0.6s all ease-in-out;
    }
    .ttr_About_html_row5.row .post_column.col-lg-6.col-md-12.col-sm-12.col-xs-12 .ttr_uniform
    {
        transition:0.6s all ease-in-out;

    }
    .ttr_About_html_row5.row .post_column.col-lg-6.col-md-12.col-sm-12.col-xs-12
    {
        cursor:pointer;
    }



</style>
@section('content')


    <div class="Home" >
        <div class="totopshow">
            <a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png"/></a>
        </div>
        <div id="ttr_page" class="container">
            <nav id="ttr_menu" class="navbar-default navbar">
                <div id="ttr_menu_inner_in">
                    <div class="menuforeground">
                    </div>
                    <div id="navigationmenu">
                        <div class="navbar-header">
                            <button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">
</span>
                                <span class="icon-bar">
</span>
                                <span class="icon-bar">
</span>
                                <span class="icon-bar">
</span>
                            </button>
                            <a href="#" target="_self">
                                <img  class="ttr_menu_logo" src="{{asset("images/book2.jpg")}}" style="width: 500px;height: 60px">
                            </a>
                        </div>
                        <div class="menu-center collapse navbar-collapse">
                            <ul class="ttr_menu_items nav navbar-nav navbar-right">
                                <li class="ttr_menu_items_parent dropdown active"><a href="home.html" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Home</a>
                                    <hr class ="horiz_separator"/>
                                </li>
                                <li class="ttr_menu_items_parent dropdown"><a href="about.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>About</a>
                                    <hr class ="horiz_separator"/>
                                </li>
                                <li class="ttr_menu_items_parent dropdown"><a href="courses.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Courses</a>
                                    <hr class ="horiz_separator"/>
                                </li>
                                <li class="ttr_menu_items_parent dropdown"><a href="events.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Events</a>
                                    <hr class ="horiz_separator"/>
                                </li>
                                <li class="ttr_menu_items_parent dropdown"><a href="contact.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Contact</a>
                                    <hr class ="horiz_separator"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="ttr_banner_slideshow">
            </div>
            <div class="ttr_banner_slideshow">
            </div>
            <div id="ttr_content_and_sidebar_container">
                <div id="ttr_content">
                </div>
                <div style="clear:both">
                </div>
            </div>
            <div style="height:0px;width:0px;overflow:hidden;"></div>
            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
        </div>
        <script>
            window.viewportUnitsBuggyfill.init({
                refreshDebounceWait: 50,
                hacks: window.viewportUnitsBuggyfillHacks
            });
        </script>
    </div>
    <div id="ttr_content_and_sidebar_container">
        <div id="ttr_content">
            <div id="ttr_content_margin"class="container-fluid">
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                <div class="ttr_Home_html_row0 row">
                    <div class="post_column col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_Home_html_column00">
                            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                            <div class="html_content"><p style="margin:0em 0em 0.36em 0em;line-height:2.8169014084507;"><span style="font-family:'Museo 700','Arial';font-weight:600;font-size:2.286em;color:rgba(37,37,37,1);">Many professional books are available with us.</span></p><p style="margin:0em 0em 0.71em 0em;line-height:1.76056338028169;"><span style="font-family:'Verdana';font-weight:700;font-size:1.143em;color:rgba(105,105,105,1);">Get admission in any book of your choice.</span></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Verdana';color:rgba(105,105,105,1);">
Include title, author, place, publisher, publication date, edition, pages, special features (maps, etc.), price, ISBN.
Hook the reader with your opening sentence. ...
Review the book you read -- not the book you wish the author had written.
If this is the best book you have ever read, say so -- and why.
.</span></p></div>
                            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block visible-md-block visible-xs-block">
                    </div>
                    <div class="post_column col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_Home_html_column01">
                            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                            {{--<div class="html_content"><p>&nbsp;</p></div>--}}
                            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block visible-md-block visible-xs-block">
                    </div>
                    <div class="post_column col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_Home_html_column02">
                            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                            <div class="html_content"><p style="margin:0em 0em 0.71em 0em;"><span class="ttr_image" style="float:Left;overflow:hidden;margin:0em 0.71em 0em 0em;"><span><img class="ttr_uniform" src="{{asset("images/book3.jpg")}}" style="max-width:28px;max-height:32px;" /></span></span><span style="font-family:'Museo 700','Arial';font-weight:600;font-size:2.286em;color:rgba(37,37,37,1);">fiction books</span></p><p style="margin:0.36em 0em 0.36em 2.86em;line-height:1.76056338028169;"><span style="font-family:'Verdana';color:rgba(37,37,37,1);">A fiction is a deliberately fabricated account of something. It can also be a literary work based on imagination rather than on fact, like a novel or short story.</span></p><p style="margin:0em 0em 0.71em 0em;"><span class="ttr_image" style="float:Left;overflow:hidden;margin:0em 0.71em 0em 0em;"><span><img class="ttr_uniform" src="{{asset("images/book4.jpg")}}" style="max-width:28px;max-height:32px;" /></span></span><span style="font-family:'Museo 700','Arial';font-weight:600;font-size:2.286em;color:rgba(37,37,37,1);">adventure books</span></p><p style="margin:0.36em 0em 0.36em 2.86em;line-height:1.76056338028169;"><span style="font-family:'Verdana';color:rgba(37,37,37,1);"> Check out these action adventure novels, from high-stakes fantasy to stories for those who like the idea of an everyday adventure</span></p><p style="margin:1.43em 0em 0em 2.86em;line-height:1.76056338028169;"><span><a HREF="#" target="_self" class="btn btn-md btn-primary">Read More Info</a></span></p></div>
                            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    <div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
                    </div>
                </div>
                <div class="ttr_Home_html_row2 row">
                    <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_Home_html_column20">
                            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                            <div class="html_content"><p style="text-align:Center;"><span style="font-family:'Museo 700','Verdana';font-weight:600;font-size:2.571em;color:rgba(255,255,255,1);">"You can also read the books entirely if their digital versions is available online for free. This happens to most public domain books"</span></p><p style="text-align:Center;"><span style="font-family:'Museo 700','Verdana';font-weight:600;font-size:2.571em;color:rgba(255,255,255,1);">Albert Einstein</span></p></div>
                            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    <div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
                    </div>
                </div>

            </div>
        </div>
        <div style="clear:both">
        </div>
    </div>
    <div style="height:0px;width:0px;overflow:hidden;"></div>
    <footer id="ttr_footer">
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
                    <div class="html_content"><p style="margin:0em 0em 1.43em 0em;"><br style="font-family:'Museo 700','Verdana';font-weight:600;font-size:2.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0em 0em 1.43em 0em;"><span style="font-family:'Museo 700','Verdana';font-weight:600;font-size:1.571em;color:rgba(255,255,255,1);">Contact Us:-</span></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Verdana';color:rgba(255,255,255,1);">550 North Hillside Street</span></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Verdana';color:rgba(255,255,255,1);">Wichita, KS 67214 </span></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><a HREF="Contact.html" class="tt_link" target="_self"><span style="font-family:'Verdana';font-weight:700;font-size:1.143em;color:rgba(255,255,255,1);">+316 962 2000 </span></a></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Verdana';color:rgba(255,255,255,1);">Demo@maillink.com</span></p><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><br style="font-family:'Verdana';color:rgba(255,255,255,1);" /></p></div>
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
                <div id="ttr_footer_designed_by_links">
                    <a href="http://templatetoaster.com" target="_self" >
                        Website
                    </a>
                    <span id="ttr_footer_designed_by">
Designed With TemplateToaster
</span>
                </div>
            </div>
        </div>
    </footer>

@endsection
