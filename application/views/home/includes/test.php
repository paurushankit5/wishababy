  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
 
.wrap {
  display: inline-block;
  -webkit-box-shadow: 0 0 70px #fff;
  -moz-box-shadow: 0 0 70px #fff;
  box-shadow: 0 0 70px #fff;
  margin-top: 40px;
}

/* a little "umph" */
.decor {
  background: #6EAF8D;
  background: -webkit-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: -moz-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: -o-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: linear-gradient(left, white 50%, #6EAF8D 50%);
  background-size: 50px 25%;;
  padding: 2px;
  display: block;
}

a {
  text-decoration: none;
  color: #fff;
  display: block;
}

ul {
  list-style: none;
  position: relative;
  text-align: left;
}

li {
  float: left;
}

/* clear'n floats */
ul:after {
  clear: both;
}

ul:before,
ul:after {
    content: " ";
    display: table;
}

nav {
  position: relative;
  background: #2B2B2B;
  background-image: -webkit-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: -moz-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: -o-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  text-align: center;
  letter-spacing: 1px;
  text-shadow: 1px 1px 1px #0E0E0E;
  -webkit-box-shadow: 2px 2px 3px #888;
  -moz-box-shadow: 2px 2px 3px #888;
  box-shadow: 2px 2px 3px #888;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}

/* prime */
ul.primary li a {
  display: block;
  padding: 20px 15px;
  border-right: 1px solid #3D3D3D;
}

ul.primary li:last-child a {
  border-right: none;
}

ul.primary li a:hover {
  
  color: #000;
}

/* subs */
ul.sub {
  position: absolute;
  z-index: 200;
  box-shadow: 2px 2px 0 #BEBEBE;
  width: 35%;
  display:none;
}

ul.sub li {
  float: none;
  margin: 0;
}

ul.sub li a {
  border-bottom: 1px dotted #ccc;
  border-right: none;
  color: #000;
  padding: 15px 30px;
}

ul.sub li:last-child a {
  border-bottom: none;
}

ul.sub li a:hover {
  color: #000;
  background: #eeeeee;
}

/* sub display*/
ul.primary li:hover ul {
  display: block;
  background: #fff;
}

/* keeps the tab background white */
ul.primary li:hover a {
  background: #fff;
  color: #666;
  text-shadow: none;
}

ul.primary li:hover > a{
  color: #000;
} 

@media only screen and (max-width: 600px) {
  .decor {
    padding: 3px;
  }
  
  .wrap {
    width: 100%;
    margin-top: 0px;
  }
  
   li {
    float: none;
  }
  
  ul.primary li:hover a {
    background: none;
    color: #8B8B8B;
    text-shadow: 1px 1px #000;
  }

  ul.primary li:hover ul {
    display: block;
    background: #272727;
    color: #fff;
  }
  
  ul.sub {
    display: block;  
    position: static;
    box-shadow: none;
    width: 100%;
  }
  
  ul.sub li a {
    background: #272727;
  	border: none;
    color: #8B8B8B;
  }
  
  ul.sub li a:hover {
    color: #ccc;
    background: none;
  }
}
	</style>
<nav>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 nav-logo">
						<a href="">Creativity - Responsive Template</a>
					</div>
					<div class="col-sm- nav-links">
						 <div class="wrap">
						<span class="decor"></span>
						<nav>
						  <ul class="primary">
							<li><a href="<?= base_url();?>" >Home</a></li>
							<li>
								<a href="#">Why Proud Parents <b class="caret"></b></a>
								<ul class="sub">
									
									<li><a href="#">Our Story</a></li>
									<li><a href="#">Testimonials</a></li>
									<li><a href="#">Donate To Proud Parents</a></li>
									<li><a href="#">Proud Parents Journeys</a></li>
								 
								</ul>
							</li>
							<li>
								<a href="#">Get Started <b class="caret"></b></a>
								<ul class="sub">
									<li><a href="#"  >How it works</a></li>
									<li><a href="#"  >Membership Benefits</a></li>
									<li><a href="#"  >Messaging Credits</a></li>
									<li><a href="#"  >Premium Membership</a></li>
									<li><a href="#"  >Health Questionnaire</a></li>
									<li><a href="#"  >Personality Test</a></li>
									<li><a href="#"  >Sperm Donor Checklist</a></li>
									<li><a href="#"  >Sperm Donors</a></li>
									<li><a href="#"  >Egg Donors</a></li>
									<li><a href="#"  >Co-parents</a></li>
									<li><a href="#"  >Recipients</a></li>
									<li><a href="#"  >Experts/ Advertisers</a></li>
									<li><a href="#"  >Proud Parents Families</a></li>
									<li><a href="#"  >Proud Parents Friends</a></li>								 
								</ul>
							</li> 
							 <li>
								<a href="#"  >Information Centre <b class="caret"></b></a>
								<ul class="sub">
									<li><a href="#"  >Resources</a></li>
									<li><a href="#"  >FAQs</a></li>
									<li><a href="#"  >Fertlity Law</a></li>
									<li><a href="#"  >Counseling</a></li>
									<li><a href="#"  >Health Screening</a></li>
									<li><a href="#"  >Fertility</a></li>
									<li><a href="#"  >Donor Conception</a></li>
									<li><a href="#"  >Pregnancy</a></li>
									<li><a href="#"  >Parenting</a></li>
									<li><a href="#"  >Complementary Therapies</a></li>
									<li><a href="#"  >Neutral Fertility</a></li>
									<li><a href="#"  >Nutrition</a></li>
									<li><a href="#"  >Fertility Tests</a></li>
									<li><a href="#"  >Fertility Treatment</a></li>								 
								</ul>
							</li>
							<li>
								<a href="#"  >Clinics & Services <b class="caret"></b></a>
								<ul class="sub">
									<li><a href="#"  >Choosing a Fertility Clinic</a></li>
									<li><a href="#"  >Clinic Directory</a></li>
									<li><a href="#"  >Expert Directory</a></li>
									<li><a href="#"  >Advertising Options</a></li>
								 
								</ul>
							</li>
							<li>
								<a href="#"  >Families <b class="caret"></b></a>
								<ul class="sub">
									<li><a href="#"  >Add your Family</a></li>
									<li><a href="#"  >Families Directory</a></li>
									
								</ul>
							</li>
							<li>
								<a href="#"  >News & Events <b class="caret"></b></a>
								<ul class="sub">
									<li><a href="#"  >News</a></li>
									<li><a href="#"  >Events</a></li>
									<li><a href="#"  >Blog</a></li>
									<li><a href="#"  >Research</a></li>									 
								</ul>
							</li>
							
							<li><a href="<?= base_url('store');?>"  >Store</a></li>
							<li><a href="<?= base_url('register');?>"  >Register</a></li>
							 
						  </ul>
						</nav>
						</div>
					</div>
				</div>
			</div>
		</nav>