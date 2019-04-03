<!DOCTYPE html>
<html>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<header>
  <img style="transform: rotate(-10deg); width:140px; height:210px;" src="goodwill-logo.png" alt="GoodWill header-2">
  <img  style="padding-left:60px; padding-bottom: 50px;"src="goodwill-logo-text.png" alt="logo text">
   <script>
            function visibility_false(){
            document.getElementById('vansh').style.display = "none";
            }

            function visibility_true(){
            document.getElementById('vansh').style.display = "block";
            }
        </script>
</header>
    <?php session_start(); ?>
     
</head>
<body onload = "visibility_false()">
  <div class="Menu">

                                                                          
    </div>
    <div class="main_body">
        <div class="sidebar">
            <a class="active" href="#home">Home</a>
            <a href="Training_manage.php">Training Management</a>
            <a href="userManagement.php">User Management</a>
        </div>
        <div class="content">
           <h2 style="padding:2%; color: white;border-radius: 8px; background-color: cornflowerblue; margin-left: 4%;margin-right: 4%">Learning Management System</h2>
            <div class="content_body">

                                    <!-- vansh -->
<h3>Add new group</h3>
  <article>
    <h2>Member information</h2>
 
 
   Select group members
 

    <!-- Trigger/Open The Modal -->
    <button id="myBtn" onclick = "visibility_true()" >Select Employee</button>
</p>
    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">
            <input type="button" value="Cancel" onclick="history.back()">
        </span>
        <p>
        <div id = "vansh" name = "vansh">
          <form action="/action_page.php" method="get">
           <article>
            <table>
              <center>
                <tr>
                  <th>Select</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>User Name</th>
                  <th>Role</th>
                  <th>Email</th>
                  <th>Phone number</th>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="Sujit" value="sujit">
                  </td>
                  <td>Sujit</td>
                  <td>Jadhav</td>
                  <td>Jadhav1</td>
                  <td>Admin</td>
                  <td>Jadhav@marshall.edu</td>
                  <td>+1(234)-567-8901</td>  

                </tr>
                <tr>
                  <td>

                    <input type="checkbox" name="Prajna" value="Prajna" >
                  </td>
                  <td>Prajna</td>
                  <td>Mendon</td>
                  <td>Mendon1</td>
                  <td>Admin</td>
                  <td>mendonv@marshall.edu</td>
                  <td>+1(234)-567-8901</td>       
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="Vansh" value="Vansh" > 
                  </td>
                  <td>Vansh</td>
                  <td>Patel</td>
                  <td>Patel163</td>
                  <td>Employee</td>
                  <td>patel163@marshall.edu</td>
                  <td>+1(234)-567-8901</td>   
                </tr>

<tr>
                  <td>
                    <input type="checkbox" name="Vansh" value="Vansh" > 
                  </td>
                  <td>Salman</td>
                  <td>Muhammad</td>
                  <td>Salman</td>
                  <td>Employee</td>
                  <td>Salman@marshall.edu</td>
                  <td>+1(234)-567-8901</td>   
                </tr>

              <tr>
                  <td>
                    <input type="checkbox" name="Vansh" value="Vansh" > 
                  </td>
                  <td>Salman</td>
                  <td>Muhammad</td>
                  <td>Salman</td>
                  <td>Employee</td>
                  <td>Salman@marshall.edu</td>
                  <td>+1(234)-567-8901</td>   
                </tr>

              </center>
            </table>
          </article>
          <input type="submit" value="Add">
           <input type="button" value="Cancel" onclick="history.back()">
          </form>
      </div>
         </p>
     </div>
    </div>
  <br>
  <br>

  </article>
             



                                    
                                    <!-- vansh -->               
            </div>
        </div>
    </div>

</body>
<footer>
    <img style="width: 100%;" src="footer.png">
</footer>
</html>