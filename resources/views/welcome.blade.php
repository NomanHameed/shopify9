@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    @if(auth())
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
    @else
        <p>testing</p>
    @endif
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection
