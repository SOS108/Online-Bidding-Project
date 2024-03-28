<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            color: white;
        }
        .formbox{
            background-color: rgba(0,0,0,0.2); 
            margin: 50px auto;
            margin-bottom: 10%;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px black;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 500px;
            height:650px;
        }
        .formbox::before{
            background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("bg6.png");
            width: 100vw;
            height: 100vh;
            background-size: cover;
            content: "";
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            display: block;
            
        }
        .formbox .details{
            margin: 10px 0px;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            font-size: 18px;
            font-family: 'Courier New', Courier, monospace;
        }
        .formbox h1{
            padding: bottom 30px;
            text-align: center;
        }
        input[type='submit']{
            background-color: blue;
            color: aliceblue;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            padding: 10px;
            margin: 20px 0px;
        }
        p{
            font-size: large;
        }
        a{
            color: aquamarine;
        }
    </style>
</head>
<body>
    <div class="formbox">
    <h1>REGISTRATION</h1>
    <form action="#" method="POST">
        <input class="details" type="text" name="uname" placeholder="Enter your Full Name" required>
        <input class="details" type="email" name="email" placeholder="Enter your Email Address" required>
        <input class="details" type="text" name="phone" placeholder="Enter your Phone Number" required>
        <input class="details" type="text" name="dob" placeholder="Enter your Date Of Birth" onfocus="(this.type='Date')" onblur="(this.type='text')" required>
        <input class="details" type="text" name="address" placeholder="Enter your Address" required>
        <input class="details" type="password" name="password" placeholder="Enter your Password" required>
        <input class="details" type="password" name="password2" placeholder="Confirm your Password" required>
        <input type="checkbox" name="tnc" value="yes">Agree to <a href="tnc.html">Terms and Conditions</a><br>
        <input type="submit" value="REGISTER" name="login">
    </form>
    <br><br><br>
    </div>
</body>
</html>