<?php
/*
 * Plugin Name: CGC Custom Login
 */


function cgc_login_logo() { ?>
    <style type="text/css">
        @font-face {
            font-family: 'BebasNeueRegular';
            src: url('wp-content/themes/cgcookie-4.0/fonts/BebasNeue-webfont.eot');
            src: url('wp-content/themes/cgcookie-4.0/fonts/BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
                 url('wp-content/themes/cgcookie-4.0/fonts/BebasNeue-webfont.woff') format('woff'),
                 url('wp-content/themes/cgcookie-4.0/fonts/BebasNeue-webfont.ttf') format('truetype'),
                 url('wp-content/themes/cgcookie-4.0/fonts/BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
            font-weight: normal;
            font-style: normal;

        }
        body.login {
            background: #343941;
            font-family: sans-serif;
        }
        #login {
            width: 520px;
        }
        body.login div#login h1 {
            display:block;
            text-align: center;
            margin: 0 auto 0.8em auto!important;
            font-family: "BebasNeueRegular", sans-serif;
            line-height: 1;
            font-size: 48px;
        }
        body.login div#login h1 a {
            height: 60px;
            line-height: 60px;
            width: auto;
            margin: 0;
            color: #fff;
            text-decoration: none;
            padding-bottom: 0!important;
            background-image: url('wp-content/plugins/cgc-custom-login/logo.png');
            background-size: auto;
            background-position: 15% top;
            text-indent: 0px;
            padding-bottom: 30px;
        }
        #loginform, #lostpasswordform {
            background: #202227;
            border: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }
        #loginform .input, l#ostpasswordform .input {
            border: 0px solid #323030
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }
        #loginform #wp-submit, #lostpasswordform #wp-submit {
            background: #f4bb15;
            color: #533e04;
            border: none;
            font-size: 14px;
            -webkit-transition: background-color 0.15s ease-in-out;
            -moz-transition: background-color 0.15s ease-in-out;
            -o-transition: background-color 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            -o-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }
        .login #nav a, .login #backtoblog a {
            color: #f4bb15!important;
            text-decoration: none!important;
            text-shadow: none;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'cgc_login_logo' );