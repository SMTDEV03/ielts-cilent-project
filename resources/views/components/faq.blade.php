<div class="section section-padding pt-10">
    <div class="container">
        <!-- FAQ Tab Menu Start -->
        <div class="faq-tab-menu">
            <ul class="nav nav-justified">
                <li class="nav-item"><button class="nav-link {{ (request()->get('year') ==2021 || !request()->has('year')) == 2021 ? 'active' : '' }}" onclick="location.href='?year=2021'" >2021</button></li>
                <li class="nav-item"><button class="nav-link {{ request()->get('year') == 2022 ? 'active' : '' }}" onclick="location.href='?year=2022'" >2022</button></li>
                <li class="nav-item"><button class="nav-link {{ request()->get('year') == 2023 ? 'active' : '' }}" onclick="location.href='?year=2023'" >2023</button></li>
                <li class="nav-item"><button class="nav-link {{ request()->get('year') == 2024 ? 'active' : '' }}" onclick="location.href='?year=2024'" >2024</button></li>
            </ul>
        </div>
        <!-- FAQ Tab Menu End -->
        <!-- FAQ Tab Content Start -->
        <div class="tab-content">
            <div class="tab-pane fade show active" >
                <!-- FAQ Wrapper Start -->
                <div class="faq-wrapper">
                @foreach($data as $s)
                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">{{ $s->question }}</h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>{{ substr($s->answer, 0, 250) }} ...</p>
                                    <a class="theme-link float-start" href="{{ route('detail_samples',[$s->sample->type, $s->id]) }}">Read my sample answer for this question here...</a>
                                    <div class="blog-meta cust-date float-end">
                                        <span> <i class="icofont-calendar"></i> {{ date('d F,Y', strtotime($s->created_at)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->
                @endforeach
                </div>
                <!-- FAQ Wrapper End -->
            </div>
        </div>
        <!-- FAQ Tab Content End -->
        <!-- FAQ Button End -->
        <div class="faq-btn text-center">
        {{ $data->links() }}
            <!-- <a class="btn btn-primary btn-hover-dark" href="#">{{ $data->links() }}</a> -->
        </div>
        <!-- FAQ Button End -->
    </div>
</div>

