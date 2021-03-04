/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/*!******************************************!*\
  !*** ./resources/assets/js/news/news.js ***!
  \******************************************/


var tableName = '#newsTable';
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
    data: 'image',
    name: 'image'
  }, {
    data: 'title',
    name: 'title'
  }, {
    data: 'sub_title',
    name: 'sub_title'
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
      return prepareTemplateRender('#newsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'News');
});
/******/ })()
;