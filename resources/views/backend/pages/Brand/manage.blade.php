@extends('backend.layout.template')

@section('body')
<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Brands Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>#Sl.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Is Featured</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>
                            <a href="#" class="btn btn-icon btn-primary" title="View">
        <i class="far fa-eye" data-toggle="tooltip" data-placement="bottom"></i>
    </a>
    <a href="#" class="btn btn-icon btn-primary" title="Edit">
        <i class="far fa-edit" data-toggle="tooltip" data-placement="bottom"></i>
    </a>
   
    <a href="#" class="btn btn-icon btn-danger" title="Delete">
        <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="bottom"></i>
    </a>
</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



        
@endsection

