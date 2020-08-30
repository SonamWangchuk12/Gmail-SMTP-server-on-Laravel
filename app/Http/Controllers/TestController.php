<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\ContactUs;
use DB;
 
class TestController extends Controller
{
   public function index(){
        //fetch all products data
        // $products = Product::orderBy('id','asc')->get();
        $products = DB::select('call products');
        
        return view('products.index', ['products' => $products]);
    }
    
    public function show($id){
        //fetch product data
        $product = Product::find($id);
        
        //pass products data to view and load list view
        return view('products.show', ['product' => $product]);
    }
    
    public function add(){
        //load form view
        return view('products.add');
    }
    
    public function insert(Request $request){
        //validate product data
        $this->validate($request, [
            'name' => 'required',
            'color' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        
        //get product date_add()
        $productData = $request->all();
        
        //insert product data
        Product::create($productData);
        
 
        return redirect()->route('product.index')->with('message','Product details added successfully!');
    }
    
    public function edit($id){
        //get product data by id
        $product = Product::find($id);
        
        //load form view
        return view('product.edit', ['product' => $product]);
    }
    
    public function update($id, Request $request){
        //validate product data
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        
        //get product data
        $productData = $request->all();
        
        //update product data
        Product::find($id)->update($productData);
        
 
        return redirect()->route('product.index')->with('message','Product details updated successfully!');
    }
    
    public function delete($id){
        //update product data
        Product::find($id)->delete();
        
        return redirect()->route('product.index')->with('message','Product details deleted successfully!');
    }
    public function userView(){
        $product = DB::select('call viewProducts');
        return view(with(dd($product)));
    }
    public function contact(){
        return view('products.enquiry');
    }
    public function addContact(Request $request){
         $request->validate([
             'name'           => 'required',
             'email'          => 'required|email',
             'subject'        => 'required',
             'message'        => 'required',
         ]);
        ContactUs::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'subject'       => $request->subject,
            'message'       => $request->message,
        ]);

        return response()->json([ 'success'=> 'Form is successfully submitted!']);
    }
}
 