<footer>
    <div class="container">
       <div class="row">
          <div class="col-md-4">
              <div class="full">
                 <div class="logo_footer">
                   <a href="{{url('/')}}"><img width="210" src="images/CAMPBOOK.png" alt="" /></a>
                 </div>
                 <div class="information_f">
                   <p><strong>ADDRESS:</strong> Lac  , Tunis, Tunisia</p>
                   <p><strong>TELEPHONE:</strong> +216 70 654 210</p>
                   <p><strong>EMAIL:</strong> campbook@travelzone.com</p>
                 </div>
              </div>
          </div>
          <div class="col-md-8">
             <div class="row">
             <div class="col-md-7">
                <div class="row">
                   <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Menu</h3>
                   <ul>
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li><a href="{{ url('/about') }}">About</a></li>
                      <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
                      <li><a href="{{ url('/contact') }}">Contact</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Account</h3>
                   <ul>
                      <li><a href="#">Account</a></li>
                      <li><a href="#">Checkout</a></li>
                      <li><a href="{{ url('login') }}">Login</a></li>
                      <li><a href="{{ url('register') }}">Register</a></li>
                   </ul>
                </div>
             </div>
                </div>
             </div>
             <div class="col-md-5">
                <div class="widget_menu">
                   <h3>Newsletter</h3>
                   <div class="information_f">
                     <p>Subscribe by our newsletter and get update.</p>
                   </div>
                   <div class="form_sub">
                      <form>
                         <fieldset>
                            <div class="field">
                               <input type="email" placeholder="Enter Your Mail" name="email" />
                               <input type="submit" value="Subscribe" />
                            </div>
                         </fieldset>
                      </form>
                   </div>
                </div>
             </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
