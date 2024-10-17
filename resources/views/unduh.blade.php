@extends('layouts-front.main')

@section('container')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Unduh Dokumen</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Unduh Dokumen</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<body>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Tanggal</th>
          <th>Nama File</th>
          <th>Link Download</th>
          <th>Ukuran</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td>17-11-2023</td>
          <td>File 1</td>
          <td><a href="path_to_file1.pdf" download>Download</a></td>
          <td>11 MB</td>
        </tr>
        <tr>
          <td>17-11-2023</td>
          <td>File 2</td>
          <td><a href="path_to_file2.zip" download>Download</a></td>
          <td>11 MB</td>
        </tr>
        <tr>
          <td>17-11-2023</td>
          <td>File 3</td>
          <td><a href="path_to_file3.docx" download>Download</a></td>
          <td>11 MB</td>
        </tr>
        <!-- Tambahkan baris berikut sesuai kebutuhan -->
      </tbody>
    </table>
  </div>
</body>


@endsection