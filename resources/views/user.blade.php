<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>N.A.R Clouds</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /*

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

*/

        /* ---------------------------------------------
Table of contents
------------------------------------------------
01. font & reset css
02. reset
03. global styles
04. header
05. banner
06. features
07. testimonials
08. contact
09. footer
10. preloader
11. search
12. portfolio

--------------------------------------------- */
        /* 
---------------------------------------------
font & reset css
--------------------------------------------- 
*/
        /* 
---------------------------------------------
reset
--------------------------------------------- 
*/
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        div pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        font,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        figure,
        header,
        nav,
        section,
        article,
        aside,
        footer,
        figcaption {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
        }

        /* clear fix */
        .grid:after {
            content: '';
            display: block;
            clear: both;
        }

        /* ---- .grid-item ---- */

        .grid-sizer,
        .grid-item {
            width: 50%;
        }

        .grid-item {
            float: left;
        }

        .grid-item img {
            display: block;
            max-width: 100%;
        }

        .clearfix:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }

        .clearfix {
            display: inline-block;
        }

        html[xmlns] .clearfix {
            display: block;
        }

        * html .clearfix {
            height: 1%;
        }

        ul,
        li {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        header,
        nav,
        section,
        article,
        aside,
        footer,
        hgroup {
            display: block;
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            background-color: #fff;
            -ms-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        a {
            text-decoration: none !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        ul {
            margin-bottom: 0px;
        }

        p {
            font-size: 15px;
            line-height: 30px;
            font-weight: 300;
            color: #afafaf;
        }

        img {
            width: 100%;
            overflow: hidden;
        }

        /* 
---------------------------------------------
global styles
--------------------------------------------- 
*/
        html,
        body {
            background: #fff;
            font-family: 'Roboto', sans-serif;
        }

        ::selection {
            background: #4b8ef1;
            color: #fff !important;
        }

        ::-moz-selection {
            background: #4b8ef1;
            color: #fff !important;
        }

        @media (max-width: 991px) {

            html,
            body {
                overflow-x: hidden;
            }

            .mobile-top-fix {
                margin-top: 30px;
                margin-bottom: 0px;
            }

            .mobile-bottom-fix {
                margin-bottom: 30px;
            }

            .mobile-bottom-fix-big {
                margin-bottom: 60px;
            }
        }

        .section-heading {
            position: relative;
            z-index: 2;
        }

        .section-heading h4 {
            color: #2a2a2a;
            font-size: 30px;
            font-weight: 700;
            text-transform: capitalize;
            margin-bottom: 10px;
        }

        .section-heading h4 em {
            font-style: normal;
            color: #4b8ef1;
        }

        .section-heading img {
            width: 45px;
            height: 2px;
        }

        .section-heading p {
            margin-top: 10px;
        }

        .show-up {
            position: relative;
            z-index: 2;
        }

        .white-button a {
            display: inline-block !important;
            padding: 10px 20px !important;
            color: #4b8ef1 !important;
            text-transform: capitalize;
            font-size: 15px;
            background-color: #fff;
            border-radius: 23px;
            font-weight: 500 !important;
            letter-spacing: 0.3px !important;
            transition: all .5s;
        }

        .white-button a i {
            margin-left: 5px;
            font-size: 18px;
        }

        .white-button a:hover {
            background-color: #4b8ef1;
            color: #fff !important;
        }

        .text-button a {
            font-size: 15px;
        }

        .text-button a i {
            margin-left: 5px;
            font-size: 14px;
            transition: all .3s;
        }

        .text-button a:hover i {
            margin-left: 8px;
        }

        .gradient-button a {
            display: inline-block !important;
            padding: 10px 20px !important;
            color: #fff !important;
            text-transform: capitalize;
            font-size: 15px;
            background: rgb(19, 175, 240);
            background: linear-gradient(105deg, rgba(91, 104, 235, 1) 0%, rgba(40, 225, 253, 1) 100%);
            border-radius: 23px;
            font-weight: 500 !important;
            letter-spacing: 0.3px !important;
            transition: all .5s;
        }

        .gradient-button a:hover {
            color: #fff !important;
            background: rgb(19, 175, 240);
            background: linear-gradient(105deg, rgba(91, 104, 235, 1) 0%, rgba(40, 225, 253, 1) 100%);
        }

        .border-button a {
            display: inline-block !important;
            padding: 10px 20px !important;
            color: #4b8ef1 !important;
            border: 1px solid #4b8ef1;
            text-transform: capitalize;
            font-size: 15px;
            display: inline-block;
            background-color: #fff;
            border-radius: 23px;
            font-weight: 500 !important;
            letter-spacing: 0.3px !important;
            transition: all .5s;
        }

        .border-button a:hover {
            background-color: #4b8ef1;
            color: #fff !important;
        }


        /* 
---------------------------------------------
header
--------------------------------------------- 
*/

        .background-header {
            background-color: #fff !important;
            height: 80px !important;
            border-bottom: none !important;
            position: fixed !important;
            top: 0px;
            left: 0px;
            right: 0px;
            box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.03);
        }

        .background-header .logo,
        .background-header .main-nav .nav li a {
            color: #fff;
        }

        .background-header .main-nav .nav li:hover a {
            color: #4b8ef1;
        }

        .background-header .nav li a.active {
            position: relative;
            color: #fff;
        }

        .background-header .nav li a.active:after {
            position: absolute;
            width: 100%;
            height: 1px;
            background-color: #4b8ef1;
            content: '';
            left: 50%;
            bottom: -20px;
            transform: translateX(-50%);
        }

        .background-header .nav li:last-child a.active:after {
            background-color: transparent;
        }

        .header-area {
            background-color: transparent;
            border-bottom: 1px solid rgba(42, 42, 42, 0.2);
            position: absolute;
            left: 0px;
            right: 0px;
            z-index: 100;
            height: 100px;
            -webkit-transition: all .5s ease 0s;
            -moz-transition: all .5s ease 0s;
            -o-transition: all .5s ease 0s;
            transition: all .5s ease 0s;
        }

        .header-area .main-nav {
            min-height: 80px;
            background: transparent;
        }

        .header-area .main-nav .logo {
            float: left;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .header-area .main-nav .logo {
            line-height: 100px;
            float: left;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .background-header .main-nav .logo {
            line-height: 80px;
        }

        .background-header .main-nav .nav {
            margin-top: 20px !important;
        }

        .header-area .main-nav .nav {
            float: right;
            margin-top: 30px;
            margin-right: 0px;
            background-color: transparent;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            position: relative;
            z-index: 999;
        }

        .header-area .main-nav .nav li {
            padding-left: 20px;
            padding-right: 20px;
        }

        .header-area .main-nav .nav li:nth-child(6) {
            padding-right: 0px;
            padding-left: 40px;
        }

        .header-area .main-nav .nav li:last-child a,
        .background-header .main-nav .nav li:last-child a,
        .header-area .main-nav .nav li:nth-child(6) a,
        .background-header .main-nav .nav li:nth-child(6) a {
            padding: 0px 20px !important;
            font-weight: 400;
        }

        .header-area .main-nav .nav li:last-child a:hover,
        .background-header .main-nav .nav li:last-child a:hover,
        .header-area .main-nav .nav li:nth-child(6) a:hover,
        .background-header .main-nav .nav li:nth-child(6) a:hover {
            color: #fff !important;
        }

        .header-area .main-nav .nav li a {
            display: block;
            font-weight: 500;
            font-size: 15px;
            color: #2a2a2a;
            text-transform: capitalize;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            height: 40px;
            line-height: 40px;
            border: transparent;
            letter-spacing: 1px;
        }

        .header-area .main-nav .nav li:hover a,
        .header-area .main-nav .nav li a.active {
            color: #4b8ef1 !important;
        }

        .header-area .main-nav .nav li:last-child a.active {
            color: #fff !important;
        }

        .background-header .main-nav .nav li:hover a,
        .background-header .main-nav .nav li a.active {
            color: #4b8ef1 !important;
            opacity: 1;
        }

        .header-area .main-nav .nav li.submenu {
            position: relative;
            padding-right: 30px;
        }

        .header-area .main-nav .nav li.submenu:after {
            font-family: FontAwesome;
            content: "\f107";
            font-size: 12px;
            color: #2a2a2a;
            position: absolute;
            right: 18px;
            top: 12px;
        }

        .background-header .main-nav .nav li.submenu:after {
            color: #2a2a2a;
        }

        .header-area .main-nav .nav li.submenu ul {
            position: absolute;
            width: 200px;
            box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.06);
            overflow: hidden;
            top: 50px;
            opacity: 0;
            transform: translateY(+2em);
            visibility: hidden;
            z-index: -1;
            transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
        }

        .header-area .main-nav .nav li.submenu ul li {
            margin-left: 0px;
            padding-left: 0px;
            padding-right: 0px;
        }

        .header-area .main-nav .nav li.submenu ul li a {
            opacity: 1;
            display: block;
            background: #f7f7f7;
            color: #2a2a2a !important;
            padding-left: 20px;
            height: 40px;
            line-height: 40px;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            position: relative;
            font-size: 13px;
            font-weight: 400;
            border-bottom: 1px solid #eee;
        }

        .header-area .main-nav .nav li.submenu ul li a:hover {
            background: #fff;
            color: #4b8ef1 !important;
            padding-left: 25px;
        }

        .header-area .main-nav .nav li.submenu ul li a:hover:before {
            width: 3px;
        }

        .header-area .main-nav .nav li.submenu:hover ul {
            visibility: visible;
            opacity: 1;
            z-index: 1;
            transform: translateY(0%);
            transition-delay: 0s, 0s, 0.3s;
        }

        .header-area .main-nav .menu-trigger {
            cursor: pointer;
            display: block;
            position: absolute;
            top: 33px;
            width: 32px;
            height: 40px;
            text-indent: -9999em;
            z-index: 99;
            right: 40px;
            display: none;
        }

        .background-header .main-nav .menu-trigger {
            top: 23px;
        }

        .header-area .main-nav .menu-trigger span,
        .header-area .main-nav .menu-trigger span:before,
        .header-area .main-nav .menu-trigger span:after {
            -moz-transition: all 0.4s;
            -o-transition: all 0.4s;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
            background-color: #2a2a2a;
            display: block;
            position: absolute;
            width: 30px;
            height: 2px;
            left: 0;
        }

        .background-header .main-nav .menu-trigger span,
        .background-header .main-nav .menu-trigger span:before,
        .background-header .main-nav .menu-trigger span:after {
            background-color: #2a2a2a;
        }

        .header-area .main-nav .menu-trigger span:before,
        .header-area .main-nav .menu-trigger span:after {
            -moz-transition: all 0.4s;
            -o-transition: all 0.4s;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
            background-color: #2a2a2a;
            display: block;
            position: absolute;
            width: 30px;
            height: 2px;
            left: 0;
            width: 75%;
        }

        .background-header .main-nav .menu-trigger span:before,
        .background-header .main-nav .menu-trigger span:after {
            background-color: #2a2a2a;
        }

        .header-area .main-nav .menu-trigger span:before,
        .header-area .main-nav .menu-trigger span:after {
            content: "";
        }

        .header-area .main-nav .menu-trigger span {
            top: 16px;
        }

        .header-area .main-nav .menu-trigger span:before {
            -moz-transform-origin: 33% 100%;
            -ms-transform-origin: 33% 100%;
            -webkit-transform-origin: 33% 100%;
            transform-origin: 33% 100%;
            top: -10px;
            z-index: 10;
        }

        .header-area .main-nav .menu-trigger span:after {
            -moz-transform-origin: 33% 0;
            -ms-transform-origin: 33% 0;
            -webkit-transform-origin: 33% 0;
            transform-origin: 33% 0;
            top: 10px;
        }

        .header-area .main-nav .menu-trigger.active span,
        .header-area .main-nav .menu-trigger.active span:before,
        .header-area .main-nav .menu-trigger.active span:after {
            background-color: transparent;
            width: 100%;
        }

        .header-area .main-nav .menu-trigger.active span:before {
            -moz-transform: translateY(6px) translateX(1px) rotate(45deg);
            -ms-transform: translateY(6px) translateX(1px) rotate(45deg);
            -webkit-transform: translateY(6px) translateX(1px) rotate(45deg);
            transform: translateY(6px) translateX(1px) rotate(45deg);
            background-color: #2a2a2a;
        }

        .background-header .main-nav .menu-trigger.active span:before {
            background-color: #2a2a2a;
        }

        .header-area .main-nav .menu-trigger.active span:after {
            -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
            -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
            -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
            transform: translateY(-6px) translateX(1px) rotate(-45deg);
            background-color: #2a2a2a;
        }

        .background-header .main-nav .menu-trigger.active span:after {
            background-color: #2a2a2a;
        }

        .header-area.header-sticky {
            min-height: 80px;
        }

        .header-area .nav {
            margin-top: 30px;
        }

        .header-area.header-sticky .nav li a.active {
            color: #4b8ef1;
        }

        @media (max-width: 1200px) {
            .header-area .main-nav .nav li {
                padding-left: 12px;
                padding-right: 12px;
            }

            .header-area .main-nav:before {
                display: none;
            }
        }

        @media (max-width: 992px) {

            .header-area .main-nav .nav li:last-child,
            .background-header .main-nav .nav li:last-child {
                color: #069;
            }

            .header-area .main-nav .nav li:nth-child(6),
            .background-header .main-nav .nav li:nth-child(6) {
                padding-right: 0px;
            }

            .background-header .nav li a.active:after {
                display: none;
            }
        }

        @media (max-width: 767px) {

            .pre-header ul.info li:last-child,
            .pre-header ul.info li:nth-child(6) {
                display: none !important;
            }

            .background-header .main-nav .nav {
                margin-top: 80px !important;
            }

            .header-area .main-nav .logo {
                color: #1e1e1e;
            }

            .header-area.header-sticky .nav li a:hover,
            .header-area.header-sticky .nav li a.active {
                color: #4b8ef1 !important;
                opacity: 1;
            }

            .header-area.header-sticky .nav li.search-icon a {
                width: 100%;
            }

            .header-area {
                background-color: #fff;
                padding: 0px 15px;
                height: 100px;
                box-shadow: none;
                text-align: center;
                box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.03);
            }

            .header-area .container {
                padding: 0px;
            }

            .header-area .logo {
                margin-left: 30px;
            }

            .header-area .menu-trigger {
                display: block !important;
            }

            .header-area .main-nav {
                overflow: hidden;
            }

            .header-area .main-nav .nav {
                float: none;
                width: 100%;
                display: none;
                -webkit-transition: all 0s ease 0s;
                -moz-transition: all 0s ease 0s;
                -o-transition: all 0s ease 0s;
                transition: all 0s ease 0s;
                margin-left: 0px;
            }

            .background-header .nav {
                margin-top: 80px;
            }

            .header-area .main-nav .nav li:first-child {
                border-top: 1px solid #eee;
            }

            .header-area.header-sticky .nav {
                margin-top: 100px;
            }

            .header-area .main-nav .nav li {
                width: 100%;
                background: #fff;
                border-bottom: 1px solid #e7e7e7;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

            .header-area .main-nav .nav li a {
                height: 50px !important;
                line-height: 50px !important;
                padding: 0px !important;
                border: none !important;
                background: #f7f7f7 !important;
                color: #191a20 !important;
            }

            .header-area .main-nav .nav li a:hover {
                background: #eee !important;
                color: #4b8ef1 !important;
            }

            .header-area .main-nav .nav li.submenu ul {
                position: relative;
                visibility: inherit;
                opacity: 1;
                z-index: 1;
                transform: translateY(0%);
                transition-delay: 0s, 0s, 0.3s;
                top: 0px;
                width: 100%;
                box-shadow: none;
                height: 0px;
            }

            .header-area .main-nav .nav li.submenu ul li a {
                font-size: 12px;
                font-weight: 400;
            }

            .header-area .main-nav .nav li.submenu ul li a:hover:before {
                width: 0px;
            }

            .header-area .main-nav .nav li.submenu ul.active {
                height: auto !important;
            }

            .header-area .main-nav .nav li.submenu:after {
                color: #3B566E;
                right: 25px;
                font-size: 14px;
                top: 15px;
            }

            .header-area .main-nav .nav li.submenu:hover ul,
            .header-area .main-nav .nav li.submenu:focus ul {
                height: 0px;
            }
        }

        @media (min-width: 767px) {
            .header-area .main-nav .nav {
                display: flex !important;
            }
        }

        /* 
---------------------------------------------
preloader
--------------------------------------------- 
*/

        .js-preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            opacity: 1;
            visibility: visible;
            z-index: 9999;
            -webkit-transition: opacity 0.25s ease;
            transition: opacity 0.25s ease;
        }

        .js-preloader.loaded {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        @-webkit-keyframes dot {
            50% {
                -webkit-transform: translateX(96px);
                transform: translateX(96px);
            }
        }

        @keyframes dot {
            50% {
                -webkit-transform: translateX(96px);
                transform: translateX(96px);
            }
        }

        @-webkit-keyframes dots {
            50% {
                -webkit-transform: translateX(-31px);
                transform: translateX(-31px);
            }
        }

        @keyframes dots {
            50% {
                -webkit-transform: translateX(-31px);
                transform: translateX(-31px);
            }
        }

        .preloader-inner {
            position: relative;
            width: 142px;
            height: 40px;
            background: #fff;
        }

        .preloader-inner .dot {
            position: absolute;
            width: 16px;
            height: 16px;
            top: 12px;
            left: 15px;
            background: #4b8ef1;
            border-radius: 50%;
            -webkit-transform: translateX(0);
            transform: translateX(0);
            -webkit-animation: dot 2.8s infinite;
            animation: dot 2.8s infinite;
        }

        .preloader-inner .dots {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            margin-top: 12px;
            margin-left: 31px;
            -webkit-animation: dots 2.8s infinite;
            animation: dots 2.8s infinite;
        }

        .preloader-inner .dots span {
            display: block;
            float: left;
            width: 16px;
            height: 16px;
            margin-left: 16px;
            background: #4b8ef1;
            border-radius: 50%;
        }



        /* 
---------------------------------------------
Banner Style
--------------------------------------------- 
*/

        .main-banner {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            padding: 250px 120px 150px 120px;
            position: relative;
            overflow: hidden;
        }

        .main-banner:after {
            content: '';
            background-image: url(../images/slider-left-dec.png);
            background-repeat: no-repeat;
            background-size: contain;
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .main-banner .left-content {
            margin-right: 15px;
        }

        .main-banner .left-content h2 {
            z-index: 2;
            position: relative;
            font-weight: 700;
            line-height: 70px;
            font-size: 50px;
            margin-bottom: 20px;
        }

        .main-banner .left-content p {
            margin-bottom: 45px;
            color: #2a2a2a;
            font-weight: 400;
        }

        .main-banner .left-content .first-button {
            margin-right: 15px;
        }

        .main-banner .left-content .white-button {
            display: inline-block;
        }

        .main-banner .right-image {
            text-align: center;
            position: relative;
            z-index: 20;
        }

        .main-banner .right-image img {
            max-width: 710px;
        }

        .main-banner .left-content .white-button a {
            background-color: #4b8ef1;
            color: #fff !important;
        }

        /* 
---------------------------------------------
Services Style
--------------------------------------------- 
*/

        .services {
            padding-top: 130px;
            position: relative;
        }

        .services .section-heading p {
            margin-top: 10px;
            margin-left: 18%;
            margin-right: 18%;
        }

        .services .container-fluid {
            padding-left: 65px;
            padding-right: 65px;
        }

        .services:after {
            content: '';
            background-image: url(../images/services-left-dec.png);
            background-repeat: no-repeat;
            position: absolute;
            left: 0;
            bottom: -300px;
            width: 261px;
            height: 368px;
            z-index: 0;
        }

        .services:before {
            content: '';
            background-image: url(../images/services-right-dec.png);
            background-repeat: no-repeat;
            position: absolute;
            right: 0;
            top: 0;
            width: 1136px;
            height: 244px;
            z-index: 0;
        }

        .services .section-heading {
            text-align: center;
            margin-bottom: 80px;
        }

        .services .section-heading .line-dec {
            margin: 0 auto;
        }

        .service-item {
            position: relative;
            z-index: 1;
            padding: 30px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 10px;
            border-top-right-radius: 50px;
            transition: all .3s;
        }

        .service-item .icon {
            margin-left: 0px;
            margin-bottom: 30px;
            background-repeat: no-repeat;
            width: 50px;
            height: 50px;
            transition: all .3s;
        }

        .service-item h4 {
            transition: all .3s;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .service-item p {
            transition: all .3s;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .service-item:hover h4,
        .service-item:hover p,
        .service-item:hover .text-button a {
            color: #fff;
        }

        .first-service .icon {
            background-image: url(../images/service-icon-01.png);
        }

        .first-service:hover .icon {
            background-image: url(../images/service-icon-hover-01.png);
        }

        .second-service .icon {
            background-image: url(../images/service-icon-02.png);
        }

        .second-service:hover .icon {
            background-image: url(../images/service-icon-hover-02.png);
        }


        .third-service .icon {
            background-image: url(../images/service-icon-03.png);
        }

        .third-service:hover .icon {
            background-image: url(../images/service-icon-hover-03.png);
        }

        .fourth-service .icon {
            background-image: url(../images/service-icon-04.png);
        }

        .fourth-service:hover .icon {
            background-image: url(../images/service-icon-hover-04.png);
        }

        .service-item:hover {
            background-image: url(../images/service-bg.jpg);
            background-position: right top;
            background-repeat: no-repeat;
            background-size: cover;
        }



        /*
---------------------------------------------
About Us
---------------------------------------------
*/

        .about-us {
            padding-top: 130px;
            position: relative;
        }

        .about-us .section-heading {
            margin-bottom: 45px;
        }

        .about-us .section-heading,
        .about-us .box-item,
        .about-us p,
        .about-us .box-item .gradient-button,
        .about-us .box-item span {
            position: relative;
            z-index: 1;
        }

        .about-us .box-item {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.07);
            padding: 10px 30px;
            background-color: #fff;
            border-radius: 40px;
            margin-bottom: 30px;
        }

        .about-us .box-item h4 a {
            font-size: 20px;
            font-weight: 700;
            margin-top: 8px;
            color: #2a2a2a;
            transition: all .3s;
        }

        .about-us .box-item p {
            margin-bottom: 0px;
        }

        .about-us .box-item:hover h4 a {
            color: #4b8ef1;
        }

        .about-us .gradient-button {
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .about-us span {
            font-size: 14px;
            color: #7a7a7a;
        }

        .about-us .right-image {
            position: relative;
            z-index: 1;
        }

        .about-us:after {
            background-image: url(../images/about-bg.jpg);
            width: 777px;
            height: 1132px;
            content: '';
            position: absolute;
            background-repeat: no-repeat;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 0;
        }



        /* 
---------------------------------------------
The Clients
---------------------------------------------
*/

        .the-clients {
            margin-top: 130px;
        }

        .the-clients .section-heading {
            text-align: center;
            margin-bottom: 80px;
        }

        .the-clients .section-heading p {
            margin-top: 10px;
            margin-left: 18%;
            margin-right: 18%;
        }

        .the-clients .naccs {
            position: relative;
        }

        .menu .thumb h4 {
            margin-bottom: 0px;
            font-size: 20px;
            color: #2a2a2a;
        }

        .menu .thumb span.date {
            display: inline-block;
            margin-top: 0px;
            color: #afafaf;
        }

        .menu .thumb span.category,
        .menu .thumb span.rating {
            font-weight: 700;
            color: #afafaf;
        }

        .menu .thumb i {
            color: #afafaf;
        }

        .the-clients .naccs .menu div {
            color: #fff;
            font-size: 15px;
            margin-bottom: 15px;
            margin-top: 15px;
            text-align: left;
            padding: 0px 15px;
            cursor: pointer;
            position: relative;
            transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
        }

        .the-clients .naccs .menu div.active h4,
        .the-clients .naccs .menu div.active i,
        .the-clients .naccs .menu div.active span.rating,
        .the-clients .naccs .menu div.active .thumb {
            color: #4b8ef1;
        }

        .the-clients ul.nacc {
            position: relative;
            min-height: 100%;
            list-style: none;
            margin: 0;
            padding: 0;
            transition: 0.5s all cubic-bezier(0.075, 0.82, 0.165, 1);
        }

        .the-clients ul.nacc li {
            opacity: 0;
            transform: translateX(-50px);
            position: absolute;
            list-style: none;
            transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
        }

        .the-clients ul.nacc li.active {
            transition-delay: 0.3s;
            position: relative;
            z-index: 2;
            opacity: 1;
            transform: translateX(0px);
        }

        .the-clients ul.nacc li {
            width: 100%;
        }

        .the-clients .nacc .thumb .client-content img {
            width: 76px;
            height: 62px;
        }

        .the-clients .nacc .thumb .client-content {
            padding: 60px 30px;
            background-image: url(../images/client-bg.png);
            background-size: cover;
            border-radius: 50px;
            width: 100%;
            height: auto;
            background-repeat: no-repeat;
        }

        .the-clients .nacc .thumb .client-content p {
            color: #fff;
            font-weight: 500;
            font-size: 16px;
            font-style: italic;
            margin-top: 30px;
        }

        .the-clients .nacc .thumb .down-content {
            margin-top: 30px;
        }

        .the-clients .nacc .thumb .down-content img {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            display: inline;
        }

        .the-clients .nacc .thumb .down-content .right-content {
            display: inline-block;
            margin-left: 20px;
        }

        .the-clients .nacc .thumb .down-content .right-content h4 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .the-clients .nacc .thumb .down-content .right-content span {
            color: #2a2a2a;
        }


        /* 
---------------------------------------------
The Clients
---------------------------------------------
*/

        .pricing-tables {
            padding-top: 130px;
        }

        .pricing-tables .section-heading {
            text-align: center;
            margin-bottom: 80px;
        }

        .pricing-tables .section-heading p {
            margin-top: 10px;
            margin-left: 18%;
            margin-right: 18%;
        }

        .pricing-item-regular {
            margin-top: 30px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.07);
            border-radius: 50px;
            padding: 90px 30px;
            text-align: center;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .pricing-item-regular:before {
            position: absolute;
            top: 0;
            left: 0;
            background-image: url(../images/regular-table-top.png);
            z-index: 0;
            content: '';
            width: 274px;
            height: 221px;
        }

        .pricing-item-regular:after {
            position: absolute;
            bottom: 0;
            right: 0;
            background-image: url(../images/regular-table-bottom.png);
            z-index: 0;
            content: '';
            width: 370px;
            height: 171px;
        }

        .pricing-item-regular span.price {
            font-size: 40px;
            color: #fff;
            position: absolute;
            font-weight: 700;
            z-index: 1;
            left: 30px;
            top: 30px;
        }

        .pricing-item-regular h4 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .pricing-item-regular .icon img {
            width: 120px;
            height: 106px;
            margin-bottom: 30px;
        }

        .pricing-item-regular ul li {
            color: #4b8ef1;
            font-size: 15px;
            margin-bottom: 15px;
        }

        .pricing-item-regular ul li:last-child {
            margin-bottom: 0px;
        }

        .pricing-item-regular ul li.non-function {
            color: #afafaf;
            text-decoration: line-through;
        }

        .pricing-item-regular .border-button {
            position: relative;
            z-index: 1;
            margin-top: 40px;
        }

        .pricing-item-pro {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.07);
            border-radius: 50px;
            padding: 120px 30px;
            text-align: center;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .pricing-item-pro:before {
            position: absolute;
            top: 0;
            left: 0;
            background-image: url(../images/pro-table-top.png);
            z-index: 0;
            content: '';
            width: 281px;
            height: 251px;
        }

        .pricing-item-pro:after {
            position: absolute;
            bottom: 0;
            right: 0;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(../images/pro-table-bottom.png);
            z-index: 0;
            content: '';
            width: 100%;
            height: 201px;
        }

        .pricing-item-pro span.price {
            font-size: 40px;
            color: #fff;
            position: absolute;
            font-weight: 700;
            z-index: 1;
            left: 30px;
            top: 30px;
        }

        .pricing-item-pro h4 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .pricing-item-pro .icon img {
            width: 120px;
            height: 106px;
            margin-bottom: 30px;
        }

        .pricing-item-pro ul li {
            color: #4b8ef1;
            font-size: 15px;
            margin-bottom: 15px;
        }

        .pricing-item-pro ul li:last-child {
            margin-bottom: 0px;
        }

        .pricing-item-pro ul li.non-function {
            color: #afafaf;
            text-decoration: line-through;
        }

        .pricing-item-pro .border-button {
            position: relative;
            z-index: 1;
            margin-top: 40px;
        }




        /* 
---------------------------------------------
Free Quote
--------------------------------------------- 
*/

        .free-quote {
            background-image: url(../images/quote-bg.jpg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            padding: 120px 0px;
            text-align: center;
            position: relative;
            z-index: 2;
            margin-top: 130px;
        }

        .free-quote .section-heading {
            margin-bottom: 60px;
        }

        .free-quote .section-heading h6,
        .free-quote .section-heading h4 {
            color: #fff;
        }

        .free-quote .section-heading .line-dec {
            margin: 0 auto;
            background-color: #fff;
        }

        .free-quote form {
            background-color: #fff;
            display: inline-block;
            width: 100%;
            min-height: 80px;
            border-radius: 40px;
            position: relative;
            z-index: 1;
        }

        .free-quote form input {
            width: 100%;
            margin-top: 20px;
            margin-left: 30px;
            color: #afafaf;
            font-weight: 400;
            font-size: 15px;
            height: 40px;
            background-color: transparent;
            border-bottom: 1px solid #eee;
            border-top: none;
            border-left: none;
            border-right: none;
            position: relative;
            z-index: 2;
            outline: none;
        }

        .free-quote form button {
            width: 100%;
            height: 80px;
            border-top-right-radius: 40px;
            border-bottom-right-radius: 40px;
            outline: none;
            border: none;
            margin-left: 30px;
            background-color: #726ae3;
            font-size: 15px;
            color: #fff;
        }


        /* 
---------------------------------------------
Footer Style
--------------------------------------------- 
*/

        footer {
            background-image: url(../images/footer-bg.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: 130px;
            padding-top: 300px;
            padding-bottom: 60px;
        }

        footer .section-heading {
            margin-bottom: 45px;
        }

        footer .section-heading h4 {
            line-height: 45px;
            color: #fff;
            margin-left: 13%;
            margin-right: 13%;
            text-align: center;
        }

        footer #search {
            margin-bottom: 80px;
        }

        footer #search input::placeholder {
            color: #fff;
        }

        footer #search input {
            font-size: 15px;
            color: #fff;
            outline: none;
            height: 46px;
            border: none;
            background-color: transparent;
            border-bottom: 1px solid #fff;
            width: 100%;
        }

        footer #search button {
            height: 46px;
            border-radius: 23px;
            border: 1px solid #fff;
            background-color: transparent;
            color: #fff;
            width: 100%;
            transition: all .5s;
        }

        footer #search button:hover {
            background-color: #fff;
            color: #4b8ef1;
        }

        .footer-widget .logo img {
            max-width: 96px;
            margin-bottom: 30px;
        }

        .footer-widget h4 {
            font-size: 20px;
            color: #fff;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .footer-widget p {
            margin-bottom: 15px;
        }

        .footer-widget p,
        .footer-widget p a {
            color: #fff;
        }

        .footer-widget ul {
            display: inline;
            max-width: 40%;
            float: left;
            margin-right: 10%;
        }

        .footer-widget ul li {
            margin-bottom: 10px;
        }

        .footer-widget ul li:last-child {
            margin-bottom: 0px;
        }

        .footer-widget ul li a {
            font-size: 15px;
            color: #fff;
            transition: all .3s;
            ;
        }

        .footer-widget a:hover {
            opacity: 0.75;
        }

        footer .copyright-text p {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 0px;
            color: #fff;
        }

        footer p a {
            color: #fff;
            transition: all .5s;
        }

        footer p a:hover {
            opacity: 0.75;
            color: #fff;
        }


        /*
---------------------------------------------
PopUp
---------------------------------------------
*/

        #lean_overlay {
            position: fixed;
            z-index: 100;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100%;
            background: #000;
            display: none;
        }

        .popupContainer {
            position: absolute;
            width: 330px;
            height: auto;
            left: 45%;
            top: 60px;
            background: #FFF;
        }

        .btn {
            padding: 10px 20px;
            background: #4b8ef1;
            color: #fff;
            transition: all .3s;
        }

        .btn_red {
            background: #4b8ef1;
            color: #FFF;
        }

        .btn:hover {
            background: #E4E4E2;
        }

        .btn_red:hover {
            color: #2a2a2a;
            background: #E4E4E2;
        }

        a.btn {
            color: #fff;
            text-align: center;
            text-decoration: none;
        }

        a.btn_red {
            color: #FFF;
        }

        .one_half {
            width: 50%;
            display: block;
            float: left;
        }

        .one_half.last {
            width: 45%;
            margin-left: 5%;
        }

        /* Popup Styles*/

        .popupHeader {
            font-size: 16px;
            text-transform: uppercase;
        }

        .popupHeader {
            background: #F4F4F2;
            position: relative;
            padding: 10px 20px;
            border-bottom: 1px solid #DDD;
            font-weight: bold;
        }

        .popupHeader .modal_close {
            position: absolute;
            right: 0;
            top: 0;
            padding: 10px 15px;
            background: #4b8ef1;
            cursor: pointer;
            color: #fff;
            font-size: 16px;
        }

        .popupBody {
            padding: 20px;
        }

        .social_login .social_box {
            display: block;
            clear: both;
            padding: 10px;
            margin-bottom: 10px;
            background: #F4F4F2;
            overflow: hidden;
        }

        .social_login .icon {
            display: inline-block;

            padding: 5px 10px;
            margin-right: 10px;
            float: left;
            color: #FFF;
            font-size: 16px;
            text-align: center;
        }

        .social_login .fb .icon {
            background: #3B5998;
        }

        .social_login .google .icon {
            background: #DD4B39;
        }

        .social_login .icon_title {
            display: block;
            padding: 5px 0;
            float: left;
            font-weight: bold;
            font-size: 16px;
            color: #777;
        }

        .social_login .social_box:hover {
            background: #E4E4E2;
        }

        .centeredText {
            color: #afafaf;
            text-align: center;
            margin: 20px 0;
            clear: both;
            overflow: hidden;
            text-transform: capitalize;
        }

        .user_login label {
            color: #afafaf;
        }

        .action_btns {
            clear: both;
            overflow: hidden;
        }

        .action_btns a {
            display: block;
        }

        /* User Login Form */

        .user_login {
            display: none;
        }

        .user_login label {
            display: block;
            margin-bottom: 5px;
        }

        .user_login input[type="text"],
        .user_login input[type="email"],
        .user_login input[type="password"] {
            display: block;
            width: 90%;
            padding: 10px;
            border: 1px solid #DDD;
            color: #666;
        }

        .user_login input[type="checkbox"] {
            float: left;
            margin-right: 10px;
            width: 22px;
            height: 22px;
        }

        .user_login input[type="checkbox"]+label {
            float: left;
        }

        .user_login .checkbox {
            margin-bottom: 10px;
            clear: both;
            overflow: hidden;
        }

        .forgot_password {
            display: block;
            margin: 20px 0 10px;
            clear: both;
            overflow: hidden;
            text-decoration: none;
            color: #4b8ef1;
            transition: all .3s;
        }

        /* User Register Form */

        .user_register {
            display: none;
        }

        .user_register label {
            color: #afafaf;
            display: block;
            margin-bottom: 5px;
        }

        .user_register input[type="text"],
        .user_register input[type="email"],
        .user_register input[type="password"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: 1px solid #DDD;
            color: #666;
        }

        .user_register input[type="checkbox"] {
            width: 22px;
            height: 22px;
            float: left;
            margin-right: 8px;
        }

        .user_register input[type="checkbox"]+label {
            float: left;
            color: #afafaf;
        }

        .user_register .checkbox {
            margin-bottom: 10px;
            clear: both;
            overflow: hidden;
        }



        /* 
---------------------------------------------
responsive
--------------------------------------------- 
*/



        @media (max-width: 1200px) {
            .header-area .main-nav .logo h4 {
                font-size: 24px;
            }

            .header-area .main-nav .logo h4 img {
                max-width: 25px;
                margin-left: 0px;
            }

            .header-area .main-nav .nav li:last-child {
                padding-left: 20px;
            }

            .main-banner .left-content h2 {
                z-index: 2;
                position: relative;
                font-weight: 700;
                line-height: 70px;
                font-size: 50px;
                margin-bottom: 20px;
            }

            .main-banner .left-content p {
                margin-bottom: 45px;
            }
        }

        @media (max-width: 992px) {
            .header-area {
                background-color: #fff;
            }

            .main-banner:after {
                display: none;
            }

            .main-banner .left-content h2 {
                color: #2a2a2a;
                margin-right: 0;
            }

            .main-banner .left-content p {
                color: #afafaf;
                margin-right: 0;
            }

            .main-banner .left-content .white-button a {
                background-color: #4b8ef1;
                color: #fff !important;
            }

            form#contact {
                overflow: hidden;
            }

            .header-area .main-nav .logo h4 {
                font-size: 20px;
            }

            .main-banner .left-content {
                margin-right: 0px;
            }

            .main-banner {
                text-align: center;
                padding: 226px 0px 30px 0px;
            }

            .main-banner:before {
                display: none;
            }

            .main-banner .right-image {
                margin: 30px auto 0px auto;
                text-align: center;
            }

            .features-item {
                margin-bottom: 45px;
            }

            .last-features-item,
            .last-skill-item {
                margin-bottom: 0px !important;
            }

            .skill-item {
                margin-bottom: 30px;
            }

            .about-left-image img {
                margin-right: 0px;
                margin-bottom: 45px;
                ;
            }

            .services .naccs .menu div {
                font-size: 15px;
                font-weight: 500;
            }

            .service-item {
                text-align: center;
                margin-bottom: 30px;
            }

            .about-us .box-item {
                text-align: center;
            }

            .about-us:after {
                display: none;
            }

            .about-us .gradient-button,
            .about-us span {
                text-align: center;
                display: block;
            }

            .about-us .right-image {
                margin-top: 30px;
            }

            .service-item .icon {
                margin: 0 auto 30px auto;
            }

            .about-us .section-heading {
                text-align: center;
            }

            .about-us .left-image {
                margin-right: 30px;
                margin-left: 30px;
                margin-bottom: 45px;
            }

            .blog-posts {
                margin-left: 0px;
                margin-top: 30px;
            }

            .post-item {
                margin-bottom: 70px;
            }

            .pricing-item-regular {
                margin-bottom: 30px;
            }

            .our-portfolio .owl-nav {
                display: none !important;
            }

            .contact-info {
                margin-top: 60px;
            }

            form#contact {
                padding: 45px;
            }
        }

        @media (max-width: 767px) {
            .the-clients .naccs .menu div {
                text-align: center;
            }

            footer .section-heading h4 {
                color: #2a2a2a;
            }

            footer #search {
                margin-bottom: 45px;
            }

            footer {
                padding-top: 0px;
                text-align: center;
            }

            .footer-widget ul {
                display: block;
                width: 100%;
                float: none;
                text-align: center;
                margin: 0 auto;
            }

            .footer-widget h4 {
                margin-top: 45px;
                margin-bottom: 20px;
            }

            footer #search input {
                border: 1px solid #eee;
                color: #afafaf;
                background-color: #fff;
                border-radius: 23px;
                margin-bottom: 15px;
                padding: 0px 30px;
            }

            footer #search button {
                background-color: #fff;
                color: #4b8ef1;
            }

            footer #search input::placeholder {
                color: #2a2a2a;
            }

            .header-area .main-nav .logo h4 {
                font-size: 30px;
            }

            .header-area .main-nav .logo h4 img {
                max-width: 30px;
                margin-left: 5px;
            }

            .main-banner .info-stat {
                margin-bottom: 15px;
            }

            .menu .thumb span.date {
                margin-bottom: -20px;
                display: block;
            }

            .service-item {
                text-align: center;
                padding: 30px;
            }

            .menu .thumb span.category {
                display: none;
            }

            .about-us .right-image {
                margin-top: 30px;
            }

            .service-item .icon {
                float: none;
                margin-right: 0px;
                margin-bottom: 15px;
            }

            .service-item .right-content {
                display: inline-block;
            }

            .services .naccs .menu div .thumb {
                padding: 5px;
            }

            .services .icon img {
                margin: 0px;
            }

            .the-clients .nacc .thumb .down-content .right-content {
                margin-left: 0px;
                margin-top: 15px;
            }

            .services ul.nacc li.active {
                padding: 45px;
            }

            .services .naccs .menu div {
                font-size: 0px;
            }

            .the-clients .nacc .thumb .down-content {
                text-align: center;
            }

            .services ul.nacc li .right-image img {
                float: none;
            }

            .our-portfolio .section-heading,
            .about-us .section-heading,
            .about-us .about-item,
            .about-us p,
            .about-us .main-green-button {
                text-align: center;
            }

            .our-portfolio .section-heading .line-dec {
                margin: 0 auto;
            }

            .our-services .section-heading {
                margin-left: 15px;
                margin-right: 15px;
            }

            .free-quote form input {
                margin-left: 0px;
                padding: 0px 30px;
            }

            .free-quote form button {
                margin-left: 0px;
                border-bottom-left-radius: 40px;
                border-top-right-radius: 0px;
            }

            .blog-posts {
                margin-left: 0px;
                margin-top: 30px;
            }

            .post-item {
                margin-bottom: 30px;
            }

            .post-item .thumb img {
                max-width: 140px;
            }

            .post-item .right-content p {
                display: none;
            }

            .about-us .about-item {
                margin-top: 15px;
            }

            form#contact {
                padding: 30px;
            }
        }

    </style>

    <!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="/assets/css/animated.css">
    <link rel="stylesheet" href="/assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    {{-- <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav mx-5">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo" style="size: 30%">
                            <ul>
                                <li> <b>N. A. R. Clouds</b> </li>
                            </ul>

                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#products">Products</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h2>N.A.R. Clouds</h2>
                                        <p>N.A.R. Clouds offers flexibility to meet your spesific needs,from wide range
                                            of use cases,
                                            ultra-scalability,to costumization.Make the most of our cloud service in the
                                            form of Anything
                                            as a Service (AaaS) for flexibility and remote convenience.</p>

                                        <div class="white-button scroll-to-section d-flex justify-content-end">
                                            <a
                                                href="https://api.whatsapp.com/send?phone=6285294024911&text=Hallo%20Kak!%20Saya%20Ingin%20Bertanya%20Products%20Di%20N.A.R%20Clouds!"><i
                                                    class="fab fa-whatsapp mx-1"></i>Contact Admin via
                                                Whatsapp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-5">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="/img/photo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="products" class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>We Have The Best <em>Prices</em> You Can Get</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                    </div>
                </div>

                @foreach ($clouds as $cloud)
                    <div class="col-lg-4 mx-auto">
                        <div class="pricing-item-pro">
                            <span class="price">${{ $cloud->price }}</span>
                            <h4>{{ $cloud->name }}</h4>
                            <div class="icon">
                                <img src="/img/1.png" alt="">
                            </div>
                            <ul>
                                <li>{{ $cloud->storage }}</li>
                            </ul>
                            <div class="border-button">
                                <a
                                    href="https://api.whatsapp.com/send?phone=6285294024911&text=Hallo%20Kak!%20Saya%20Ingin%20Paket%20{{ $cloud->name }}%20Di%20N.A.R%20Clouds!"><i
                                        class="fab fa-whatsapp"></i> Order via Whatsapp</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="about" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Amazing Web Creators</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>Nerissa Arviana Ridwan</h4>
                        <p>As Designer</p>
                        <p>2113191005</p>
                        <p> A1 - Teknik Informatika</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item third-service">
                        <div class="icon"></div>
                        <h4>Ade Lukman</h4>
                        <p>As Programmer</p>
                        <p>2113191007</p>
                        <p> A1 - Teknik Informatika</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item fourth-service">
                        <div class="icon"></div>
                        <h4>Muhamad Ridwan</h4>
                        <p>As Designer</p>
                        <p>2113191008</p>
                        <p> A1 - Teknik Informatika</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright © Tugas kelompok 2021.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="/assets/js/owl-carousel.js"></script>
    <script src="/assets/js/animation.js"></script>
    <script src="/assets/js/imagesloaded.js"></script>
    <script src="/assets/js/popup.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>
