<footer id="footer" class="dark">
    <div class="container">
        <div class="footer-widgets-wrap clearfix">
            <div class="col_full">
                <div class="col_two_third">
                    <div class="widget clearfix">
                        <!--img src="images/footer-widget-logo.png" alt="" class="footer-logo"-->
                        <p><strong>Groupe Annahda Lil Iaamar</strong> für Immobilienentwicklung in Nador.</p>

                        <div style="background: url('/images/world-map.png') no-repeat center center; background-size: 100%;">
                            <address>
                                <strong>Adresse:</strong><br>
                                Stadtviertel Ouled Brahim No. B-1<br>
                                Gegenüber Schule Nador Jadid (Anaanaa), Nador.<br>
                            </address>
                            <abbr title="Phone Number"><strong>Telefon:</strong></abbr> (00212) 05 36 33 10 31<br>
                            <abbr title="Fax"><strong>Fax:</strong></abbr> (00212) 05 36 33 10 32<br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> groupe_annahda@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="col_one_third col_last">
                <div class="widget subscribe-widget clearfix">
                    <h5><strong>Abonnieren Sie</strong> unseren Newsletter unsere Angebote und Neuigkeiten zu erhalten</h5>
                    <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                    <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                        <div class="input-group divcenter">
                            <span class="input-group-addon"><i class="icon-email2"></i></span>
                            <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Votre Email">
                            <span class="input-group-btn">
                                <button class="btn btn-gold" type="submit">Senden</button>
                            </span>
                        </div>
                    </form>
                    <script type="text/javascript">
                        jQuery("#widget-subscribe-form").validate({
                            submitHandler: function(form) {
                                jQuery(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                jQuery(form).ajaxSubmit({
                                    target: '#widget-subscribe-form-result',
                                    success: function() {
                                        jQuery(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                        jQuery('#widget-subscribe-form').find('.form-control').val('');
                                        jQuery('#widget-subscribe-form-result').attr('data-notify-msg', jQuery('#widget-subscribe-form-result').html()).html('');
                                        SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form-result'));
                                    }
                                });
                            }
                        });
                    </script>
                </div>
                <div class="widget clearfix" style="margin-bottom: -20px;">
                    <div class="row">
                        <div class="col-md-6 clearfix bottommargin-sm">
                            <a target="_blank" href="https://www.facebook.com/groupeannahdaliliaamar/?fref=ts" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/groupeannahdaliliaamar/?fref=ts"><small style="display: block; margin-top: 3px;"><strong>Facebook</strong></small></a>
                        </div>
                        <div class="col-md-6 clearfix">
                            <a target="_blank" href="https://www.youtube.com/channel/UCp3-xSrmFlb6tZ7vjimUbVw" class="social-icon si-dark si-colored si-youtube nobottommargin" style="margin-right: 10px;">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCp3-xSrmFlb6tZ7vjimUbVw"><small style="display: block; margin-top: 3px;"><strong>Youtube</strong></small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="copyrights">
        <div class="container clearfix">
            <div class="col_half">
                Alle Rechte vorbehalten für das Unternehmen Groupe Annahda Lil Iaamar &copy; <?= date('Y') ?>.<br>
                <div class="copyright-links"><a href="http://goo.gl/eLJ2Bg">Nutzungsrechte</a> / <a href="http://goo.gl/eLJ2Bg">Datenschutz</a></div>
            </div>
            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    <a target="_blank" href="https://www.facebook.com/groupeannahdaliliaamar/?fref=ts" class="social-icon si-small si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCp3-xSrmFlb6tZ7vjimUbVw" class="social-icon si-small si-borderless si-youtube">
                        <i class="icon-youtube"></i>
                        <i class="icon-youtube"></i>
                    </a>
                </div>
                <div class="clear"></div>
                <i class="icon-envelope2"></i> groupe_annahda@gmail.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> Groupe_Annahda <span class="middot">&middot;</span> <i class="icon-skype2"></i> GroupeAnnahda uns Skype
            </div>
        </div>
    </div>
</footer>