<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$English = 77 ;
$Urdu = 28 ; 
$Sindhi = 26 ;
$Maths = 66 ;
$Biology = 28 ; 

$Total = $English + $Urdu + $Sindhi + $Maths + $Biology ;

$Percentage = $Total * 100 / 500;

if( $English >= 25){
    
    if ( $Urdu >= 25 ){

       if( $Sindhi >= 25 ){
            
            if( $Maths >= 25 ){

                if ( $Biology >= 25){  
                    
                    echo " English ".$English . "<br> Urdu  " . $Urdu ."<br> Sindhi " .
                     $Sindhi ."<br> Maths ". $Maths . "<br> Biology " . $Biology ."<br>" ;
                    

                    $Total = $English + $Urdu + $Sindhi + $Maths + $Biology ;

                    Echo " Total Marks " . $Total;

                      $Percentage = $Total * 100 / 500;

                      echo "<br> Your Percentage is ".$Percentage ."<br>";

                      if( $Percentage >= 80 ){
   
                        echo " Your Grade is A+ " ;
                      
                      }
                      
                      else if( $Percentage >= 70 ){
                         
                          echo " Your Grade is A " ;
                        
                        }
                      
                        else if( $Percentage >= 60 ){
                         
                          echo " Your Grade is B " ;
                        
                        }
                      
                        else if( $Percentage >= 50 ){
                         
                          echo " Your Grade is C " ;
                        
                        }

                        else if( $Percentage >= 40 ){
   
                            echo " Your Grade is D " ;
                          
                          }
                          
                          else {
                              echo " Sorry You Are Failed ! " ;
                          }

    
                }
                else {

                    echo " Failed in Biology !" ;
                }

            } 
            else {

            echo "Failed in Maths !" ;

            }

             
         }
       else{

        echo "Failed in Sindhi !" ;

       }

    }

  else {

    echo "Failed in Urdu ! " ;
  }

}
else {
    
   Echo " Failed in English ! " ;

}
?> 
</body>
</html>