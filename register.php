<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration</h2>
    <form action="process.php" method = "post">
        <label for="">first Name</label>
        <input type="text" name="first_name"> <br></br>

         <label for="">last Name</label>
        <input type="text" name="last_name"> <br></br>

         <label for=""> userName</label>
        <input type="text" name="user_name"> <br></br>

        <label for="">email</label>
        <input type="email" name="email"> <br></br>

         <label for="">gender</label>
         <select name="gender" id="gender">
         <option value="gender">select gender</option>
            <option value="M">male</option>
            <option value="F">Female</option>
        </select>
        <br></br>
         <label for="">password</label>
        <input type="pass" name="password"> <br></br>
        <label for="">confirm password</label>
        <input type="text" name="confirm_pass"> <br></br>

        <input type="submit" value="save" name="save_user">


    </form>
</body>
</html>