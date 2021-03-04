/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/*!******************************************************!*\
  !*** ./resources/assets/js/portfolios/portfolios.js ***!
  \******************************************************/


var tableName = '#portfoliosTable';
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
    'targets': [7],
    'orderable': false,
    'className': 'text-center',
    'width': '8%'
  }],
  columns: [{
    data: 'technology',
    name: 'technology'
  }, {
    data: 'industry',
    name: 'industry'
  }, {
    data: 'name',
    name: 'name'
  }, {
    data: 'title',
    name: 'title'
  }, {
    data: 'sub_title',
    name: 'sub_title'
  }, {
    data: 'image',
    name: 'image'
  }, {
    data: 'blade_link',
    name: 'blade_link'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/edit'
      }];
      return prepareTemplateRender('#portfoliosTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'Portfolio');
});
/******/ })()
;