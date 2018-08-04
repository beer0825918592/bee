<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User as UserMod;
use App\Model\Shop as ShopMod;
use App\Model\Product as ProductMod;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         /* return view('test')
          ->with('name', 'My Name')
          ->with('email','test@gmail.com');
          */
        /*    $data = [
            'name' => 'My Name',
            'surname' => 'My SurName',
            'email' => ' email@gmail.com'
        ];
        
         $item = [
            'item1' => 'My Value1',
            'item2' => 'My Value2'
        ];

        $results = [
            'data' => $data,
            'item' => $item
        ];

        return view('test', $results);*/
   /*  $mods = UserMod::all();
        return view('test', compact('mods'));*/
       /*  $data = [
           'name' => 'My Name',
           'surname' => 'My SurName',
           'email' => 'myemail@gmail.com'
       ];

        $user = UserMod::find(1);
        $mods = UserMod::all();

        return view('test', compact('data', 'user', 'mods'));*/
   // return view ('admin.layouts.template');
       // return view('admin.user.lists');

   $mods = UserMod::paginate(10);
    return view('admin.user.lists', compact('mods') );



 

      /* $mods = UserMod::where('active', 1)
               ->where('city','bangkok')
               ->orderBy('name', 'desc')
               //->take(10)
               ->get();*/
            /*$mods = UserMod::find([1, 2, 3]);

            foreach ($mods as $item) {
            echo $item->name." ".$item->surname." ".$item->email."<br />";

            }*/
         /*   $count = UserMod::where('active', 1)->count();
        echo "Total Rows : ".$count ;*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$mod = UserMod::find($id);
        echo $mod->name ;*/
      /*  echo "<br />";
       // $mod = UserMod::find($id);
       // echo $mod->shop->name;

        $mod = ShopMod::find($id);
        echo $mod->name;
        echo "<br />";
        echo $mod->user->name;*/
      /*  $products = ShopMod::find($id)->products;
 
         foreach ($products as $product) {
            echo $product->name;
            echo "<br /><br />";
    
           }
          echo " Or <br /><br />";

           

            foreach($products as $product){
                    echo $product->name;
                    echo "<br />";

            }*/
            $product=ProductMod::find($id);
            echo "Product name Is : ".$product->name;
            echo "<br /> Shop Ower Is : ".$product->shop->name;

              


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
            }

