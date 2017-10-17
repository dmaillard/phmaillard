<?php require_once('../plugin/contact-form/config.php'); ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31580830-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<div class="page page-5 overflow-fix clear-fix layout-50">
    
    <!-- Left column -->
    <div class="layout-50-left">
    
        <h3>Contact</h3>

        <p class="top-0">
            Philippe Maillard<br/>
            Rua Cel. Luis Alves, 43<br/>
            04119-030 &nbsp;&nbsp;São Paulo&nbsp;&nbspBrésil
            
        </p>
        
        <p class="top-0">
            +55 11 5539-7636<br/>
            <a href="http://www.ph-maillard.com">www.ph-maillard.com</a><br/>
            <a href="mailto:philippe@ph-maillard.com">philippe@ph-maillard.com</a>
        </p>
        
        <br/>
        
        <!-- Contact form -->
        <form name="contact" id="contact" action="" method="post">

            <div class="overflow-fix clear-fix form">

                <div class="form-line block">
                    <input type="text" name="contact-user-name" id="contact-user-name" value="<?php echo _def_data_name; ?>" onfocus="clearInput(this,'focus','<?php echo _def_data_name; ?>')" onblur="clearInput(this,'blur','<?php echo _def_data_name; ?>')"/>	
                </div>
                <div class="form-line block">
                    <input type="text" name="contact-user-email" id="contact-user-email" value="<?php echo _def_data_email?>" onfocus="clearInput(this,'focus','<?php echo _def_data_email; ?>')" onblur="clearInput(this,'blur','<?php echo _def_data_email; ?>')"/>	
                </div>					
                <div class="form-line block">
                    <textarea rows="0" cols="0" name="contact-message" id="contact-message" onfocus="clearInput(this,'focus','<?php echo _def_data_message; ?>')" onblur="clearInput(this,'blur','<?php echo _def_data_message; ?>')"><?php echo _def_data_message; ?></textarea>	
                </div>

                <div class="form-line">
                    <a href="javascript:submitContactForm();" class="button block" id="contact-send">Envoyer</a>
                </div>

            </div>	

        </form>
        <!-- /Contact form -->
        
    </div>
    <!-- /Left column -->
    
    <!-- Right column -->
    <div class="layout-50-right">
        
        <h3>Réseaux sociaux</h3>
        
        <!-- Social links list -->
        <ul class="no-list social-links">
            <li class="social-links-skype">
                <span></span>
                <div>
                    <b>Skype</b>
                    <a href="skype:philippe-saopaulo-brasil">philippe-saopaulo-brasil</a>
                </div>
            </li>
            <li class="social-links-xing">
                <span></span>
                <div>
                    <b>Proz</b>
                    <a href="http://www.proz.com/profile/110794">proz.com/profile/110794</a>
                </div>
            </li>                    
            <li class="social-links-linkedin">
                <span></span>
                <div>
                    <b>Linkedin</b>
                    <a href="http://www.linkedin.com/in/philippemaillard">linkedin.com/in/philippemaillard</a>
                </div>
            </li>            
            <li class="social-links-facebook">
                <span></span>
                <div>
                    <b>Facebook</b>
                    <a href="http://www.facebook.com/phmaillard">facebook.com/phmaillard</a>
                </div>
            </li>  
            
            <!--                      
            <li class="social-links-twitter">
                <span></span>
                <div>
                    <b>Twitter Profile</b>
                    <a href="#">http://twitter.com/ruth.howell</a>
                </div>
            </li>


            <li class="social-links-google">
                <span></span>
                <div>
                    <b>Google Profile</b>
                    <a href="#">http://googleplus.com/ruth.howell</a>
                </div>
            </li>
            <li class="social-links-xing">
                <span></span>
                <div>
                    <b>Xing Profile</b>
                    <a href="#">http://xing.com/ruth.howell</a>
                </div>
            </li>
            <li class="social-links-flickr">
                <span></span>
                <div>
                    <b>Flickr Profile</b>
                    <a href="#">http://flickr.com/ruth.howell</a>
                </div>
            </li>
-->
            
        </ul>
        <!-- /Social links list --><br>
                     <div class="form-line">
                    <a href="http://cdn.ph-maillard.com/Philippe-Maillard.vcf" class="button block" id="contact-send">Télécharger la carte de visite électronique</a>
                </div>  
<div class="form-line">
                    <a href="http://cdn.ph-maillard.com/CV-Philippe-MAILLARD-FR.pdf" class="button block" id="contact-send" target="_new">Télécharger CV (PDF)</a>
                </div>                    
    </div>
    <!-- /Right column -->
    
</div>