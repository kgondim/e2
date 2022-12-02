<?php

namespace App\Commands;


class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function fresh () {
        $this->migrate();
        $this->seedGuesses();
        $this->seedResults();
  
    }

    public function migrate() {
        $this->app->db()->createTable('guesses', [  
            'guess' => 'int'
        
        ]);

        $this->app->db()->createTable('results', [
            'round' => 'int',
            'win' => 'tinyint(1)',
        ]);
        
        dump('Migration complete; check the database for your new tables.');
        dump('You ran the migrate command');
    }

    public function seedGuesses()
    {
        for ($i = 0; $i < 10; $i++) {
            $guess = [
                'guess' => rand(2, 12),
            ];
        }
    }

    public function seedResults()
    {
        $number = 1;
        # Use a loop to create 10 results
        for ($i = 0; $i < 10; $i++) {
            
            $result = [
                'round' => $number++,
                'win' => ($i % 2 == 0) ? 1 : 0, # Alternate between boolean 1 and 0,
            ];

            # Insert result
            $this->app->db()->insert('results', $result);

            dump('results table has been seeded');
        }
    }


}