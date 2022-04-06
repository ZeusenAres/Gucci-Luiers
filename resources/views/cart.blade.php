<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    <table>
        @foreach(Session::get('cart') as $cartContent)
            @foreach(DB::table('products')->where('id', '=', $cartContent)->get() as $cart)
                <tr class="cart-row">
                    <td>
                        <img class="cart-image" src="{{ $cart->image }}" />
                    </td>
                    <td>
                        {{ $cart->name }}<br />
                        {{ '€' . $cart->price }}
                    </td>
                </tr>
            @endforeach
        @endforeach
        
        <tr>
            <td>
                <form action="#" method="get">
                    <input name="empty-cart" type="submit" value="Delete cart" />
                </form>
                @if(isset($_GET['empty-cart']))
                    <?php Session::flush('cart') ?>
                @endif
            </td>
        </tr>
    </table>
</body>
</html>
