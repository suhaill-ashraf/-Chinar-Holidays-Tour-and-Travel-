<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .centre {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2rem;
        }

        .top {
            width: 100Vw;
            margin: 2px auto;
            background-color: rgb(255, 166, 0);
            height: auto;
            margin-top: 0px;
            color: white;
            display: flex;
            height: 10vh;
            align-items: center;
            justify-content: center;


        }

        .dashboard {
            display: flex;
        }

        .left-section {
            flex: 1;
            background-color: rgb(255, 166, 0);
            color: white;
            padding: 20px;
            margin-top: -2px;
            height: 90vh;
            min-width: 270px;
            
          
           

        }

        .right-section {
            flex: 3;
            padding: 20px;
            height:84.4vh;
            position:relative;
        }

        .profile {
            width: 130px;
            height: 130px;
            border: 3px solid red;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }

        .profile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile h4 {
            text-align: center;
            margin-top: 10px;
        }

        .button a:hover {
            color: red;
            box-shadow: 2px 3px 3px red;
            background-color:red;


        }
        #left-section{
            transition: width 0.5s ease;
        }
        
        .contain{
            width:100%;
            border:4px solid green;
            overflow:scroll;
            padding:4px;
            box-sizing:border-box;
            

        }
        h1 a{
            margin-left:20px;
        }
        .developer{
            position: absolute;
            left:7px;
            bottom:9px;

        }
        .top a{
            display:none;
        }
        /* Media query for mobile and tablet devices */
      @media only screen and (max-width: 1023px) {
    /* Shared styles for mobile and tablet devices go here */
    .left-section  {
        display:none; /* Adjust font size for better readability on smaller screens */
       
    }
    .top h1{
        font-weight: 600;
       
    }
    .top{
        height:7vh;
    }
    .right-section{
        width:95vw;
    }
    .top a{
        display:block;
    }



    /* Add more shared styles as needed for mobile and tablet devices */
}
    </style>
</head>

<body>
    <div class="top button">

            <a class="btn btn-dark btn-sm" style="position:absolute; left:30px; " href="../index.html">Home </a>
        <h1 class="centre" > Welcome to the Dashboard, 
            <?php echo htmlspecialchars($_SESSION['username']); ?>!  
        </h1>
        <a class="btn btn-white btn-sm " href="logout.php"
                    style="transition: 0.2s ease-in-out; text-decoration: none; color: green; position:absolute;right:30px;font-weight:bolder; ">logout</a>
    </div>
    
    <div class="dashboard">
        <div class="left-section" id="left-section">

            <a class="btn btn-dark btn-sm" href="../index.html">Home </a>
            <div class="profile">
                <img src="../img/zahoor.png" alt="Profile Image">
            </div>
            <h3 style="text-align: center; margin-top:20px;">Zahur <span style="color:red;">Ilahi</span></h3>
            <!-- Dashboard content goes here -->

            <div style="text-align: center; margin-top:20px;"><img src="../img/chinar.svg" alt="" height="150px"
                    widt="150px"></div>
            <div class="button" style="text-align: center; margin-top:50px; "> <a class="btn btn-white btn-lg" href="logout.php"
                    style="transition: 0.2s ease-in-out; text-decoration: none; color: green; ">logout</a>

            </div>
            <div class="developer">

            <span style="color:red;"> Designed By</span> <a class="border-bottom" href="https://suhaills-portfolio.netlify.app/" target="_blank">Suhail
                    Ashraf</a>
            </div>
        </div>
        <div class="contain">
        <div class="right-section" >
            <h1>List Of Clients <a class="btn btn-danger btn-lg" href="deleteall.php" >Delete all</a></h1>
            <table class="table">
                <thead>
                    <tr>
                        <th style="color:rgb(255, 166, 0);">ID</th>
                        <th style="color:rgb(255, 166, 0);">Name</th>
                        <th style="color:rgb(255, 166, 0);">Address</th>
                        <th style="color:rgb(255, 166, 0);">Email</th>
                        <th style="color:rgb(255, 166, 0);">Phone</th>
                        <th style="color:rgb(255, 166, 0);">Arrival</th>
                        <th style="color:rgb(255, 166, 0);">Departure</th>
                        <th style="color:rgb(255, 166, 0);">Package-Name</th>
                        <th style="color:rgb(255, 166, 0);">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        include 'connection.php';
        $sql = "SELECT * FROM clients";
        $result = $con->query($sql);
        if (!$result) {
            die("Invalid query: " . $c->error);
        }
        // read data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['Name'] . '</td>
                    <td>' . $row['Address'] . '</td>
                    <td>' . $row['Email'] . '</td>
                    <td>' . $row['Phone'] . '</td>
                    <td>' . $row['Arrival'] . '</td>
                    <td>' . $row['Depature'] . '</td>
                    <td>' . $row['Package-Name'] . '</td>
                    <td>
                    <a class="btn btn-danger btn-sm" href="delete.php?id=' . $row['id'] . '">Delete</a>
                    </td>
                </tr>';
        }
        ?>
                </tbody>
            </table>


        </div>
    </div>
    </div>

  <script>
    



  </script>


</body>

</html>