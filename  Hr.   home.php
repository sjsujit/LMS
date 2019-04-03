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
            <h1>Welcome to GoodWill</h1>
            <div class="content_body">
                <h2 style="padding:2%; color: white;border-radius: 8px; background-color: cornflowerblue; margin-left: 4%;margin-right: 4%">Learning Management System</h2><br>
                <p>Learning Managemenr system helps you to administer tracking, reporting, delivery of educational
                    courses, training programs or development programs.<br><br>
                    For the HR Admin, it has two parts to one to manage training and other for User Management.<br><br>
                    <b>Training Management :</b> It helps HR for administration, and typically handles session registration,
                    training approvals, course administration, tracking, and reporting<br><br>
                    <b>User Management:</b> It enables admins to control user access and on-board and off-board users to and
                    from company.</p>
            </div>
        </div>
    </div>

</body>
<footer>
    <img style="width: 100%;" src="footer.png">
</footer>
</html>