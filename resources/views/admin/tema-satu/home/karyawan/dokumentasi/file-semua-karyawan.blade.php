<table>
    <thead>
        <tr>
            <th>Nik Karyawan</th>
            <th>Password</th>
            <th>Status Akun</th>
            <th>Nama Lengkap</th>
            <th>Nama Panggil</th>

            <th>Tempat/Tanggal Lahir</th>
            <th>Nik KTP</th>
            <th>Email</th>
            <th>Agama</th>

            <th>Jenis Kelamin</th>
            <th>Status Kawin</th>
            <th>No BPJS</th>
            <th>Tinggi/Berat Badan</th>

            <th>Golongan Darah</th>
            <th>Suku</th>
            <th>Total Bersaudara</th>
            <th>Alamat (Jalan) Sesuai KTP</th>

            <th>Provinsi Sesuai KTP</th>
            <th>Kota Sesuai KTP</th>
            <th>Kabupaten Sesuai KTP</th>
            <th>Kecamatan Sesuai KTP</th>
            
            <th>Kelurahan / Desa Sesuai KTP</th>
            <th>Kode Pos</th>
            <th>Alamat Domisili</th>
            <th>Provinsi Domisili</th>

            <th>Kota Domisili</th>
            <th>Kabupaten Domisili</th>
            <th>Kecamatan Domisili</th>
            <th>Kelurahan Domisili</th>

            <th>Instagram</th>
            <th>Twitter</th>
            <th>Linkedin</th>
            <th>Facebook</th>

            <th>Nomor WhatsApp</th>
            <th>Nomor HP</th>
            <th>Cerita Diri</th>
            
            <th>Dingtalk</th>
            <th>Nomor Rekening</th>
            <th>Bank</th>
            <th>Kode Bank</th>
            <th>Tanggal Input Sistem</th>
            <th>Jabatan Sekarang</th>
            <th>Gaji Sekarang</th>
            <th>Status Kepegawaian</th>
            <th>Tanggal Join</th>

            <th>Data Orang Tua</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $dt)
            <tr>



                <td>{{ $dt->akun->nik }}</td>
                <td>{{ $dt->akun->show_pass }}</td>
                <td>{{ $dt->akun->status }}</td>
                <td>{{ $dt->akun->data_diri->nama_lengkap }}</td>
                <td>{{ $dt->akun->data_diri->nama_panggilan }}</td>

                <td>{{ $dt->akun->data_diri->tempat_lahir }} / {{ $dt->akun->data_diri->tanggal_lahir }}</td>
                <td>{{ $dt->akun->data_diri->nik }}</td>
                <td>{{ $dt->akun->data_diri->email }}</td>
                <td>{{ $dt->akun->data_diri->agama }}</td>

                <td>{{ $dt->akun->data_diri->jenis_kelamin }}</td>
                <td>{{ $dt->akun->data_diri->status_perkawinan }}</td>
                <td>{{ $dt->akun->data_diri->no_bpjs }}</td>
                <td>{{ $dt->akun->data_diri->tinggi_badan }} /  {{ $dt->akun->data_diri->berat_badan }}</td>

                <td>{{ $dt->akun->data_diri->golongan_darah }}</td>
                <td>{{ $dt->akun->data_diri->suku }}</td>
                <td>{{ $dt->akun->data_diri->total_saudara }}</td>
                <td>{{ $dt->akun->data_diri->alamat_ktp }}</td>

                <td>{{ $dt->akun->data_diri->provinsi_ktp }}</td>
                <td>{{ $dt->akun->data_diri->kota_ktp }}</td>
                <td>{{ $dt->akun->data_diri->kabupaten_ktp }}</td>
                <td>{{ $dt->akun->data_diri->kecamatan_ktp }}</td>

                <td>{{ $dt->akun->data_diri->kelurahan_ktp }}</td>
                <td>{{ $dt->akun->data_diri->pos_ktp }}</td>
                <td>{{ $dt->akun->data_diri->alamat_domisili }}</td>
                <td>{{ $dt->akun->data_diri->provinsi_domisili }}</td>

                <td>{{ $dt->akun->data_diri->kota_domisili }}</td>
                <td>{{ $dt->akun->data_diri->kabupaten_domisili }}</td>
                <td>{{ $dt->akun->data_diri->kecamatan_domisili }}</td>
                <td>{{ $dt->akun->data_diri->kelurahan_domisili }}</td>

                <td>{{ $dt->akun->data_diri->instagram }}</td>
                <td>{{ $dt->akun->data_diri->facebook }}</td>
                <td>{{ $dt->akun->data_diri->linkedin }}</td>
                <td>{{ $dt->akun->data_diri->twitter }}</td>

                <td>{{ $dt->akun->data_diri->nomor_whatsapp }}</td>
                <td>{{ $dt->akun->data_diri->nomor_hp }}</td>
                <td>{{ $dt->akun->data_diri->cerita_diri }}</td>

                <td>{{ $dt->akun->data_karyawan->dingtalk }}</td>
                <td>{{ $dt->akun->data_karyawan->norek }}</td>
                <td>{{ $dt->akun->data_karyawan->bank }}</td>
                <td>{{ $dt->akun->data_karyawan->kode_bank }}</td>
                <td>{{ $dt->akun->data_karyawan->created_at }}</td>

                <?php if (isset($dt->akun->jabatan_gaji)): ?>
                    <td>{{ $dt->akun->jabatan_gaji->jabatan->nama_jabatan }}</td>
                    <td>{{ $dt->akun->jabatan_gaji->gaji->nominal_gaji }}</td>
                <?php else: ?>
                    <td>Tidak Ada</td>
                    <td>0</td>
                <?php endif ?>

                <td>{{ $dt->akun->karpkwtyawan->status_data }}</td>
                <td>{{ $dt->akun->karpkwtyawan->tanggal_join }}</td>
                


                <?php if (count($dt->akun->data_orang_tua) > 0): ?>
                    <td>{{ $dt->akun->data_orang_tua }}</td>
                <?php else: ?>
                    <td>Tidak Ada</td>
                <?php endif ?>
                

            </tr>
        @endforeach
    </tbody>
</table>