<?php



function checkdownliners($username,$level){

//$con = mysqli_connect("localhost","triangle_siya","1Siyabonga.","triangle_break");
$con = mysqli_connect("localhost","root","","break1");
    $co = 0;
     $count = 0;
            $count2 = 0;
            $count3 = 0;
              $getsponsor = mysqli_query($con,"select * from generalusers where sponsor = '$username' and Level != ''");
              while($fetchsponsor = mysqli_fetch_array($getsponsor)){
                   $spouser = $fetchsponsor['username'];
                   $sponsorname = $fetchsponsor['name'];
                   $sponsorsurname = $fetchsponsor['surname'];
                   $sponsorlevel = $fetchsponsor['Level'];
                   $payed = "";
                     $co++;
                     if($co == 1){

                          $fetch1 = mysqli_query($con,"select * from generalusers where sponsor = '$spouser' and Level != ''");
                          if(mysqli_num_rows($fetch1) > 0){
                            $count += mysqli_num_rows($fetch1);
                            while($get1 = mysqli_fetch_array($fetch1)){
                              $down2 = $get1['username'];

                              $fetch2 = mysqli_query($con,"select * from generalusers where sponsor = '$down2' and Level != ''");
                                 if(mysqli_num_rows($fetch2) > 0){
                                  $count += mysqli_num_rows($fetch2);
                                  while($get2 = mysqli_fetch_array($fetch2)){
                                   $down3 = $get2['username'];

                                         $fetch3 = mysqli_query($con,"select * from generalusers where sponsor = '$down3' and Level != ''");
                                          if(mysqli_num_rows($fetch3) > 0){
                                           $count += mysqli_num_rows($fetch3);
                                           while($get3 = mysqli_fetch_array($fetch3)){
                                             $down4 = $get3['username'];

                                              $fetch4 = mysqli_query($con,"select * from generalusers where sponsor = '$down4' and Level != ''");
                                               if(mysqli_num_rows($fetch4) > 0){
                                               $count += mysqli_num_rows($fetch4);
                                               while($get4 = mysqli_fetch_array($fetch4)){
                                               $down5 = $get4['username'];

                                                   $fetch6 = mysqli_query($con,"select * from generalusers where sponsor = '$down5' and Level != ''");
                                                     if(mysqli_num_rows($fetch6) > 0){
                                                     $count += mysqli_num_rows($fetch6);
                                                     
                                               }
                                             }
                                           }
                                         }
                                      }
                                   }
                                }
                            }
                          }
                     
                     } else if($co == 2){
                        $fetch1 = mysqli_query($con,"select * from generalusers where sponsor = '$spouser' and Level != ''");
                          if(mysqli_num_rows($fetch1) > 0){
                            $count2 += mysqli_num_rows($fetch1);
                            while($get1 = mysqli_fetch_array($fetch1)){
                              $down2 = $get1['username'];
                              $fetch2 = mysqli_query($con,"select * from generalusers where sponsor = '$down2' and Level != ''");
                                 if(mysqli_num_rows($fetch2) > 0){
                                  $count2 += mysqli_num_rows($fetch2);
                                  while($get2 = mysqli_fetch_array($fetch2)){
                                   $down3 = $get2['username'];
                                         $fetch3 = mysqli_query($con,"select * from generalusers where sponsor = '$down3' and Level != ''");
                                          if(mysqli_num_rows($fetch3) > 0){
                                           $count2 += mysqli_num_rows($fetch3);
                                           while($get3 = mysqli_fetch_array($fetch3)){
                                             $down4 = $get3['username'];
                                              $fetch4 = mysqli_query($con,"select * from generalusers where sponsor = '$down4' and Level != ''");
                                               if(mysqli_num_rows($fetch4) > 0){
                                               $count2 += mysqli_num_rows($fetch4);
                                               while($get4 = mysqli_fetch_array($fetch4)){
                                               $down5 = $get4['username'];
                                                   $fetch6 = mysqli_query($con,"select * from generalusers where sponsor = '$down5' and Level != ''");
                                                     if(mysqli_num_rows($fetch6) > 0){
                                                     $count2 += mysqli_num_rows($fetch6);
                                                     
                                               }
                                             }
                                           }
                                         }
                                      }
                                   }
                                }
                            }
                          }
                   
                     }else if($co == 3){
                        $fetch1 = mysqli_query($con,"select * from generalusers where sponsor = '$spouser' and Level != ''");
                          if(mysqli_num_rows($fetch1) > 0){
                            $count3 += mysqli_num_rows($fetch1);
                            while($get1 = mysqli_fetch_array($fetch1)){
                              $down2 = $get1['username'];
                              $fetch2 = mysqli_query($con,"select * from generalusers where sponsor = '$down2' and Level != ''");
                                 if(mysqli_num_rows($fetch2) > 0){
                                  $count3 += mysqli_num_rows($fetch2);
                                  while($get2 = mysqli_fetch_array($fetch2)){
                                   $down3 = $get2['username'];
                                         $fetch3 = mysqli_query($con,"select * from generalusers where sponsor = '$down3' and Level != ''");
                                          if(mysqli_num_rows($fetch3) > 0){
                                           $count3 += mysqli_num_rows($fetch3);
                                           while($get3 = mysqli_fetch_array($fetch3)){
                                             $down4 = $get3['username'];
                                              $fetch4 = mysqli_query($con,"select * from generalusers where sponsor = '$down4' and Level != ''");
                                               if(mysqli_num_rows($fetch4) > 0){
                                               $count3 += mysqli_num_rows($fetch4);
                                               while($get4 = mysqli_fetch_array($fetch4)){
                                               $down5 = $get4['username'];
                                                   $fetch6 = mysqli_query($con,"select * from generalusers where sponsor = '$down5' and Level != ''");
                                                     if(mysqli_num_rows($fetch6) > 0){
                                                     $count3 += mysqli_num_rows($fetch6);
                                                     
                                               }
                                             }
                                           }
                                         }
                                      }
                                   }
                                }
                            }
                          }
                   
                     }
                 
                 }

     if($level == 1){
    	if($count >= 1 && $count2 >= 1 && $count3 >= 1){
    		return "yes";
    	}else{
    		header("Location: ../loftoffice/gh.php");
    	}
    }else if($level == 2){
    	if($count >= 3 && $count2 >= 3 && $count3 >= 3){
    		return "yes";
    	}else{
    		header("Location: ../loftoffice/gh.php");
    	}
    }else if($level == 3){
    	if($count >= 12 && $count2 >= 12 && $count3 >= 12){
    		return "yes";
    	}
    }else if($level == 4){
    	if($count >= 39 && $count2 >= 39 && $count3 >= 39){
    		return "yes";
    	}else{
    		header("Location: ../loftoffice/gh.php");
    	}
    }else if($level == 5){
    	if($count >= 120 && $count2 >= 120 && $count3 >= 120){
    		return "yes";
    	}else{
    		header("Location: ../loftoffice/gh.php");
    	}
    }
    else if($level == 6){
    	if($count >= 363 && $count2 >= 363 && $count3 >= 363){
    		echo "yes";
    	}else{
    		header("Location: ../loftoffice/gh.php");
    	}
    }
     else if($level == 7){
    	if($count >= 1092 && $count2 >= 1092 && $count3 >= 1092){
    		echo "yes";
    	}else{
    		header("Location: ../loftoffice/gh.php");
    	}
    }
    
  
    }

?>