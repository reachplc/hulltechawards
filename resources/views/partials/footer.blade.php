<div class="footer-sponsors">
  <div class="container">
    <h4 class="title">2020 Sponsors</h4>
    <div class="strategic-sponsor">
      <h5>Strategic Sponsor</h5>
      <a class="sponsor" target="_blank" href="/sponsors/gb-recruitment/">
        <img src="/wp-content/uploads/2020/02/GB-Recruitment-Logo-02@4x-2.png" alt="gb recruitment logo" />
      </a>
    </div>
    <div class="sponsor-grid">
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
        @if(get_the_title() !== 'GB Recruitment')
          @php
            $link = get_the_permalink();
          @endphp
            <a class="sponsor" href="{{$link}}" target="_blank">
              {{the_post_thumbnail()}}
            </a>
          @endif
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
