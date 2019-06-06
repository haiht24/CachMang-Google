@extends('app')
@section('content')
    <div class="row page-boxer">
        <h3 class="lsi-header text-center" style="padding:8px"><span>Contact</span></h3>
        <div class="body-page-boxer container">
            <div class="col-xs-12 alert-info static-page navbar">
                <p>We are always eager to improve our service. Therefore, your opinions and recommendation are highly appreciated.</p>
                <p>If you happen to have any question, please feel free to leave us a message via email address: contact{{ '@'.$_SERVER['HTTP_HOST'] }}</p>
                <p>We will do our best to respond to your email as soon as possible.</p>
            </div>
        </div>
    </div>
@endsection