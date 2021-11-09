 <!-- Blog Sidebar Start -->
 <div class="sidebar">
    <!-- Sidebar Widget Post Start -->
    <div class="sidebar-widget mt-4">
       <div class="widget-post">
          <ul class="post-items">
        @foreach($data as $s)
             <li>
                <!-- Sidebar Widget Post Start -->
                <div class="single-post">
                   <div class="post-content px-0">
                        <h5 class="title"><a href="{{ route('detail_samples',[$s->sample->type,$s->id]) }}">{{ $s->question }}</a></h5>
                        <span class="date"><i class="icofont-calendar"></i> {{ date('d F,Y', strtotime($s->created_at)) }}</span>
                   </div>
                </div>
                <!-- Sidebar Widget Post End -->
             </li>
        @endforeach
          </ul>
       </div>
    </div>
    <!-- Sidebar Widget Post End -->
 </div>
 <!-- Blog Sidebar End -->