<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="addnewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="addnewModalLabel">Add New Product</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
                  {!! Form::open(['url' => 'save']) !!}
                      <div class="mb-3">
                          {!! Form::label('name', 'Product Name') !!}
                          {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Input Product Name', 'required']) !!}
                      </div>
                      <div class="mb-3 @error('nim') is-invalid @enderror">
                          {!! Form::label('nim', 'Size') !!}
                          {!! Form::text('nim', '', ['class' => 'form-control', 'placeholder' => 'Input Size', 'required']) !!}
                      </div>
                      <div class="mb-3">
                        {!! Form::label('address', 'Price') !!}
                        {!! Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Input Price', 'required']) !!}
                    </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
              {!! Form::close() !!}
          </div>
      </div>
    </div>
  </div>