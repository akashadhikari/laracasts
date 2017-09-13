<div class="col-sm-3 offset-sm-1 blog-sidebar">

          <div class="sidebar-module sidebar-module-inset">

            <h4>About</h4>

            <p>Hey yo!<em> Its Sky!</em> Welcome to this little thingy. Happy reading!</p>

          </div>

          <div class="sidebar-module">

            <h4>Archives</h4>

            <ol class="list-unstyled">

            @foreach($archives as $stats)

            <li><a href="/?month={{$stats['mahina']}}&year={{$stats['saal']}}">{{ $stats['mahina'] . ' ' . $stats['saal'] }}</a></li>
            
            @endforeach
          
            </ol>

          </div>

          <div class="sidebar-module">

            <h4>Find me on</h4>

            <ol class="list-unstyled">
              <li><a href="https://github.com/akashadhikari">GitHub</a></li>
              <li><a href="https://twitter.com/skynush">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>

          </div>

</div><!-- /.blog-sidebar -->