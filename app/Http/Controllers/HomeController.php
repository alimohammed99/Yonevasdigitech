<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\BookCategories;

use App\Models\Books;

use App\Models\Carts;

use App\Models\MaritalStatus;

use App\Models\ShouldWeContactThem;

use App\Models\TeachingExperience;

use App\Models\TravelForWork;

use App\Models\MedicalConditions;

use App\Models\ApplicationForm;

use App\Models\User;

use App\Models\Countries;

use App\Models\States;

use App\Models\Cities;

use App\Models\Careers;

use App\Models\TransactionTable;

use App\Models\Orders;

use App\Models\HasSubCategories;

use App\Models\PurchasedBooksTable;

use App\Models\PaperCategories;

use App\Models\PaperBooks;

use DB;

use response;




class HomeController extends Controller
{
    public function redirect(){

        $usertype = Auth::user()->usertype;
    

        if($usertype == '1'){
            $total_book_categories = BookCategories::all()->count();
            $total_paper_categories = PaperCategories::all()->count();
            $total_books = Books::all()->count();
            $total_students = User::where('student_key', '!=', 'guest')->where('student_key', '!=', 'admin')->count();
            $total_guests = User::where('student_key', '=', 'guest')->count();
            $total_users = User::where('usertype', '0')->count();
            $total_paper_books = PaperBooks::all()->count();


            
        $data1 = DB::table('transaction_tables')->join('books', 'transaction_tables.book_id', '=', 'books.book_id')->join('users', 'transaction_tables.user_id', '=', 'users.id')->select('transaction_tables.id as id', 'users.first_name', 'users.last_name', 'users.email', 'users.phone', 'books.book_id', 'books.book_title', 'books.image', 'transaction_tables.amount', 'transaction_tables.reference_number', 'transaction_tables.status')->get();






        $data2 = DB::table('purchased_books_tables')->join('books', 'purchased_books_tables.book_id', '=', 'books.book_id')->join('users', 'purchased_books_tables.user_id', '=', 'users.id')->select('purchased_books_tables.id as id', 'users.first_name', 'users.last_name', 'users.email', 'books.book_id',  'books.book_title', 'book_author', 'books.image')->get();





            return view('admin.home', compact('total_book_categories', 'total_paper_categories', 'total_books', 'total_students', 'total_users', 'total_guests', 'total_paper_books', 'data1', 'data2'));
        }else{
            $cat = BookCategories::all();
            $book_limit = Books::limit(2)->get();
           

            $user = auth()->user();
            //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
        $count = carts::where('user_id', $user->id)->count();

            //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
            // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.

            $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();



            return view('user.home', compact('cat', 'book_limit', 'count', 'purchased_books'));
        }
    }



    public function index(){


        if(Auth::id()){
            return redirect('redirect');
        }else{
            $cat = BookCategories::all();
            $book_limit = Books::limit(2)->get();
              return view('user.home', compact('cat', 'book_limit'));
        }

    }




    public function categories(){


        if(Auth::id()){
            $cat = BookCategories::all();
            $book_limit = Books::limit(2)->get();
            $user = auth()->user();
            //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
            $count = carts::where('user_id', $user->id)->count();

            $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();

            //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
            // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.
            return view('user.categories', compact('cat', 'book_limit', 'count', 'purchased_books'));
        }else{
            $cat = BookCategories::all();
            $book_limit = Books::limit(2)->get();
              return view('user.categories', compact('cat', 'book_limit'));
        }

    }



    
    public function books_by_categories($id){


        if(Auth::id()){





            $data = BookCategories::find($id);

            $data2 = Books::where('category_id', $data->id)->get();







            $book_limit = Books::limit(2)->get();
            $user = auth()->user();
            //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
       $count = carts::where('user_id', $user->id)->count();

       $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();

            //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
            // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.
            return view('user.books_by_categories', compact('data', 'data2', 'book_limit', 'count', 'purchased_books'));
        }else{


               $data = BookCategories::find($id);
               $data2 = Books::where('category_id', $data->id)->get();




               $book_limit = Books::limit(2)->get();
              return view('user.books_by_categories', compact('data', 'data2', 'book_limit'));
        }
    }

    

    
/////////////////////////////////////

