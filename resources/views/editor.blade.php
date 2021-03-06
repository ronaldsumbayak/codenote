@extends ('base')

@section ('subtitle')
    {{ $code->uri }}
@endsection

@section ('navbar-content')
    <li><a href="/">new note</a></li>

    @include ('menu.password')

    @include ('menu.changeurl')

    @if (Auth::check ())
        <li><a href="{{ route ('mycodes') }}"><i class="fa fa-code"></i> my codes</a></li>
        @include ('menu.account')
    @else
        @include ('menu.login')
    @endif
@endsection

@section ('content')
    <div class="col-sm-12" style="margin-bottom: 50px;">
        <div class="container">
            <textarea class="form-control code-form" rows="20" id="sourceCode" placeholder="type your code here">{{ $code->source }}</textarea>

            <div class="form-group">
                <textarea class="form-control code-form" rows="10" style="margin-top: 1%; display: none;" id="input" placeholder="place your input here (stdin)"></textarea>
            </div>

            <div style="margin-bottom: 30px;">
                <div class="form-group row col-xs-2">
                    <select class="form-control code-form" id="lang">
                        <option value="0" selected>Text</option>
                    </select>
                </div>

                <div id="compile-button" hidden style="margin-bottom: 20px;" >
                    <button class="code-form btn btn-info" id="open-input" style="float: left; margin-left: 1%;">Input</button>
                    <button class="code-form btn btn-primary" onclick="run ()" id="run" style="float: right;">Run</button>
                </div>
            </div>
            <div style="margin-top: 75px; " >
                <div class="alert alert-success compilation-alert" role="alert" id="success-alert" hidden></div>
                <div class="alert alert-danger compilation-alert" role="alert" id="error-alert" hidden></div>
                <div class="alert alert-info compilation-alert" role="alert" id="stderr-alert" hidden></div>
                <div class="alert alert-warning compilation-alert" role="alert" id="cmpinfo-alert" hidden style="text-align: left;"></div>
                <div style="height: auto; resize: horizontal; margin-bottom: 40px;"><div class="form-control" id="output" style="resize: vertical; text-align: left; height: 100%; display: none;"></div></div>
            </div>
        </div>
      

    </div>

    @include ('footer')

@endsection



@section ('scripts')
    <script src="js/code/login.js"></script>
    <script src="js/code/sync.js"></script>
    <script src="js/code/compile.js"></script>
    <script src="js/code/input.js"></script>
    <script src="js/code/editor.js"></script>
    <script src="js/code/password.js"></script>
    <script src="js/code/sphere.js"></script>
    <script src="js/code/uri.js"></script>

    <script>
        uri = '{{ $code->uri }}';
        lastupdate = '{{ $code->updated_at }}';
        timer = setTimeout (function () {}, 0);
    </script>
@endsection