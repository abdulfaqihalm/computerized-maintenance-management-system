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