    public function books_by_paper_categories($id){


        if(Auth::id()){





            $data = PaperCategories::find($id);

            $data2 = PaperBooks::where('category_id', $data->id)->get();







            $book_limit = Books::limit(2)->get();
            $user = auth()->user();
            //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
       $count = carts::where('user_id', $user->id)->count();

       $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();

            //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
            // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.
            return view('user.books_by_paper_categories', compact('data', 'data2', 'book_limit', 'count', 'purchased_books'));
        }else{


           
            $data = PaperCategories::find($id);

            $data2 = PaperBooks::where('category_id', $data->id)->get();



               $book_limit = Books::limit(2)->get();
              return view('user.books_by_paper_categories', compact('data', 'data2', 'book_limit'));
        }
    }










    
    public function find_books(){


        if(Auth::id()){
            $data = Books::Paginate(6);
            $user = auth()->user();
            //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
       $count = carts::where('user_id', $user->id)->count();

       $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();


            //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
            // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.

        //   $book = Books::all();

        //     $purchased_books = PurchasedBooksTable::where('book_id', $book->book_id)->where('user_id', $user->id)->first();


            return view('user.find_books', compact('data', 'count', 'purchased_books'));
        }else{
            $data = Books::Paginate(6);
              return view('user.find_books', compact('data'));
        }

    }




    public function careers(){


        if(Auth::id()){
            $marital_status = MaritalStatus::all();
            $ShouldWeContactThem = ShouldWeContactThem::all();
            $TeachingExperience = TeachingExperience::all();
            $TravelForWork = TravelForWork::all();
            $MedicalConditions = MedicalConditions::all();
            $data = ApplicationForm::all();
            
            $user = auth()->user();
            //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
       $count = carts::where('user_id', $user->id)->count();

       $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();

            //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
            // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.
            return view('user.careers', compact('count', 'purchased_books', 'marital_status', 'ShouldWeContactThem', 'TeachingExperience', 'TravelForWork', 'MedicalConditions', 'data'));
        }else{
            $marital_status = MaritalStatus::all();
            $ShouldWeContactThem = ShouldWeContactThem::all();
            $TeachingExperience = TeachingExperience::all();
            $TravelForWork = TravelForWork::all();
            $MedicalConditions = MedicalConditions::all();
            $data = ApplicationForm::all();
              return view('user.careers', compact('marital_status', 'ShouldWeContactThem', 'TeachingExperience', 'TravelForWork', 'MedicalConditions', 'data'));
        }

    }


    // public function getStates(Request $request)
    // {
    //     $states=States::whereCountryId($request->country_id)->orderBy('name')->get();
    //     return $states;
    // }


    // public function getCities(Request $request)
    // {
    //     $cities=Cities::whereStateId($request->state_id)->orderBy('name')->get();
    //     return $cities;
    // }






    public function about_us(){


        if(Auth::id()){
            //$cat = BookCategories::all();
            //$book_limit = Books::limit(2)->get();
            $user = auth()->user();
            //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
       $count = carts::where('user_id', $user->id)->count();
       

       $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();

            //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
            // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.
            return view('user.about_us', compact('count', 'purchased_books'));
        }else{
            //$cat = BookCategories::all();
            //$book_limit = Books::limit(2)->get();
              return view('user.about_us');
        }

    }






    public function contact_us(){


        if(Auth::id()){
            //$data = Books::all();
            $user = auth()->user();
            //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
       $count = carts::where('user_id', $user->id)->count();

       $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();

            //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
            // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.
            return view('user.contact_us', compact('count', 'purchased_books'));
        }else{
              return view('user.contact_us');
        }

    }



