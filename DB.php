<?php
include 'linking/joint.php';

?>




<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="css/DB.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  
  <div class="sidebar">
    <div class="logo-details">
 <img src="images/logo8.png" alt="" height="60px" width="60px">
      <span class="logo_name">Crystal Lands & Houses</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
           
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
           
            <span class="links_name" >  Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            
            <span class="links_name" >  Lands</span>
          </a>
        </li>
        <li>
          <a href="#">
         
            <span class="links_name" >  Houses & Appartments</span>
          </a>
        </li>
        <li>
          <a href="Design a house_Registered.php">
            
            <span class="links_name" >  Design a house</span>
          </a>
        </li>
        <li>
          <a href="#">
            
            <span class="links_name" >  News</span>
          </a>
        </li>
        <li>
          <a href="#">
           
            <span class="links_name" >About Us</span>
          </a>
        </li>
        <li>
         

        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>





  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        
        <span class="dashboard">Dashboard</span>
      </div>
     
      <div class="profile-details">
        <img src="images/av.jpeg" alt="">
        <span class="admin_name">User_Name</span>
       
      </div>
    </nav>


    
    <div class="home-content">
      <div class="overview-boxes">
 

       <table align="center" border="3px" style="width: 300px; line-height: 30px; color : black;" >
           <tr>
               <th colspan="3"><h3>Messages</h3></th>
           </tr>
           <tr>
               <th> Name </th>
               <th>Email</th>
               <th>Subject</th>
            </tr>
            <?php
             $sql = "SELECT * FROM detail";
             $result = mysqli_query($conn, $sql);
             if(mysqli_num_rows($result)>0){
               while($row = mysqli_fetch_assoc($result)){
             

               ?>
                 <tr>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['subject'];?></td>
                 </tr>
               
<?php
  }
             } else{
               echo "No messages...!";
             }



            ?>
       </table>

     
      </div>
    </div>
  </section>



</body>
</html>
