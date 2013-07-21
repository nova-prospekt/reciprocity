<?php
session_start();

	if(!isset($_SESSION['user_name'])){
		header('location: login.php');
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include('left-nav.php');?> <!--left-menu -->

<div class="page">
    
    <div class="page-nav">
    	<!--<ul>
        	<li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
            <li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
            <li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
        </ul>-->
        <div class="clear"></div> <!--clear div -->

    </div> <!--page nav -->
    
    <div class="box1">
    	<h1> Table Heading</h1>
        <table width="100%" border="0" cellspacing="0" cellpadding="5" class="grid">
          <tr>
            <th scope="col" align="center">&nbsp;&nbsp;<input name="" type="checkbox" value="" /></th>
            <th scope="col">Column 1</th>
            <th scope="col">Column 2</th>
            <th scope="col">Column 3</th>
            <th scope="col">Column 4</th>
            <th scope="col">Column 5</th>
          </tr>
          <tr bgcolor="#f3f3f3">
            <td align="center">&nbsp;&nbsp;<input name="" type="checkbox" value="" /></td>
            <td>Lorem ipsum dolor</td>
            <td class="green">Lorem ipsum</td>
            <td>Lorem ipsum dolor</td>
            <td>Lorem ipsum dolor</td>
            <td align="center">
            <a href="#"><img src="images/edit-icon.png" width="16" height="16" alt="Edit Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/del-icon.png" width="16" height="16" alt="Del Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/setting-icon.png" width="16" height="16" alt="Setting Icon" /></a>
            </td>
          </tr>
          <tr>
            <td align="center">&nbsp;&nbsp;<input name="" type="checkbox" value="" /></td>
            <td>Lorem ipsum dolor</td>
            <td class="green">Lorem ipsum</td>
            <td>Lorem ipsum dolor</td>
            <td>Lorem ipsum dolor</td>
            <td align="center">
            <a href="#"><img src="images/edit-icon.png" width="16" height="16" alt="Edit Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/del-icon.png" width="16" height="16" alt="Del Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/setting-icon.png" width="16" height="16" alt="Setting Icon" /></a>
            </td>
          </tr>
          <tr bgcolor="#f3f3f3">
            <td align="center">&nbsp;&nbsp;<input name="" type="checkbox" value="" /></td>
            <td>Lorem ipsum dolor</td>
            <td class="green">Lorem ipsum</td>
            <td>Lorem ipsum dolor</td>
            <td>Lorem ipsum dolor</td>
            <td align="center">
            <a href="#"><img src="images/edit-icon.png" width="16" height="16" alt="Edit Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/del-icon.png" width="16" height="16" alt="Del Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/setting-icon.png" width="16" height="16" alt="Setting Icon" /></a>
            </td>
          </tr>
          <tr>
            <td align="center">&nbsp;&nbsp;<input name="" type="checkbox" value="" /></td>
            <td>Lorem ipsum dolor</td>
            <td class="green">Lorem ipsum</td>
            <td>Lorem ipsum dolor</td>
            <td>Lorem ipsum dolor</td>
            <td align="center">
            <a href="#"><img src="images/edit-icon.png" width="16" height="16" alt="Edit Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/del-icon.png" width="16" height="16" alt="Del Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/setting-icon.png" width="16" height="16" alt="Setting Icon" /></a>
            </td>
          </tr>
          <tr bgcolor="#f3f3f3">
            <td align="center">&nbsp;&nbsp;<input name="" type="checkbox" value="" /></td>
            <td>Lorem ipsum dolor</td>
            <td class="green">Lorem ipsum</td>
            <td>Lorem ipsum dolor</td>
            <td>Lorem ipsum dolor</td>
            <td align="center">
            <a href="#"><img src="images/edit-icon.png" width="16" height="16" alt="Edit Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/del-icon.png" width="16" height="16" alt="Del Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/setting-icon.png" width="16" height="16" alt="Setting Icon" /></a>
            </td>
          </tr>
          <tr>
            <td align="center">&nbsp;&nbsp;<input name="" type="checkbox" value="" /></td>
            <td>Lorem ipsum dolor</td>
            <td class="green">Lorem ipsum</td>
            <td>Lorem ipsum dolor</td>
            <td>Lorem ipsum dolor</td>
            <td align="center">
            <a href="#"><img src="images/edit-icon.png" width="16" height="16" alt="Edit Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/del-icon.png" width="16" height="16" alt="Del Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/setting-icon.png" width="16" height="16" alt="Setting Icon" /></a>
            </td>
          </tr>
          <tr bgcolor="#f3f3f3">
            <td align="center">&nbsp;&nbsp;<input name="" type="checkbox" value="" /></td>
            <td>Lorem ipsum dolor</td>
            <td class="green">Lorem ipsum</td>
            <td>Lorem ipsum dolor</td>
            <td>Lorem ipsum dolor</td>
            <td align="center">
            <a href="#"><img src="images/edit-icon.png" width="16" height="16" alt="Edit Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/del-icon.png" width="16" height="16" alt="Del Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/setting-icon.png" width="16" height="16" alt="Setting Icon" /></a>
            </td>
          </tr>
          <tr>
            <td align="center">&nbsp;&nbsp;<input name="" type="checkbox" value="" /></td>
            <td>Lorem ipsum dolor</td>
            <td class="green">Lorem ipsum</td>
            <td>Lorem ipsum dolor</td>
            <td>Lorem ipsum dolor</td>
            <td align="center">
            <a href="#"><img src="images/edit-icon.png" width="16" height="16" alt="Edit Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/del-icon.png" width="16" height="16" alt="Del Icon" /></a>
            &nbsp;
            <a href="#"><img src="images/setting-icon.png" width="16" height="16" alt="Setting Icon" /></a>
            </td>
          </tr>
	        </table>
	<input type="submit" class="btn1" value="Apply to selected" />
    </div><!--box1 -->
    
    <div class="box2">
    	<h1> Box Heading</h1>
        
      <p class="grey2 font13">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
  </div><!--box 2 -->
    
    <p>
        <label class="font10">A small description of the field</label>
        <input type="text" value="Small input feild" class="txt-feild-small" />
    </p>
    <br />
    <p>
        <label class="font11">for error just add a class red-border</label>
        <input type="text" value="Small input feild" class="txt-feild-small red-border" />
    </p>
    <br />
    <p><input type="text" value="Medium input feild" class="txt-feild-medium" /></p>
    <br />
    <p><input type="text" value="Large input feild" class="txt-feild-large" /></p>
    <br />
    <select name="" size="1" class="dd1">
      <option>Line 1</option>
      <option>Line 2</option>
    </select>

    <br />
    <br />
    <input type="submit" class="btn1" value="Submit Button " />
    <br />
    <input type="submit" class="btn2" value="Submit Button " />
    <br />
    <a href="#" class="btn1">Href Button</a>
    <br />
    <a href="#" class="btn2">Href Button</a>
    <br />

    <div class="sucess">
    <span> SUCCESS! </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</div><!-- sucess -->

	<div class="error">
    <span> ERROR! </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</div><!-- error -->

	<div class="warning">
    <span> WARNING! </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</div><!-- warning -->

	<div class="information">
    <span> INFORMATION! </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</div><!-- information -->

    
    <div class="footer">
    &copy; Copyright 2011 Admin panel | Powered by: <a href="#" class="green"> CROSSBIZ</a>
    </div><!--footer -->
</div><!--page -->

<div class="clear"></div> <!--clear div -->

</body>
</html>
