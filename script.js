$(document).ready(function() {
    $('#form').on('submit', calculateFare);

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
                $('.result').html(`<h1>Total Fare : Rs.${res}/-</h1>`);
            }
        });
    }
});