Please run following command for Database :-

php artisan migrate
php artisan db:seed --class=EmployeeRewardData
php artisan db:seed --class=EmployeeData

---------------------------------------------------------------------------------


a. Output all employee names whose FIRST NAME ends with letter N
----------------------------------------------------------------------------------

Answer :- SELECT first_name FROM `employees` WHERE first_name LIKE "%N";

-------------------------------------------------------------------------------------
b. Output Details of all Employees who get rewards below 5100
-----------------------------------------------------------------------------------

Answer :- SELECT * FROM `employees` INNER JOIN employee_rewards ON employees.Employee_id=employee_rewards.employee_ref_id WHERE amount < 5100;

-------------------------------------------------------------------------------------
c. Output details of all employees who joined on or before 25th Feb, 2019
-----------------------------------------------------------------------------------

Answer :- SELECT * FROM `employees` WHERE joining_date <= '2019-02-25';


-----------------------------------------------------------------------------------------
Curl For API

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1:8000/api/get_articals',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('country' => 'in','language' => 'hi','total_post' => '15','date' => '2023-10-10'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
