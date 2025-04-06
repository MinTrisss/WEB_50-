<?php 
      $bmi_result=''
      if($_SERVER['REQUEST_METHOD']=== 'POST'){
            $weight=$_POST['weight'];
            $height=$_POST['height'];

            if($weight>0 and $weight <250 and $height>0 and $height<300){
                  $bmi=$weight/($height/100)**2
                  $bmi=round($bmi,2)

                  if ($bmi < 18.5) {
                        $status = "Underweight";
                    } elseif ($bmi < 24.9) {
                        $status = "Normal weight";
                    } elseif ($bmi < 29.9) {
                        $status = "Overweight";
                    } elseif ($bmi<35){
                        $status = "Obese";
                    }
                    else {
                        $status = "Extremely obese"
                    }

                  $bmi_result= "Your BMI: $bmi --> ($status)"
            }
      }
      else {
            $bmi_result = "Please enter valid weight and height!";
      }
?>