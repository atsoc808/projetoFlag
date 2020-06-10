 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-c-tabs">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs md-tabs tabs-2 darken-3 nav-justified" role="tablist">
        <li class="nav-item">
          <a
            class="nav-link py-3 active text-danger h4"
            data-toggle="tab"
            href="#login"
            role="tab"
          >
            Login</a
          >
        </li>
        <li class="nav-item">
          <a
            class="nav-link py-3 text-danger h4"
            data-toggle="tab"
            href="#signup"
            role="tab"
          >
            Sign Up</a
          >
        </li>
      </ul>

      <!-- Tab panels -->
      <div class="tab-content">
        <!--Panel 7-->
        <div class="tab-pane fade in show active" id="login" role="tabpanel">
          <!--Body-->
          <div class="modal-body mb-1">
            <!-- LOGIN -->
            	<form method="post" action="<?php BASE_PATH ?>">

             <div class="md-form form-sm mb-4">
               <input
                 type="email"
                 id="modalLRInput10"
                 name="email"
                 class="form-control form-control-sm validate "/>

               <label
                 data-error="wrong"
                 data-success="right"
                 for="modalLRInput10"
                 class="text-dark">Your email
                 </label>
             </div>

             <div class="md-form form-sm mb-4">
               <input
                 type="password"
                 id="modalLRInput11"
                 name="password"
                 class="form-control form-control-sm validate"
               />
               <label
                 data-error="wrong" 
                 data-success="right"
                 for="modalLRInput11"
                 class="text-dark"
                 >Your password</label
               >
             </div>
             <div class="text-center mt-2">
               <button type="submit" name="send1" class="btn btn-info sign-in-submit">Log in</button>
             </div>
              </form>
            </div>

            <!--Footer-->
            <div class="modal-footer">
            <button
              type="button"
              class="btn btn-outline-danger waves-effect ml-auto"
              data-dismiss="modal">
              Close
            </button>
            </div>
        </div>
        <!--CLOSE SIGN IN-->

        <!--SIGN UP-->
        <div class="tab-pane fade" id="signup" role="tabpanel">
          <!--Body-->
          <form method="POST" action="<?php BASE_PATH ?>">
          
            <div class="modal-body">

            
                <div class="md-form form-sm mb-4">
                  <input
                    type="text"
                    id="modalLRInput12"
                    name="username"
                    class="form-control form-control-sm validate"
                  />
                  <label
                    for="modalLRInput12"
                    class="text-dark"
                    >Your name</label
                  >
                </div>

                <div class="md-form form-sm mb-4">
                  <input
                    type="email"
                    name="email"
                    id="modalLRInput13"
                    class="form-control form-control-sm validate"
                  />
                  <label
                    for="modalLRInput13"
                    class="text-dark"
                    >Your email</label
                  >
                </div>

                <div class="md-form form-sm mb-4">
                  <input
                    type="password"
                    name="password"
                    id="modalLRInput14"
                    class="form-control form-control-sm validate"
                  />
                  <label
                    for="modalLRInput14"
                    class="text-dark"
                    >Your password</label
                  >
                </div>

                <div class="text-center form-sm">
                  <button type="submit" name="send2" class="btn btn-info sign-in-submit">Sign up</button>
                </div>
             </div>
        </form>

           
          <!--Footer-->
          <div class="modal-footer">

          

             <button
               type="submit"
               class="btn btn-outline-danger waves-effect ml-auto"
               data-dismiss="modal">
               Close
             </button>
            
          </div>
        </div>
        <!--/.Panel 8-->
      </div>
    </div>
    </div>
    </div>
  </div> 
