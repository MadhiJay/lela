<div id="id03" class="modal">
    
    <form class="modal-content animate" action="/action_page.php">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h1 align="center" style="padding:10px;">Search</h1>       
      </div>
  <br>
      <div class="container">
        <label for="location" style="padding: 10px;width:20%;height:40px;"><b>Location</b></label><br>
            <select name="Locations">
              <option value="Ella">Ella</option>
              <option value="Bandarawela">Bandarawela</option>
              <option value="Badulla">Badulla</option>
            </select>

        <br>

        <label for="CheckinDate" style="padding: 10px;width:20%;height:40px;"><b>Check-In</b></label>
        <label for="CheckoutDate" style="padding: 10px;width:20%;height:40px;"><b>Check-Out</b></label><br>
        <input type="date" name="CheckinDate" required style="padding: 10px;width:20%;height:40px;">
        <input type="date" name="CheckoutDate" required style="padding: 10px;width:20%;height:40px;"><br>
        <br>
        <button type="submit" class="btn btn-primary" style="width:50%;margin:20px;">Search</button><br>
      </div>
    </form>
  </div>