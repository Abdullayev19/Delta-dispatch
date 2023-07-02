      <!-- Modal -->
      <div class="modal fade" id="myModal">

        <!-- add 'modal-dialog-centered' and 'modal-xl' class -->
        <div class="modal-dialog d-flex justify-content-center modal-dialog-centered modal-xl">
    
          <div class="modal-content p-5 w-50 bg-black">
            <div class="modal-header border-0 py-2">
              <span class="fs-5 fw-bold text-light saa">Write to start dispatch</span>
              <button type="button" class="text-white btn fs-2 h-25 bg-black" data-dismiss="modal">x</button>
            </div>

            <form action="/contact" method="POST" class="my-3 fs-5">
              @csrf
              <input type="text" name="name" class="ssa  bg-black border-0 border-bottom w-50 text-white" style="outline: none;"
                placeholder="Your name *" required>
              <div class="ww d-flex justify-content-between my-3">
                <input type="email" name="email" class="ssa bg-black border-0 border-bottom w-50 text-white" style="outline: none;"
                  placeholder="Email *" required>
                <input type="text" name="subject" class="ssa sa bg-black border-0 border-bottom text-white" style="outline: none; width: 45%;"
                  placeholder="Subject *" required>
              </div>
              <input type="text" name="message" class="ssa  bg-black border-0 border-bottom w-100 text-white" style="outline: none;"
                placeholder="Message *" required>
              <button type="submit" class="btn btn-warning my-3 w-50 fw-bold rounded-pill">SEND</button>
            </form>

          </div>
    
        </div>
    
      </div>