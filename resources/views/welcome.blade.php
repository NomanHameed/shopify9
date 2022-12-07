@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
    <h1>This is from Laravel Application</h1>
    {{ $res = auth()->user()->api()->rest('GET','/admin/api/2022-10/products.json') }}
    {{ dd($res) }}
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
        alert('testing');
    </script>
@endsection
