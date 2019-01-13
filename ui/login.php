<div id="id02" class="modal">
    
    <form class="modal-content animate" action="/action_page.php">
      <div>
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h1 align="center" style="padding:10px;">Login</h1>
        
      </div>
  <br>
      <div class="container">
        <label for="emali"><b>E-mail</b></label><br>
        <input type="text" placeholder="Enter e-mail" name="uname" required><br>

        <label for="psw"><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="psw" required><br>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label><br>

        <button type="submit" class="signupbtn">Login</button><br>
        
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <br>
        <span class="psw">Forgot <a href="#">password?</a></span>

      </div>

    </form>
  </div>