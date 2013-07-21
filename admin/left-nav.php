<div class="left-menu">
	<div class="logo">
    	<a href="#"></a>
        <a href="#"><img src="images/admin-panel-txt.png" width="206" height="33" alt="Admin panel" /></a>
    </div><!--logo -->
    <div align="center">
    	<a href="logout.php" class="btn1">Logout </a>
        </div> <!--sign out -->
        
    <div class="msg1"> Welcome , <span class="light-grey"> <?php echo $_SESSION['user_name']; ?></span></div><!--massage 1  -->
     
    <div class="nav">
    	<ul>
        <li> <a href="page.php"> Dashboard </a> 
			<!--<ul>
              <li> <a href="letterhead.php" class=""> Company Letter head  </a> </li>
			</ul>-->
		</li>
        <li> 
        	<a href="#" class="selected"> Select Option </a>
        		<ul>
             	   <li> <a href="page.php" class=""> Users  </a> </li>
                	<li> <a href="category.php" class=""> Categories  </a> </li>
					<li> <a href="item.php" class=""> All Items  </a> </li>
                    <li> <a href="donate_item.php" class=""> Donate Items  </a> </li>
                     <li> <a href="unique_item.php" class=""> Unique Items  </a> </li>
                  <!--  <li> <a href="claim_item.php" class=""> Claimed Items  </a> </li>-->
					<li> <a href="#" class=""> Orders  </a> </li>
                    <li> <a href="condition.php"> Conditions  </a> </li>
                   
                </ul><!--secound lavel  -->
        </li>
        <!--<li> <a href="#"> Pages </a> </li>
        <li> <a href="#"> Image Gallery </a> </li>
        <li> <a href="#"> Events  </a> </li>-->
        <li> <a href="#"> Settings </a> </li>
        </ul>
    </div><!--nav -->
    <div class="clear"></div> <!--clear div -->
</div>