$("body").on("keyup", "#search", function () {
    var searchQuery = $(this).val();
    // console.log(searchQuery);
    var token = $('meta[name="csrf-token"]').attr("content");
    $.ajax({
        method: "POST",
        url: "/admin/search_product",
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
                    "</td><td><img style='height:50px; weight:50px' src='/upload/" +
                    value.product_image +
                    "'></td><td>" +
                    value.product_name +
                    "</td><td>" +
                    value.category_name +
                    "</td><td>" +
                    value.sub_category_name +
                    "</td><td>" +
                    value.product_brand +
                    "</td><td>" +
                    value.in_stock +
                    "</td><td>" +
                    (value.product_price +
                        value.shipping_cost -
                        value.product_discount) +
                    "</td><td>" +
                    value.created_at +
                    "</td><td>" +
                    value.updated_at +
                    "</td></tr>";
                $("#product_table").append(tableRow);
            });
        },
    });
});
