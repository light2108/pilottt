var loadfile = function(event) {
    $('#preview').html('');
    for (let i = 0; i < event.target.files.length; ++i) {
        var image = document.createElement('img');
        image.src = URL.createObjectURL(event.target.files[i]);
        image.width = "100";
        image.height = "100";
        document.querySelector("#preview").appendChild(image);
    }
};
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.recharge-money').click(function() {
        var user_id = $(this).data('id');
        var money = $('.value-money-' + user_id).val();
        // alert(money);
        var xxx = confirm("Bạn có chắc muốn nạp tiền?");
        if (xxx) {
            $.ajax({
                url: "/admin/recharge-money",
                type: "POST",
                data: {
                    user_id: user_id,
                    money: money
                },
                success: function(resp) {
                    if (resp['status'] == 1) {
                        alert('Nạp tiền thành công!');
                    } else {
                        alert('Bạn chưa ghi số tiền cần nạp');
                    }
                },
                error: function() {
                    alert('ERROR');
                }
            })
        }
    })
})