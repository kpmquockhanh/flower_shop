$('.btn-remove').click(function () {
    let id = $(this).attr('data-id');
    let tr = $(this).parents('tr');
    let item = $(this).parents('.item-flower');

    iziToast.question({
        timeout: 10000,
        close: false,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        title: 'Xóa',
        message: 'Bạn có chắc muốn xóa sản phầm này không?',
        position: 'center',
        buttons: [
            ['<button><b>Có</b></button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                axios.post('/admin/flowers/remove', {id: id})
                    .then(function (res) {
                        if (res.data.status)
                        {
                            iziToast.success({
                                title: 'Thành công',
                                message: 'Xóa thành công!',
                                position: 'topCenter'
                            });
                            tr.slideUp("normal", function() { $(this).remove(); } );
                            item.fadeOut("500", function() { $(this).remove(); } );
                        }
                        else
                        {
                            iziToast.error({
                                title: 'Lỗi',
                                message: 'Đã xảy ra lỗi!',
                                position: 'topCenter'
                            });
                        }

                    })
                    .catch(function (err) {
                        console.log(err);
                    });

            }, true],
            ['<button>Không</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
        onClosing: function(instance, toast, closedBy){
            // console.info('Closing | closedBy: ' + closedBy);
        },
        onClosed: function(instance, toast, closedBy){
            // console.info('Closed | closedBy: ' + closedBy);
        }
    });
});

$('.change-show-status').on('change', function () {
    let button = $(this);
    let id = $(this).attr('data-id');
    iziToast.question({
        timeout: 10000,
        close: false,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        title: 'Thay đổi hiển thị',
        message: 'Bạn có muốn thay đổi hiển thị của sản phẩm này không?',
        position: 'center',
        buttons: [
            ['<button><b>Có</b></button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                axios.post('/admin/flowers/change-status', {id: id})
                    .then(function (res) {
                        if (res.data.status)
                        {
                            if (button.prop('checked'))
                            {
                                button.siblings('i').fadeIn();
                                button.parent().addClass('btn-primary');
                            }
                            else
                            {
                                button.siblings('i').fadeOut();
                                button.parent().removeClass('btn-primary');
                            }

                            iziToast.success({
                                title: 'Thành công',
                                message: 'Đã thay đổi trạng thái!',
                                position: 'topCenter'
                            });
                        }
                        else
                        {
                            iziToast.error({
                                title: 'Lỗi',
                                message: 'Đã xảy ra lỗi!',
                                position: 'topCenter'
                            });
                        }

                    })
                    .catch(function (err) {
                        console.log(err);
                    });

            }, true],
            ['<button>Không</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                button.prop('checked', !button.prop('checked'));
                // console.log(button.prop('checked'));
            }],
        ],
        onClosing: function(instance, toast, closedBy){
            // console.info('Closing | closedBy: ' + closedBy);
        },
        onClosed: function(instance, toast, closedBy){
            // console.info('Closed | closedBy: ' + closedBy);
        }
    });
});
$('.trigger-change-status').click(function () {
   $(this).find('.change-show-status').trigger('click');
});

$('#paginate').on('change', function () {
    $(this).parents('form').trigger('submit');
});

$('#sort').on('change', function () {
    $(this).parents('form').trigger('submit');
});

$('.btn-remove-saler').click(function () {
    let id = $(this).attr('data-id');
    let tr = $(this).parents('tr');

    iziToast.question({
        timeout: 10000,
        close: false,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        title: 'Xóa',
        message: 'Bạn có chắc muốn xóa sản saler này không?',
        position: 'center',
        buttons: [
            ['<button><b>Có</b></button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                axios.post('/admin/salers/remove', {id: id})
                    .then(function (res) {
                        console.log(res);
                        if (res.data.status)
                        {
                            iziToast.success({
                                title: 'Thành công',
                                message: 'Xóa thành công!',
                                position: 'topCenter'
                            });
                            tr.slideUp("normal", function() { $(this).remove(); } );
                        }
                        else
                        {
                            iziToast.error({
                                title: 'Lỗi',
                                message: 'Xóa không thành công!',
                                position: 'topCenter'
                            });
                        }

                    })
                    .catch(function (err) {
                        console.log(err);
                    });

            }, true],
            ['<button>Không</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
        onClosing: function(instance, toast, closedBy){
            // console.info('Closing | closedBy: ' + closedBy);
        },
        onClosed: function(instance, toast, closedBy){
            // console.info('Closed | closedBy: ' + closedBy);
        }
    });
});

$('.change-saler-status').on('click', function () {
    let button = $(this);
    let status = button.parents('tr').find('#saler-status');
    let tagI = button.find('i');
    let id = $(this).attr('data-id');
    iziToast.question({
        timeout: 10000,
        close: false,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        title: 'Thay đổi hiển thị',
        message: 'Bạn có muốn thay đổi trạng thái của saler này không?',
        position: 'center',
        buttons: [
            ['<button><b>Có</b></button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                axios.post('/admin/salers/change-status', {id: id})
                    .then(function (res) {
                        if (res.data.status)
                        {
                            if (button.hasClass('btn-success'))
                            {
                                button.removeClass('btn-success');
                                button.addClass('btn-primary');

                                tagI.removeClass('fa-check');
                                tagI.addClass('fa-minus');

                                status.text('Kích hoạt');
                                status.removeClass('text-danger');
                                status.addClass('text-success');
                            }else{
                                button.addClass('btn-success');
                                button.removeClass('btn-primary');

                                tagI.addClass('fa-check');
                                tagI.removeClass('fa-minus');

                                status.text('Vô hiệu hóa');
                                status.addClass('text-danger');
                                status.removeClass('text-success');
                            }

                            iziToast.success({
                                title: 'Thành công',
                                message: 'Đã thay đổi trạng thái!',
                                position: 'topCenter'
                            });
                        }
                        else
                        {
                            // console.log(res);
                            iziToast.error({
                                title: 'Lỗi',
                                message: 'Thay đổi không thành công',
                                position: 'topCenter'
                            });
                        }
                    })
                    .catch(function (err) {
                        console.log(err);
                    });

            }, true],
            ['<button>Không</button>', function (instance, toast) {
                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
            }],
        ],
        onClosing: function(instance, toast, closedBy){
            // console.info('Closing | closedBy: ' + closedBy);
        },
        onClosed: function(instance, toast, closedBy){
            // console.info('Closed | closedBy: ' + closedBy);
        }
    });
});