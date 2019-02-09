    <!-- Apply Now Modal  -->
    <!-- Modal -->
    <div class="modal fade" id="applyNowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Coming Soon
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Apply Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- for parallax effect -->
    <script type="text/javascript">
    $(function(){
      var window = $(window);

      $('section[data-type="background"]').each(function(){
        var $bgobj = $(this);
        $($window).scroll(function(){
          var yPos = -($window.scrollTop()/$bgobj.data('speed'));
          var coords = '50% '+ yPos +'px';
          $bgobj.css({backgroundPosition: coords});
        });
      });
    });

    </script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/js/bootstrap.min.js"></script>
  </body>
</html>
