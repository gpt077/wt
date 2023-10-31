<?php 
$subject_marks = array('English' => 56, 'Hindi' => 76,'Marathi' => 57,'Maths' => 57,'IT' => 78);
$total_marks =	$subject_marks['English']+
				$subject_marks['Hindi']+
				$subject_marks['Marathi']+
				$subject_marks['Maths'];
				$subject_marks['IT'];
				
echo 'English: '.$subject_marks['English'].'<br>';
echo 'Hindi: '.$subject_marks['Hindi'].'<br>';
echo 'Marathi: '.$subject_marks['Marathi'].'<br>';
echo 'Maths: '.$subject_marks['Maths'].'<br>';
echo 'IT: '.$subject_marks['IT'].'<br>';

echo '<br><br>Total: '.$total_marks;
$percentage = $total_marks/5;

echo '<br>Percentage: '.$percentage;


?>