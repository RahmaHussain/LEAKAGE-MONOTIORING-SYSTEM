<div class="status mb-4">
    <div class="row">
        <div class="col-12">
            <div class="float-right mr-0">
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success ml-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                        Add Users
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Users</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="home-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Active Users</th>
                    <th>Usage (Live)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rahma Dede</td>
                    <td>{{--<input type="text" wire:model="item" />--}} Litres/s</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-info"><i class="fas fa-fw fa-chart-bar mr-2"></i>Graph</button>
                            <button class="btn btn-sm btn-secondary"><i class="fas fa-fw fa-download mr-2"></i>Report</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ibrahim Guta</td>
                    <td> 20 Litres/s</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-info"><i class="fas fa-fw fa-chart-bar mr-2"></i>Graph</button>
                            <button class="btn btn-sm btn-secondary"><i class="fas fa-fw fa-download mr-2"></i>Report</button>
                        </div>
                    </td>
                </tr>
                {{-- <tr>
                    <td>3</td>
                    <td>Jacline Smith</td>
                    <td> 10 Litres/s</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-info"><i class="fas fa-fw fa-chart-bar mr-2"></i>Graph</button>
                            <button class="btn btn-sm btn-secondary"><i class="fas fa-fw fa-download mr-2"></i>Report</button>
                        </div>
                    </td>
                </tr> --}}
                {{-- <tr>
                    <td>4</td>
                    <td>Caren Meck</td>
                    <td> 40 Litres/s</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-info"><i class="fas fa-fw fa-chart-bar mr-2"></i>Graph</button>
                            <button class="btn btn-sm btn-secondary"><i class="fas fa-fw fa-download mr-2"></i>Report</button>
                        </div>
                    </td>
                </tr> --}}
                {{-- <tr>
                    <td>5</td>
                    <td>Reyna Mc</td>
                    <td> 60 Litres/s</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-info"><i class="fas fa-fw fa-chart-bar mr-2"></i>Graph</button>
                            <button class="btn btn-sm btn-secondary"><i class="fas fa-fw fa-download mr-2"></i>Report</button>
                        </div>
                    </td>
                </tr> --}}

            </tbody>
            <tfoot>
                <tr>
                    <th>Total</th>
                    <th>Active Users</th>
                    <th>Usage (Live)</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form wire:submit.prevent="save" name="form1">
            <div class="modal-body">
                <div class="form-group">
                    <label>Full Name</label>
                    <input placeholder="Example: Juma Mkayula" class="form-control" type="text" wire:model="user.name" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input placeholder="Example: juma.mkayula@gmail.com" class="form-control" type="email" wire:model="user.email" />
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input placeholder="Example: Mjimwema" class="form-control" type="text" wire:model="user.location" />
                </div>
                <div class="form-group">
                    <label>User Category</label>
                    <select class="form-control" wire:model="user.user_type">
                        <option value="resident">resident</option>
                        <option value="technician">technician</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
