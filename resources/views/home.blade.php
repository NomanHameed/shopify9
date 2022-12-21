@extends('shopify-app::layouts.default')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- You are: (shop domain name) -->
    <h2>Make an Offer Button Function</h2>
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>

        <div class="row">
            <div class="col-1 mb-3 offset-3">
                <form action="{{ route('add.script') }}" method="get">
                    @csrf
                    <button class="btn btn-primary" type="submit" id="addOffer">Add Offer</button>
                </form>
            </div>
            <div  class="col-2 mb-3">
                <form action="{{ route('update.script') }}" method="get">
                    @csrf
                    <button class="btn btn-secondary" type="submit" id="updateOffer">Update Offer</button>

                </form>
            </div>
            <div class="col-1 mb-3">
                <form action="{{ route('remove.script') }}" method="get">
                    <button class="btn btn-danger" type="submit" id="deleteOffer">Delete Offer</button>
                </form>
            </div>

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
