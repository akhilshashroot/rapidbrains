
<div class="modal fade" id="getintouchup" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-sm">
                     <div class="modal-content text-center">
                       <div class="modal-body">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         <h2 class="mb-3 text-start"></h2>
                         <p class=" text-muted">Please provide the following details and we will get back to you</p>
                    
                         <form method="post" id="gettouchForm1" class="text-start mb-3" novalidate="novalidate" action="#" enctype="multipart/form-data">
                            @csrf
               <input type="hidden" id="type" name="getintouch" value="getintouch">
            
               <div class="row">
                 <div class="col-xl-12">
                   <div class="row gy-3 gx-3">
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control"  id="name" name="name"  placeholder="Name *" required="">
                         <label for="name" class="form-label">Your Name *</label>
                       </div>
                     </div>
                    
                     <div class="col-md-12" id="emaildiv">
                       <div class="form-floating">
                       <input type="text" class="form-control" id="email" name="email" placeholder="Email *" required="">
                         <label for="email" class="form-label">Your Email *</label>
                       </div>
                     </div>
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                         <label for="phone" class="form-label">Your Phone No.</label>
                       </div>
                     </div>
                     <div class="col-md-12" id="skilldiv">
                      <div class="form-floating">
                        <textarea id="skill" name="skill" class="form-control" placeholder="Skillset Required" style="height: 100px"  spellcheck="false"></textarea>
                        <label for="skill" class="form-label">Skills Required *</label>

                      </div>
                    </div>

                    <div class="col-md-12" id="skilldiv">
                      <div class="form-floating">
              
                        <div class="form-select-wrapper mb-4">
                    <select class="form-select" id="form-select" name="experience" required="" >
                      <option selected="" disabled="" value="">Years of Experience *</option>
                      <option value="Less than 1 Year">Less than 1 Year</option>
                      <option value="More than 1 Year">More than 1 Year</option>
                      <option value="More than 3 Years">More than 3 Years</option>
                      <option value="More than 5 Years">More than 5 Years</option>
                      <option value="More than 10 Years">More than 10 Years</option>
                      <option value="More than 15 Years">More than 15 Years</option>
                      <option value="More than 20 Years">More than 20 Years</option>
                    </select>
                  </div>
                      </div>
                    </div>

                    <div class="col-md-12" id="skilldiv">
                      <div class="form-floating">
                      <div class="form-select-wrapper mb-4">
                    <select class="form-select" id="form-select" name="salary" >
                      <option selected="" disabled="" value="">Salary Range</option>
                      <option value="US $1000 to $2000/month">US $1000 to $2000/month</option>
                      <option value="Upto US $3000/month">Upto US $3000/month</option>
                      <option value="Upto US $4000/month">Upto US $4000/month</option>
                      <option value="Upto US $5000/month">Upto US $5000/month</option>
                      <option value="Upto US $4000/month">Upto US $4000/month</option>
                      <option value="Upto US $4000/month">Upto US $4000/month</option>
                    </select>
                  </div>

                      </div>
                    </div>
                   </div>
                 </div>
               </div>


 
              <div class="btn-container mx-auto pt-5">
                <button class="btn btn-primary d-block w-100" id="submit" type="submit">Get in Touch</button>
 
                  </div>
 
                                     
                                 </div></form>
                         <!--/.social -->
                       </div>
                       <!--/.modal-content -->
                     </div>
                     <!--/.modal-body -->
                   </div>
  
  
  
            </div>
  