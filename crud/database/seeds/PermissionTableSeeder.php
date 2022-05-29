<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $permissions = [
          ['root' => 'manage-users', 'name' => 'Управление пользователями'],
          ['root' => 'create-user', 'name' => 'Создание пользователя'],
          ['root' => 'edit-user', 'name' => 'Редактирование пользователя'],
          ['root' => 'delete-user', 'name' => 'Удаление пользователя'],

          ['root' => 'manage-roles', 'name' => 'Управление ролями пользователей'],
          ['root' => 'create-role', 'name' => 'Создание роли пользователя'],
          ['root' => 'edit-role', 'name' => 'Редактирование роли пользователя'],
          ['root' => 'delete-role', 'name' => 'Удаление роли пользователя'],

          ['root' => 'assign-role', 'name' => 'Назначение роли для пользователя'],
          ['root' => 'assign-permission', 'name' => 'Назначение права для пользователя'],

          ['admin' => 'manage-products', 'name' => 'Управління продуктами'],
          ['admin' => 'create-product', 'name' => 'Створення продукта'],
          ['admin' => 'edit-product', 'name' => 'Редагування карточки продукта'],
          ['admin' => 'publish-product', 'name' => 'Публікація продукта в крамниці'],
          ['admin' => 'delete-product', 'name' => 'Видалення карточки продукта'],

          // ['slug' => 'manage-categories', 'name' => 'Управление категориями блога'],
          // ['slug' => 'create-category', 'name' => 'Создание категории блога'],
          // ['slug' => 'edit-category', 'name' => 'Редактирование категории блога'],
          // ['slug' => 'delete-category', 'name' => 'Удаление категории блога'],
          //
          // ['slug' => 'manage-comments', 'name' => 'Управление комментариями блога'],
          // ['slug' => 'create-comment', 'name' => 'Создание комментария к посту'],
          // ['slug' => 'edit-comment', 'name' => 'Редактирование комментария к посту'],
          // ['slug' => 'publish-comment', 'name' => 'Публикация комментария к посту'],
          // ['slug' => 'delete-comment', 'name' => 'Удаление комментария к посту'],
      ];
      foreach ($permissions as $item) {
          $permission = new App\Permission();
          $permission->name = $item['name'];
          $permission->slug = $item['slug'];
          $permission->save();
      }
    }
}
