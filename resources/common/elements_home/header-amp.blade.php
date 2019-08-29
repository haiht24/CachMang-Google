<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header" style="float: none">
            <a class="navbar-brand" href="{{ url('/') }}">{{ $_SERVER['HTTP_HOST'] }}</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        @if(!empty($allKeywords))
                            @foreach($allKeywords as $k => $v)
                                @if($k < 6)
                                    <li><a title="{{ $v }}" href="{{ url('/') . '/' . str_slug($v) }}">{{ $v }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
            </button>
        </div>
    </div>
</nav>