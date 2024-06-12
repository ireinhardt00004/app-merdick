<title>{{ config('chatify.name') }}</title>

{{-- Meta tags --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="id" content="{{ Auth::user()->id }}">
<meta name="messenger-color" content="{{ Auth::user()->messenger_color }}">
<meta name="messenger-theme" content="{{ Auth::user()->dark_mode }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="{{ url('').'/'.config('chatify.routes.prefix') }}" data-user="{{ Auth::user()->id }}">
 <link rel="icon" type="x/icon" href="{{ asset('assets/img/favicon.ico')}}">
{{-- scripts --}}
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/chatify/font.awesome.min.js') }}"></script>
<script src="{{ asset('js/chatify/autosize.js') }}"></script>

<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>

{{-- styles --}}
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
<link href="{{ asset('css/chatify/style.css') }}" rel="stylesheet" />
<link href="{{ asset('css/chatify/'. (Auth::user()->dark_mode  > 0 ? 'dark' : 'light').'.mode.css') }}" rel="stylesheet" /> 


{{-- Setting messenger primary color to css --}}
<style>
    :root {
        --primary-color: {{ Auth::user()->messenger_color }};
    }
</style>