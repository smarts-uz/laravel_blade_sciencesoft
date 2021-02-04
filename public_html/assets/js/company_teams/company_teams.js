/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/*!************************************************************!*\
  !*** ./resources/assets/js/company_teams/company_teams.js ***!
  \************************************************************/


var tableName = '#companyTeamsTable';
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
    'targets': [4],
    'orderable': false,
    'className': 'text-center',
    'width': '8%'
  }],
  columns: [{
    data: 'name',
    name: 'name'
  }, {
    data: 'job',
    name: 'job'
  }, {
    data: 'image',
    name: 'image'
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
      return prepareTemplateRender('#companyTeamsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'Company Team');
});
/******/ })()
;