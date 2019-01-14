<div id="id01" class="modal">
    
      <form class="modal-content" action="../index.php" method="POST">
        <div class="container">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          
          <?php
            if(isset($_POST['alert-message'])){
              echo  "<script>document.getElementById('id01').style.display='block';</script><div class=\"alert alert-danger\" style=\"width:50%;\">
              <strong>Warning! ".$_POST['alert-message']."&nbsp;</strong>
            </div><hr>";
            }else if(isset($_POST['success-message'])){
              echo  "<script>document.getElementById('id01').style.display='block';</script><div class=\"alert alert-success\" style=\"width:50%;\"><strong>Success! ".$_POST['success-message']."&nbsp;</strong> </div>";
            }?>
            
          <label for="uname"><b>Username</b></label><br>
          <input type="text" placeholder="Enter Username" name="username" required><br>

          <label for="email"><b>Email</b></label><br>
          <input type="text" placeholder="Enter Email" name="email" required><br>

          <label for="psw"><b>Password</b></label><br>
          <input type="password" placeholder="Enter Password" name="pword" required><br>

          <label for="psw-repeat"><b>Repeat Password</b></label><br>
          <input type="password" placeholder="Repeat Password" name="repword" required><br>
          
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