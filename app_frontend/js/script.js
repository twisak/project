$(function () {
    var project = $('#project');
    var activity = $('#activity');

    // on change province
    project.on('change', function () {
        var projectId = $(this).val();

        activity.html('<option value="">เลือกอำเภอ</option>');

        $.get('get_activity.php?project_id=' + projectId, function (data) {
            var result = JSON.parse(data);
            $.each(result, function (input_doc_contract, item) {
                activity.append(
                    $('<option></option>').val(item.id).html(item.activity)
                );
            });
        });
    });

});