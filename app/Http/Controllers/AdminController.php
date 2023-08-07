<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BookCategories;

use App\Models\Books; 

use App\Models\MaritalStatus; 

use App\Models\ShouldWeContactThem;

use App\Models\TeachingExperience;

use App\Models\TravelForWork;

use App\Models\MedicalConditions;

use App\Models\ApplicationForm;

use App\Models\Careers;

use App\Models\PaperCategories;

use App\Models\HasSubCategories;

use App\Models\PaperBooks;

use App\Models\TransactionTable;

use App\Models\PurchasedBooksTable;


use DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Stroage;

class AdminController extends Controller
{
    public function book_categories(){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){
        $data = BookCategories::all();
        $data2 = HasSubCategories::all();
        return view("admin.book_categories", compact('data', 'data2'));
    }else{
        return redirect()->back()->with('error', 'Access denied!');
    }
}



    public function upload_book_categories(Request $request){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        $data = new BookCategories;

        $image = $request->file;

        
        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->file->move('categoriesimage', $imagename);

        $data->image = $imagename;

        //$data->category_id = $request->category_id;
        $data->category_name = $request->category_name;
        $data->sub_category = $request->has_sub_categories;
       

        $data->save();

        return redirect()->back()->with('message', 'Category was added successfully      :)');
    }else{
        return redirect()->back()->with('error', 'Access denied!');
    }
}




    public function edit_book_categories($id){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){
        $data = BookCategories::find($id);
        return view("admin.edit_book_categories", compact("data"));
    }else{
        return redirect()->back()->with('error', 'Access denied!');
    }
}




    public function update_book_categories(Request $request, $id){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        $data = BookCategories::find($id);

        $image = $request->file;

        if($image){


            $imagename = time(). '.' .$image->getClientOriginalExtension();
            $request->file->move('categoriesimage', $imagename);
    
            $data->image = $imagename;
    
         }


        $data->category_id = $request->category_id;

        $data->category_name = $request->category_name;
 


        $data->save();

        return redirect()->back()->with("message", "Category has been updated  :)");
  
        
    } else{
        return redirect()->back()->with('error', 'Access denied!');
    }
}

       



    public function delete_book_categories($id){
        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){
        $data = BookCategories::find($id);
        $data->delete();
        return redirect()->back()->with("message", "Category has been deleted   :)");
    }else{
        return redirect()->back()->with('error', 'Access denied!');
    }
}






    public function books(){
        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){
        $data = BookCategories::where('category_name', '!=', 'papers')->get();
      

        $data2 = DB::table('books')->join('book_categories', 'books.category_id', '=', 'book_categories.id')->select('books.id as id', 'books.book as file', 'book_categories.category_name', 'books.book_id', 'books.book_title', 'books.book_author', 'books.image', 'books.book_price', 'books.book_abstract', 'books.book')->get();

        return view("admin.books", compact('data', 'data2'));
    }else{
        return redirect()->back()->with('error', 'Access denied!');
    }
}





    public function upload_books(Request $request){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        $data = new Books;




        $image = $request->book_image;

        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->book_image->move('booksimages', $imagename);


        $data->image = $imagename;







        $file = $request->book;

        $filename = time(). '.' .$file->getClientOriginalExtension();

        $request->book->move('assets', $filename);

        $data->book = $filename;



     
        $data->book_id =    rand(10,900) . 'yonebrary' . time();
        $data->category_id = $request->category_id;
        $data->book_title = $request->book_title;
        $data->book_author = $request->book_author;
        //$data->book = $request->book;
        // $data->image = $request->book_image;
        $data->book_price = $request->book_price;
        $data->book_abstract = $request->book_abstract;
       

        $data->save();

        return redirect()->back()->with('message', 'Book was added successfully      :)');
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}




    public function edit_books($id){
        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){
        $dataaa = BookCategories::all();
        $data = Books::find($id);
        return view("admin.edit_books", compact("data", "dataaa"));
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}





    public function update_books(Request $request, $id){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        $data = Books::find($id);

        $image = $request->book_image;

        if($image){


            $imagename = time(). '.' .$image->getClientOriginalExtension();
            $request->book_image->move('booksimages', $imagename);
    
            $data->image = $imagename;
    
         }



         $book = $request->book;

         if($book){
 
 
             $bookname = time(). '.' .$book->getClientOriginalExtension();
             $request->book->move('assets', $bookname);
     
             $data->book = $bookname;
     
          }


         $data->category_id = $request->category_id;
         $data->book_title = $request->book_title;
         $data->book_author = $request->book_author;
        //  $data->image = $request->image;
         $data->book_price = $request->book_price;
         $data->book_abstract = $request->book_abstract;
        
 


        $data->save();

        return redirect()->back()->with("message", "Changes made successfully  :)");
  
        
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}


       



    public function delete_books($id){
        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){
        $data = Books::find($id);
        $data->delete();
        return redirect()->back()->with("message", "Book has been deleted   :)");
          
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}






    public function download_books(Request $request, $file){
        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){
        return response()->download(public_path('assets/' . $file));
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}





    public function view_books($id){
        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){
        $data = Books::find($id);
        dd($data);

        return view("admin.view_books", compact('data'));
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}





    
    public function marital_status(){
        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        return view("admin.marital_status");
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}








    public function upload_marital_statuses(Request $request){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){
        $data = new MaritalStatus;


        $data->status = $request->marital_status;
       

        $data->save();

        return redirect()->back()->with('message', 'Status was added successfully      :)');
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}





    public function should_we_contact_them(){
        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        return view("admin.should_we_contact_them");
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}




    public function upload_should_we_contact_them(Request $request){
        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){


        $data = new ShouldWeContactThem;


        $data->should_we_contact_them = $request->should_we_contact_them;
       

        $data->save();

        return redirect()->back()->with('message', 'Answer was added successfully      :)');
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}







    public function teaching_experience(){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        return view("admin.teaching_experience");
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}




    public function upload_teaching_experience(Request $request){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        $data = new TeachingExperience;


        $data->teaching_experience = $request->teaching_experience;
       

        $data->save();

        return redirect()->back()->with('message', 'Answer was added successfully      :)');
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}








    public function travel_for_work(){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        return view("admin.travel_for_work");
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}




    public function upload_travel_for_work(Request $request){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        $data = new TravelForWork;


        $data->travel_for_work = $request->travel_for_work;
       

        $data->save();

        return redirect()->back()->with('message', 'Answer was added successfully      :)');
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}





    public function medical_conditions(){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){

        return view("admin.medical_conditions");
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}





    public function upload_medical_conditions(Request $request){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){


        $data = new MedicalConditions;


        $data->medical_conditions = $request->medical_conditions;
       

        $data->save();

        return redirect()->back()->with('message', 'Answer was added successfully      :)');
    }else{
      return redirect()->back()->with('error', 'Access denied!');
    }
}





