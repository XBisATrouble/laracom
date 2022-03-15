<section id="hero" class="hero-section top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="hero-content">
                    <p class="hero-text">This is {{config('app.name')}}</p>
                    <h1 class="hero-title">Welcome to a new shopping experience</h1>
                    <!-- search form -->
                    <div>
                        <!-- search form -->
                        <form action="{{route('search.product')}}" method="GET" class="sidebar-form">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search product" value="{{ request()->input('q') }}">
                                <span class="input-group-btn">
                        <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>Search</button>
                    </span>
                            </div>
                        </form>
                    </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>