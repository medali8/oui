
<br>
<section id="LoginSignup">
<div class="conatiner-fluid">
    <div class="row w-100">
        <div class="col-lg-6 col-sm-12">
            
            <p class="text-lg-center text-md-center"><a style="cursor : pointer ;"onclick="hid_function_x()">Log in </a> or <a style="cursor : pointer ;" onclick="hid_function_y()">Create account<br> to access our programms</a></p>
            <img src="assets/images/SignUplogin.jpg" class="mx-auto d-block" style="margin-top:55px;" ><br><br> 
           

        </div>
        <div class="col-lg-6 text-center" id="login">
                    <span class="about2">Welcome</span><br>
                    <span>Enter Your information please to access ^^</span><br><br>
                    <form onsubmit="return verifForm()" method=POST action="index.php?controller=visiteur&action=authent2">
                        <label for="email" class="my-1">Email</label><br>
                        <input type="email" name="email" id="email"><br><br>

                        <label for="pwd_login" class="my-1">Password</label><br>
                        <input type="password" name="pwd" id="pwd_login"><br><br>
                        <a href="#">Forgot password ?</a><br>
                        
                        <input type="checkbox" id="resterco">
                        <label for="resterco" class="rco">stay connected</label><br><br>
                        <input type="submit" value="Connexion">
                        <div class="row">
                            <div class="col-5"><hr></div>
                            <div class="col-1 ou">Or</div>
                            <div class="col-5 scndline"><hr></div>
                        </div><br>
                        <button>
                            <div class="row">
                                <div class="col-3">
                                    <img src="assets/images/icons8-logo-google-48.png">
                                </div>    
                                <div class="col-5 mx-4 my-2">
                                    Sign up with google
                                </div>
                            </div>
                        </button>
                            
                        
                    </form>
            </div>
            <div class="col-lg-6 text-center" id="signup" style="display: none;">
       
                          <span class="about2">Welcome</span><br>
                    <span>Enter Your information please to access ^^</span><br><br>
                    <form  onsubmit="return verif()" method=POST action="index.php?controller=visiteur&action=ajout2">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <label for="emaili" class="my-1">Email</label><br>
                                    <input type="email" id="emaili" name="email" style = "width : 90% ;">
                                </div>
                                <div class="col-6">
                                    <label for="pwd" class="my-1">Password</label><br>
                                    <input type="password" name="pwd" id="pwd" style = "width : 90% ;"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="name" class="my-1">Name</label><br>
                                    <input type="text" id="name" name="nom" style = "width : 90% ;">
                                </div>
                                <div class="col-6">
                                    <label for="cpwd" class="my-1">Verification mot de passe</label><br>
                                    <input type="password" id="cpwd" style = "width : 90% ;"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="prenom" class="my-1">Prenom</label><br>
                                    <input type="text" id="prenom"  name="prenom" style = "width : 90% ;">
                                </div>
                                <div class="col-6">
                                    <label for="number" class="my-1 ">Number</label><br>
                                    <input type="text" id="number" name="number" style = "width : 90% ;"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="cin" class="my-1">CIN or Passport</label><br>
                                    <input type="text" id="cin" name="cin" style = "width : 90% ;">
                                </div>
                                <div class="col-6">
                                    <label for="gv" class="my-1">Country</label><br>
                                    <input type="text" id="gv" name="gv" style = "width : 90% ;"><br><br>
                                </div>
                            </div>
                        </div>
                        <a href="#">Forgot password ?</a><br><br>
                        <input type="submit" class="register" value="Connexion" onclick="add()" >
                        <div class="row">
                            <div class="col-5"><hr></div>
                            <div class="col-1 ou">Or</div>
                            <div class="col-5 scndline"><hr></div>
                        </div><br>
                        
                        <button class="ggl">
                            <div class="row">
                                <div class="col-3">
                                    <img src="assets/images/icons8-logo-google-48.png">
                                </div>    
                                <div class="col-5 mx-4 my-2">
                                   Enter with google
                                </div>
                            </div>
                        </button>
                    </form>
                    
                </div>
                
    </div>
</div>
<br><br><br><br>



</section>
<script>
function hid_function_x(){
    var div_login=document.getElementById("login");
    var div_signup=document.getElementById("signup");
    div_login.style.display="block";
    div_signup.style.display="none";
}
function hid_function_y(){
    var div_login=document.getElementById("login");
    var div_signup=document.getElementById("signup");
    div_login.style.display="none";
    div_signup.style.display="block";
}
</script>