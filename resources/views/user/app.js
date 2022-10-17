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
                    phone: "+2349158853652" //customer's mobile number
                }
            ]
        },
        callback: function (response) {
            //after the transaction have been completed
            //make post call  to the server with to verify payment 
            //using transaction reference as post data
            $.post("verify.php", {reference:response.reference}, function(status){
                if(status == "success")
                    //successful transaction
                    alert('Transaction was successful');
                else
                    //transaction failed
                    alert(response);
            });
        },
        onClose: function () {
            //when the user close the payment modal
            alert('Transaction cancelled');
        }
    });
    handler.openIframe(); //open the paystack's payment modal
}