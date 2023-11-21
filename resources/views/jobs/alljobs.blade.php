
<style>


/* 
table.dataTable td:nth-child(2){
  width: 34px;
  max-width: 34px;
  word-break: break-all;
  white-space: pre-line;
} */
  select.form-control{
    display: inline;
    width: 200px;
    margin-left: 25px;
  }
  .dataTables_length{
    display:none;
  }
  .w3-container{
    padding: 0rem;
    position: relative;
    }
  .btn-enquiry{
    margin: auto;
    width: 20%;
    /* border: 3px solid green; */
    padding: 10px;
  }

  .btn-enquiry-top{
    margin: auto;
    width:13%;
    /* border: 3px solid green; */
    padding: 10px;
  }
    .dataTables_wrapper .dataTables_paginate .paginate_button {
    box-sizing: border-box;
    display: inline-block;
    min-width: 1.5em;
    padding: 0.5em 1em;
    margin-left: 2px;
    text-align: center;
    text-decoration: none !important;
    cursor: pointer;
    color: #333 !important;
    border: 1px solid transparent;
    border-radius: 2px;
}
.dataTables_wrapper .dataTables_length select {
    border: 1px solid #aaa;
    border-radius: 3px;
    padding: 5px;
    background-color: transparent;
    padding: 4px;
}
.table {
  @media only screen and (min-width: 768px) {
    table-layout: fixed;
    max-width: 100% !important;
  }
}
@media screen and (max-width: 767px){
div.dataTables_wrapper div.dataTables_paginate {
    margin: 0;
    white-space: normal !important;
    text-align: right;
}
}
thead {
  background: #ddd;
}

.table td:nth-child(2) {
  overflow: hidden;
  text-overflow: ellipsis;
}

.highlight {
  background: lighten(yellow,30%);
}

@media only screen and (max-width: 767px) {
  .grecaptcha-badge{
        display:none !important;
        }
        .dataTables_empty::before {
   content: none !important;
}
  /* Force table to not be like tables anymore */
  table,
  thead,
  tbody,
  th,
  td,
  tr {
    display: block;
  }
  /* Hide table headers (but not display: none;, for accessibility) */
  thead tr,
  tfoot tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  td {
    /* Behave  like a "row" */
    border: none;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 50% !important;
  }
  td:before {
    /* Now like a table header */
    position: absolute;
    /* Top/left values mimic padding */
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap;
  }
  
  .table td:nth-child(1) {
      height: 100%;
      top: 0;
      left: 0;
      font-weight: bold;
      background: #fff;
      color:#000;
  }
  /*
	Label the data
	*/
  td:nth-of-type(1):before {
    content: "#";
  }
  td:nth-of-type(2):before {
    content: "Date";
  }
  td:nth-of-type(3):before {
    content: "Job ID";
  }
  td:nth-of-type(4):before {
    content: "Position";
  }
  /* td:nth-of-type(5):before {
    content: "Skills";
  } */
  td:nth-of-type(5):before {
    content: "Location";
  }
  td:nth-of-type(6):before {
    content: "Salary";
  }
  td:nth-of-type(7):before {
    content: "Type";
  }
  td:nth-of-type(8):before {
    content: "Action";
  }
  
  .dataTables_length {
    display: none;
  }
}
  /* td:nth-of-type(5):before {
    content: "Senior";
  }
  td:nth-of-type(6):before {
    content: "Expert";
  } */



.tooltip.show {
  opacity: 1;
}

.tooltip-inner {
  background-color: #55565b;
  box-shadow: 0px 0px 4px black;
  opacity: 1 !important;
}

.tooltip.bs-tooltip-right .arrow:before {
  border-right-color: #55565b !important;
}

.tooltip.bs-tooltip-left .arrow:before {
 border-left-color: #55565b !important;
}

.tooltip.bs-tooltip-bottom .arrow:before {
 border-bottom-color: #55565b !important;
}

.tooltip.bs-tooltip-top .arrow:before {
 border-top-color: #55565b !important;
}
</style>


    <!-- Create the drop down filter -->
    <!-- <h2 class="title custom text-center" id="verified-sec" style="margin-top: 30px;" rel="₹">Talents Pool</h2> -->
    <!-- Set up the datatable -->
    <!-- <div class="btn-enquiry">
    <div class="tooltip-wrapper disabled" data-title="Search and select profiles to enable this button">
    <a  class="btn btn-primary btn-sm disabled" id="passingID" style="color: #fff;"  >Enquiry</a>
</div></div> -->

	
	<!-- /.container -->

    <div class="w3-container" id="w3-container"> 
    <!-- <div class="btn-enquiry-top">
    <span class="d-inline-block" id="toolID" tabindex="0" data-toggle="tooltip"
              data-placement="right" title="Search and select talents to enable this button">
              <a  class="btn btn-primary btn-sm disabled" id="passingID" style="color: #fff;"  >Enquiry</a>

    </span>
  </div> -->
  <table class="table table-hover" id="filterTable" style="width: 100%;" >
      <thead class="tdhcc">
        <tr style="text-align: left;">
        <th scope="col" style="width: 20px;">#</th>
          <th scope="col" style="width: 76px;" >Date</th>
          <th scope="col" style="width: 80px;">Job ID</th>
          <th style="width: 170px;"  >Position  </th>
          <!-- <th scope="col" >Skills  </th> -->
          <!-- <th scope="col"  >Experience </th>
          <th scope="col" >Job Type </th> -->
          <th scope="col"  >Location  </th>
          <th scope="col" style="width: 150px;">Salary  </th>
          <th scope="col" style="width: 64px;">Type  </th>
          <th scope="col" >Action </th>
     
        </tr>
      </thead>

      <!-- <tfoot>
        <tr>
          <th scope="col">Sl No</th>
          <th scope="col">Talent ID</th>
          <th scope="col">Skillset </th>
          <th scope="col">Experience </th>
          <th scope="col">Turnaround time</th>
          <th scope="col">Availability </th>
          <th scope="col">Rate </th>
          <th scope="col">Action </th>
           
        </tr>
      </tfoot> -->
      <tbody>
        <?php $i=0;?>
        @foreach($jobs as $dat)
        <tr style="text-align: left;">
        <td > {{++$i}}</td>

          <td >{{date('Y-m-d', strtotime($dat['date']))}}</td>
          <td>
          
          
          <a id="view" data-id="{{$dat['job_id']}}" style="color: #0080ff;" href="/job?id={{$dat['job_id']}}">{{$dat['job_id']}}</td>
          </a>
          <td  >
        
      {{$dat['position']}}
     
       </td>
  
         
          <td >{{$dat['location']}}
            
          </td>
          <td >{{$dat['salary']}}</td>
          <td >
            
          {{$dat['type']}}
        </td>
     
        <td >
     
       <a class="btn btn-primary btn-sm checker" id="apply" style="color: #fff;" data-id="{{$dat['job_id']}}" href="/job?id={{$dat['job_id']}}">Apply</a>
      

       </td> 


        
</tr>
        @endforeach
      
    </tbody>
    </table>

  
<!-- <div class="btn-enquiry">
    <span class="d-inline-block" id="toolID" tabindex="0" data-toggle="tooltip"
              data-placement="right" title="Search and select talents to enable this button">
              <a  class="btn btn-primary btn-sm disabled" id="passingID" style="color: #fff;"  >Enquiry Now</a>

    </span>
  </div> -->
</div>
 

