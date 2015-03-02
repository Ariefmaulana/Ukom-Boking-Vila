@extends('layout.layout')

@section('content')	

		<div class="content-block main right">
									
									<div class="block">
										<div class="featured-block">
											
										</div>
									</div>
									
									
									
									<div class="block">
										<div class="block-title">
											
											<h2>Registrasi</h2>
										</div>
										<div class="block-content">
											<ul class="article-block-big2">
												
											
											
								<center><h3>Please fill in the registration</h3></center>
								       <form id="signupform" class="member-register" action=">
                        
                        <input id="requestVerificationToken" name="requestVerificationToken" type="hidden" value="Glj2UigMr9EyRUb-ICaASnjv9B7dElEqA5EN87ajVFUUX1Z8q4HKS2atsKbvuWhFdYKA7EbPxbTkS_ebOtmHNVcKk0E1:Vj_e1tiXvEFxZI0-pPMT8El9e4jcKH11BiG3S3ng5vkUJcGlP23eu91wKMEhRtNDsDVksTPv26PWE4drGFetwWBkvf01">

                        <fieldset>
                                                        
                            <!-- alert panel starts -->
                            <div class="alert-panel"></div>
                            <input type="hidden" id="failedToSignupText" class="error" data-alerttype="alert-error" data-button="" data-message="We are currently experiencing technical difficulties.">
                            <input type="hidden" id="userAlreadyExistedText" class="emailexistederror" data-alerttype="alert-error" data-button="" data-message="This email already exists. ">
                            <!-- alert panel ends -->
            
                            <div class="columns fixed-columns">
                                <div class="column">
                                                                            
                                    <dl class="block">
                                        <dt><label>First Name:  <em>*</em></label></dt>
                                        <dd><input type="text" class="form-control" name="first" id="firstname" data-error="First Name is required." tabindex="1" value=""></dd>	
                                    </dl>
                                                                                
                                </div>
                                <div class="column">
                                                                            
                                    <dl class="block">
                                        <dt><label>Last Name:  <em>*</em></label></dt>
                                        <dd><input type="text" class="form-control" name="last" id="lastname" data-error="Last Name is required." tabindex="2" value=""></dd>	
                                    </dl>
                                                                                
                                </div>
                            </div>
                                                                    
                            <div class="columns fixed-columns">
                                <div class="column">                                  
                                    <dl class="block">
                                       <dt><label for="email">Email:  <em>*</em></label></dt>
                                        <dd><input type="text" class="form-control" name="email" id="signupEmail" data-error="Email Address is required." data-info="Your email address will only be used to inform you of our special offers. We never share your information with anyone." tabindex="3" value="" autocapitalize="off"></dd>	
                                        <input id="EmailInvalidText" type="hidden" value="Email Address is not valid." name="EmailInvalidText">
                                    </dl>                                          
                                </div>
                                <div class="column">
                                                                            
                                    <dl class="block">
                                        <dt><label for="passwordEstimation">Password:  <em>*</em></label></dt>
                                        <dd>
                                            <input type="password" class="form-control" name="passwordEstimation" id="passwordEstimation" data-error="Your Password is required." tabindex="4" value="">
                                                    <input type="hidden" id="passwordDescription" name="password" data-labels="Type a password, Weak, Medium, Strong!" data-advice="Password is case sensitive, must be at least 8 characters, and include at least 1 number and 1 special character (eg. @#$%^&amp;*)." value="Password is case sensitive, must be at least 8 characters, and include at least 1 number and 1 special character (eg. @#$%^&amp;*).">
                                        <div class="input-meter"><div class="bar"></div><div class="bar"></div><div class="bar"></div></div></dd>
                                    </dl>
                                                                                
                                </div>
                            </div>
                                                                        
                            <dl class="block">
                                <dd><label class="checked"><input id="subscribedForSpecialOffers" type="checkbox" class="checkbox" checked="checked"> i agree to the registration</label></dd>
                            </dl>
                                                                        
                            <dl class="form-actions styled">
                                <dt></dt>
                                    <dd><a href="{{URL::to("vila")}}"></a><input type="submit" class="button button-primary" name="signup" id="btnSignup" value="Sign Up"></dd>
                            </dl>
                                    
                        </fieldset>
                    </form>
                                                                
                </div>
                <!-- tab ends -->
                                                    
            </div>
            <!-- tab panel ends -->
                                                
        </div>
        <!-- dropdown ends -->
                        
								<div class="navbar navbar-fixed-bottom navbar-inverse" role="navigation">
		
			<center><p>&copy; 2014 Copyright <b>My Villa's</b> theme. All Rights reserved.<br/>Designed by <a href="http://arifmaulana420blogspot.com/" target="_blank" class="arif-maulana">Arif Maulana</a></p></center>
		
	</div
@stop