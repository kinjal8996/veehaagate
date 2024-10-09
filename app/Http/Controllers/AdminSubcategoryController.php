<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminSubcategoryController extends Controller
{
    public function adminsubcategory(Request $request)
    {
        $search=$request['search']??"";
        if($search!=""){
            // $subcategory=Subcategory::where('name',"LIKE","%$search%")->get();
            $subcategory = Subcategory::with('category')
            ->where('name', 'LIKE', "%$search%")
            ->get();
        }
        else{
            // $subcategory=Subcategory::all();
            $subcategory = Subcategory::with('category')->get();
        }


        $data=compact('subcategory', 'search');
        return view('AdminPanel.subcategory')->with($data);
    }

    public function adminsubcategoryform()
    {
       $subcategory = new Subcategory();
       $categories = Category::all();
       $url=url('/Adminsubcategoryform2');
       $title="Subcategory Detail Form";
       $data=compact('url','title','subcategory','categories');

       return view('AdminPanel.subcategoryform')->with($data);
   }

   public function subcategoryform(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category' => 'required|exists:category,category_id',
            'name' => 'required|string',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $subcategory= new Subcategory();
        $subcategory->category_id=$request->input('category');
        $subcategory->name=$request->input('name');

        $subcategory->save();

        return redirect('/Adminsubcategory');

    }

    public function subcategorytrash()
    {
        $subcategory = Subcategory::onlyTrashed()->with('category')->get();
        $data=compact('subcategory');

        return view ("AdminPanel.subcategorytrash")->with($data);
    }

    public function subcategoryedit($id)
    {
        $subcategory=Subcategory::find($id);
        if(is_null($subcategory)){
            return redirect('/Adminsubcategory');
        }
        else
        {
            $categories = Category::all();
            $url=url('/subcategory/update')."/".$id;
            $title="Update Subcategory Details";
            $data=compact('subcategory','url','title', 'categories');
            return view('AdminPanel.subcategoryform')->with($data);

        }

    }

    public function subcategoryupdate($id, Request $request)
    {


        $subcategory=Subcategory::find($id);
        $subcategory->category_id = $request->input('category');
        $subcategory->name=$request->input('name');

        $subcategory->save();

        return redirect('/Adminsubcategory');

    }

    public function subcategorydelete($id)
    {
        $subcategory=Subcategory::find($id);
        if(!is_null($subcategory)){
            $subcategory->delete();
        }
        return redirect('/Adminsubcategory');
    }

    public function subcategoryrestore($id)
    {
        $subcategory=Subcategory::withTrashed()->find($id);
        if(!is_null($subcategory)){
            $subcategory->restore();
        }
        return redirect('Adminsubcategory');
    }

    public function subcategoryforcedelete($id)
    {
        $subcategory=Subcategory::withTrashed()->find($id);
        if(!is_null($subcategory)){
            $subcategory->forceDelete();
        }
        return redirect()->back();
    }
}
