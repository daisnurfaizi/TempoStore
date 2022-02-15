<?php

namespace App\Repository;

use App\Models\Category;
use Throwable;

class CategoryRepository
{
    public function save($request)
    {
        try {
            $category = Category::create([
                'Category_name' => $request->Category_name
            ]);

            if ($category) {
                return "success";
            } else {
                return "failed";
            }
        } catch (Throwable $e) {
            return 'failed';
        }
    }

    public function update($request)
    {
        $categoryupdate = Category::where('id', $request->id)->update(['Category_name' => $request->Category_name]);
        if ($categoryupdate) {
            return "success";
        } else {
            return "failed";
        }
    }

    public function delete($request)
    {
        $categorydelete = Category::where('id', $request->id)->delete();
        if ($categorydelete) {
            return "success";
        } else {
            return "failed";
        }
    }
}