    public function search_books(Request $request){


        if(Auth::id()){
             $search = $request->search;
                //search is the name of the input

                if($search == ''){
                    $data = Books::paginate(3);
                    $user = auth()->user();
                   $count = carts::where('user_id', $user->id)->count();
                    return view('user.find_books', compact('data', 'count'));
                }

                $data = Books::where('book_title', 'Like', '%' . $search . '%')->get();
                

                $user = auth()->user();

                $user = auth()->user();
                //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
           $count = carts::where('user_id', $user->id)->count();

           $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();
    
                //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
                // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.

                return view('user.find_books', compact('data', 'count', 'purchased_books'));
        }else{
            
            $search = $request->search;
            //search is the name of the input

                if($search == ''){
                    $data = Books::paginate(3);
                    return view('user.find_books', compact('data'));
                }
                $data = Books::where('book_title', 'Like', '%' . $search . '%')->get();

                return view('user.find_books', compact('data'));
        }
    }







    public function addcart(Request $request, $id){

        if(Auth::id())
        {
            $user = auth()->user();
                //   THIS IS TO GET THE ID OF THE SPECIFIC USER THAT IS LOGGED IN. WE HAVE TO KNOW WHO EXACTLY IS LOGGED IN, IN ORDER TO ADD ITEMS TO CART FOR HIM/HER. SO WE SAVED THAT INFO INTO THE VARIABLE "$user";

                $book = Books::find($id);
                    // WHAT WE ARE DOING HERE IS, WE ARE GETTING THE SPECIFIC PRODUCT THE USER CLICKS BY FINDING ITS ID, AND WE ARE STORING IT IN A VARIABLE "$product".

                $cart = new Carts;

                $cart->user_id = $user->id;
                $cart->book_id = $book->book_id;
   
                //$cart->quantity = $request->quantity;
                    //  WE USED $request HERE BECAUSE IT IS AN INPUT FIELD WHICH THE USER MUST FILL. AND BEFORE YOU FILL AND SEND ANYTHING TO THE DB, YOU HAVE TO MAKE A REQUEST.

                $cart->save();

                return redirect()->back()->with('message', 'Book has been added to cart');
        }
        else
        {
            return redirect()->back()->with('error', 'Oops.....You have to login first!');
        }

    }
















