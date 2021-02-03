/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/*!********************************************!*\
  !*** ./resources/assets/js/blogs/blogs.js ***!
  \********************************************/


var tableName = '#blogsTable';
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
    'targets': [6],
    'orderable': false,
    'className': 'text-center',
    'width': '8%'
  }],
  columns: [{
    data: 'user_id',
    name: 'user_id'
  }, {
    data: 'tag',
    name: 'tag'
  }, {
    data: 'image',
    name: 'image'
  }, {
    data: 'title',
    name: 'title'
  }, {
    data: 'description',
    name: 'description'
  }, {
    data: 'description_text',
    name: 'description_text'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/edit'
      }];
      return prepareTemplateRender('#blogsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'Blog');
});
/******/ })()
;