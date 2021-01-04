$("body").on("keyup", "#search", function () {
    var searchQuery = $(this).val();
    // console.log(searchQuery);
    var token = $('meta[name="csrf-token"]').attr("content");
    $.ajax({
        method: "POST",
        url: "/admin/search_order",
        dataType: "json",
        data: {
            _token: token,
            searchQuery: searchQuery,
        },
        success: function (res) {
            var tableRow = "";
            $("#product_table").html("");
            $.each(res, function (index, value) {
                // console.log(value);
                tableRow =
                    "<tr><td>" +
                    ++index +
                    "</td><td>" +
                    value.name +
                    "</td><td>" +
                    value.email +
                    "</td><td>+880" +
                    value.phone +
                    "</td><td>" +
                    value.address +
                    "</td><td><img style='height:50px; weight:50px' src='/upload/" +
                    value.product_image +
                    "'></td><td>" +
                    value.product_name +
                    value.product_description +
                    "</td><td>" +
                    value.quantity +
                    "</td><td>" +
                    (value.product_price +
                        value.shipping_cost -
                        value.product_discount) +
                    "</td><td>" +
                    value.created_at +
                    "</td><td>" +
                    value.status +
                    "</td></tr>";
                $("#product_table").append(tableRow);
            });
        },
    });
});
