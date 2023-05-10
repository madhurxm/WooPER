@include('homepages.header_homepage')
    <div class="container text-light">
        <div class="row mt-5">
            <div class="col mt-5">
                <h1 class="display-2 get_started_line1 my-5">
                    Learn Anywhere, Anytime
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="h3 get_started_line2">
                    WOOPER will open the world of Knowledge for you<br />and your
                    Knowledge is the way to your success.
                </p>
                <p />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="h3 get_started_line3">
                    Ready to be a Master!!
                    <a href="{{ route('pricing_plans') }}">
                    <button type="button"
                        class="mx-3 btn btn-lg btn-light get_started_starting_btn">
                        GET STARTED <span style="font-size: x-large">></span>
                    </button></a>
                </p>
                <p />
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <a href=""><i class="text-light fa fa-facebook me-1"></i></a>
                <a href=""><i class="text-light fa fa-twitter m-1"></i></a>
                <a href=""><i class="text-light fa fa-instagram m-1"></i></a>
                <a href=""><i class="text-light fa fa-youtube-play m-1"></i></a>
            </div>
        </div>
    </div>
@include('homepages.footer_homepage')