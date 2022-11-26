<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LOST AND FOUND') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>
<body>
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end navbar-fixed-top" >
<div class="navbar-brand navbar-nav mr-auto" >LOST AND FOUND</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="modal fade" id="postitem" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true"  style="width: 1200px;">
    <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 750px;">
    <form action ="{{ route('app') }}" Method="POST" >
       @csrf
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Post item</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       <div class="modal-body">
                <div class="form-group">
                    <label>Item Name:</label>
                    <input type="text" class="form-control" name="item_name" placeholder="Enter item name" class="form-control{{ $errors->has('item_name') ? ' is-invalid' : '' }}" required autofocus/>
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <textarea id="claim_item" class="form-control" name="description" rows="4" cols="130" placeholder="Enter Description..." required autofocus></textarea>
                </div>
             
                <div class="form-group">
                <lable>Item Type</label>
                                <select id="role" name="role" type="text" class="select2  form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="{{ old('role') }}" required autofocus>
                                    <option value="">Choose..</option>
                                    <option value="lost">Lost It</option>
                                    <option value="found">Found It</option>
                                </select>
                                @if ($errors->has('role'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            
                </div>
              
                <div class="form-group">
                    <label>Created date</label>
                    <input type="date" class="form-control" name="date" placeholder="select date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" required autofocus/>
                </div>
        <div class="name">
          <button type="submit" class="btn btn-success">Save </button>
          <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancle</button>
        </div>
        </div>
        </form>
      </div>
     </div>
    </div>

      <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
        <ul class="navbar-nav text-right">
        <li class="nav-item active">
             @guest
                @if (Route::has('login'))
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Sign-Up') }}</a>
                </li>
                @endif
             @else
        </li>
  <li class="nav-item">
        <button type="button" class="btn btn-success ml-auto mr-1 float-left" data-toggle="modal" data-target="#postitem">
                Post an Item
        </button>
  </li>
  <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">{{ __('Feed') }}</a>
  </li>
          <li class="nav-item active">
                <a class="nav-link" href="{{ route('my_item') }}">{{ __('MyPosts') }}</a>
          </li>
          <li class="nav-item active">
                <a class="nav-link" href="{{ route('response') }}">{{ __('Responses') }}</a>
          </li>
          <li class="nav-item active">
                
          </li>
        
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}</a>
                    </li>
                    <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="none">
                            @csrf
                            </form>
                    </li>
                    @endguest
        </ul>
      </div>
    </nav>
                    <main class="py-4">
                        @yield('content')
                    </main>
  
</body>
</html>
