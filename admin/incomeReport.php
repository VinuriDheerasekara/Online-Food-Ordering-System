<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"
        integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.3.7/jquery.datetimepicker.min.js">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.3.7/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     

</head>


<body>
    <div class="wrapper">
        <section>
            <div class="content">
                <div class="container-fluid text-center">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3>Monthly Income Report</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="formLabel" for="fromDate">
                                    Month
                                </label>
                                <div class="fromDate">
                                    <input id="fromDate" type="text">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="incomeReportTable">

        </div>
    </div>
</body>
<script>
$(() => {
    $('#fromDate').datetimepicker({
        timepicker: false,
        format: 'Y-m',
        onChangeDateTime: function(dp, $input) {
            loadTable($input.val())
        }
    });

    const loadTable = (a) => {
        const url = 'incomeReport.ajax.php?action=loadTable'
        $.ajax({
            dataType: 'text',
            url: url,
            data: {
                month: a
            },
            async: false,
            success: function(a) {
                $('.incomeReportTable').html(a)
            },
            error: function(stat, err, w) {
                console.log(err)
            }
        })
    }
})
</script>
<script type="text/javascript" src="incomeReport.js"></script>

</html>