public function has_sub_categories(){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

    return view("admin.has_sub_categories");
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}





public function upload_has_sub_categories(Request $request){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){


    $data = new HasSubCategories;


    $data->has_sub_categories = $request->has_sub_categories;
   

    $data->save();

    return redirect()->back()->with('message', 'Answer was added successfully      :)');
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}





public function application_form(){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

        $data = ApplicationForm::all();

    return view("admin.application_form", compact('data'));
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}











public function upload_application_form(Request $request){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

    $data = new ApplicationForm;



    $application_form = $request->file;

    $filename = time(). '.' .$application_form->getClientOriginalExtension();

    $request->file->move('assets2', $filename);

    $data->form = $filename;

   

    $data->save();

    return redirect()->back()->with('message', 'Application form has been uploaded    :)');
}else{
  return redirect()->back()->with('error', 'Access denied!');
}

}






public function delete_application_form($id){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){
    $data = ApplicationForm::find($id);
    $data->delete();
    return redirect()->back()->with("message", "Application form has been deleted   :)");
      
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}






public function download_application_form(Request $request, $form){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){
    return response()->download(public_path('assets2/' . $form));
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}














public function view_application_form($id){
    $usertype = Auth::user()->usertype;


    if($usertype == '1'){
    $data = ApplicationForm::find($id);

    return view("admin.view_application_form", compact('data'));
}else{
    return redirect()->back()->with('message', 'Access denied!');
}
}









