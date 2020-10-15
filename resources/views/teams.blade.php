@extends('Master')

@section('title')
    Stadiums FIFA World Cup 2018 Russia
@endsection



@section('css')
  <link href="{{asset('/css/Stadium/Stadium Details.css')}}" rel="stylesheet">
@endsection



@section('body')
    <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="section-heading text-center">
                <div class="wow bounceInDown" data-wow-delay="0.2s">
                    <h2>Stadiums of Russia World Cup 2018</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($team as $key=>$value)
                    @if($key>1 && $key%2 ==0)
                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 float-right">
                    @else
                            <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                        @endif
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <img src="/images/flag/{{$value->flag}}.png" />
                                <imgcaption>
                                    <h4>{{$value->name}}</h4>

                                </imgcaption>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                      <h4>{{$value->name}}</h4>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection
