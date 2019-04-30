<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="css/bdt/jquery.bdt.css" type="text/css" rel="stylesheet">
<style type="text/css">/**
* Custom styles for BDT - Bootstrap Data Tables
**/

.bdt thead th {
    cursor: pointer;
}

.bdt .sort-icon {
    width: 10px;
    display: inline-block;
    padding-left: 5px;
}

.search-form {
    margin-right: 25px;
}

#table-footer {
    margin-bottom: 15px;
}

#table-footer a, #table-footer button {
    outline: none;
}

#table-footer .form-horizontal .control-label {
    text-align: left;
    margin: 0 15px;
}

#table-footer .pagination {
    margin: 0 15px;
}

#table-footer .pagination li:not(.active) {
    cursor: pointer;
}

.disable-sorting {
    cursor: auto !important;
}</style>

</head>
<body>
<div class="container">
    <div class="row">
            <div class="box clearfix">
            <h3>A demo of Data table</h3>


            <table class="table table-bordered table-striped table-hover" id="data-table-demo">
                <thead>
                <tr class="danger">
                    <th>#ID</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>200</td>
                    <td>janedoe</td>
                    <td>Yane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>zanedoe</td>
                    <td>Jane</td>
                    <td>Moe</td>
                </tr>
                <tr>
                    <td>300</td>
                    <td>aanedoe</td>
                    <td>Lane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>canedoe</td>
                    <td>Jane</td>
                    <td>Boe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>janedoe</td>
                    <td>Jane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>210</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>310</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>410</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>510</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>610</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>710</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>810</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>910</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>110</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>120</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>130</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>140</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>150</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>160</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>170</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>180</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>190</td>
                    <td>johndoe</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://www.anztechnologies.com/jquery-demo/js/bdt/jquery.bdt.min.js" type="text/javascript"></script>
<script>
    $(document).ready( function () {
        $('#data-table-demo').bdt({
            showSearchForm: 1,
            showEntriesPerPageField: 1
        });
    });
</script>



</body>
</html>

