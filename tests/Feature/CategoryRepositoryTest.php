<?php

namespace Tests\Feature;

use App\Repository\CategoryRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryRepositoryTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_saveCategory()
    {
        $object = [
            'Category_name' => 'tubler'
        ];
        $category = (object) $object;
        $repository = new CategoryRepository;
        $result = $repository->save($category);
        $this->assertEquals($result, 'success');
    }
    // public function test_updateCategory()
    // {
    //     $object = [
    //         'id' => 1,
    //         'Category_name' => 'Tumbler'
    //     ];
    //     $category = (object) $object;
    //     $repository = new CategoryRepository;
    //     $result = $repository->update($category);
    //     $this->assertEquals($result, 'success');
    // }
    // public function test_deleteCategory()
    // {
    //     $object = [
    //         'id' => 1,
    //         'Category_name' => 'Tumbler'
    //     ];
    //     $category = (object) $object;
    //     $repository = new CategoryRepository;
    //     $result = $repository->delete($category);
    //     $this->assertEquals($result, 'success');
    // }

    public function test_savefail()
    {
        $object = [
            'Categorys_name' => 'tubler'
        ];
        $category = (object) $object;
        $repository = new CategoryRepository;
        $result = $repository->save($category);
        $this->assertEquals($result, 'failed');
        // $this->expectExceptionObject($result);
    }
}
