<html>
  <head>
    <meta charset="utf-8">
    <title>PRAMANA HOTEL & RESORT</title>
    <link rel="stylesheet" href="style.css">

    <script>

      function validateForm(){
        var x = document.forms["myForm"]["name"].value;
        var y = document.forms["myForm"]["email"].value;
        var z = document.forms["myForm"]["phone"].value;
        var a = document.forms["myForm"]["lengthOfStay"].value;

       if (x === "") {
           alert("Name must be filled out");
           return false;
       }
       if (y == "") {
           alert("Email must be filled out");
           return false;
       }
       if (z == "") {
           alert("Phone must be filled out");
           return false;

       if (a == "") {
           alert("Length of stay must be filled out");
           return false;
       }
   }
}
    </script>
  </head>

  <body>

    <div id="header">
    <img src="logo2.png">
    </div>

    <div>
      <p class="menu"><a href="home.html">Home</a></p>
      <p class="menu"><a href="Facility.php">Facility</a></p>
      <p class="menu"><a href="BookRoom.php">Book Room</a></p>
    </div>
    <br>
    <hr>
    <table align="center">
      <form name="myForm" action="BookSuccess.php" onsubmit="return validateForm()" method="post">
      <tr>
        <th colspan="2">BOOK ROOM</th>
      </tr>
      <tr>
        <td>Name</td>
        <td><input type="text" name="name"></input></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="Email" name="email" ></input></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><input type="number" name="phone" ></input></td>
      </tr>
        <td>Stay In Date</td>
        <td><input type="date" name="stayinDate" ></input></td>
      </tr>
      <tr>
        <td>Length of Stay (days)</td>
        <td><input type="number" name="lengthOfStay" ></input></td>
      </tr>
      <tr>
        <td>Room Type</td>
        <td><select>
          <option value="selectone">Select One</option>
          <option value="deluxe">Deluxe Room - $274</option>
          <option value="deluxevilla">Deluxe Pool Villa - $438</option>
          <option value="1bedpoolvilla">1 Bedroom Pool Villa - $525</option>
          <option value="2bedpoolvilla">2 Bedroom Pool Villa - $635</option>
        </select>
        </td>
        </tr>
        <tr>
        <td>Additional Charge</td>
        <td>
          <input type="checkbox" name="additional" value="extrabed">Extra Bed - $80<br>
          <input type="checkbox" name="additional" value="airportshuttle">Airport Shuttle - $40<br>
          <input type="checkbox" name="additional" value="ubudtour">Ubud Tour 1D - $100<b>


      </td>
    </tr>
    <tr>
      <th colspan="2"><input type="submit" value="Submit">
      </th>
    </tr>

  </form>
    </table>


        <div id="Footer">
          <footer>©2017 Pramana Experience - All Rights Reserved.</footer>
        </div>

  </body>
</html>
