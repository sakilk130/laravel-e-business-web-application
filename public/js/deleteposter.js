$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

// Delete Popup
$(document).on("click", ".delete", function () {
    let task = $(this).closest("tr").data("id");
    let modal = $("#deleteTaskForm");

    // Delete Confirmation
    $('#deleteTaskForm button[type="submit"]').click(
        {
            id: task,
        },
        call_ajax
    );

    // Ajax call using function
    function call_ajax(event) {
        let msg = $("#deleteTaskMessage");
        let id = event.data.id;
        $.ajax({
            type: "POST",
            url: "/admin/delete_poster/" + id,
            success: function (data) {
                // reqest message clear
                $(msg).html("");

                $("#deleteTaskForm").find("h4").remove();
                $("#deleteTaskForm").find('button[type="submit"]').remove();

                // Show success message
                $(msg).append(
                    '<div class="alert alert-success"> Deleted successfully </div>'
                );

                let taskRow = $("#taskTableBody").find(
                    'tr[data-id="' + id + '"]'
                );
                $(taskRow).remove();
                console.log("deleted");
            },
            error: function (error) {},
        });
    }
});

$("#deleteTaskForm").submit(function (e) {
    e.preventDefault();
});

// delete modal set to default
$("#deleteTask").on("hidden.bs.modal", function (e) {
    modal = $("#deleteTaskForm");
    $(modal).find("#deleteTaskMessage").html("");
    $(modal).find(".modal-body").html("").append(`
        <div id="deleteTaskMessage"></div>
        <h4>Are you you want to delete this?</h4>
    `);
    $(modal).find(".modal-footer").html("").append(`
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
    `);
});
