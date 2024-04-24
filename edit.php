<?php

include 'Connection.php';
$userId=$_GET['id'];
$query="SELECT * FROM child WHERE CId='$userId'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

$CName=$row['CName'];
$DoB=$row['DoB'];


$Problem=$row['Problem'];
$Address=$row['Address'];
$Country=$row['Country'];
$SId=$row['SId'];


?><!DOCTYPE Html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>Noursish A Life</title>
        <link rel="stylesheet" href="styleDonate.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    </head>
    <body>
        <div class="fullContainer banner" style="background-image: url('ChildReg.jpg'); background-attachment: fixed;background-size: cover;">

        
        
            <header >
                <div class="container">
                    <h3 class="website-name">NourishHope</h3>
                    
                <div class="logo">
                    <img src="love.png" />
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="sponsor.html">Sponsor A Child</a>
                            
                            
                        </li>
                        
                        <li>
                            <a href="DonateNow.html">Donate</a>
                          
                        </li>
                        <li>
                            <a href="#gallerySection">Gallery</a>
                        </li>
                        <li>
                            <a href="#aboutSection">About Us</a>
                        </li>
                        
                        <li>
                            <a href="JoinNow.html">Join Us</a>
                        </li>
                        <li>
                            <a href="Users.php">Users</a>
                        </li>
                    </ul>
                </nav>
            </div>
            </header>
          
            <div class="container">
                <h1 style="color:black; font-weight: 400;">Update</h1>
                
            </div>
            <main>
                <form action="update.php?id=<?php echo $userId;?>" method="post" enctype="multipart/form-data">
                    <h2 style="margin-left: auto; margin-right: auto;">Child Updation</h2>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $row['CName'];?>"  required>
        
             
                    
        
                    
                  
                       
                
                      <label for="Address">Address:</label>
                      <textarea rows="3" cols="2" name="Address"  required><?php echo $row['Address'];?> </textarea>
                   
                    <label for="Country">Country:</label>
                    <select id="Country" name="Country">
                        <option value="Afghanistan" <?php if ($Country == 'Afghanistan') echo 'selected'; ?>>Afghanistan</option>
                        <option value="Bangladesh" <?php if ($Country == 'Bangladesh') echo 'selected'; ?>>Bangladesh</option> 
                        <option value="Cambodia" <?php if ($Country == 'Cambodia') echo 'selected'; ?> >Cambodia</option>
                        <option value="India" <?php if ($Country == 'India') echo 'selected'; ?>>India</option>  
                        <option value="Indonesia" <?php if ($Country == 'Indonesia') echo 'selected'; ?>>Indonesia</option>
                        <option value="Myanmar" <?php if ($Country == 'Myanmar') echo 'selected'; ?>>Myanmar</option> 
                        <option value="Nepal" <?php if ($Country == 'Nepal') echo 'selected'; ?>>Nepal</option>
                        <option value="Pakistan" <?php if ($Country == 'Pakistan') echo 'selected'; ?>>Pakistan</option> </select>
                        
                   <label for="Problems">Problems:</label>
                   <textarea rows="3" cols="2" name="Problems"   required><?php echo $row['Problem'];?></textarea>
                   <label for="SId">SId:</label>
                    <input type="text" id="SId" name="SId" value="<?php echo $row['SId'];?>"  required>
                  
        
                    <input type="submit" value="Update" name="Update">
                </form>
            </main>
        </div>
            
           
            </body>
            </html>