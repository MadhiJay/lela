<div id="id01" class="modal">
    
      <form class="modal-content" action="/action_page.php">
        <div class="container">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="email"><b>Email</b></label><br>
          <input type="text" placeholder="Enter Email" name="email" required><br>

          <label for="psw"><b>Password</b></label><br>
          <input type="password" placeholder="Enter Password" name="psw" required><br>

          <label for="psw-repeat"><b>Repeat Password</b></label><br>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
          
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>