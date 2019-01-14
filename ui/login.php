<div id="id02" class="modal">
    
    <form class="modal-content animate" action="../index.php" method="POST">
      <div>
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h1 align="center" style="padding:10px;">Login</h1>
        
      </div>
  <br>
      <div class="container">
      <?php
            if(isset($_POST['alert-message-login'])){
              echo  "<script>document.getElementById('id02').style.display='block';</script><div class=\"alert alert-danger\" style=\"width:50%;\">
              <strong>Warning! ".$_POST['alert-message-login']."&nbsp;</strong>
            </div><hr>";
            }
        ?>
        <label for="email"><b>E-mail</b></label><br>
        <input type="email" placeholder="Enter e-mail" name="login-email" required><br>

        <label for="psw"><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="psw" required><br>
        <label>
          <input type="checkbox" value="true" name="remember"> Remember me
        </label><br>

        <button type="submit" class="signupbtn">Login</button><br>
        
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <br>
        <span class="psw">Forgot <a href="#">password?</a></span>

      </div>

    </form>
  </div>