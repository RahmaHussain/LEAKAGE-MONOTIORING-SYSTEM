
<div class="text-center mb-4">
    <h3>LEAKAGE DETECTION SYSTEM IN WATER PIPELINES KIGAMBONI</h3>
</div>
<div class="status mb-4">
    <div class="row">
        <div class="col-12">
            <div class="float-right mr-5">
                <p class="mt-3 mb-1" style="font-weight:700;">SENSOR STATUS</p>
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success ml-2">
                    <input type="checkbox" checked class="custom-control-input" id="customSwitch3">
                    <label class="custom-control-label" for="customSwitch3">Good</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Flowrates measures on indvudual registerd meters</h3>
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
                    <td> {{$item}}{{--<input type="text" wire:model="item" />--}} Litres/s</td>
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
<script>
setInterval( function(){
    @this.call('callNodeMCUAPI');
}, 1000);

Livewire.on('valueUpdated',item=>{
    @this.set('item',item);
});
</script>
