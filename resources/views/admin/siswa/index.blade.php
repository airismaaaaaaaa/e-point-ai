<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <h1>Data siswa</h1>
  <a href="{{ route('admin/dashboard') }}">menu utama</a><br>
  < href="{{ route('logout') }}" onclick="event,preventDefault(); documents.getElementById('logout-from').submit();">logout"</a>
  <br><br>
</from id="logout-from" action="{{ route('logout')}}" method="POST">
      @crsf 
   </from>
   <br><br>
   <form action=""method="get">
    <label>cari:</label>
    <input type="text" name="cari">
    <input type="submit" value="cari">
   </form>
   <br><br>
   <a href="{{route('siswa.create') }}">tambah siswa</a>

   @if(Session::has('succes'))
   <div class="alert-success" role="alert">
        {{ Session::get('success') }}
   </div>
   @endif

   <table class="tabel">
         <tr>
            <th>Foto</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Email</th>
            <th>kelas</th>
            <th>No Hp</th>
            <th>status</th>
            <th>Aksi</th>
         </tr>
         @forelse ($siswas as $siswa)
         <tr>
          <td>
             <img src="{{ asset('storage/siswas/'.$siswa->image) }}" width="120px" alt="">
          </td>
          <td>{{ $siswa->nis}}</td>
          <td>{{ $siswa->name}}</td>
          <td>{{ $siswa->nis}}</td>
          <td>{{ $siswa->email}}</td>
          <td>{{ $siswa->tingkatan}} {{ $siswa->jurusan }} {{ $siswa->kelas }}</td>
          <td>{{ $siswa->hp }}</td>
          @if ($siswa->status == 1):
            <td>aktif</td>
            $else
            <td>tidak aktiv</td>
            $endif
            <td>
               <from onsubmit="return confrim('apakah anda Yakin ?');" action="{{ route('siswa.destroy', $siswa->id) }}"method="POST">
                   <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-sm btn-drak">SHOW</a>
                   <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                   @crsf
                   @method('DELETE')
                   <button type="submit">HAPUS</button>
                   </from>
                   </td> 
                   </tr>
                   @empty
                   <tr>
                     <td>
                        <p>data tidak ditemukan</p>
                     </td>
                     <td>
                        <a href="{{ route('siswa.index') }}">kembali</a>
                     </td>
                   </tr>
                   @endforelse
                   </table>
                   {{ $siswas->links() }}
                   </body>
                   </html>
                   <body></body>
          

          

    
         
            

        

