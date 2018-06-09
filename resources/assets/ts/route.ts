import {convertAllUnits, drawPoints, loadmap} from "./app";

import * as $ from 'jquery';

let units = 'mi';

/*
$(document).ready(function () {
    let mapState = loadmap('map');
    let root = $('#map').data('root');

    $.get(`/api/waypoints?r=${root}`, function (data) {
        console.log(data);
        mapState = drawPoints(data.routes, mapState, data.mapClinched, data.genEdges);
    })
});
*/

(async function () {
    let root = $('#map').data('root');
    let req = fetch(`/api/waypoints?r=${root}`);
    let mapState = loadmap('map');

    let resp = await req;
    let data = await resp.json();

    console.log(data);
    mapState = drawPoints(data.routes, mapState, data.mapClinched, data.genEdges);
})();

/**
$('#unitsSelect').on('change', function () {
    let newunits = this.value;
    convertAllUnits(units, newunits);
    units = newunits;
});

$('#showMarkers').on('click', function () {
    //showMarkersClicked();
});**/