    public function add_paper_cart(Request $request, $id){

        if(Auth::id())
        {
            $user = auth()->user();
            $userr = auth()->user()->student_key;

            if($userr != 'guest'){
         
                $book = PaperBooks::find($id);
         

                $cart = new Carts;

                $cart->user_id = $user->id;
                $cart->book_id = $book->book_id;

        
     
                $cart->save();

                return redirect()->back()->with('message', 'Book has been added to cart');
            }else{
                return redirect()->back()->with('error', 'Access denied!');
            }

        }else{

        return redirect()->back()->with('error', 'Oops.....You have to login first!');
    }
}









/////////////////////////////////////////
/////////////////////////////////////////////
////////////////////////////////////////////
/////////////////////////////////////
//////////////////////////////////
/////////////////////////////////////////
    /////////////////////////////////////////////////
  public function show_my_cart()
  {

    $user = auth()->user();
    //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.


    //$my_cart = carts::where('user_id', $user->id)->get();
    $my_cart = DB::table('carts')->join('books', 'carts.book_id', '=', 'books.book_id')->select('books.book_title', 'books.book_author', 'books.image', 'books.book_price', 'carts.id', 'books.book_id')->where('carts.user_id', $user->id)->get();

    // dd($my_cart);

   

    $books = [];

    foreach ($my_cart as $list) {
        # code...
        array_push($books, $list->book_id);
    }

    
  

     $all_books = $books;

     

    $count = carts::where('user_id', $user->id)->count();

    $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();

    $empty_or_not = Carts::where('user_id', $user->id)->first();





    return view('user.show_my_cart', compact('count', 'purchased_books', 'my_cart', 'all_books', 'empty_or_not'));
  }  




  
  public function deletecart($id){
    $data = carts::find($id);
    $data->delete();

    return redirect()->back()->with('message', 'Book has been removed');



}







public function search_books2(Request $request, $id){


    if(Auth::id()){
         $search = $request->search;
            //search is the name of the input

            if($search == ''){

                $data = BookCategories::find($id);
                return view('user.books_by_categories', compact('data'));
            }

            $data = BookCategories::find($id);

            $dataa = Books::where('category_id', $data->category_id)->get();
            $data2 = $dataa::where('book_title', 'Like', '%' . $search . '%')->get();
            

            $user = auth()->user();

            $user = auth()->user();
            //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
       $count = carts::where('user_id', $user->id)->count();


       $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();

            //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
            // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.

            return view('user.books_by_categories', compact('data2', 'dataa', 'data', 'count', 'purchased_books'));
    }else{
        
        $search = $request->search;
        //search is the name of the input

            if($search == ''){
                $data = Books::paginate(3);
                return view('user.find_books', compact('data'));
            }
            $data = Books::where('category_id', $data->category_id)->get();
            $data2 = $data::where('book_title', 'Like', '%' . $search . '%')->get();

            return view('user.books_by_categories', compact('data2'));
    }
}

  

 




public function read_book_abstract($id){


    if(Auth::id()){


        $data = Books::find($id);



        $user = auth()->user();

   $count = carts::where('user_id', $user->id)->count();

   $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();


        return view('user.read_book_abstract', compact('count', 'purchased_books', 'data'));
    }else{


        $data = Books::find($id);




        $user = auth()->user();




           $book_limit = Books::limit(2)->get();
           return view('user.read_book_abstract', compact('data'));
    }

}










public function read_paper_book_abstract($id){


    if(Auth::id()){


        $data = PaperBooks::find($id);



        $user = auth()->user();

   $count = carts::where('user_id', $user->id)->count();

   $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();


        return view('user.read_paper_book_abstract', compact('count', 'purchased_books', 'data'));
    }else{


        $data = Books::find($id);




        $user = auth()->user();




           $book_limit = Books::limit(2)->get();
           return view('user.read_paper_book_abstract', compact('data'));
    }

}








public function submit_career_form(Request $request){
    

    if(Auth::id()){



        $data = new Careers;

        $data->first_name = $request->first_name;

        $data->surname = $request->surname;

        $data->middle_initial = $request->middle_initial;

        $data->date_of_birth = $request->date_of_birth;

        $data->marital_status = $request->marital_status;

        $data->address = $request->address;

        $data->country = $request->countries;

        $data->state = $request->states;

        $data->city = $request->cities;

        $data->zipcode = $request->zipcode;

        $data->phone = $request->phone;

        $data->email = $request->email;

        $data->highest_level_of_education = $request->highest_level_of_education;

        $data->elementay_school = $request->elementay_school;

        $data->secondary_school = $request->secondary_school;

        $data->higher_institution = $request->higher_institution;
        
        $data->previous_employer = $request->previous_employer;

        $data->job_start = $request->job_start;   

        $data->job_end = $request->job_end;   

        $data->reasons_for_leaving = $request->reasons_for_leaving;   

        $data->previous_employer_phone = $request->previous_employer_phone;   

        $data->should_we_contact_them = $request->should_we_contact_them;   

        $data->teaching_experience = $request->teaching_experience;   

        $data->years_of_experience = $request->years_of_experience;   

        $data->computer_packages = $request->computer_packages;   

        $data->free_time = $request->free_time;   

        $data->how_often_do_you_travel = $request->how_often_do_you_travel;   

        $data->groups = $request->groups;   

        $data->languages = $request->languages;   

        $data->how_soon = $request->how_soon;   

        $data->travel_for_work = $request->travel_for_work;   

        $data->medical_conditions = $request->medical_conditions;   



        $data->save();


        return redirect()->back()->with('message', 'Application form has been submitted      :)');






    }else{

    return redirect()->back()->with('error', 'Oops.....You have to login first!');
}





}





public function users_download_application_form(Request $request, $form){

    $usertype = Auth::user();


    if($usertype){
    return response()->download(public_path('assets2/' . $form));
}else{
    return redirect()->back()->with('error', 'OOPS...You have to log in first!');
}
}
















public function paper_categories(){

    $user = auth()->user();
         


    if(Auth::id() && $user->student_key == 'YonevasStudent'){
        $sub_cat = PaperCategories::all();
        $book_limit = Books::limit(2)->get();
        $user = auth()->user();
        //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
        $count = carts::where('user_id', $user->id)->count();

        $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();

        //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
        // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.
        return view('user.paper_categories', compact('sub_cat', 'book_limit', 'count', 'purchased_books'));

    }elseif(Auth::id()){

        $sub_cat = PaperCategories::all();
        $book_limit = Books::limit(2)->get();
        $user = auth()->user();
        //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
        $count = carts::where('user_id', $user->id)->count();

        return redirect()->back()->with('error', 'Access denied! This section is made available for our Students ONLY. Contact the Admins for help.');


    }else{
        

     $sub_cat = PaperCategories::all();
        $book_limit = Books::limit(2)->get();
        return redirect()->back()->with('error', 'OOPS....You have to login first!');
    }

}





public function list_paper_categories($id){


    if(Auth::id()){





        $data = PaperCategories::find($id);

        $data2 = PaperBooks::where('category_id', $data->category_id)->get();







        $book_limit = Books::limit(2)->get();
        $user = auth()->user();
        //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
   $count = carts::where('user_id', $user->id)->count();

   $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();

        //  HERE, WE WANT TO COUNT THE CART ITEMS OF THE CURRENT USER. SO WE USED 'EMAIL' IN THE 'DB' COZ SOME USERS MIGHT HAVE SIMILAR OR SAME NAME BUT TWO USERS CANNOT HAVE THE SAME PHONE NUMBER. SO WE ARE COUNTING HOW MANY TIMES THIS PHONE NUMBER APPEARS IN THE CART TABLE.
        // SO AFTER COUNTING, WE ARE STORING IT IN A VARIABLE '$count'.
        return view('user.books_by_paper_categories', compact('data', 'data2', 'book_limit', 'count', 'purchased_books'));
    }else{


        $data = PaperCategories::find($id);

        $data2 = PaperBooks::where('category_id', $data->category_id)->get();




           $book_limit = Books::limit(2)->get();
          return view('user.books_by_paper_categories', compact('data', 'data2', 'book_limit'));
    }
}








////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////

public function show_my_books(){


 
        //$data = Books::Paginate(6);
        $user = auth()->user();
      
   $count = carts::where('user_id', $user->id)->count();

   $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();


   $my_library = DB::table('purchased_books_tables')->join('books', 'purchased_books_tables.book_id', '=', 'books.book_id')->select('books.id as id', 'books.book as mybook', 'books.book_title', 'books.book_author', 'books.image', 'books.book_price', 'books.book_id')->where('purchased_books_tables.user_id', '=', $user->id)->get();

// dd($my_library);


   




        return view('user.show_my_books', compact('count', 'purchased_books', 'my_library'));

    }










