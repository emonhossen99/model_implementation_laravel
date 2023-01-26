<?php

// all model command in laravel 

// 1.Make Model 
  php artisan make:model Model Name

// 2. Make Controller 
  php artisan make:controller Controller Name

// 3. Make Resource  Controller 
  php artisan make:controller Controller Name --resource 

// 4. Get Resource  Controller All Route
  php artisan route:list

// 5.Create Table
  php artisan make:migration create_TableName_table

// 6. Created Table Inset in Database
  php artisan migrate

// 7. Create seeder 
  php artisan make:seeder seeder Name

// 8. Add Data In Using Seeder
 php artisan db:seed --class= seeder Class Name
// add example
 Db:table('department_table')->insert(
  [
   'department_name' => 'Laravel',
   'department_code' => '001'
  ]
  );

// 9. Seeder Inserted Data Delete 
  php artisan migrate:fresh --seed

// 10. update column in migrate Table
  php artisan migrate:rollback
  php artisan migrate

// 11. Crate Factory
  php artisan make:factory Factory Name

// 12. Data insert In Factory
   **This use in Factory follder**
      use App\Models\Contact;
      protected $model = Model Name::class;
      "name" => $this->faker->name(),
      "email" => $this->faker->email() 
 **This use in Factory follder**
    use App\Models\Contact;
    Contact::factory()->count(20)->create();
	php artisan db:seed class=seed class Name

// 13. all history in my project
  php artisan migrate:status

// 14. roll back in steps
  php artisan migrate:rollback --step=1
  
// 15. eidt coluam and update
  php artisan migrate:refreah
  
// 16. all table delete
  php artisan migrate:reset
?>