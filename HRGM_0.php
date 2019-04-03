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
</header>
    <?php session_start(); ?>
</head>
<body>
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

<h3 align="left">Group List:</h3>
               <p align="right">
               <button class="btn btn-success" onclick=" window.open('HRGM_0AddGroup.php','_blank')"> Add group</button> 
               
                  <button class="btn btn-success" onclick=" window.open('HRGM_0RemoveGroup.php','_blank')"> Remove group</button>
              </p>
              <article>
                <table>
                    <tr>
                        <th>Group Name</th>
                    </tr>
                  
                        <td><a href="HRGM_1.php">Admin</a></td> 
                        <tr> 
                        <td>Operations</td>
                        </tr>
                         <tr> 
                        <td>Retail</td>
                        </tr>
                         <tr> 
                        <td>Supervisor</td>  
                        </tr>
                         <tr> 
                        <td>Transpotation</td>
                        </tr>
                         <tr> 
                        <td>Warehouse</td>    
                    </tr>
                </table>
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