    public function users_download_books(Request $request, $book){

        $usertype = Auth::user();
    

        if($usertype){
            return response()->download(public_path('assets/' . $book));
        }else{
            return redirect()->back()->with('error', 'OOPS...You have to log in first!');
        }
        
}







public function download_paper_books(Request $request, $book){

    $usertype = Auth::user();


    if($usertype){
        return response()->download(public_path('assets3/' . $book));
    }else{
        return redirect()->back()->with('error', 'OOPS...You have to log in first!');
    }
    
}

   



public function download_my_books(Request $request, $mybook){

    $usertype = Auth::user();


    if($usertype){
        return response()->download(public_path('assets/' . $mybook));
    }else{
        return redirect()->back()->with('error', 'OOPS...You have to log in first!');
    }
    
}







 public function users_send_email(Request $request){

    // $isUserLoggedIn = Auth::user();

    // if($isUserLoggedIn){


//VALIDATE FORM
//VALIDATE FORM
//VALIDATE FORM

    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required'
    ]);

   //USING THE BELOW INTERNET CONNECTION METHOD
      //USING THE BELOW INTERNET CONNECTION METHOD
         //USING THE BELOW INTERNET CONNECTION METHOD

    if($this->isOnline()){
        $msg = " Sender Email => " . $request->email . "..................." . "Body of the message => " . $request->message;
        $mail_data = [
            'recipient' => 'info@yonevasdigitech.study',
            'fromEmail' => $request->email, 
            'fromName' => $request->name, 
            'subject' => $request->subject, 
            'body' => $msg
        ];

        \Mail::send('email-template', $mail_data, function($message) use ($mail_data){
            $message->to($mail_data['recipient'])
            ->from($mail_data['fromEmail'], $mail_data['fromName'])
            ->subject($mail_data['subject']);
    });

        return redirect()->back()->with('message', 'Email has been sent. We will get back shortly   :)');

        }else{
            return redirect()->back()->with('error', 'Check your Internet connection!');
        }



    // }else{
    //     return redirect()->back()->with('error', 'OOPS...You have to log in first!');
    // }

 }


