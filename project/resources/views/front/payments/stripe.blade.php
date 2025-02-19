<tr>
    <td>
        @if(isset($payment['name']))
            {{ ucwords($payment['name']) }}
        @else
            <p class="alert alert-danger">You need to have <strong>name</strong> key in your config</p>
        @endif
    </td>
    <td>
        @if(isset($payment['description']))
            {{ $payment['description'] }}
        @endif
    </td>
    <td>
        @if(isset($payment['name']))
            <form action="{{ route('checkout.execute') }}" method="post" class="pull-right" id="stripeForm">
                <input type="hidden" name="payment" value="{{ config('stripe.name') }}">
                <input type="hidden" name="stripeToken" value="">
                <input type="hidden" class="billing_address" name="billing_address" value="">
                <input type="hidden" class="delivery_address_id" name="delivery_address" value="">
                <input type="hidden" class="courier" name="courier" value="">
                {{ csrf_field() }}
                <button id="paywithstripe" class="btn btn-primary">Pay with {{ ucwords($payment['name']) }} <i class="fa fa-credit-card"></i></button>
            </form>
        @endif
    </td>
</tr>
    <script src="{{ url('https://checkout.stripe.com/checkout.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            let handler = StripeCheckout.configure({
                key: "{{ config('stripe.key') }}",
                locale: 'auto',
                token: function(token) {
                    // You can access the token ID with `token.id`.
                    // Get the token ID to your server-side code for use.
                    console.log(token.id);
                    $('input[name="stripeToken"]').val(token.id);
                    $('#stripeForm').submit();
                }
            });

            document.getElementById('paywithstripe').addEventListener('click', function(e) {
                let total = parseFloat("{{ $total }}");
                let shipping = parseFloat($('#shippingFeeC').val());
                let amount = total + shipping;
                // Open Checkout with further options:
                handler.open({
                    name: "{{ config('stripe.name') }}",
                    description: "{{ config('stripe.description') }}",
                    currency: "{{ config('cart.currency') }}",
                    amount: amount * 100,
                    email: "{{ $customer->email }}"
                });
                e.preventDefault();
            });

            // Close Checkout on page navigation:
            window.addEventListener('popstate', function() {
                handler.close();
            });
        });
    </script>
