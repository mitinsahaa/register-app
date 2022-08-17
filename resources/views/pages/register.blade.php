<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" name="first_name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" name="last_name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" name="mobile" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Role</label>
                <select name="role" id="" class="form-control">
                    <option value="">- Select -</option>
                    <option value="hr">HR</option>
                    <option value="developer">Developer</option>
                    <option value="accountant">Accountant</option>
                </select>
            </div>
            <div class="form-group skill">
                <label for="">Skill</label>
                <select name="skill" id="" class="form-control">
                    <option value="">- Select -</option>
                    <option value="php">PHP Developer</option>
                    <option value="nodeJs"> Node Js Developer</option>
                    <option value="dotnet">.Net Developer</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="register">Submit</button>
            </div>
        </form>
    </div>
    </body>
</html>