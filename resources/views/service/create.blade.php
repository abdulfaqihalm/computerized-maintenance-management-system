@extends('layouts.app')

@section('title','| Service Report')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row justify-content-center main-content">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Service Details
                    <button class="btn btn-outline-info float-right" data-toggle="modal" data-target="#woModal">View Work Order Details</button>
                </h3>
                <div class="card-body">
                    <form class="form-horizontal" action="/action.php" id="service-form">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="service-task">Service Task</label>
                            <div class="col-lg-8">
                                <select class="form-control" id="service-task" required>
                                    <option disabled selected>Choose Service Task...</option>
                                    <option value="1">Installation</option>
                                    <option value="2">De-Installation</option>
                                    <option value="3">Electrical - Replace Part</option>
                                    <option value="4">Electrical - Adjust/Modify</option>
                                    <option value="5">Electrical - Calibrate</option>
                                    <option value="6">Mechanical - Repair/Cosmetic</option>
                                    <option value="7">Mechanical - Adjust/Modify</option>
                                    <option value="8">Standby</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-form-label col-lg-3 text-md-right">Service Object</span>
                            <div class="col-lg-4">
                                <label class="control-label" for="system" hidden></label>
                                <select class="form-control" id="system" required>
                                    <option selected value="base">None</option>
                                    <option class="system" value="xray">X-Ray Generation</option>
                                    <option class="system" value="positioner">Positioner</option>
                                    <option class="system" value="image">II/Video/Detector</option>
                                    <option class="system" value="cabinet">Electronic Cabinet</option>
                                    <option class="system" value="operator">Operator Console</option>
                                    <option class="system" value="accessories">Accessories</option>
                                    <option class="system" value="network">Network</option>
                                    <option class="system" value="hemodynamic">Hemodynamic</option>
                                    <option class="system" value="injector">Injector</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="component" hidden></label>
                                <select class="form-control" id="component" required>
                                    <option selected value="base">None</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-form-label col-lg-3 text-md-right">Part Used</span>
                            <div class="col-md-9">
                                <div class="row" id="part-used">
                                    <div class='form-group col-md-6 mb-0'>
                                        <label class="control-label" for="part" hidden></label>
                                        <select class="form-control" id="part" required>
                                            <option selected disabled>Choose Part...</option>
                                            <option class="xray" value="8">Generator</option>
                                            <option class="xray" value="8">X-ray Tube</option>
                                            <option class="xray" value="8">Cables</option>
                                            <option class="xray" value="8">HT Tank</option>
                                            <option class="xray" value="8">Ingrid</option>
                                        </select>
                                    </div>
                                    <div class='form-group col-md-4 mb-0'>
                                        <label class="control-label col-lg-3" for="quantity" hidden></label>
                                        <input type='number' class="form-control" id="quantity" placeholder="Qty" required/>
                                    </div>
                                    <div class='col-md-2 ml-0'>
                                        <button type="button" class="btn btn-danger" id="deletepart">Clear</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <button type="button" class="btn btn-sm btn-outline-danger btn-block mt-2" id="add-part">Add Part</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-form-label col-lg-3 text-md-right">Date and Time</span>
                            <div class="col-md-9">
                                <div class="row" id="service-day">
                                    <div class='col-md-3'>
                                        <div class="card time-label">
                                            <label class="control-label card-header text-center" for="time-start">Time Start</label>
                                            <input type='time' class="form-control" id="time-start" placeholder="Time Service Start"/>
                                        </div>
                                    </div>
                                    <div class='col-md-3 mx-0'>
                                        <div class="card time-label">
                                            <label class="control-label card-header text-center" for="time-end">Time End</label>
                                            <input type='time' class="form-control" id="time-end" placeholder="Time Service End"/>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class="card time-label">
                                            <label class="control-label card-header text-center" for="date">Service Date</label>
                                            <input type='date' class="form-control align-content-center" id="date" placeholder="Service Action Date"/>
                                        </div>
                                    </div>
                                    <div class='col-md-2 ml-0'>
                                        <button type="button" class="btn btn-danger" id="deletedate">Clear</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <button type="button" class="btn btn-sm btn-outline-danger btn-block mt-2" id="add-day">Add Other Day</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right">Stages</label>
                            <div class="col-lg-8">
                                <div class="custom-radio">
                                    <label class="radio-inline"><input type="radio" name="optradio" checked="checked"> In Progress</label>
                                </div>
                                <div class="custom-radio">
                                    <label class="radio-inline"><input type="radio" name="optradio"> Complete</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="description">Notes</label>
                            <div class="col-lg-8">
                                <textarea type="text" class="form-control" id="description" placeholder="Notes" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-4 justify-content-center">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-outline-secondary mr-1">Save Changes</button>
                                <input type="submit" class="btn btn-outline-danger" name="closed" value="Closed">Close Work Order</input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="woModal" tabindex="-1" role="dialog" aria-labelledby="workOrderModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="workOrderModal">Work Order Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Timestamp</h5>
                        <h5>Title</h5>
                        <h5>Description</h5>
                        <h5>Site ID</h5>
                        <h5>Equipment Status</h5>
                        <h5>Technical Engineer</h5>
                        <h5>Contact Person</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Scripts for this page -->
    <script>
        $(document).ready(function(){

            $("#add-part").click(function(){
                $("#part-used").after('<div class="row mt-2" id="new-part">\n' +
                    '                                    <div class=\'form-group col-md-6 mb-0\'>\n' +
                    '                                        <label class="control-label" for="part" hidden></label>\n' +
                    '                                        <select class="form-control" id="part">\n' +
                    '                                            <option selected disabled>Choose Another Part...</option>\n' +
                    '                                            <option class="xray" value="8">Generator</option>\n' +
                    '                                            <option class="xray" value="8">X-ray Tube</option>\n' +
                    '                                            <option class="xray" value="8">Cables</option>\n' +
                    '                                            <option class="xray" value="8">HT Tank</option>\n' +
                    '                                            <option class="xray" value="8">Ingrid</option>\n' +
                    '                                        </select>\n' +
                    '                                    </div>\n' +
                    '                                    <div class=\'form-group col-md-4 mb-0\'>\n' +
                    '                                        <label class="control-label col-lg-3" for="quantity" hidden></label>\n' +
                    '                                        <input type=\'number\' class="form-control" id="quantity" placeholder="Qty"/>\n' +
                    '                                    </div>' +
                    '</div>');
            });

            $("#add-day").click(function(){
                $("#service-day").after('<div class="row mt-2" id="new-date">\n' +
                    '                                    <div class=\'col-md-3\'>\n' +
                    '                                        <div class="card time-label">\n' +
                    '                                            <label class="control-label card-header text-center" for="time-start">Time Start</label>\n' +
                    '                                            <input type=\'time\' class="form-control" id="time-start" placeholder="Time Service Start"/>\n' +
                    '                                        </div>\n' +
                    '                                    </div>\n' +
                    '                                    <div class=\'col-md-3 mx-0\'>\n' +
                    '                                        <div class="card time-label">\n' +
                    '                                            <label class="control-label card-header text-center" for="time-end">Time End</label>\n' +
                    '                                            <input type=\'time\' class="form-control" id="time-end" placeholder="Time Service End"/>\n' +
                    '                                        </div>\n' +
                    '                                    </div>\n' +
                    '                                    <div class=\'col-md-4\'>\n' +
                    '                                        <div class="card time-label">\n' +
                    '                                            <label class="control-label card-header text-center" for="date">Service Date</label>\n' +
                    '                                            <input type=\'date\' class="form-control align-content-center" id="date" placeholder="Service Action Date"/>\n' +
                    '                                        </div>\n' +
                    '                                    </div>\n' +
                    '                                </div>');
            });

            $("#deletepart").click(function () {
                $("#new-part").remove();
            });

            $("#deletedate").click(function () {
                $("#new-date").remove();
            });
        });

        components = {
            "xray" : "Generator,X-Ray Tube,Cables,HT Tank,Ingrid",
            "positioner" : "Gantry,Table,Cables/Optic,Power Supply,Capacitive Sensor,Smart Box,Table Panning,TSSC,Fuse/MCB/Relay",
            "image" : "Detector,Image Intensifier,Pickup Tube,Monitor,Grid,Detector Power Supply,Cables/Optic,Remote Control,Fuse/MCB/Relay",
            "cabinet" : "RTAC,DL,Power supply,Hub/Switch,UPS,Fuse/MCB/Relay,KVM,Video Splitter,Cables/Optic",
            "operator" :"Monitor,CPU,Mouse,Keyboard,Software,Application,Fuse/MCB/Relay,Cables/Optic",
            "accessories" :"Detector Cconditioner,Tube chiller,Fluoro UPS,Cables/Optic,Fuse/MCB/Relay",
            "network" :"Hub/Switch,Cables/Optic",
            "hemodynamic" : "Tram Rack,Tram Module,CPU,Monitor",
            "injector" : "Motor,Display,Power Supply"
        };

        $("#system").change(function() {

            let $dropdown = $(this);

            let key = $dropdown.val();
            let vals = [];

            switch(key) {
                case 'xray':
                    vals = components.xray.split(",");
                    break;
                case 'positioner':
                    vals = components.positioner.split(",");
                    break;
                case 'image':
                    vals = components.image.split(",");
                    break;
                case 'cabinet':
                    vals = components.cabinet.split(",");
                    break;
                case 'operator':
                    vals = components.operator.split(",");
                    break;
                case 'accessories':
                    vals = components.accessories.split(",");
                    break;
                case 'network':
                    vals = components.network.split(",");
                    break;
                case 'hemodynamic':
                    vals = components.hemodynamic.split(",");
                    break;
                case 'injector':
                    vals = components.injector.split(",");
                    break;
                case 'base':
                    vals = ['None'];
            }

            let $component = $("#component");
            $component.empty();
            $.each(vals, function(index, value) {
                $component.append("<option>" + value + "</option>");
            });
        });
    </script>
@endsection
