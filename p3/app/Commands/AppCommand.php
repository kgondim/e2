<?php

namespace App\Commands;
use Faker\Factory;

class AppCommand extends Command
{
    
    public function fresh () {
        $this->migrate();
        $this->seedResults();
  
    }

    public function migrate() {
       
        $this->app->db()->createTable('results', [
            'win' => 'tinyint(1)',
            'timestamp' => 'timestamp',
        ]);
        
        dump('Migration complete; check the database for your new tables.');
    }


    public function seedResults()
    {
        $faker = Factory::create();
        
        $number = 1;
        # Use a loop to create 10 results
        for ($i = 10; $i > 0; $i--) {
            
            $result = [
                'win' => ($i % 2 == 0) ? 1 : 0, # Alternate between boolean 1 and 0,
                'timestamp' => $faker->dateTimeBetween('-'.$i.' days', '-'.$i.' days')->format('Y-m-d H:i:s')
            ]; 

            # Insert result
            $this->app->db()->insert('results', $result);

            dump('results table has been seeded');
        }
    }


}