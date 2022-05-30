<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
      $roles = [
          ['slug' => 'root', 'name' => 'Autor'],
          ['slug' => 'admin', 'name' => 'Admin'],
          ['slug' => 'user', 'name' => 'Visitor'],
      ];
      foreach ($roles as $item) {
          $role = new App\Role();
          $role->name = $item['Visitor'];
          $role->slug = $item['user'];
          $role->save();
      }
  }
    }
}
