  <!-- Sign up Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: rgb(111 202 203);">
            <h5 class="modal-title" id="bookingModal">Reservation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="partials/_handleSignup.php" method="post">
              <div class="form-group">
                  <b><label for="Date">Booking Date:</label></b>
                  <input class="form-control" id="bookingdate" name="bookingdate" placeholder="Enter the required date" type="date">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <b><label for="firstName">Time:</label></b>
                  <input type="text" class="form-control" id="time" name="time" placeholder="Enter the required time" required>
                </div>
                <div class="form-group col-md-6">
                  <b><label for="lastName">Choose: </label></b>
                    <select class="form-control" id="dn" name="dn" required>
                      <option value="day">Day</option>
                      <option value="night">Night</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                  <b><label for="email">Menu:</label></b>
                    <select class="form-control" id="menu" name="menu" required>
                      <option value="menu1">Menu 1</option>
                      <option value="menu2">Menu 2</option>
                      <option value="menu3">Menu 3</option>
                    </select>
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
