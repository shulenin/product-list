let countOfRows = 2;
let maxCount = 0;

$.ajax({
    url: '/getcount.php?',
    success: function (response) {
        maxCount = response;
    }
});

document.addEventListener('DOMContentLoaded', function () {
    $('#count-of-rows').html(countOfRows);

    $('#minus-count').click(function() {
        if(countOfRows == 1) {
            return;
        }

        countOfRows--;

        $('#count-of-rows').html(countOfRows);

        loadList();
    })

    $('#plus-count').click(function() {
        if(countOfRows >= maxCount) {
            return;
        }

        countOfRows++;

        $('#count-of-rows').html(countOfRows);

        loadList();
    })

    loadList();
});

function loadList() {
    $.ajax({
        url: '/getlist.php?count=' + countOfRows,
        method: 'get',
        success: function (response) {
            $('#body').html(response);

            $('.hide').click(function() {
                let id = this.attributes.productid.value;

                $.ajax({
                    url: '/hide.php?id=' + id,
                    method: 'get',
                    success: function () {
                        loadList();
                    }
                });
            });
        }
    });
}