public function admin_seeing_careers(){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

        // $data = Careers::all();

    $data = DB::table('careers')
    ->join('marital_statuses', 'careers.marital_status', '=', 'marital_statuses.id')
     ->join('countries', 'careers.country', '=', 'countries.id')
      ->join('states', 'careers.state', '=', 'states.id')
       ->join('cities', 'careers.city', '=', 'cities.id')
        ->join('should_we_contact_thems', 'careers.should_we_contact_them', '=', 'should_we_contact_thems.id')
         ->join('teaching_experiences', 'careers.teaching_experience', '=', 'teaching_experiences.id')
         ->join('travel_for_works', 'careers.travel_for_work', '=', 'travel_for_works.id')
           ->join('medical_conditions', 'careers.medical_conditions', '=', 'medical_conditions.id')
    
    ->select('careers.first_name', 'careers.surname', 'careers.middle_initial', 'careers.date_of_birth', 'marital_statuses.status', 'careers.address', 'countries.name_country', 'states.name_state', 'cities.name_city', 'careers.zipcode', 'careers.phone', 'careers.email', 'careers.highest_level_of_education', 'careers.elementay_school', 'careers.secondary_school', 'careers.higher_institution', 'careers.previous_employer', 'careers.job_start', 'careers.job_end', 'careers.reasons_for_leaving', 'careers.previous_employer_phone', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'careers.years_of_experience', 'careers.computer_packages', 'careers.free_time', 'careers.how_often_do_you_travel', 'careers.groups', 'careers.languages', 'careers.how_soon', 'travel_for_works.travel_for_work', 'medical_conditions.medical_conditions')->get();

 

    return view("admin.admin_seeing_careers", compact('data'));

}else{

    return redirect()->back()->with('message', 'Access denied!');
}
   
}











public function admin_paper_categories(){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){
    $data = PaperCategories::all();
    $data2 = BookCategories::where('id', '=', '7')->get();
    return view("admin.paper_categories", compact('data', 'data2'));
}else{
    return redirect()->back()->with('error', 'Access denied!');
}
}



public function upload_paper_categories(Request $request){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

    $data = new PaperCategories;



    $image = $request->file;

    
    $imagename = time(). '.' .$image->getClientOriginalExtension();
    $request->file->move('papercategoriesimage', $imagename);

    $data->image = $imagename;

    $data->category_id = $request->category_id;
    $data->category_name = $request->category_name;

   

    $data->save();

    return redirect()->back()->with('message', 'Category was added successfully      :)');
}else{
    return redirect()->back()->with('error', 'Access denied!');
}
}




public function edit_paper_categories($id){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){
    $data = PaperCategories::find($id);
    return view("admin.edit_paper_categories", compact("data"));
}else{
    return redirect()->back()->with('error', 'Access denied!');
}
}




public function update_paper_categories(Request $request, $id){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

    $data = PaperCategories::find($id);

    $image = $request->file;

    if($image){


        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->file->move('papercategoriesimage', $imagename);

        $data->image = $imagename;

     }


    $data->category_id = $request->category_id;

    $data->category_name = $request->category_name;



    $data->save();

    return redirect()->back()->with("message", "Category has been updated  :)");

    
} else{
    return redirect()->back()->with('error', 'Access denied!');
}
}

   



public function delete_paper_categories($id){
    $usertype = Auth::user()->usertype;


    if($usertype == '1'){
    $data = PaperCategories::find($id);
    $data->delete();
    return redirect()->back()->with("message", "Category has been deleted   :)");
}else{
    return redirect()->back()->with('error', 'Access denied!');
}
}












public function books_under_paper(){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

    $data = PaperCategories::all();
  

    $data2 = DB::table('paper_books')->join('paper_categories', 'paper_books.category_id', '=', 'paper_categories.id')->select('paper_books.id as id', 'paper_books.book as filee', 'paper_categories.category_name', 'paper_books.book_id', 'paper_books.book_title', 'paper_books.book_author', 'paper_books.image', 'paper_books.book_price', 'paper_books.book_abstract', 'paper_books.book')->get();

    return view("admin.books_under_paper", compact('data', 'data2'));
}else{
    return redirect()->back()->with('error', 'Access denied!');
}
}





