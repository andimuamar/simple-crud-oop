$(document).ready(function () {

    $('#form_insert').on('submit', function (e) {
        e.preventDefault();
        var form = document.getElementById('form_insert');
        var formData = new FormData(form);

        $.ajax({
            url: `/users/add`,
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // alert('Your form has been sent successfully.');
                console.log(response);
            },
            error: function (xhr, status, error) {
                alert('Your form was not sent successfully.');
                console.error(error);
            }
        });

    });

    // Delete
    $(".btn-delete").on("click", function(e){
        e.preventDefault();
        var form = document.getElementById('form_delete');
        var formData = new FormData(form);

        $.ajax({
            url: `/users/delete`,
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                alert('Your form has been sent successfully.');
                window.location.reload();
            },
            error: function (xhr, status, error) {
                alert('Your form was not sent successfully.');
                console.error(error);
            }
        });
    });

    // Export Excel

    $('#export-button').click(function() {
        // Get the HTML table element
        var table = document.getElementById('example-table');
        
        // Convert the HTML table to a workbook
        var workbook = XLSX.utils.table_to_book(table, {sheet: "Sheet1"});
        
        // Generate an Excel file and trigger the download
        XLSX.writeFile(workbook, 'example.xlsx');
    });

    // Print PDF

    var myBlob;

    $('#cmd').click(function () {
        window.print();
    });

});