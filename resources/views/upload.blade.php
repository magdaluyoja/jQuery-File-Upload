@extends('welcome');
@section('content')
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://github.com/blueimp/jQuery-File-Upload">jQuery File Upload</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="https://github.com/blueimp/jQuery-File-Upload/tags">Download</a></li>
                    <li><a href="https://github.com/blueimp/jQuery-File-Upload">Source Code</a></li>
                    <li><a href="https://github.com/blueimp/jQuery-File-Upload/wiki">Documentation</a></li>
                    <li><a href="https://blueimp.net">&copy; Sebastian Tschan</a></li>
                </ul>
            </div>
        </div>
    </div>
    @include('file-upload')
@endsection