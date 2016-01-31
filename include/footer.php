<footer id="footer" class="dark">

            <div class="container">

                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix">

                    <div class="col_full">

                        <div class="col_two_third">

                            <div class="widget clearfix">

                                <img src="images/footer-widget-logo.png" alt="" class="footer-logo">

                                <p><strong>Groupe Annahda Lil Iaamar</strong> de Promotion Immobilière à Nador.</p>

                                <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                    <address>
                                        <strong>Adresse:</strong><br>
                                        Quartier Ouled Brahim N°B-1 en face <br>
                                        Lycée Nador Jadid (Anaanaa), Nador.<br>
                                    </address>
                                    <abbr title="Phone Number"><strong>Téléphone:</strong></abbr> (00212) 05 36 33 10 31<br>
                                    <abbr title="Fax"><strong>Fax:</strong></abbr> (00212) 05 36 33 10 32<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> groupe_annahda@gmail.com
                                </div>

                            </div>

                        </div>

                        <!--div class="col_one_third">

                            <div class="widget widget_links clearfix">

                                <h4>Blogroll</h4>

                                <ul>
                                    <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                                    <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                    <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                                    <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                                    <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                                    <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                                    <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                                </ul>

                            </div>

                        </div-->

                        <!--div class="col_one_third col_last">

                            <div class="widget clearfix">
                                <h4>Recent Posts</h4>

                                <div id="post-list-footer">
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div-->

                    </div>

                    <div class="col_one_third col_last">

                        <!--div class="widget clearfix" style="margin-bottom: -20px;">

                            <div class="row">

                                <div class="col-md-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                    <h5 class="nobottommargin">Total Downloads</h5>
                                </div>

                                <div class="col-md-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                    <h5 class="nobottommargin">Clients</h5>
                                </div>

                            </div>

                        </div-->

                        <div class="widget subscribe-widget clearfix">
                            <h5><strong>S'inscrire</strong> à notre Newsletter pour recevoire nos offres et nouvelles</h5>
                            <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                            <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Votre Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">Envoyer</button>
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
                                    <a target="_blank" href="https://www.facebook.com/groupeannahdaliliaamar/?fref=ts"><small style="display: block; margin-top: 3px;">Page<br><strong>Facebook</strong></small></a>
                                </div>
                                <div class="col-md-6 clearfix">
                                    <a target="_blank" href="https://www.youtube.com/channel/UCp3-xSrmFlb6tZ7vjimUbVw" class="social-icon si-dark si-colored si-youtube nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-youtube"></i>
                                        <i class="icon-youtube"></i>
                                    </a>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCp3-xSrmFlb6tZ7vjimUbVw"><small style="display: block; margin-top: 3px;">Chaîne <br><strong>Youtube</strong></small></a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        Tous droits réservés pour la société Groupe Annahda Lil Iaamar &copy; 2016.<br>
                        <div class="copyright-links"><a href="http://goo.gl/eLJ2Bg">Droits d'utilisation</a> / <a href="http://goo.gl/eLJ2Bg">Politique de confidentialité</a></div>
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

                            <!--a href="#" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a-->

                            <!--a href="#" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a-->

                            <!--a href="#" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a-->

                            <!--a href="#" class="social-icon si-small si-borderless si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a-->

                            <!--a href="#" class="social-icon si-small si-borderless si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a-->
                            
                            <!--a href="#" class="social-icon si-small si-borderless si-yahoo">
                                <i class="icon-yahoo"></i>
                                <i class="icon-yahoo"></i>
                            </a-->

                            <!--a href="#" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a-->
                        </div>

                        <div class="clear"></div>

                        <i class="icon-envelope2"></i> groupe_annahda@gmail.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> Groupe_Annahda <span class="middot">&middot;</span> <i class="icon-skype2"></i> GroupeAnnahda Sur Skype
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer>