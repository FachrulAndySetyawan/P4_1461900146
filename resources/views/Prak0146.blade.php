<!DOCTYPE html>
<html lang="en" class="antialiased">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>DataTables </title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<!-- component -->
<body class="flex items-center justify-center">
	<div class="container">
		<table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
			<thead class="text-black">
            <tr>
                    <a href="{{url('export')}}" class="bg-pinkn-500 hover:bg-blue-400 text-black font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    Export
                    </a>
					<th data-priority="1" class="border" >Judul Buku</th>
					<th data-priority="2" class="border">Tahun Terbit</th>
					<th data-priority="3" class="border">Jenis Buku</th>

				</tr>

			</thead>
			<tbody class="flex-1 sm:flex-none">
                    @foreach($bukuController as $data)
						<tr>
							<td class="border" >{{$data->judul}}</td>
                            <td class="border" >{{$data->tahun_terbit}}</td>
                            <td class="border" >{{$data->jenis}}</td>
						</tr>
					@endforeach

			</tbody>
		</table>
	</div>
</body>

<style>
  html,
  body {
    height: 100%;
  }

  @media (min-width: 640px) {
    table {
      display: inline-table !important;
    }

    thead tr:not(:first-child) {
      display: none;
    }
  }

  td:not(:last-child) {
    border-bottom: 0;
  }

  th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
  }
</style>