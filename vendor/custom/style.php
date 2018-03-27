/*Theme and accent color*/

a,.text-theme{
  color: <?php echo $setting['theme-color'] ?>;
}

.btn-theme,.bg-theme{
  background: <?php echo $setting['theme-color'] ?>;
}

.btn-outline-theme{
  border-color: <?php echo $setting['theme-color'] ?>;
  background: white;
  color: <?php echo $setting['theme-color'] ?>;
}

.btn-theme,.btn-outline-theme:hover{
  background: <?php echo $setting['theme-color'] ?>;
  color: white;
}


a,.text-accent{
  color: <?php echo $setting['accent-color'] ?>;
}

.btn-accent,.bg-accent{
  background: <?php echo $setting['accent-color'] ?>;
}

.btn-outline-accent{
  border-color: <?php echo $setting['accent-color'] ?>;
  background: white;
  color: <?php echo $setting['accent-color'] ?>;
}

.btn-accent,.btn-outline-accent:hover{
  background: <?php echo $setting['accent-color'] ?>;
  color: white;
}

.text-accent-link{
  color: <?php echo $setting['accent-link-color'] ?>
}


/* Banner */
.carousel-indicators li {
    text-align: center;
    vertical-align: middle;
    border-radius: 0.75em;
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 1.5em;
    height: 1.5em;
    text-indent:0;
    margin-right: 3px;
    margin-left: 3px;
    font-size: 10pt;
    background-color: rgba(202, 202, 202, 0.5);
    cursor:pointer
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

body > .container {
  padding: 60px 15px 0;
}

.footer > .container {
  padding-right: 15px;
  padding-left: 15px;
}

code {
  font-size: 80%;
}



@media (min-width: 768px) {
  .modal-xl {
    width: 90%;
    max-width:1200px;
  }
}


/* Custom styling
----------------------------------------------------- */

.bg-success a{
  color: #fcff52 !important; /*Yellow*/
}

a.btn-light,button.btn-light {
  color: #28a745;
}

.bg-success > a, a.btn-success, a.btn-outline-success:hover{
  color: white !important;
}

a.btn-light{
  color: #28a745 !important;
}

#apps-link .btn-outine-danger{
  color:#dc3545 !important;             /* Didn't work? */
}

a.btn-outine-danger:hover, a.btn-outline-success:hover{
  color: white !important;
}

.dropdown-item:active{
  background: #6592bf;
  color: white !important;
}


/* Footer-menu
----------------------------------------------------- */

#foot-menu nav-link{
  padding: 0 12px 0 0 !important;
}

#foot-menu{
  line-height: 20px !important;
}

@font-face {
    font-family: digital-font;
    src: url(../../font/DS-DIGI.OTF);
