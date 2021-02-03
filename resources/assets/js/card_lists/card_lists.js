'use strict';

let tableName = '#cardListsTable';
$(tableName).DataTable({
    scrollX: true,
    deferRender: true,
    scroller: true,
    processing: true,
    serverSide: true,
    'order': [[0, 'asc']],
    ajax: {
        url: recordsURL,
    },
    columnDefs: [
        {
            'targets': [4],
            'orderable': false,
            'className': 'text-center',
            'width': '8%',
        },
    ],
    columns: [
        {
            data: 'image',
            name: 'image'
        },{
            data: 'title',
            name: 'title'
        },{
            data: 'sub_title',
            name: 'sub_title'
        },{
            data: 'description',
            name: 'description'
        },
        {
            data: function (row) {
                let url = recordsURL + row.id;
                let data = [
                {
                    'id': row.id,
                    'url': url + '/edit',
                }];

                return prepareTemplateRender('#cardListsTemplate',
                    data);
            }, name: 'id',
        },
    ],
});

$(document).on('click', '.delete-btn', function (event) {
    let recordId = $(event.currentTarget).data('id');
    deleteItem(recordsURL + recordId, tableName, 'Card Lists');
});
