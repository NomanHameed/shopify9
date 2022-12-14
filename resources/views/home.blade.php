@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <h2>Make an Offer Button Function</h2>
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>

    <div>
        <div>
            <form action="{{ route('add.script') }}">
                <button class="btn--secondary" type="submit" id="addOffer">Add Offer</button></div>
            </form>
        <div>
            <form action="{{ route('update.script') }}">
                <button class="btn--secondary" type="submit" id="updateOffer">Update Offer</button></div>
            </form>

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
