
<!DOCTYPE html>
<html>

<head>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="stylesheet" href="style.css" /> \ -->
    <style>
      body{
    padding: 0;
    margin: 0;
}
h1, h2, h3{
    text-align: left;
    font-size: 36px;
}
.container{
    width: 400px !important;
    margin: 20px auto;
}

.container table{
    width: 100% !important;
    border: 1px solid #ccc !important;
    border-radius: 5px;
    margin: 5px 0;
}

.container table tr td{
    padding: 10px 10px;
    font-size: 18px;
}

.container button{
    width: 100% !important;
    padding: 10px;
}
    </style>
</head>

<body>

    <div class="container">  
        <h2>Summary</h2>     
        <table>
            <tr><td>Cloths</td> <td> &#8358;1000</td></tr>
            <tr><td>Shoes</td> <td>&#8358;2000</td></tr>
            <tr><td>Table</td> <td>&#8358;500</td></tr>
            <tr><td>Chairs</td> <td>&#8358;200</td></tr>
            <tr><td>Total</td> <td>&#8358;3700</td></tr>
        </table> 
        <button onclick="payWithPaystack()"> Pay </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <!-- <script src="app.js"></script> -->





    <script>

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })

       
        function payWithPaystack() {

            var handler = PaystackPop.setup({ 
                key: 'pk_test_d2d7a9e4e0d99eebf57d012e91830257871ef456', //put your public key here
                email: 'kidtalented1@gmail.com', //put your customer's email here
                amount: 370000, //amount the customer is supposed to pay
                metadata: {
                    custom_fields: [
                        {
                            display_name: "Talented Kid",
                            variable_name: "iPhone 14",
                            book_id:DB::table('books')->select('books.book_id'),
                            // user_id: Auth::user()->id,
                            phone: "+2349158853652" //customer's mobile number
                        }
                    ]
                },
                callback: function (response) {
                    //after the transaction have been completed
                    //make post call  to the server with to verify payment 
                    //using transaction reference as post data
                    console.log("response", response)
                    $.post("{{ url('verify_payment') }}", {reference:response.reference}, function(result){
                        console.log("result==>", result);
                        if(result.status == 200)
                            //successful transaction
                            alert(result.message);
                        else
                            //transaction failed
                            alert(result.message);

                            
                    });
                },
                onClose: function () {
                    //when the user close the payment modal
                    alert('Transaction cancelled');
                }
            });
            handler.openIframe(); //open the paystack's payment modal
            }
    </script>
</body>

</html>