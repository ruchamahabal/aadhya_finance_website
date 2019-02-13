    <!-- Apply Now Modal  -->
    <!-- Modal -->
    <div class="modal fade" id="applyNowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apply</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/mail.php">
                <div class="form-group">
                    <label for="InputName1">Name</label>
                    <input type="text" class="form-control" name="name" id="Name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="InputContact1">Contact No</label>
                    <input type="number" min="10"  class="form-control" name="phone" id="Phone"  placeholder="Enter Phone Number" required>
                </div>
                <div class="form-group">
                    <label for="InputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Message</label>
                  <textarea name="message" id="Message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Apply</button>
              </form><!--form apply-->
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
