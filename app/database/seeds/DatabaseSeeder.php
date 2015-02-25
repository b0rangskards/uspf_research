<?php

class DatabaseSeeder extends Seeder {

    private $tables = [
        'users'
    ];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $this->cleanDatabase();

		Eloquent::unguard();

        $this->seedTables();
    }

    public function seedTables()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::statement('SET sql_mode = NO_AUTO_VALUE_ON_ZERO');

        foreach ( $this->tables as $tableName ) {
            $tableSeeder = ucfirst($tableName) . 'TableSeeder';
            $this->call($tableSeeder);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

    public function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ( $this->tables as $tableName ) {
            DB::table($tableName)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
