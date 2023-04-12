<!-- Edit Modal -->
<div class="modal fade" id="edit{{$mahasiswa->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Edit Mahasiswa</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
                  {!! Form::model($mahasiswas, [ 'method' => 'patch','route' => ['mahasiswa.update', $mahasiswa->id] ]) !!}
                      <div class="mb-3">
                          {!! Form::label('name', 'Name') !!}
                          {!! Form::text('name', $mahasiswa->name, ['class' => 'form-control']) !!}
                      </div>
                      <div class="mb-3">
                          {!! Form::label('nim', 'Nim') !!}
                          {!! Form::text('nim', $mahasiswa->nim, ['class' => 'form-control']) !!}
                      </div>
                      <div class="mb-3">
                        {!! Form::label('address', 'Address') !!}
                        {!! Form::text('address', $mahasiswa->address, ['class' => 'form-control']) !!}
                    </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
              {{Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit'])}}
              {!! Form::close() !!}
          </div>
      </div>
    </div>
  </div>
   
  <!-- Delete Modal -->
  <div class="modal fade" id="delete{{$mahasiswa->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Delete mahasiswa</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              {!! Form::model($mahasiswas, [ 'method' => 'delete','route' => ['mahasiswa.delete', $mahasiswa->id] ]) !!}
                  <h4 class="text-center">Are you sure you want to delete the data?</h4>
                  <h5 class="text-center">Name : {{$mahasiswa->name}}, Nim :{{$mahasiswa->nim}}, Address:{{$mahasiswa->address}}</h5>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
              {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
              {!! Form::close() !!}
          </div>
      </div>
    </div>
  </div>