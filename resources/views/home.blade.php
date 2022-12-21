@extends('shopify-app::layouts.default')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- You are: (shop domain name) -->
    <h2>Make an Offer Button Function</h2>
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
    <div class="contact-form">
        <h2 align="center" >Authentication</h2>
        <form method="post" action="/signin"  class="form-horizontal" role="form" align="center">
            <div class="form-group" align="center">
                <label class="control-label col-sm-2"  for="username">username<em>*</em></label>
                <div class="col-sm-6">
                    <input type="text" name="username" id="username" placeholder="username" required="true" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">password<em>*</em></label>
                <div class="col-sm-6">
                    <input type="password" name="password" id="password" required="true" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input type="submit" name="signin" id="signin" value="sign in" class="btn btn-default"/>
                </div>
            </div>
        </form>
    </div>




    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-1">
            <form action="{{ route('add.script') }}" method="get">
                @csrf
                <button class="btn btn-primary" type="submit" id="addOffer">Add Offer</button>
            </form>
        </div>
        <div  class="col-1">
            <form action="{{ route('update.script') }}" method="get">
                @csrf
                <button class="btn--secondary" type="submit" id="updateOffer">Update Offer</button>

            </form>
        </div>
        <div class="col-1">
            <form action="{{ route('remove.script') }}" method="get">
                <button class="btn--secondary" type="submit" id="deleteOffer">Delete Offer</button>
            </form>
        </div>

    </div>

@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, {title: 'Welcome'});
        // document.getElementById('addOffer').onClick = function (){
        //     alert('Add Button Alert');
        // }
    </script>

@endsection
