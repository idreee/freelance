 <style>
   /* Footer */
footer {
    background-color: #333;
    color: #fff;
    padding: 50px 0;
}

footer .row {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.social-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-links li {
    display: inline-block;
    margin-right: 15px;
}

.social-links li:last-child {
    margin-right: 0;
}

.social-links a {
    color: #fff;
    font-size: 24px;
}

.social-links a:hover {
    color: #007bff;
}

.copyright {
    list-style: none;
    padding: 0;
    margin: 0;
}

.go-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border-radius: 50%;
    font-size: 24px;
    text-align: center;
    cursor: pointer;
}

.go-top:hover {
    background-color: #0056b3;
}

 </style>
 <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a target ="_blank" href="<?php echo $contact['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
               <li><a target ="_blank" href="<?php echo $contact['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
               <li><a target ="_blank" href="mailto:<?php echo $contact['email'] ?>"><i class="fa fa-google-plus"></i></a></li>
               <li><a target ="_blank" href="<?php echo $contact['linkin'] ?>"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>Миний вебсайт &copy; Миний тухай л байаа</li>
              <!--  <li>Design by <a href="http://srikrishnacommunication.com/Giridesigns.html" title="Styleshout" target="_blank">Giri Designs</a></li>    -->
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="<?php echo base_url ?>profile_asset/js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="<?php echo base_url ?>profile_asset/js/jquery-migrate-1.2.1.min.js"></script>

   <script src="<?php echo base_url ?>profile_asset/js/jquery.flexslider.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/waypoints.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/jquery.fittext.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/magnific-popup.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/init.js"></script>