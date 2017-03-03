<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Groupe Annahda Lil Iaamar" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <link rel="stylesheet" href="../css/dark.css" type="text/css" />
    <link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="../css/animate.css" type="text/css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="../css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/plugins.js"></script>
    <title>Grupo Annahda | Contacto</title>
</head>
<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?php include('include/header.php'); ?>
        <section id="page-title">
            <div class="container clearfix">
                <h1>Contacto</h1>
                <span>No dude en ponerse en contacto con nosotros, oímos </span>
            </div>
        </section>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_half">
                        <div class="fancy-title title-dotted-border">
                            <h3>Envíe su correo electrónico</h3>
                        </div>
                        <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>
                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">
                            <div class="form-process"></div>
                            <div class="col_one_third">
                                <label for="template-contactform-name">Nombre <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                            </div>
                            <div class="col_one_third">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                            </div>
                            <div class="col_one_third col_last">
                                <label for="template-contactform-phone">Teléfono</label>
                                <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                            </div>
                            <div class="clear"></div>
                            <div class="col_full">
                                <label for="template-contactform-message">Mensaje <small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                            </div>
                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>
                            <div class="col_full">
                                <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Senden</button>
                            </div>
                        </form>
                        <script type="text/javascript">$("#template-contactform").validate({submitHandler: function(form) {$('.form-process').fadeIn();$(form).ajaxSubmit({target: '#contact-form-result',success: function() {$('.form-process').fadeOut();$('#template-contactform').find('.sm-form-control').val('');$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');SEMICOLON.widget.notifications($('#contact-form-result'));}});}});</script>
                    </div>
                    <div class="col_half col_last">
                        <?php include('../include/google-maps.php'); ?>
                    </div>
                    <div class="clear"></div>
                    <div class="row clear-bottommargin">
                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a><i class="icon-map-marker2"></i></a>
                                </div>
                                <h3>Dirección<span class="subtitle">Ouled Brahim B1 Nador</span></h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a><i class="icon-phone3"></i></a>
                                </div>
                                <h3>Llamada <span class="subtitle">(00212) 05 36 33 10 31</span></h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a><i class="icon-skype2"></i></a>
                                </div>
                                <h3>Llámenos Skype <span class="subtitle">GroupeAnnahda</span></h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="https://www.facebook.com/groupeannahdaliliaamar/?fref=ts" target="_blank"><i class="icon-facebook"></i></a>
                                </div>
                                <h3>Página Facebook<span class="subtitle">1300 Likes</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include('include/footer.php'); ?>
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <script type="text/javascript" src="../js/functions.js"></script>
</body>
</html>