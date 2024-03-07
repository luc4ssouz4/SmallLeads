@extends("main")

@section("content")

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
  
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

<script>
$(document).ready(function () {
    let table = new DataTable('#myTable');
});
</script>


<div class="px-4 pt-5 my-5 text-center mb-5">
    

    <div class="col-lg-8 mx-auto">
      <div class="">
      <table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Empresa</th>
            <th>Tags</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Lucas</td>
            <td>Teste</td>
            <td>alou</td>
        </tr>
    </tbody>
</table>
       
      </div>
    </div>

  </div>


@endsection