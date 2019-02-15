<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ !empty($seo['title']) ? $seo['title'] : '' }}</title>
    <meta name="description" content="{{ !empty($seo) ? $seo['description'] : 'description' }}">
    <link rel="icon" href="{{ asset('/images/'.ASSET_DOMAIN.'/favicon.ico') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset(CSS_PATH . '/app.css') }}">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{--<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>--}}
    @yield('js')
    <script>
        var url = '{{ url('/') }}';
    </script>
</head>
<body>

{{--Header--}}
@include('elements.header')
{{--Body--}}
<div class="col-xs-12 body-content">
    <div class="container parent">
        @yield('content')
    </div>
</div>
{{--Footer--}}
@include('elements.footer')

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113860329-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-113860329-1');
</script>

<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
         the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            console.log(this.value);
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            console.log('here',arr);
            for (i = 0; i < arr.length; i++) {
                if(arr[i] != '500'){
                    /*check if the item starts with the same letters as the text field value:*/
//                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                         (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
//                    }
                }

            }
            console.log(a);
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                 increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                 decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            }
            /*else if (e.keyCode == 13) {
             /!*If the ENTER key is pressed, prevent the form from being submitted,*!/
             e.preventDefault();
             if (currentFocus > -1) {
             /!*and simulate a click on the "active" item:*!/
             if (x) x[currentFocus].click();
             }
             }*/
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
             except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }
    $(document).ready(function () {

        function search() {
            var q = $('#q').val();
            if(!q)
                return false;
            var kw = q.replace(/\s/g,'-').toLowerCase();
            if('{{ USE_DEFAULT_KEYWORD }}' == '1'){
                var defaultKw = '{{ env('KEYWORD','coupon') }}';
                if(kw.indexOf(defaultKw) === -1){
                    kw = kw + '-' + defaultKw;
                }
            }
            var u = '{{ url('/') }}' + '/' + kw;
            window.location.replace(u);
        }

        $('#frmSearch').on('submit', function () {
            search();
            return false;
        });

        var xhr = null;
        $('#q').keyup(function (e) {
            if(e.key === 13)
                search();
            else{
                var query = $('#q').val();
                var params = {q: query};
                xhr = $.ajax({
                    type: 'GET',
                    data: params,
                    url: '{{ url('/suggest') }}',
                    beforeSend : function(){
                        if(xhr !== null) {
                            xhr.abort();
                        }
                    },
                    success: function(data) {
                        if(data.length > 0){
                            console.log('API return;it should be show now',data,data.length);
                            autocomplete(document.getElementById("q"), data);
                        }
                    },
                    error:function(e){
                        // Error
                    }
                });
            }
        });

    });
</script>
</body>