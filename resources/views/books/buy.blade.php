
@extends ('layout')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <img class="card-img-top" src="http://ecsmedia.pl/c/cien-wiatru-b-iext50738970.jpg" style="width: 50%;">
        <h5 class="card-title"> <a href="/STUDIA/TakeBooks/public/book/{{$book->id}}">{{ $book->title }}</a></h5>
        <p class="card-text">{{ $book->description }}</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> Author - {{ $book->author }}</li>
            <li class="list-group-item"> Category - {{ $book->category }}</li>
            <li class="list-group-item"> Price - {{ $book->price }} zł</li>
        </ul>
      </div>
    </div>
</div>
  <form method="POST" action="https://secure.payu.com/api/v2_1/orders">

    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="Name">First name</label>
        <input type="text" class="form-control" id="Name" placeholder="First name" required>
        <div class="valid-tooltip">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="Surname">Last name</label>
        <input type="text" class="form-control" id="Surname" placeholder="Last name" required>
        <div class="valid-tooltip">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="Username">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="Username">@</span>
          </div>
          <input type="text" class="form-control" id="Username" placeholder="Username" aria-describedby="Username" required>
          <div class="invalid-tooltip">
            Please choose a unique and valid username.
          </div>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="City">City</label>
        <input type="text" class="form-control" id="City" placeholder="City" required>
        <div class="invalid-tooltip">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="State">State</label>
        <input type="text" class="form-control" id="State" placeholder="State" required>
        <div class="invalid-tooltip">
          Please provide a valid state.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="Zip">Zip</label>
        <input type="text" class="form-control" id="Zip" placeholder="Zip" required>
        <div class="invalid-tooltip">
          Please provide a valid zip.
        </div>
      </div>
    </div>
    

    <input type="hidden" name="customerIp" value="123.123.123.123">
    <input type="hidden" name="merchantPosId" value="145227">
    <input type="hidden" name="description" value="Opis zamówienia">
    <input type="hidden" name="totalAmount" value="1000">
    <input type="hidden" name="currencyCode" value="PLN">
    <input type="hidden" name="products[0].name" value="Produkt 1">
    <input type="hidden" name="products[0].unitPrice" value="1000">
    <input type="hidden" name="products[0].quantity" value="1">
    <input type="hidden" name="notifyUrl" value="http://shop.url/notify">
    <input type="hidden" name="continueUrl" value="http://shop.url/continue">
    <input type="hidden" name="OpenPayu-Signature" type="hidden" value="sender=145227;algorithm=SHA-256;signature=565f9f4dda43c8e24ccab4472133d680e2aa58e1f58bea845c4cf2926965144d">

    <button type="submit" formtarget="_blank" class="test"></button>
  </form>
<style>
.test {
    border: 0px;
    height: 50px;
    width: 290px;
    background: url('http://static.payu.com/pl/standard/partners/buttons/payu_account_button_long_03.png');
    background-repeat: no-repeat;
    cursor: pointer;
}
</style>
@endsection