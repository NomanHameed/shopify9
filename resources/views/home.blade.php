@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <h2>Make an Offer Button Function</h2>
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>

    <div>
        <div><button class="btn--secondary" onclick="alert('testing')" type="button" id="addOffer">Add Offer</button></div>
        <div><button class="btn--secondary" type="button" id="updateOffer">Update Offer</button></div>
        <div><button class="btn--secondary" type="button" id="deleteOffer">Delete Offer</button></div>
    </div>


@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
        // document.getElementById('addOffer').onClick = function (){
        //     alert('Add Button Alert');
        // }
    </script>

@endsection
