<div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-12">
                     <h2 class="card-title">Search</h2>
                </div>
                     <div class="col-md-12">
 <input type="text" class="form-control" placeholder="Search name/department/designation" wire:model="search">
                     </div>
                           <div class="card-body">   
                                <div class="row">
                       @foreach ($userDetails as $user)
                                     <div class="col-md-6">
                                           <div class="card mb-3">
                                                 <div class="card-body ">
                                 <h4 class="card-title">{{ $user->name }}</h4>
                                 <h5 class="card-text">{{ $user->designation_name }}</h5>
                                 <h6 class="card-text">{{ $user->department_name }}</h6>

                                                  </div>
                                            </div>
                                       </div>
   

                         @endforeach
                                </div>
                           </div>
                 </div>
            </div>
      </div>


