Mercadopago.setPublishableKey("TEST-6d4e759f-3000-4816-bb77-45ce06df576e");


$(document).ready(function(){
  Mercadopago.getIdentificationTypes();

                        addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'keyup', guessingPaymentMethod);
                        addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'change', guessingPaymentMethod);

                        doSubmit = false;
                        addEvent(document.querySelector('#pay'),'submit',doPay);
});


                        function addEvent(el, eventName, handler){
                            console.log(el);
                            if (el.addEventListener) {
                                   el.addEventListener(eventName, handler);
                            } else {
                                el.attachEvent('on' + eventName, function(){
                                  handler.call(el);
                                });
                            }
                        };

                        function getBin() {
                            var ccNumber = document.querySelector('input[data-checkout="cardNumber"]');
                            return ccNumber.value.replace(/[ .-]/g, '').slice(0, 6);
                        };

                        function guessingPaymentMethod(event) {
                            var bin = getBin();

                            if (event.type == "keyup") {
                                if (bin.length >= 6) {
                                    Mercadopago.getPaymentMethod({
                                        "bin": bin
                                    }, setPaymentMethodInfo);
                                }
                            } else {
                                setTimeout(function() {
                                    if (bin.length >= 6) {
                                        Mercadopago.getPaymentMethod({
                                            "bin": bin
                                        }, setPaymentMethodInfo);
                                    }
                                }, 100);
                            }
                        };

                        function setPaymentMethodInfo(status, response) {
                            if (status == 200) {
                                // do somethings ex: show logo of the payment method
                                var form = document.querySelector('#pay');

                                if (document.querySelector("input[name=paymentMethodId]") == null) {
                                    var paymentMethod = document.createElement('input');
                                    paymentMethod.setAttribute('name', "paymentMethodId");
                                    paymentMethod.setAttribute('type', "text");
                                    paymentMethod.setAttribute('value', response[0].id);

                                    form.appendChild(paymentMethod);
                                } else {
                                    document.querySelector("input[name=paymentMethodId]").value = response[0].id;
                                }
                            }
                        };

                        function doPay(event){
                            event.preventDefault();
                            if(!doSubmit){
                                var $form = document.querySelector('#pay');
                                Mercadopago.createToken($form, sdkResponseHandler); // The function "sdkResponseHandler" is defined below

                                return false;
                            }
                        };
                        function sdkResponseHandler(status, response) {
                            

                        
                        
                        
                            if (status != 200 && status != 201) {
                                console.log("verify filled data");
                                console.log(status + response);
                        
                            }else{


                                var form = document.querySelector('#pay');

                                var card = document.createElement('input');
                                card.setAttribute('name',"token");
                                card.setAttribute('type',"text");
                                card.setAttribute('value',response.id);
                                form.appendChild(card);
                                doSubmit=true;
                                //form.submit();
                                

                                
                                
                            }
                        };
     

