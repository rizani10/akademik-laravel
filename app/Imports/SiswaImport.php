<?php

namespace App\Imports;

use App\Models\Kelas;
use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel , WithHeadingRow
{

    private $kelas_id;

    public function __construct()
    {
        $this->kelas = Kelas::select('id' ,'nama_kelas')->get();
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $siswa = $this->kelas->where('nama_kelas', $row['kelas'])->first();
        return new Siswa([
            'nama'     => $row['nama'],
            'kelas_id'    => $siswa->id,
        ]);
    }
}
