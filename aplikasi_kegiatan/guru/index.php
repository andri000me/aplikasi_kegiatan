<!DOCTYPE html>
<html>
<head>
	<title>Daily Activity</title>
</head>
    <form method="post">
        <body>
            <div class="menu">
                <ul>
                	<li><a href="../master/rekap.php">Rekapitulasi</a></li>
                </ul>
            </div>
                <?php
                        switch (@$_GET['menu']) {
                            case 'rekap':
                                include '../master/rekap.php';
                                break;

                            default:
                                include '../master/rekap.php';
                                break;
                        }
                    ?>
                    
        </body>
    </form>
    <style type="text/css">
body{
    font-family: sans-serif;
    background: #5dd39e;
}
table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #5dd39e;
  border: #ccc 1px solid;
}
 
table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #5dd39e;
}
 
table th:first-child{  
  border-left:none;  
}
table tr {
  text-align: center;
  padding-left: 20px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}
 
table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
 
table tr:last-child td {
  border-bottom: 0;
}
 
table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
 
table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
.menu ul {
    overflow: hidden;
    color: #0489B1;
    list-style: none;
    padding: 0;
    width: 100%;
    margin-bottom: 50px;
    background: #bce784;
    -webkit-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.55);
    -moz-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.55);
    box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.55);
}

.menu ul li {
    margin: 0;
    float: left;
}
.menu li a{
    display: inline-block;
    color: black;
    text-align: center;
    padding: 20px 20px;
    text-decoration: none;
    font-size: 15pt;
    
}
.menu li a:hover {
    text-decoration: underline;
    background: #348aa7;
    transition: 1s;
}
</style>
</html>