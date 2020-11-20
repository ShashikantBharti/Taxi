$(document).ready(function() {
    $('#form').on('submit', calculateFare);
    $('select[name="cab_type"]').on('change',function(){
        if($(this).val() == 1) {
            $('.luggage').hide();
            $('.luggage input').val('');
        } else {
            $('.luggage').show();
        }
    });

    function calculateFare(e) {
        e.preventDefault();
        let data = new FormData(this);
        $.ajax({
            url: "fare.php",
            method: "POST",
            data: data,
            contentType: false,
            processData: false,
            success: function(res) {
                $('.result').html(`<p>${res}</p>`);
            }
        });
    }
});