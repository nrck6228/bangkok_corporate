@section('title', 'เข้าสู่ระบบ')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('include/start')

@section('contentpage')
 
<div class="container-in">
    <div id="main-content" class="page type-login">
        <div class="page-section">
            @include('page/login.page')
        </div>
    </div>
</div>

@include('include.css_scripts')
@endsection

