<table>
  <thead>
    <tr>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>NISN</th>
      <th>Alamat</th>
      <th>Asal Sekolah</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($models as $item)
      <tr>
        <th>{{ $item->nama_lengkap }}</th>
        <th>{{ $item->jenis_kelamin }}</th>
        <th>{{ $item->tempat_lahir }}</th>
        <th>{{ $item->tanggal_lahir }}</th>
        <th>{{ $item->nisn }}</th>
        <th>{{ $item->alamat_lengkap }}</th>
        <th>{{ $item->asal_sekolah }}</th>
      </tr>
    @endforeach
  </tbody>
</table>