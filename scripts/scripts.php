<script>
    const notif = document.querySelector("#notif");

    setTimeout(() => {
        notif.style.display = "none";
    }, 3000);
    
    // ========== PAYPAL
    const payment = document.querySelector("#payment_value").value;

    // console.log(typeof payment)

    paypal.Buttons({
        createOrder(data,actions){

            return actions.order.create({
                purchase_units:[{
                    amount:{
                        value : String(payment)
                    }
                }]
            })

        },
        onApprove(data,actions){

            return actions.order.capture().then((e)=>{
                console.log(e.status)
                if(e.status === "COMPLETED"){
                    setTimeout(() => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Payment success',
                            text: 'Please wait your item is in the process.',
                        })
                    }, 3000);
                }else{
                    setTimeout(() => {     
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    }, 3000);
                }
            })

        }
    }).render("#paypal_button")

</script>