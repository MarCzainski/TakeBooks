
@extends ('layout')

@section('content')
<div class="row">
    <div class="card-deck">
    @foreach ($books as $book)
        <div class="card">
        <img class="card-img-top" src="http://s.lubimyczytac.pl/upload/books/4802000/4802748/589833-352x500.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"> <a href="/STUDIA/TakeBooks/public/book/{{$book->id}}">{{ $book->title }}</a></h5>
            <p class="card-text">{{ $book->description }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> Author - {{ $book->author }}</li>
                <li class="list-group-item"> Category - {{ $book->category }}</li>
                <li class="list-group-item"> Price - {{ $book->price }} zł</li>
            </ul>
            <form method="post" action="https://secure.payu.com/api/v2_1/orders">
                <input type="hidden" name="continueUrl" value="http://shop.url/continue">
                <input type="hidden" name="currencyCode" value="PLN">
                <input type="hidden" name="customerIp" value="123.123.123.123">
                <input type="hidden" name="description" value="Order description">
                <input type="hidden" name="merchantPosId" value="145227">
                <input type="hidden" name="notifyUrl" value="http://shop.url/notify">
                <input type="hidden" name="products[0].name" value="Product 1">
                <input type="hidden" name="products[0].quantity" value="1">
                <input type="hidden" name="products[0].unitPrice" value="3000">
                <input type="hidden" name="totalAmount" value="1000">
                <input type="hidden" name="OpenPayu-Signature" value="sender=145227;algorithm=SHA-256;signature=bc94a8026d6032b5e216be112a5fb7544e66e23e68d44b4283ff495bdb3983a8">
                <button type="submit" formtarget="_blank" >Pay with PayU</button>
            </form >
            <p class="card-text"><small class="text-muted">Added by M.C</small></p>
        </div>
        </div>
    @endforeach  
    </div>  
</div>

@endsection