public function upload_books_under_paper(Request $request){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

    $data = new PaperBooks;




    $image = $request->book_image;

    $imagename = time(). '.' .$image->getClientOriginalExtension();
    $request->book_image->move('paperbooksimages', $imagename);


    $data->image = $imagename;







    $file = $request->book;

    $filename = time(). '.' .$file->getClientOriginalExtension();

    $request->book->move('assets3', $filename);

    $data->book = $filename;



 
    $data->book_id =    rand(10,970) . 'yonebrarypaper' . time();
    $data->category_id = $request->category_id;
    $data->book_title = $request->book_title;
    $data->book_author = $request->book_author;
    //$data->book = $request->book;
    // $data->image = $request->book_image;
    $data->book_price = $request->book_price;
    $data->book_abstract = $request->book_abstract;
   

    $data->save();

    return redirect()->back()->with('message', 'Book was added successfully      :)');
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}




public function edit_books_under_paper($id){
    $usertype = Auth::user()->usertype;


    if($usertype == '1'){
    $dataaa = PaperCategories::all();
    $data = PaperBooks::find($id);
    return view("admin.edit_books_under_paper", compact("data", "dataaa"));
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}





public function update_books_under_paper(Request $request, $id){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

    $data = PaperBooks::find($id);

    $image = $request->book_image;

    if($image){


        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->book_image->move('paperbooksimages', $imagename);

        $data->image = $imagename;

     }



     $book = $request->book;

     if($book){


         $bookname = time(). '.' .$book->getClientOriginalExtension();
         $request->book->move('assets3', $bookname);
 
         $data->book = $bookname;
 
      }


     $data->category_id = $request->category_id;
     $data->book_title = $request->book_title;
     $data->book_author = $request->book_author;
    //  $data->image = $request->image;
     $data->book_price = $request->book_price;
     $data->book_abstract = $request->book_abstract;
    



    $data->save();

    return redirect()->back()->with("message", "Changes made successfully  :)");

    
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}


   



public function delete_books_under_paper($id){
    $usertype = Auth::user()->usertype;


    if($usertype == '1'){
    $data = PaperBooks::find($id);
    $data->delete();
    return redirect()->back()->with("message", "Book has been deleted   :)");
      
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}






public function download_books_under_paper(Request $request, $filee){
    $usertype = Auth::user()->usertype;


    if($usertype == '1'){
    return response()->download(public_path('assets3/' . $filee));
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}





public function view_books_under_paper($id){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){
    $data = paperBooks::find($id);

    return view("admin.view_books_under_paper", compact('data'));
}else{
  return redirect()->back()->with('error', 'Access denied!');
}
}





public function transactions(){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

  

        $data = DB::table('transaction_tables')->join('books', 'transaction_tables.book_id', '=', 'books.book_id')->join('users', 'transaction_tables.user_id', '=', 'users.id')->select('transaction_tables.id as id', 'users.first_name', 'users.last_name', 'users.email', 'users.phone', 'books.book_id', 'books.book_title', 'books.image', 'transaction_tables.amount', 'transaction_tables.reference_number', 'transaction_tables.status')->get();

 

    return view("admin.view_all_transactions", compact('data'));

}else{

    return redirect()->back()->with('message', 'Access denied!');
}
   
}










public function orders(){

    $usertype = Auth::user()->usertype;


    if($usertype == '1'){

  

        $data = DB::table('purchased_books_tables')->join('books', 'purchased_books_tables.book_id', '=', 'books.book_id')->join('users', 'purchased_books_tables.user_id', '=', 'users.id')->select('purchased_books_tables.id as id', 'users.first_name', 'users.last_name', 'users.email', 'books.book_id',  'books.book_title', 'book_author', 'books.image')->get();

 

    return view("admin.view_all_orders", compact('data'));

}else{

    return redirect()->back()->with('message', 'Access denied!');
}
   
}






















    }





