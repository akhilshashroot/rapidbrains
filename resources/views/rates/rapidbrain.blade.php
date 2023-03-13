@extends('rates.layout')
@section('section')


<style>
.error{
  color:#ff0000 !important;
  padding: 1.6rem 1rem !important;
}


@media only screen and (min-width: 768px){
 
   .img-logo{
  width:200px !important;
  margin-right:3rem !important;
  }
}

@media (min-width: 768px){
.py-md-20 {
    padding-top: 17rem !important;
}
}
    .cs {

    min-height: 125px !important;
}
    .mt-3{
        color:#fff !important;

    }
    .swal2-popup .swal2-styled.swal2-confirm {

    background-color:  #F68A77  !important;
   }
   .swal2-content,.swal2-animate-success-icon{
    display:none !important;
   }
   .swal2-title{
    font-size: 15px !important;
   }
   .swal2-popup .swal2-title{
    letter-spacing: .025rem !important;
    font-weight: 400 !important;
   }
   .bg-dark {
    background:  #F68A77  !important;
  }
  .text-light{
    color:#fff;
  }
   div.dataTables_wrapper div.dataTables_processing {

    top: 80% !important;
   }
    .new-h a:hover {
    background: blue;
     }  
    .parallax:before {
        background: none;
    }
    .p-class{
        color:#fff;
        text-align:center;
    }
    div.dataTables_wrapper div.dataTables_filter input{
        width: 482px !important;
        
        resize: none;
        outline: none;
    }


    @media only screen and (max-width: 600px) {
      div.dataTables_wrapper div.dataTables_filter input{
        width: 291px !important;
       
        resize: none;
        outline: none;
    }
    
}
.form-control{
  height: calc(2.5rem + 2px);
    line-height: 1.25;
}


@media only screen and (max-width: 768px){
    html,
    body{
    width:100%;
    overflow-x:hidden;
    }
}


@media only screen and (max-width: 600px){
div.dataTables_wrapper div.dataTables_filter input {
    width: 255px !important;
    resize: none;
    outline: none;
}
}
    .paging_simple_numbers{
        text-align: right;
    }
    tfoot {
    display: table-header-group;
    }
   
    .tdhcc {
    background-color: #fff !important;
    color: #343f52 !important;
    }
    div.dataTables_wrapper div.dataTables_filter input::-webkit-input-placeholder {
   text-align: center;
    }
    
    div.dataTables_wrapper div.dataTables_filter input::-moz-placeholder { /* Firefox 18- */
       text-align: center;  
    }
    
    div.dataTables_wrapper div.dataTables_filter input::-moz-placeholder {  /* Firefox 19+ */
       text-align: center;  
    }
    
    div.dataTables_wrapper div.dataTables_filter input:-ms-input-placeholder {  
       text-align: center; 
    }
  .dataTables_filter{
    padding-bottom: 10px;
  }
    #footer {
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 60px;
            background: #ff5f7a;
        }



    /* .search-class {
      display: none;
    }
    @media (max-width: 768px) {
     .search-class{
        padding: 1px 1px 4px 100px;
      }
    } */
    .button-touch {
        background: #55565b;
        border-color: #55565b;
        color: #fff;
    }

    .button-touch:hover {
        background: #000000;
        border-color: #000000;
        color: #fff;
    }
    .dataTables_filter{
        /* float: right; */
    }
    div.dataTables_wrapper div.dataTables_filter {
    text-align: center !important;
    }
    .btn.btn-sm {
    min-width: 5rem !important;
}
   .btn:hover
  {
  background-color:#000000  !important;
  border-color: #000000  !important;

  } 
   .btn.new,.checker,.remover,.new
  {
 
  border-color: #343f52  !important;

  }
  .checker,.remover
  {
  
    border-color: #343f52  !important;

  }
  table.dataTable td {
   
    font-weight: 500 !important;
  }

  @media only screen and (min-width: 767px){
    .fullscreen-bg {
    min-height: 70vh;
    max-height: 100vh;
}
  }

.fullscreen-bg {
    height: 70vh;
}
table tbody tr td {
  font-size: 14px !important;
}
table.dataTable th {
  font-size: 16px !important;
  font-weight: 600 !important
}

input[type=search]:focus {
  border: 1px solid rgba(63,120,224,.7);
}
</style>


                <section class="wrapper bg-gray">
     <div class="container pt-10 pt-md-14 pb-14 pb-md-0">
        <div class="row gx-md-8 gx-lg-12 gy-3 gy-lg-0 mb-13">
          <div class="col-lg-6">
            <h1 class="display-1 fs-60 lh-xxs mb-0">If you have projects, we got the talents!</h1>
          </div>
          <!-- /column -->
          <div class="col-lg-6">
            <p class="lead fs-22 my-3">Creating opportunity for everyone by connecting the right talents to the right organisations around the world.</p>
           
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">
          <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>
          <figure class="rounded mb-md-n20"><img src="{{asset('assets/img/photos/about18@2x.jpg')}}" srcset="./assets/img/photos/about18@2x.jpg 2x" alt="" /></figure>
        </div>
      </div>

</section>
<!-- /section -->
<section class="wrapper bg-light">
      <div class="container pt-14 pt-md-23 pb-14 pb-md-17">
</div>

</section>
    <!--Hero Image Ends-->
    <!-- <section class="wrapper bg-light">
      <div class="container pb-15 pb-md-17">
                   
        
        
        
      </div>
     
    </section> -->





           

                @include('rates.rapidbrainrate') 
         

<!-- <a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a> -->

<!-- jQuery Library -->
<!-- jQuery Library -->

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script>
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const talent_id = urlParams.get('talent_id')
const position = urlParams.get('skill')
// if(position || talent_id){
//   const element = document.getElementById("w3-container");
//   console.log(element)
//   element.scrollIntoView();
// }


$(function () {

    var table = $('.table').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,
        "pageLength": 25,
        language: {
        searchPlaceholder: "Search for Tech stack here",
        search: "",
        emptyTable: "No profiles available",

    },
        ajax: {
          url: "{{ route('customsearch.index') }}",
       
            data: function (d) {
                d.approved = $('#approved').val(),
                d.search = $('input[type="search"]').val(),
                d.talent_id=talent_id,
                d.position=position
            }
        },
        columns: [
            { data: 'DT_RowIndex', DT_RowIndex: 'DT_RowIndex',  orderable: false, searchable: false },
            {data: 'tech_stack',  width: '100px',name: 'tech_stack'},
            {data: 'oneto3', width: '420px', name: 'oneto3'},
            {data: 'threeto5', width:'110px',name: 'threeto5'},
            {data: 'fiveto8', name: 'fiveto8'},
            {data: 'eightplus', name: 'eightplus'},
        

            
        ]
    });
  // hello();
    $('#approved').change(function(){
        table.draw();
    });
      
  });
    $(document).ready(function(){
    // Append all paragraphs
  
   // $('#filterTable_filter').before('<div id="theAppendedDiv">The Appended Div<div>')
   $( "input[type='search']" ).addClass('form-control');

   $(".dataTables_filter").prepend('');
    // Append an element with ID container
  
});
</script>









@endsection
  