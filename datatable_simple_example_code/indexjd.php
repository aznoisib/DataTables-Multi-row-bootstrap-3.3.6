<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
             <style type="text/css">.wrapper {
  margin: 20px;
  font-family: sans-serif;
}

td,
th {
  vertical-align: top;
  border: 1px solid #ddd;
}

ul,
li {
  padding-left: 5px;
  margin-left: 5px;
}
</style> 
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css" /> 

      </head>  
      <body>  
           <br /><br />  
          <div class="wrapper">


  <table class="datatable datatable-multi-row">
   <thead>
      <tr>
        <th>Name</th>
        <th>Contact Date</th>
        <th>City</th>
        <th>Family Members</th>
        <th>Est. Value</th>
        <th>Est. Value</th>
      </tr>
    </thead>
    <tbody>



       <!-- star tr -->
      <tr>
        <td data-datatable-multi-row-rowspan="5">
          Martha Williams
          <script type="x/template" class="extra-row-content">
            <tr>
              <th colspan="2">
                I first met Martha at a laundromat.
              </th>
              <th colspan="3">
               I first met Martha at a laundromat.
              </th>



            </tr>


              <tr>
              <td colspan="2">I first met Martha at a laundromat.I first met Martha at a laundromat.I first met Martha at a laundromat.I first met Martha at a laundromat.I first met Martha at a laundromat.I first met Martha at a laundromat.I first met Martha at a laundromat.
                I first met Martha at a laundromat.
              </td>
              <td colspan="3">
                I first met Martha at a laundromat.
              </td>
            </tr>

  <tr>
              <th colspan="2">
                I first met Martha at a laundromat.
              </th>
              <th colspan="3">
                I first met Martha at a laundromat.
              </th>



            </tr>


              <tr>
              <td colspan="2">
                I first met Martha at a laundromat.
              </td>
              <td colspan="3">
                I first met Martha at a laundromat.
              </td>
            </tr>




          </script>
        </td>
        <td>9/3/2015</td>
        <td>Annapolis</td>
        <td>2</td>    <td>4/15/2011</td>
        <td>Philadelphia</td>
      </tr>

<!-- end tr -->

      <!-- star tr -->
      <tr>
        <td data-datatable-multi-row-rowspan="5">
          Martha Williams
          <script type="x/template" class="extra-row-content">
            <tr>
              <th colspan="2">
                I first met Martha at a laundromat.
              </th>
              <th colspan="3">
               I first met Martha at a laundromat.
              </th>



            </tr>


              <tr>
              <td colspan="2">I first met Martha at a laundromat.I first met Martha at a laundromat.I first met Martha at a laundromat.I first met Martha at a laundromat.I first met Martha at a laundromat.I first met Martha at a laundromat.I first met Martha at a laundromat.
                I first met Martha at a laundromat.
              </td>
              <td colspan="3">
                I first met Martha at a laundromat.
              </td>
            </tr>

  <tr>
              <th colspan="2">
                I first met Martha at a laundromat.
              </th>
              <th colspan="3">
                I first met Martha at a laundromat.
              </th>



            </tr>


              <tr>
              <td colspan="2">
                I first met Martha at a laundromat.
              </td>
              <td colspan="3">
                I first met Martha at a laundromat.
              </td>
            </tr>




          </script>
        </td>
        <td>9/3/2015</td>
        <td>Annapolis</td>
        <td>2</td>    <td>4/15/2011</td>
        <td>Philadelphia</td>
      </tr>

<!-- end tr -->

    </tbody>
 </html>  
 <script>  
 $('.datatable').DataTable({
  "fnDrawCallback": function() {

    $table = $(this);

    // only apply this to specific tables
    if ($table.closest(".datatable-multi-row").length) {

      // for each row in the table body...
      $table.find("tbody>tr").each(function() {
        var $tr = $(this);

        // get the "extra row" content from the <script> tag.
        // note, this could be any DOM object in the row.
        var extra_row = $tr.find(".extra-row-content").html();

        // in case draw() fires multiple times, 
        // we only want to add new rows once.
        if (!$tr.next().hasClass('dt-added')) {
          $tr.after(extra_row);
          $tr.find("td").each(function() {

            // for each cell in the top row,
            // set the "rowspan" according to the data value.
            var $td = $(this);
            var rowspan = parseInt($td.data("datatable-multi-row-rowspan"), 10);
            if (rowspan) {
              $td.attr('rowspan', rowspan);
            }
          });
        }

      });

    } // end if the table has the proper class
  } // end fnDrawCallback()
});

 </script>  