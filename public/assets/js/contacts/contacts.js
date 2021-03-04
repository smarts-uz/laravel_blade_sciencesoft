/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/*!**************************************************!*\
  !*** ./resources/assets/js/contacts/contacts.js ***!
  \**************************************************/


var tableName = '#contactsTable';
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
    'targets': [10],
    'orderable': false,
    'className': 'text-center',
    'width': '8%'
  }],
  columns: [{
    data: 'name',
    name: 'name'
  }, {
    data: 'email',
    name: 'email'
  }, {
    data: 'phone_number',
    name: 'phone_number'
  }, {
    data: 'service',
    name: 'service'
  }, {
    data: 'budget',
    name: 'budget'
  }, {
    data: 'want_to_start',
    name: 'want_to_start'
  }, {
    data: 'requirement',
    name: 'requirement'
  }, {
    data: 'description',
    name: 'description'
  }, {
    data: 'file_name',
    name: 'file_name'
  }, {
    data: 'file_path',
    name: 'file_path'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/edit'
      }];
      return prepareTemplateRender('#contactsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'Contact');
});
/******/ })()
;