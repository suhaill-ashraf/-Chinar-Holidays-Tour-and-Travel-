<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color:#FFA600;
        }
        .container
        {
            height:auto;
        }
        .cards
        {
            width: 70%;
            height: 100%;
            /* border: 2px solid red; */
            outline: none;
            margin: 12px auto;
            /* padding: 20px auto; */
            padding: 40px;
            background-image: url("../img/chinar.svg");
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: center;
            background-size: contain;
            background-color: inherit
            
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
            min-height: 30%;
            min-width: 30%;
            object-fit: cover;
        } 
        label{
            color: white;
            font-weight: bolder;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        input{
            background-color: black;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="cards">
            <div class="profile">
                <img src="../img/zahoor.jpg" alt="Profile Image">
            </div>
            <h2 style="text-align: center; margin-top:20px;"><span style="color: white;">Zahur</span> <span
                    style="color:red;">Ilahi</span></h2>

            <form action="welcome.php" method="POST" class="form login">
                <div class="row mb-3">
                  <label for="login__username" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-8">
                    <input type="tect" class="form-control" id="username" name="username">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword3" name="password">
                  </div>
                </div>
                <div class="align-items-center text-center "><button type="submit" class="btn btn-danger " name="submit">log in</button></div>
                
                
              </form>

        </div>
    </div>
</body>
</html>