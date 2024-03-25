<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCategorie;
class CategoryController extends Controller
{
    public function getcategory(){
        $category = EventCategorie::all();
        return response()->json($category);
    }
    public function getCategoryName(){
        $categories = EventCategorie::pluck('categoryname');
        return response()->json($categories);
    }
    public function getSpecificCategory(Request $request) {
        $id = $request->categoryId;
        $category = EventCategorie::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        return response()->json($category);
    }
    public function deleteCategory(Request $request)
    {
        $id = $request->categoryId;
        // Find the category by ID
        $category = EventCategorie::find($id);

        // Check if the category exists
        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        // Delete the category
        $category->delete();

        // Return success response
        return response()->json(['message' => 'Category deleted successfully']);
    }
    public function updateCategory(Request $request)
    {
        $id = $request->categoryId;
        // Find the category by ID
        $category = EventCategorie::find($id);

        // Check if the category exists
        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        // Update category fields
        $category->CategoryName = $request->input('categoryname');
        $category->CategoryDescription = $request->input('categorydescription');
        $category->CategoryStatus = $request->input('categorystatus');
        // Update other category fields as needed
        if ($request->hasFile('categoryimage')) {
            // Handle image upload
            $imageFileName = $request->file('categoryimage')->getClientOriginalName();
            $imagePath = $request->file('categoryimage')->move(public_path('assets/img/category'), $imageFileName);;

            $category->CategoryImage = $imagePath;
        }

        // Save the updated category
        $category->save();

        // Return success response
        return response()->json(['message' => 'Category updated successfully']);
    }
    public function create(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'categoryname' => 'required|string|max:255',
        'categorydescription' => 'required|string',
        'categorystatus' => 'required|in:active,inactive',
        'categoryimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size of 2MB
    ]);

    // Handle image upload
    $imageFileName = $request->file('categoryimage')->getClientOriginalName();
    $imagePath = $request->file('categoryimage')->move(public_path('assets/img/category'), $imageFileName);;

    // Create a new category instance
    $category = new EventCategorie();
    $category->CategoryName = $validatedData['categoryname'];
    $category->CategoryDescription = $validatedData['categorydescription'];
    $category->CategoryStatus = $validatedData['categorystatus'];
    $category->CategoryImage = $imageFileName; // Store only the image file name in the database

    // Save the new category
    $category->save();

    // Return success response
    return response()->json(['message' => 'Category created successfully']);
}

}
