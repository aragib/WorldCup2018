@section('body')
    <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="section-heading text-center">
                <div class="wow bounceInDown" data-wow-delay="0.2s">
                    <h2>Stadiums of Russia World Cup 2018</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($stadium as $key=>$stdm)
                    @if($key>1 && $key%2 ==0)
                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 float-right">
                    @else
                            <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                        @endif
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <img src="/Images/venue/{{$stdm->image}}" />
                                <imgcaption>
                                    <h4>{{$stdm->Stadium_name}}</h4>
                                </imgcaption>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a href="/sdetails/{{$stdm->Stadium_name}}"> <h4>Stadium Details</h4></a>
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
