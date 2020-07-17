<div class="footer-sponsors">
  <div class="container">
    <h4 class="title">2020 Sponsors</h4>
        <div class="sponsor-grid">
      <div class="sponsor">
        <h5>Headline Sponsor</h5>
          <a href="https://reachplc.com" target="_blank">
            <img src="/wp-content/uploads/2020/07/reach-yellow-crop.png" alt="">
          </a>
        </div>
        <div class="sponsor">
          <h5>In Partnership with</h5>
            <a href="https://techexpohumber.com/" target="_blank">
              <img src="/wp-content/uploads/2020/07/tech-week-logo.png" alt="">
            </a>
          </div>
      @php
        $args = array(
          'post_type'=> 'sponsors',
          'post_status' => 'publish',
          'posts_per_page' => 5
          );
        $sponsor_query = new WP_Query( $args );
      @endphp

      @if($sponsor_query->have_posts())
        @while($sponsor_query->have_posts()) @php $sponsor_query->the_post(); @endphp
          @php
            $link = get_the_permalink();
          @endphp
          <div class="sponsor">
          <h5>Category Sponsor </h5>
            <a href="{{$link}}">
              {{the_post_thumbnail()}}
            </a>
          </div>
        @endwhile
      @endif
    </div>
  </div>
</div>
<footer>
  <div class="container contents">
    <p class="credits">Designed &amp; Built by Reach Creative</p>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</footer>
