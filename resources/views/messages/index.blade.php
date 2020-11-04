@section('title') 
Theta - Chat
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Chat</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Messages</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary">Add Widget</button>
            </div>                        
        </div>
    </div>          
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->    
<div id="app">
    <chat-component :user_id="{{ Auth::id() }}" :messages="{{ $messages }}" :participants="{{ $participants }}"></chat-component>
</div>
<!-- End contentbar -->
@endsection 
@section('script')
<!-- Chat js -->
<script src="{{ asset('assets/js/custom/custom-chat.js') }}"></script>
@endsection 