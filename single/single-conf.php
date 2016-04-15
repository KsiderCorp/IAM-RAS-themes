<?php get_header(); ?>
<style>
	/* Conference single */
	
	#navig.gettop,
	#navig.gettop #searchform,
	#navig.gettop #searchform input[type=search] {
		background: transparent;
		color: #fff;
	}
	
	#navig.gettop a {
		color: #fff;
	}
	
	.logoblock a.logo {
		border-left: 4px solid #fff;
	}
	
	.conf-title {
		position: relative;
	}
	
	a.conf-back {
		-webkit-transition: all .4s ease-in-out;
		-moz-transition: all .4s ease-in-out;
		-o-transition: all .4s ease-in-out;
		-ms-transition: all .4s ease-in-out;
		transition: all .4s ease-in-out;
		position: absolute;
		left: -1em;
		color: #fff;
	}
	
	a.conf-back:hover {
		left: -1.2em;
		color: #fff;
	}
	/* current */
	
	.conf-current {
		background: #34495e;
		padding: 5% 0;
	}
	
	.conf-header {
		padding: 5% 0;
		color: #fff;
	}
	
	.conf-info a {
		display: inline-block;
		text-align: center;
		padding: .5em 1.2em;
		background-color: #d35400;
		cursor: pointer;
		color: #fff;
		font-weight: 900;
		letter-spacing: 2px;
		text-decoration: none;
		text-transform: uppercase;
	}
	
	.conf-timline {}
	
	.timeline {
		background: #2c3e50;
		color: #fff;
		padding-top: 2em;
	}
	
	.timeline ul {
		font-size: 0.7em;
		margin: 0;
		padding: 1em;
	}
	
	.timeline ul li {
		position: relative;
		display: block;
		margin-left: 3em;
		list-style-type: none;
		padding-bottom: 2em;
	}
	
	.tline-date {
		font-size: 1.5em;
		font-weight: 800;
		line-height: 100%;
	}
	
	.tline-date:before {
		display: block;
		position: absolute;
		font-size: 1em;
		top: 0;
		left: -1.5em;
		padding: 0.5em;
		line-height: 100%;
		border-radius: 50%;
		content: '';
	}
	
	.green.tline-date:before {
		background-color: #27ae60;
	}
	
	.red.tline-date:before {
		background-color: #c0392b;
	}
	
	.yellow.tline-date:before {
		background-color: #f1c40f;
	}
	
	.tline-head {
		font-weight: 800;
	}
	
	.tline-descript {}
	
	.conf-regform {
		background: #fff;
		padding: 2em;
	}
	
	.check-pay,
	.conf-support {
		padding: 5% 0;
		margin: 2% 0;
		background: #fff;
	}
	/* pay block */
	
	.how-pay {
		padding: 0;
		text-align: center;
		font-size: 1.6em;
	}
	
	.how-pay .conf-price {
		font-size: 0.8em;
		font-weight: 800;
	}
	
	.pay-variant {
		padding: 2em;
	}
	
	.requisites-pay {
		font-size: 0.9em;
	}
	
	a.yandexmoney {
		position: relative;
		display: block;
		font-size: 1.2em;
		cursor: pointer;
		display: block;
		font-size: 1.2em;
		text-decoration: none;
		width: 40%;
		text-align: center;
		margin: .5em 0;
		padding: 0.5em;
		border-radius: 3px;
		border: 0;
		color: #fff;
		background: #e67e22;
	}
	
	a.yandexmoney:hover {
		color: #fff;
		background: #d35400;
	}
	
	.conf-support {
		padding: 2em;
	}
	
	.support {
		text-align: center;
		font-size: 2em;
		padding-bottom: 1em;
	}
	
	.support-discr {
		font-size: 0.4em;
		color: #666;
	}
	
	.conf-org {
		margin: 0 auto;
	}
	/* fun-card */
	
	.supp-t {
		font-size: 0.8em;
		color: #7f8c8d;
	}
	
	.fun-card {
		padding: 0;
		padding-bottom: 1em;
	}
	
	.fun-card .addname {
		padding: 0;
		padding-bottom: 0.2em;
	}
	
	.fun-card .phone {
		padding: 0;
		font-size: 0.8em;
		color: #7f8c8d;
	}
	
	.parner {
		padding-top: 5%;
	}
	
	.conf-part {
		text-align: center;
		font-size: 2.2em;
		color: #313131;
	}
	
	.parner a {
		display: block;
        
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -ms-align-items: center;
        align-items: center;
        
		float: left;
		width: 20%;
		padding: 2em;
	}
	
	.parner a img {
		width: 100%;
	}
	/* conference forms */
	
	.screen-reader-response {
		display: none;
	}
	
	.wpcf7-not-valid-tip {
		font-size: 0.8em;
		color: #d35400;
		opacity: 0.8;
	}
	.conf-reg {
		position: relative;
	}
	
	.wpcf7-response-output {
		display: none;
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background-color: rgba(255, 255, 255, 0.8);
		color: #000;
		font-size: 2.2em;
		text-align: center;
		padding-top: 10%;
	}
	
	.wpcf7-response-output.wpcf7-validation-errors {
		position: relative;
		font-size: 1.5;
		color: #d35400;
		padding-top: 2em 0;
	}
	
	.conf-regform {
		position: relative;
	}
	
	.conf-regform .conf-reg {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		padding: 0 2em;
	}
	
	.conf-regform label {
		position: relative;
		display: block;
		border: 1px solid #95a5a6;
	}
	
	.conf-regform .inp-block {
		margin: 0.5em;
	}
	
	.conf-regform .conf-reg input[type=text],
	.conf-regform .conf-reg input[type=email],
	.conf-regform .conf-reg textarea,
	.conf-regform .conf-reg select {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		display: block;
		outline: 0;
		border: 0;
		padding: 1em;
		width: 100%;
	}
	
	.wpcf7-list-item label {
		display: inline-block;
		border: 0;
	}
	
	.conf-reg input[type=radio] {
		display: none;
	}
	
	.conf-reg input[type=radio] + .wpcf7-list-item-label {
		display: inline-block;
		position: relative;
		border: 0;
		margin: 0.2em 0;
		margin-left: 1.2em;
		cursor: pointer;
		line-height: 100%;
		border-bottom: 1px dashed #000;
		color: #7f8c8d;
		font-size: 0.9em;
	}
	
	.conf-reg input[type=radio]:checked + .wpcf7-list-item-label {
		border-bottom: 1px dashed transparent;
		color: #000;
		font-size: 1.1em;
	}
	
	.conf-reg input[type=radio] + .wpcf7-list-item-label:before {
		display: block;
		position: absolute;
		top: 0;
		left: -1em;
		padding: 0.1em;
		font-family: "untitled-font-1" !important;
		font-style: normal !important;
		font-weight: normal !important;
		font-variant: normal !important;
		text-transform: none !important;
		speak: none;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		content: "\e1b3";
		-webkit-transition: all 0.4s ease-in-out;
		-moz-transition: all 0.4s ease-in-out;
		-o-transition: all 0.4s ease-in-out;
		-ms-transition: all 0.4s ease-in-out;
		transition: all 0.4s ease-in-out;
	}
	
	.conf-reg input[type=radio]:checked + .wpcf7-list-item-label:before {
		content: "\e17e";
	}
	
	input#gen {
		display: inline;
		font-weight: bold;
		outline: 0;
		border: 0;
		text-align: left;
		font-size: 1em;
		background-color: #ecf0f1;
	}
	
	.idrep {
		font-size: 0.8em;
	}
	
	.fileupl {
		position: relative;
		border: 4px dashed #ddd;
		margin: 0.5em;
		padding: 2em 1em;
	}
	
	.fileupl:hover {
		border: 4px dashed #e74c3c;
	}
	
	.fileupl p {
		width: 100%;
		height: 100%;
		margin: 0;
		text-align: center;
		color: #000;
	}
	
	.fileupl input[type=file] {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		margin: 0;
		padding: 0;
		width: 100%;
		height: 100%;
		outline: none;
		opacity: 0;
		cursor: pointer;
	}
	
	.wpcf7-form-control.g-recaptcha.wpcf7-recaptcha > div > div {
		margin: 0 auto;
	}
	
	.conf-regform .conf-reg input[type=submit] {
		position: relative;
		display: block;
		font-size: 1.2em;
		cursor: pointer;
		display: block;
		font-size: 1.2em;
		text-decoration: none;
		width: 40%;
		text-align: center;
		margin: .5em auto;
		padding: 0.5em;
		border-radius: 3px;
		border: 0;
		color: #fff;
		background: #e67e22;
	}
	
	.conf-bottom {
		position: relative;
		font-size: 200px;
		text-align: center;
		color: #FFF;
		padding: 20% 0;
		background-image: -webkit-linear-gradient(-90deg, #34495e 0, #212121 85%, #212121 100%);
		background-image: -moz-linear-gradient(180deg, #34495e 0, #212121 85%, #212121 100%);
		background-image: linear-gradient(180deg, #34495e 0, #212121 85%, #212121 100%);
		background-position: 50% 50%;
		-webkit-background-origin: padding-box;
		background-origin: padding-box;
		-webkit-background-clip: border-box;
		background-clip: border-box;
		-webkit-background-size: auto auto;
		background-size: auto auto;
	}
	
	.closed-bottom {
		position: relative;
		font-size: 200px;
		text-align: center;
		color: #FFF;
		padding: 20% 0;
		background-image: -webkit-linear-gradient(-90deg, #16a085 0, #212121 85%, #212121 100%);
		background-image: -moz-linear-gradient(180deg, #16a085 0, #212121 85%, #212121 100%);
		background-image: linear-gradient(180deg, #16a085 0, #212121 85%, #212121 100%);
		background-position: 50% 50%;
		-webkit-background-origin: padding-box;
		background-origin: padding-box;
		-webkit-background-clip: border-box;
		background-clip: border-box;
		-webkit-background-size: auto auto;
		background-size: auto auto;
	}
	
	.conf-noiz {
		position: absolute;
		top: 0;
		bottom: 0;
		right: 0;
		left: 0;
		background: url(<?php bloginfo("template_url");
		?>/img/bc/conf-noise.svg);
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: 30% 50%;
	}
	/* yandexmoney */
	
	.yamoney {
		display: block;
		width: 80%;
		/*    margin: 0 auto;*/
	}
	
	.yamoney input[type=radio] {
		display: none;
	}
	
	.moneysum {
		padding: 1em 0;
	}
	
	.yamoney .moneysum input[type=radio] + label {
		display: inline-block;
		position: relative;
		border: 0;
		margin: 0.2em 0;
		margin-left: 1.2em;
		cursor: pointer;
		color: #7f8c8d;
		font-size: 1.3em;
	}
	
	.yamoney .moneysum input[type=radio]:checked + label {
		color: #000;
	}
	
	.yamoney .moneysum input[type=radio] + label:before {
		display: block;
		position: absolute;
		top: 0;
		left: -1em;
		padding: 0.1em;
		font-family: "untitled-font-1" !important;
		font-style: normal !important;
		font-weight: normal !important;
		font-variant: normal !important;
		text-transform: none !important;
		speak: none;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		content: "\e1b3";
		-webkit-transition: all 0.4s ease-in-out;
		-moz-transition: all 0.4s ease-in-out;
		-o-transition: all 0.4s ease-in-out;
		-ms-transition: all 0.4s ease-in-out;
		transition: all 0.4s ease-in-out;
	}
	
.yamoney .moneysum input[type=radio]:checked + label:before {
		content: "\e17e";
	}
	
.summary label {
		font-size: 2em;
	}
	
.yamoney .moneysum input[type=text] {
		display: inline;
		outline: 0;
		border: 0;
		width: 3em;
		border-bottom: 2px solid #000;
		text-align: center;
		font-size: 1em;
/*		background-color: #ecf0f1;*/
	}
	
	.summary p {
		font-size: 0.8em;
		color: #7f8c8d;
	}
	
	.yd_add {
		display: inline-block;
		margin-left: 1em;
	}
	
.yd_add a {
		display: inline-block;
		padding: 0 0.4em;
		font-size: 1.2em;
	line-height: 100%;
		color: #95a5a6;
    	margin: 0;
		cursor: pointer;
    	border:1px solid #95a5a6;
	}

.yd_add a:nth-child(even) {
  border-radius:0 5px 5px 0;
  border-left: 0;
	}
.yd_add a:nth-child(odd) {
	border-radius: 5px 0 0 5px;
  border-right: 0;
	}
	
	
	.comments {
		position: relative;
		border: 1px solid #000;
	}
	
	.comments textarea {
		box-sizing: border-box;
		width: 100%;
		border: 0;
		padding-bottom: 10%;
		margin: 0;
		outline: 0;
	}
	
	.comments #counter {
		position: absolute;
		bottom: 0;
		right: 0;
		padding: 0.5em 1em;
		border: 1px solid #000;
		border-right: 0;
		border-bottom: 0;
	}
	
	.paytype {
		padding: 1em 0;
	}
	
	.paytype input[type=radio] + label {
		cursor: pointer;
		display: inline-block;
		font-size: 1.2em;
		color: #ddd;
		border: 1px dashed #ddd;
		padding: 0.5em;
	}
	
	.paytype input[type=radio] + label:hover {
		border: 1px dashed #313131;
	}
	
	.paytype input[type=radio]:checked + label {
		border: 1px solid #000;
		color: #000;
	}
	
	.yamoney input[type=submit] {
		position: relative;
		display: block;
		font-size: 1.2em;
		cursor: pointer;
		display: block;
		font-size: 1.2em;
		text-decoration: none;
		width: 40%;
		text-align: center;
		margin: .5em 0;
		padding: 0.5em;
		border-radius: 3px;
		border: 0;
		color: #fff;
		background: #e67e22;
	}
	
	.paydecript {
		font-size: 2em;
		padding: 2em;
		background-color: #ecf0f1;
font-family: 'Roboto Slab', 'PT Sans', Arial, sans-serif;
		;
		font-weight: 300;
	}
	/* Closed conference */
	/**/
	.conf-closed {
		background:#bdc3c7 url('<?php bloginfo("template_url");
		?>/img/280323b9be9979e63bb418f93ad69f33.jpg');
        background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: 30% 50%;   
        padding: 5% 0;
        position: relative;
	}
.conf-shadow {
    background-color: #313131;
    opacity: 0.8;
    position: absolute;
    top: 0;bottom: 0;right: 0;left: 0;
    z-index: 1;
    }
    .conf-closed .block {
        position: relative;
        z-index: 3;
    }   
	
.conf-download {
		background: #ddd;
		color: #fff;
    text-align: center;
	}	
.conf-download p{
    padding: 0;margin: 0;
	}
.conf-download p img{
    display: block;
    width: 100%;
	}
.conf-download a{
    display: inline-block;
    margin: 0 auto;
    padding:0.5em 1em;
    color: #fff;
    text-align: center;
    font-size: 0.8em;
    background-color: #e67e22;
    cursor: pointer;
    color: #fff;
    font-weight: 300;
    letter-spacing: 2px;
    text-decoration: none;
    text-transform: uppercase;
    
    border-radius:2em;
    margin-bottom: 2em;
    -webkit-box-shadow: 0px 2px 5px #7f8c8d;
    box-shadow: 0px 2px 5px #7f8c8d;
	}
.conf-download a:hover{
    background-color: #d35400;
  -webkit-box-shadow: 0px 2px 5px #bdc3c7;
    box-shadow: 0px 2px 5px #bdc3c7;
	}
    .conf-closed 	.mailchimp {
        margin: 5% 0;
    }
    
    .soc {
        text-align: center;
    }
    
	.conf-line {
		padding: 5% 2em;
		margin: 2% 0;
		background: #fff;
	}	
.conf-line.conference-gallery {
		padding: 0;
		margin: 2% 0;
		background: #313131;
	}
	
	.conf-download ul {
		padding: 0;
	}
	
	.conf-download ul li {
		display: block;
		padding: 1em 0;
		text-align: center;
	}
	
	.conf-download ul li a {
		display: block;
		text-decoration: none;
		color: #fff;
	}
	
	.conf-download ul li a:before {
		display: block;
		text-align: center;
		font-size: 2em;
	}
    
    
.nextpost,
.prevpost{
    color: #000;
    margin-top: 5%;
    } 
    
.nextpost a,
.prevpost a 
    {
    display: inline-block;
    background-color: #fff;  
    padding: 1em;    
    color: #313131;
    text-decoration: none;
    font-size: 1.2em;
    }
.nextpost a:hover,
.prevpost a:hover  
    {
    background-color: #e67e22;
    color: #fff;
    }
    
.nextpost {
    margin-right: 2em;
 }  
.prevpost { 
   margin-left: 2em;}    
    
    .pure-right {
        float: right;
    }   
</style>
<?php if ( get_field('confend') == true ) { ?>
	<?php include(TEMPLATEPATH . '/tp/confer/closed.php'); ?>
		<?php } else { ?>
			<?php include(TEMPLATEPATH . '/tp/confer/current.php'); ?>
				<?php } ?>