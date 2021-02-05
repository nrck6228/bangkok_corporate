@section('title', 'ลืมรหัสผ่าน')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('include/start')

@section('contentpage')
 
<div class="container-in">
    <div id="main-content" class="page type-login">
        <div class="page-section">
            @include('page/login.forgot')
        </div>
    </div>
</div>

@include('include.css_scripts')
@endsection

