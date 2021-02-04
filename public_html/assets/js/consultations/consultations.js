/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/*!************************************************************!*\
  !*** ./resources/assets/js/consultations/consultations.js ***!
  \************************************************************/


var tableName = '#consultationsTable';
$(tableName).DataTable({
  scrollX: true,
  deferRender: true,
  scroller: true,
  processing: true,
  serverSide: true,
  'order': [[0, 'asc']],
  ajax: {
    url: recordsURL
  },
  columnDefs: [{
    'targets': [5],
    'orderable': false,
    'className': 'text-center',
    'width': '8%'
  }],
  columns: [{
    data: 'fullname',
    name: 'fullname'
  }, {
    data: 'company',
    name: 'company'
  }, {
    data: 'email',
    name: 'email'
  }, {
    data: 'phone_number',
    name: 'phone_number'
  }, {
    data: 'description',
    name: 'description'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/edit'
      }];
      return prepareTemplateRender('#consultationsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'Consultation');
});
/******/ })()
;