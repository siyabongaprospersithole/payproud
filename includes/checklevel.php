<?php



function cchecklevel($username){
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
                
     


       

   
          if($count < 3){
            return "2";
          }else{
            if($count2 < 3){
              return "2";
            }else{
              if($count3 < 3){
                return "2";
              }else{
                  if($count < 12){
            return "3";
          }else{
            if($count2 < 12){
              return "3";
            }else{
              if($count3 < 12){
                return "3";
              }else{
                 if($count < 39){
            return "4";
          }else{
            if($count2 < 39){
              return "4";
            }else{
              if($count3 < 39){
                return "4";
              }else{
                 if($count < 120){
            return "5";
          }else{
            if($count2 < 120){
              return "5";
            }else{
              if($count3 < 120){
                return "5";
              }else{
                 if($count < 363){
            return "6";
          }else{
            if($count2 < 363){
              return "6";
            }else{
              if($count3 < 363){
                return "6";
              }else{
              
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
          }
              }
            }
          }
    
            
      
         
          
        
         

        
     
  
  
    }

?>