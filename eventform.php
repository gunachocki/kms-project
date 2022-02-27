<!DOCTYPE html>
<html>
<head>
    <title>EVENT FORM</title>
    <style type="text/css">
        table{
            background-color: darkblue;
            position: absolute;
            left: 400px;
            top: 100px;
            padding: 60px;
            color: yellow;
        }
        td{
            padding: 10px;
            font-style: italic;
            font-weight: bolder;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: yellow;
        }
        button{
            padding: 10px;
            background-color: red;
            color: yellow;
            font-weight: bolder;
        }
    </style>
    <script>
        function loadFunction() {
            alert("register sucessfully");
            window.location.href = "http://www.abc.com";
        }
    </script>
</head>
<body style="background-image: url(https://wallpaperaccess.com/full/552032.jpg);">
    <form>
        <table>
            <tr>
                <td>FIRST NAME:</td>
                <td><input type="text" id="name"></td>
            </tr>
            <tr>
                <td>LAST NAME:</td>
                <td><input type="text" id="uname"></td>
            </tr>
            <tr>
                <td>AGE:</td>
                <td><input type="number" id="pass"></td>
            </tr>
            <tr>
                <td>SCHOOL/COLLEGE:</td>
                <td><input type="text" id="rpass"></td>
            </tr>
            <tr>
                <td>EMAIL:</td>
                <td><input type="email" id="email"></td>
            </tr>
            <tr>
                <td>PHONE NUMBER:</td>
                <td><input type="number" id="pno"></td>
            </tr>
            <tr>
                <td>TEAM or INDIVIDUAL:</td>
                <td><input type="radio" id="pno">Team
                <input type="radio" id="pno">Individual</td>
            </tr>
            <tr>
                <td>No. OF MEMBERS:</td>
                <td><input type="number" id="pno"></td>
            </tr>
            <tr>
                <td>There By Agreeing For Our Terms And Conditions....</td>
                <td><input type="checkbox" id="agr"></td>
            </tr>
            <tr>
                <td>Payment Details Are Mentioned Below....</td>
                <td><input type="checkbox" id="agr" checked>Registration Fee of $100.</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" id="agr">Security Deposit Fee of $50.</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SUBMIT" onclick="loadFunction()"></td>
            </tr>
        </table>
    </form>
</body>
</html>

