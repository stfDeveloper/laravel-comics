<main>
    <img class="jumbo" src="{{asset('images/jumbotron.jpg')}}" alt="">
    <div class="series">
        <div class="currentSeries">
            CURRENT SERIES
        </div>
        <div class="comicsBox">
        @foreach ($comics as $element => $card)
            <div class="comic">
                <img src="{{$card['thumb']}}">
                <p>{{$card['title']}}</p>
            </div>
        @endforeach
        </div>
        <button>LOAD MORE</button>
    </div>
    
    <div class="section">
        <div class="merc">
            <img src="{{asset('images/dc-logo.png')}}">
            <p> DIGITAL COMICS </p>
        </div>
        <div class="merc">
            <img src="{{asset('images/dc-logo.png')}}">
            <p>DC MERCHANDISE</p>
        </div>
        <div class="merc">
            <img src="{{asset('images/dc-logo.png')}}">
            <p>SUBSCRIPTION</p>
        </div>
        <div class="merc">
            <img src="{{asset('images/dc-logo.png')}}">
            <p>COMIC SHOP LOCATOR</p>
        </div>
        <div class="merc">
            <img src="{{asset('images/dc-logo.png')}}">
            <p>DC POWER VISA</p>
        </div>
    </div>
</main>