// TESTING INTERNET CONNECTION WITH YOUTUBE SITE
// TESTING INTERNET CONNECTION WITH YOUTUBE SITE
// TESTING INTERNET CONNECTION WITH YOUTUBE SITE

 public function isOnline($site = "https://youtube.com"){
    if(@fopen($site, "r")){
        return true;
    }else{
        false;
    }
 }





 public function download_application_form(){

    $isUserLoggedIn = Auth::user();

    if($isUserLoggedIn){

    $user = auth()->user();
    //  WE HAVE THIS HERE BECAUSE WE WANT TO GET THE ID OF THE USER CURRENTLY LOGGED IN BEFORE WE CAN KNOW WHOSE CART TO DISPLAY TO THE HOMEPAGE.
  $count = carts::where('user_id', $user->id)->count();
  $purchased_books = PurchasedBooksTable::where('user_id', $user->id)->count();
    $data = ApplicationForm::all();
    return view("user.download_application_form", compact('data', 'count', 'purchased_books'));
 }else{
    return redirect()->back()->with('error', 'OOPS...You have to log in first!');
 }
 





}




public function paystack(){

          return view('user.data');

}

public function verify_payment(Request $request){

    $ref = $request->reference;
    //dd($data);

    $curl = curl_init();
  
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$ref,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_28870e33fb5de245f024dec5ab0ead8278b102c7",
        "Cache-Control: no-cache",
        ),
    ));
    
    $response = curl_exec($curl);
    $response = json_decode($response, true);
    $err = curl_error($curl);

    curl_close($curl);
    
    if ($err) {
        return response()->json([
            'status' => 400,
            'message' => "cURL Error #: ".$err,
        ], 400);
    } else {
        if($response['data']['status'] == "success" && $response['data']['gateway_response'] == "Successful"){
            // check for amount paid
            $amount =  (($response['data']['amount'])/100);
            
            // get book_id & user_id
            // note you can also get user Id inside here
            $books =  $response['data']['metadata']['custom_fields'][0]['books'];
            $books = json_decode($books);
            $user_id = Auth::user()->id;

            // fetch the book and cross check the price with the amount the user paid
            $fetchTotalPrice = Books::whereIn('book_id', $books)->sum('book_price');

            if($fetchTotalPrice != $amount){
                // return error
                return response()->json([
                    'status' => 203,
                    'message' => 'Failed! Fraudulent payment detected',
               ], 203);
            }else{

                foreach ($books as $book) {
                    # code...
                    $getBook = Books::where('book_id', $book)->first();

                    // create transaction table

                    $pls = new TransactionTable;


                    $pls->user_id =  Auth::user()->id;;
                    $pls->book_id = $book;
                    $pls->amount = $getBook->book_price;
                    $pls->reference_number = $ref;
                    $pls->status = $response['data']['status'];
                   
            
                    $pls->save();



                    // create purchase table

                    $yes = new PurchasedBooksTable;

                    $yes->user_id =  Auth::user()->id;
                    $yes->book_id = $book;

                    $yes->save();


                    DB::table('carts')->where('user_id', Auth::user()->id)->delete();

                }

             

    
                return response()->json([
                    'status' => 200,
                    'message' => 'Transaction successful',
                    'data'=>$response
                ], 200);
            }
        }else{

        }
    }

    

}








 

 }



 
