$(function () {
    var budgetObject = $('#budget');
    var productObject = $('#product');
    var missionObject = $('#mission');
    var strategicObject = $('#strategic');

    // on change budget
    budgetObject.on('change', function () {
        var budgetId = $(this).val();

        productObject.html('<option value="">เลือกผลผลิต</option>');
        missionObject.html('<option value="">เลือกพันธกิจ</option>');
        strategicObject.html('<option value="">เลือกยุทธศาสตร์</option>');

        $.get('get_product.php?budget_id=' + budgetId, function (data) {
            var result = JSON.parse(data);
            $.each(result, function (index, item) {
                productObject.append(
                    $('<option></option>').val(item.product_id).html(item.product)
                );
            });
        });
    });

    // on change product
    productObject.on('change', function () {
        var productId = $(this).val();

        missionObject.html('<option value="">เลือกพันธกิจ</option>');
        strategicObject.html('<option value="">เลือกยุทธศาสตร์</option>');

        $.get('get_mission.php?product_id=' + productId, function (data) {
            var result = JSON.parse(data);
            $.each(result, function (index, item) {
                missionObject.append(
                    $('<option></option>').val(item.id).html(item.mission)
                );
            });
        });
    });

    // on change product
    missionObject.on('change', function () {
        var missionId = $(this).val();

        strategicObject.html('<option value="">เลือกยุทธศาสตร์</option>');

        $.get('get_strategic.php?mission_id=' + missionId, function (data) {
            var result = JSON.parse(data);
            $.each(result, function (index, item) {
                strategicObject.append(
                    $('<option></option>').val(item.id).html(item.strategic)
                );
            });
        });
    });
});