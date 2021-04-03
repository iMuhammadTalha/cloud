<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Cloud Computing</title>

    <script>
        //function that display value
        function dis(val)
        {
            document.getElementById("result").value+=val
        }

        //function that evaluates the digit and return result
        /*
        function solve()
        {
            let x = document.getElementById("result").value
            let y = eval(x)
            document.getElementById("result").value = y
        }
          */
        //function that clear the display
        function clr()
        {
            document.getElementById("result").value = ""
        }
    </script>

	<style type="text/css">

        .title{
            margin-bottom: 10px;
            text-align:center;
            width: 210px;
            color:green;
            border: solid black 2px;
        }

        input[type="button"]
        {
            background-color:green;
            color: white;
            border: solid black 2px;
            width:100%
        }

        input[type="text"]
        {
            background-color:white;
            border: solid black 2px;
            width:97%
        }

        button
        {
            background-color:green;
            color: white;
            border: solid black 2px;
            width:100%
        }

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Cloud Computing!</h1>

	<div id="body" >

        <div class = title > Calculator</div>
        <form action="http://localhost:8080/cloud/index.php/Welcome/calculateSolution" method="post">

            <table border="1">
                <tr>
<!--                    placeholder="--><?php //echo $solution ?><!--"-->
                    <td colspan="3"><input type="text" name="result" value="<?php echo $solution ?>" id="result" /></td>
                    <!-- clr() function will call clr to clear all value -->
                    <td><input type="button" value="c" onclick="clr()"/> </td>
                </tr>
                <tr>
                    <!-- create button and assign value to each button -->
                    <!-- dis("1") will call function dis to display value -->
                    <td><input type="button" value="1" onclick="dis('1')"/> </td>
                    <td><input type="button" value="2" onclick="dis('2')"/> </td>
                    <td><input type="button" value="3" onclick="dis('3')"/> </td>
                    <td><input type="button" value="/" onclick="dis('/')"/> </td>
                </tr>
                <tr>
                    <td><input type="button" value="4" onclick="dis('4')"/> </td>
                    <td><input type="button" value="5" onclick="dis('5')"/> </td>
                    <td><input type="button" value="6" onclick="dis('6')"/> </td>
                    <td><input type="button" value="-" onclick="dis('-')"/> </td>
                </tr>
                <tr>
                    <td><input type="button" value="7" onclick="dis('7')"/> </td>
                    <td><input type="button" value="8" onclick="dis('8')"/> </td>
                    <td><input type="button" value="9" onclick="dis('9')"/> </td>
                    <td><input type="button" value="+" onclick="dis('+')"/> </td>
                </tr>
                <tr>
                    <td><input type="button" value="." onclick="dis('.')"/> </td>
                    <td><input type="button" value="0" onclick="dis('0')"/> </td>
                    <!-- solve function call function solve to evaluate value -->
    <!--                <td><input type="button" value="=" onclick="solve()"/> </td>-->
                    <td><button type="submit">=</button></td>
                    <td><input type="button" value="*" onclick="dis('*')"/> </td>
                </tr>
            </table>

        </form>

	</div>

	<p class="footer">Developed by: <strong>Muhammad Talha, Aruba Kousar, Waqas Mustafa, Muazam Shafique</strong></p>
</div>

</body>
</html>